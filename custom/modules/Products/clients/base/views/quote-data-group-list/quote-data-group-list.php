<?php
// created: 2019-08-22 00:00:58
$viewdefs['Products']['base']['view']['quote-data-group-list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'products_quote_data_group_list',
      'label' => 'LBL_PRODUCTS_QUOTE_DATA_LIST',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'line_num',
          'label' => NULL,
          'widthClass' => 'cell-xsmall',
          'css_class' => 'line_num tcenter',
          'type' => 'line-num',
          'readonly' => true,
        ),
        1 => 
        array (
          'name' => 'quantity',
          'label' => 'LBL_QUANTITY',
          'widthClass' => 'cell-small',
          'css_class' => 'quantity',
          'type' => 'float',
          'labelModule' => 'Products',
        ),
        2 => 
        array (
          'name' => 'product_template_name',
          'label' => 'LBL_ITEM_NAME',
          'widthClass' => 'cell-large',
          'type' => 'quote-data-relate',
          'required' => true,
          'labelModule' => 'Products',
        ),
        3 => 
        array (
          'name' => 'mft_part_num',
          'label' => 'LBL_MFT_PART_NUM',
          'type' => 'base',
          'labelModule' => 'Products',
        ),
        4 => 
        array (
          'name' => 'discount_price',
          'label' => 'LBL_DISCOUNT_PRICE',
          'type' => 'currency',
          'convertToBase' => true,
          'showTransactionalAmount' => true,
          'related_fields' => 
          array (
            0 => 'discount_price',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'labelModule' => 'Products',
        ),
        5 => 
        array (
          'name' => 'discount',
          'type' => 'fieldset',
          'css_class' => 'quote-discount-percent',
          'label' => 'LBL_DISCOUNT_AMOUNT',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'discount_amount',
              'label' => 'LBL_DISCOUNT_AMOUNT',
              'type' => 'discount',
              'convertToBase' => true,
              'showTransactionalAmount' => true,
            ),
            1 => 
            array (
              'type' => 'discount-select',
              'name' => 'discount_select',
              'no_default_action' => true,
              'buttons' => 
              array (
                0 => 
                array (
                  'type' => 'rowaction',
                  'name' => 'select_discount_amount_button',
                  'label' => 'LBL_DISCOUNT_AMOUNT',
                  'event' => 'button:discount_select_change:click',
                ),
                1 => 
                array (
                  'type' => 'rowaction',
                  'name' => 'select_discount_percent_button',
                  'label' => 'LBL_DISCOUNT_PERCENT',
                  'event' => 'button:discount_select_change:click',
                ),
              ),
              'label' => 'LBL_DISCOUNT_AS_PERCENT',
            ),
          ),
          'labelModule' => 'Products',
        ),
        6 => 
        array (
          'name' => 'total_amount',
          'label' => 'LBL_LINE_ITEM_TOTAL',
          'type' => 'currency',
          'widthClass' => 'cell-medium',
          'showTransactionalAmount' => true,
          'related_fields' => 
          array (
            0 => 'total_amount',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'labelModule' => 'Quotes',
        ),
      ),
    ),
  ),
);