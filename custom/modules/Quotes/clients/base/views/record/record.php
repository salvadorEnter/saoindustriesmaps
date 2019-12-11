<?php
$viewdefs['Quotes'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
            'events' => 
            array (
              'click' => 'button:cancel_button:click',
            ),
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:edit_button:click',
                'name' => 'edit_button',
                'label' => 'LBL_EDIT_BUTTON_LABEL',
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
              ),
              2 => 
              array (
                'type' => 'pdfaction',
                'name' => 'download-pdf',
                'label' => 'LBL_PDF_VIEW',
                'action' => 'download',
                'acl_action' => 'view',
              ),
              3 => 
              array (
                'type' => 'pdfaction',
                'name' => 'email-pdf',
                'label' => 'LBL_PDF_EMAIL',
                'action' => 'email',
                'acl_action' => 'view',
              ),
              4 => 
              array (
                'type' => 'divider',
              ),
              5 => 
              array (
                'type' => 'convert-to-opportunity',
                'event' => 'button:convert_to_opportunity:click',
                'name' => 'convert_to_opportunity_button',
                'label' => 'LBL_QUOTE_TO_OPPORTUNITY_LABEL',
                'acl_module' => 'Opportunities',
                'acl_action' => 'create',
              ),
              6 => 
              array (
                'type' => 'divider',
              ),
              7 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'Quotes',
                'acl_action' => 'create',
              ),
              8 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:historical_summary_button:click',
                'name' => 'historical_summary_button',
                'label' => 'LBL_HISTORICAL_SUMMARY',
                'acl_action' => 'view',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              10 => 
              array (
                'type' => 'divider',
              ),
              11 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_action' => 'delete',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'size' => 'large',
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 
              array (
                'name' => 'name',
                'events' => 
                array (
                  'keyup' => 'update:quote',
                ),
                'related_fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'bundles',
                    'fields' => 
                    array (
                      0 => 'id',
                      1 => 'bundle_stage',
                      2 => 'currency_id',
                      3 => 'base_rate',
                      4 => 'currencies',
                      5 => 'name',
                      6 => 'deal_tot',
                      7 => 'deal_tot_usdollar',
                      8 => 'deal_tot_discount_percentage',
                      9 => 'new_sub',
                      10 => 'new_sub_usdollar',
                      11 => 'position',
                      12 => 'related_records',
                      13 => 'shipping',
                      14 => 'shipping_usdollar',
                      15 => 'subtotal',
                      16 => 'subtotal_usdollar',
                      17 => 'tax',
                      18 => 'tax_usdollar',
                      19 => 'taxrate_id',
                      20 => 'team_count',
                      21 => 'team_count_link',
                      22 => 'team_name',
                      23 => 'taxable_subtotal',
                      24 => 'total',
                      25 => 'total_usdollar',
                      26 => 'default_group',
                      27 => 
                      array (
                        'name' => 'product_bundle_items',
                        'fields' => 
                        array (
                          0 => 'quantity',
                          1 => 'product_template_name',
                          2 => 'mft_part_num',
                          3 => 'discount_price',
                          4 => 'discount',
                          5 => 'total_amount',
                          6 => 'base_rate',
                          7 => 'deal_calc',
                          8 => 'discount_amount',
                          9 => 'discount_price',
                          10 => 'discount_select',
                          11 => 'quantity',
                          12 => 'subtotal',
                          13 => 'tax_class',
                          14 => 'total_amount',
                          15 => 'description',
                          16 => 'currency_id',
                          17 => 'quote_id',
                          18 => 'name',
                          19 => 'position',
                          20 => 'product_template_id',
                          21 => 'product_template_name',
                        ),
                        'max_num' => -1,
                      ),
                    ),
                    'max_num' => -1,
                    'order_by' => 'position:asc',
                  ),
                ),
              ),
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
              4 => 
              array (
                'name' => 'converted',
                'label' => 'LBL_CONVERTED',
                'type' => 'badge',
                'readonly' => true,
                'dismiss_label' => true,
                'related_fields' => 
                array (
                  0 => 'opportunity_id',
                ),
                'badge_compare' => 
                array (
                  'comparison' => 'notEmpty',
                ),
                'badge_label_map' => 
                array (
                  'false' => 'LBL_NOT_CONVERTED',
                  'true' => 'LBL_CONVERTED',
                ),
                'css_class_map' => 
                array (
                  'false' => '',
                  'true' => 'label-success',
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'quote_num',
              1 => 
              array (
                'name' => 'opportunity_name',
                'related_fields' => 
                array (
                  0 => 'subtotal',
                  1 => 'discount',
                  2 => 'new_sub',
                  3 => 'tax',
                  4 => 'shipping',
                ),
              ),
              2 => 'purchase_order_num',
              3 => 'quote_stage',
              4 => 'payment_terms',
              5 => 'date_quote_expected_closed',
              6 => 
              array (
                'name' => 'total',
                'label' => 'LBL_TOTAL',
              ),
              7 => 
              array (
              ),
              8 => 
              array (
                'name' => 'tag',
                'span' => 12,
              ),
            ),
          ),
          2 => 
          array (
            'name' => 'panel_shipping_body',
            'label' => 'LBL_SHIPPING_BODY',
            'panelDefault' => 'collapsed',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => true,
            'fields' => 
            array (
              0 => 'billing_account_name',
              1 => 'shipping_account_name',
              2 => 'billing_contact_name',
              3 => 'shipping_contact_name',
              4 => 
              array (
                'name' => 'billing_address',
                'type' => 'fieldset',
                'css_class' => 'address',
                'label' => 'LBL_BILLING_ADDRESS',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'billing_address_street',
                    'css_class' => 'address_street',
                    'placeholder' => 'LBL_BILLING_ADDRESS_STREET',
                  ),
                  1 => 
                  array (
                    'name' => 'billing_address_city',
                    'css_class' => 'address_city',
                    'placeholder' => 'LBL_BILLING_ADDRESS_CITY',
                  ),
                  2 => 
                  array (
                    'name' => 'billing_address_state',
                    'css_class' => 'address_state',
                    'placeholder' => 'LBL_BILLING_ADDRESS_STATE',
                  ),
                  3 => 
                  array (
                    'name' => 'billing_address_postalcode',
                    'css_class' => 'address_zip',
                    'placeholder' => 'LBL_BILLING_ADDRESS_POSTAL_CODE',
                  ),
                  4 => 
                  array (
                    'name' => 'billing_address_country',
                    'css_class' => 'address_country',
                    'placeholder' => 'LBL_BILLING_ADDRESS_COUNTRY',
                  ),
                ),
              ),
              5 => 
              array (
                'name' => 'shipping_address',
                'type' => 'fieldset',
                'css_class' => 'address',
                'label' => 'LBL_SHIPPING_ADDRESS',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'shipping_address_street',
                    'css_class' => 'address_street',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_STREET',
                  ),
                  1 => 
                  array (
                    'name' => 'shipping_address_city',
                    'css_class' => 'address_city',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_CITY',
                  ),
                  2 => 
                  array (
                    'name' => 'shipping_address_state',
                    'css_class' => 'address_state',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_STATE',
                  ),
                  3 => 
                  array (
                    'name' => 'shipping_address_postalcode',
                    'css_class' => 'address_zip',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_POSTAL_CODE',
                  ),
                  4 => 
                  array (
                    'name' => 'shipping_address_country',
                    'css_class' => 'address_country',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
                  ),
                  5 => 
                  array (
                    'name' => 'copy',
                    'label' => 'NTC_COPY_BILLING_ADDRESS',
                    'type' => 'copy',
                    'mapping' => 
                    array (
                      'billing_account_name' => 'shipping_account_name',
                      'billing_account_id' => 'shipping_account_id',
                      'billing_address_street' => 'shipping_address_street',
                      'billing_address_city' => 'shipping_address_city',
                      'billing_address_state' => 'shipping_address_state',
                      'billing_address_postalcode' => 'shipping_address_postalcode',
                      'billing_address_country' => 'shipping_address_country',
                    ),
                  ),
                ),
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'panel_setting_body',
            'label' => 'LBL_QUOTESETTINGS',
            'panelDefault' => 'collapsed',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'currency_id',
                'type' => 'currency-type-dropdown',
                'label' => 'LBL_CURRENCY',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
              ),
              1 => 
              array (
                'name' => 'taxrate_name',
                'type' => 'taxrate',
                'initial_filter' => 'active_taxrates',
                'filter_populate' => 
                array (
                  'module' => 
                  array (
                    0 => 'TaxRates',
                  ),
                ),
                'populate_list' => 
                array (
                  'id' => 'taxrate_id',
                  'value' => 'taxrate_value',
                ),
              ),
              2 => 
              array (
                'name' => 'show_line_nums',
              ),
              3 => 
              array (
              ),
            ),
          ),
          4 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'panelDefault' => 'collapsed',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              1 => 'original_po_date',
              2 => 'date_quote_closed',
              3 => 'date_order_shipped',
              4 => 
              array (
                'name' => 'shipper_name',
                'initial_filter' => 'active_shippers',
                'filter_populate' => 
                array (
                  'module' => 
                  array (
                    0 => 'Shippers',
                  ),
                ),
              ),
              5 => 'order_stage',
              6 => 'team_name',
              7 => 'assigned_user_name',
              8 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'type' => 'fieldset',
                'inline' => true,
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
              9 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'type' => 'fieldset',
                'inline' => true,
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
              ),
              10 => 
              array (
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => true,
        ),
      ),
    ),
  ),
);
