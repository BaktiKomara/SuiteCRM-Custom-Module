# Modul Kustom SuiteCRM — Sistem Riwayat Pasien Antar Rumah Sakit
 
README ini mendokumentasikan modul kustom yang perlu dibangun di SuiteCRM (lewat **Studio / Module Builder**) sebagai logic transaksi & master data sistem. Dibuat berdasarkan rancangan ERD dan pemetaan modul yang sudah disepakati.
 
> Urutan pembuatan disarankan mengikuti urutan modul di bawah ini, karena modul belakangan punya relasi ke modul sebelumnya.
 
---
 
## Daftar Modul
 
| # | Nama Modul (teknis) | Dibangun dari | Entitas ERD |
|---|---|---|---|
| 1 | `Hospitals` | Custom module baru | `RUMAH_SAKIT` |
| 2 | `Patients` | Custom module baru | `PASIEN` |
| 3 | `Users` | Modul bawaan, diperluas | `PENGGUNA` |
| 4 | `Visits` | Custom module baru | `KUNJUNGAN` |
| 5 | `Diagnoses` | Custom module baru (subpanel `Visits`) | `DIAGNOSIS` |
| 6 | `Prescriptions` | Custom module baru (subpanel `Visits`) | `RESEP_OBAT` |
| 7 | `Allergies` | Custom module baru (subpanel `Patients`) | `ALERGI` |
| 8 | `Consents` | Custom module baru | `PERSETUJUAN` |
| 9 | Audit log | Fitur bawaan (field-level audit + Tracker) | `LOG_AKSES` |
 
---
 
## 1. Modul `Hospitals`
 
Dibangun dari template **Accounts**, bukan dari nol, agar langsung dapat fitur alamat & relasi bawaan.
 
**Field kustom:**
 
| Field | Tipe | Keterangan |
|---|---|---|
| `kode_faskes_c` | Text (unique) | Kode fasilitas kesehatan resmi |
| `nama_rs_c` | Text | Bisa pakai field `name` bawaan Accounts |
| `alamat_c` | TextArea | |
| `status_aktif_c` | Dropdown | Aktif / Non-aktif |
 
**Relasi:** satu `Hospitals` → banyak `Users`, `Visits`, `Consents`.
 
---
 
## 2. Modul `Patients`
 
Dibangun sebagai **modul kustom baru** lewat Module Builder (jangan pakai `Contacts` bawaan — field & relasinya terlalu spesifik medis untuk di-stretch dari situ).
 
**Field kustom:**
 
| Field | Tipe | Keterangan |
|---|---|---|
| `nik_c` | Text (unique, required) | Kunci penghubung lintas RS |
| `nama_c` | Text | |
| `tanggal_lahir_c` | Date | |
| `jenis_kelamin_c` | Dropdown | L / P |
| `status_persetujuan_c` | Dropdown | Dihitung dari relasi ke `Consents`, bukan diisi manual |
 
**Relasi:** satu `Patients` → banyak `Visits`, `Allergies`, `Consents`, dan log di Tracker.
 
**Catatan Security Group:** record `Patients` defaultnya hanya ter-assign ke Security Group RS asal. Security Group RS lain ditambahkan otomatis lewat **logic hook** saat `Consents` disetujui (lihat bagian Consents di bawah).
 
---
 
## 3. Modul `Users` (diperluas)
 
Modul bawaan SuiteCRM, tambahkan field berikut lewat Studio:
 
| Field | Tipe | Keterangan |
|---|---|---|
| `kategori_staf_c` | Dropdown | `dokter` / `perawat` / `staf_non_medis` / `admin_rs` / `kepala_rs` |
| `rumah_sakit_id_c` | Relate ke `Hospitals` | RS tempat staf bertugas |
 
**Relasi:** satu `Hospitals` → banyak `Users`. User juga otomatis masuk Security Group sesuai `rumah_sakit_id_c`-nya (atur lewat Mass Assign atau logic hook saat user dibuat).
 
---
 
## 4. Modul `Visits`
 
Modul pusat relasi — hampir semua modul lain menempel ke sini.
 
**Field kustom:**
 
| Field | Tipe | Keterangan |
|---|---|---|
| `patient_id_c` | Relate ke `Patients` | Required |
| `hospital_id_c` | Relate ke `Hospitals` | Required |
| `pengguna_id_c` | Relate ke `Users` | Dokter/staf penanggung jawab |
| `tanggal_kunjungan_c` | Datetime | |
| `jenis_kunjungan_c` | Dropdown | Rawat jalan / Rawat inap / IGD / dst |
 
**Subpanel di dalam `Visits`:** `Diagnoses`, `Prescriptions`.
 
---
 
## 5. Modul `Diagnoses`
 
**Field kustom:**
 
| Field | Tipe | Keterangan |
|---|---|---|
| `visit_id_c` | Relate ke `Visits` | Required |
| `kode_icd10_c` | Text | Kode ICD-10 |
| `deskripsi_c` | TextArea | |
 
Tampil sebagai subpanel di dalam detail view `Visits`.
 
---
 
## 6. Modul `Prescriptions`
 
**Field kustom:**
 
| Field | Tipe | Keterangan |
|---|---|---|
| `visit_id_c` | Relate ke `Visits` | Required |
| `nama_obat_c` | Text | |
| `dosis_c` | Text | |
 
Tampil sebagai subpanel di dalam detail view `Visits`.
 
---
 
## 7. Modul `Allergies`
 
**Field kustom:**
 
| Field | Tipe | Keterangan |
|---|---|---|
| `patient_id_c` | Relate ke `Patients` | Required |
| `nama_alergi_c` | Text | |
| `tingkat_keparahan_c` | Dropdown | Ringan / Sedang / Berat |
 
Sengaja direlasikan ke `Patients`, bukan `Visits` — alergi melekat seumur hidup, bukan per-kunjungan.
 
---
 
## 8. Modul `Consents`
 
Modul paling penting untuk kepatuhan privasi — mengontrol siapa boleh lihat data pasien yang mana.
 
**Field kustom:**
 
| Field | Tipe | Keterangan |
|---|---|---|
| `patient_id_c` | Relate ke `Patients` | Required |
| `hospital_id_c` | Relate ke `Hospitals` | RS yang diberi izin |
| `tanggal_persetujuan_c` | Date | |
| `status_c` | Dropdown | `approved` / `revoked` |
 
**Logic hook wajib di modul ini (`after_save`):**
 
```
Saat status_c berubah ke "approved":
  → tambahkan hospital_id_c sebagai Security Group tambahan
     pada record Patients terkait (patient_id_c)
 
Saat status_c berubah ke "revoked":
  → hapus Security Group tersebut dari record Patients terkait
```
 
Tanpa logic hook ini, visibilitas lintas-RS tidak akan jalan — ini adalah jembatan antara fitur consent dan fitur Security Group bawaan SuiteCRM.
 
---
 
## 9. Audit Log (`LOG_AKSES`)
 
Tidak perlu modul baru. Aktifkan lewat:
 
1. **Studio → Patients, Visits, Diagnoses, Prescriptions → Field-level audit** — centang field yang perlu dilacak perubahannya.
2. Modul **Tracker** bawaan SuiteCRM mencatat setiap record yang dibuka user — cukup untuk kebutuhan "siapa membuka data pasien mana, kapan".
3. Untuk kebutuhan laporan transparansi ke pasien (endpoint `/api/patients/{id}/access-logs`), query tabel Tracker (`tracker`) difilter berdasarkan `item_id` = id pasien dan `module_name` = `Patients`.
---
 
## Urutan Build yang Disarankan
 
1. `Hospitals` (tidak punya dependency ke modul lain)
2. `Patients`
3. Field tambahan di `Users` (tidak perlu modul baru)
4. `Visits` (butuh `Hospitals`, `Patients`, `Users` sudah ada)
5. `Diagnoses` & `Prescriptions` (butuh `Visits` sudah ada)
6. `Allergies` (butuh `Patients` sudah ada)
7. `Consents` + logic hook (butuh `Patients` & `Hospitals` sudah ada)
8. Role Management & Security Group per RS
9. Aktifkan field-level audit & cek modul Tracker
---
 
## Referensi
 
- Rancangan ERD & matriks role lengkap: lihat dokumen *Rancangan Desain Sistem Riwayat Pasien Antar RS*
- SuiteCRM Developer Guide — Module Builder & Studio
- SuiteCRM Logic Hooks documentation — `after_save`, `before_save`
- SuiteCRM Security Suite documentation — Security Groups & Role Management