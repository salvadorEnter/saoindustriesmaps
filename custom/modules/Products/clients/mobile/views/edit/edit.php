<?php
$viewdefs['Products'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'edit' => 
      array (
        'templateMeta' => 
        array (
          'maxColumns' => '1',
          'widths' => 
          array (
            0 => 
            array (
              'label' => '10',
              'field' => '30',
            ),
          ),
          'useTabs' => false,
        ),
        'panels' => 
        array (
          0 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => '0',
            'label' => '0',
            'columns' => '1',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'required' => true,
              ),
              1 => 'product_template_name',
              2 => 
              array (
                'name' => 'discount_amount',
                'comment' => 'Discounted amount',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                  2 => 'discount_select',
                ),
                'label' => 'LBL_DISCOUNT_AMOUNT',
              ),
              3 => 
              array (
                'name' => 'products_marketing_c',
                'label' => 'LBL_PRODUCTS_MARKETING',
              ),
              4 => 
              array (
                'name' => 'products_changed_c',
                'label' => 'LBL_PRODUCTS_CHANGED',
              ),
              5 => 'status',
              6 => 'account_name',
              7 => 'quote_name',
              8 => 'quantity',
              9 => 
              array (
                'name' => 'discount_price',
              ),
              10 => 
              array (
                'name' => 'cost_price',
                'readonly' => true,
              ),
              11 => 
              array (
                'name' => 'list_price',
                'readonly' => true,
              ),
              12 => 
              array (
                'name' => 'mft_part_num',
                'readonly' => true,
              ),
              13 => 'assigned_user_name',
              14 => 'team_name',
            ),
          ),
        ),
      ),
    ),
  ),
);
