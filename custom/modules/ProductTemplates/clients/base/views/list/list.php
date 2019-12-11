<?php
$viewdefs['ProductTemplates'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'mft_part_num',
                'label' => 'LBL_MFT_PART_NUM',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'name',
                'link' => true,
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'type_name',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'category_name',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'status',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'cost_price',
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'cost_usdollar',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'list_price',
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'list_usdollar',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'discount_price',
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'discount_usdollar',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'cost_price_provider_c',
                'label' => 'LBL_COST_PRICE_PROVIDER',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'qty_in_stock',
                'enabled' => true,
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'website',
                'label' => 'LBL_URL',
                'enabled' => true,
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'tag',
                'label' => 'LBL_TAGS',
                'enabled' => true,
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'CREATED_BY',
                'link' => true,
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'readonly' => true,
                'default' => false,
              ),
              15 => 
              array (
                'name' => 'modified_by_name',
                'label' => 'LBL_MODIFIED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'MODIFIED_USER_ID',
                'link' => true,
                'default' => false,
              ),
              16 => 
              array (
                'name' => 'date_modified',
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'readonly' => true,
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
