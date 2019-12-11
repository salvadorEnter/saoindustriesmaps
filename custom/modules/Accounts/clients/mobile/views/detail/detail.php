<?php
$viewdefs['Accounts'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'detail' => 
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
            'label' => 'LBL_PANEL_DEFAULT',
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_PANEL_DEFAULT',
            'columns' => '1',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'displayParams' => 
                array (
                  'required' => true,
                  'wireless_edit_only' => true,
                ),
              ),
              1 => 
              array (
                'name' => 'quick_contact_c',
                'label' => 'LBL_QUICK_CONTACT',
              ),
              2 => 
              array (
                'name' => 'visit_c',
                'label' => 'LBL_VISIT',
              ),
              3 => 
              array (
                'name' => 'business_type_c',
                'label' => 'LBL_BUSINESS_TYPE',
              ),
              4 => 
              array (
                'name' => 'photography_c',
                'studio' => 'visible',
                'label' => 'LBL_PHOTOGRAPHY',
              ),
              5 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
              ),
              6 => 'phone_office',
              7 => 
              array (
                'name' => 'phone_alternate',
                'comment' => 'An alternate phone number',
                'label' => 'LBL_PHONE_ALT',
              ),
              8 => 'email',
              9 => 
              array (
                'name' => 'website',
                'displayParams' => 
                array (
                  'type' => 'link',
                ),
              ),
              10 => 'billing_address_street',
              11 => 'billing_address_city',
              12 => 'billing_address_state',
              13 => 'billing_address_postalcode',
              14 => 'billing_address_country',
              15 => 'shipping_address_street',
              16 => 'shipping_address_city',
              17 => 'shipping_address_state',
              18 => 'shipping_address_country',
              19 => 
              array (
                'name' => 'gps_latitud_c',
                'label' => 'LBL_GPS_LATITUD',
              ),
              20 => 
              array (
                'name' => 'gps_longitud_c',
                'label' => 'LBL_GPS_LONGITUD',
              ),
              21 => 'assigned_user_name',
              22 => 'team_name',
            ),
          ),
        ),
      ),
    ),
  ),
);
