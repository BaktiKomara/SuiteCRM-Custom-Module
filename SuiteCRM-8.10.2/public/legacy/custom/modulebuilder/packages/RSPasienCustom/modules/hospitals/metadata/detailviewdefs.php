<?php
$module_name = 'RSCos_hospitals';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'kode_faskes',
            'label' => 'LBL_KODE_FASKES',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'alamat',
            'label' => 'LBL_ALAMAT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'status_aktif',
            'studio' => 'visible',
            'label' => 'LBL_STATUS_AKTIF',
          ),
        ),
      ),
    ),
  ),
);
