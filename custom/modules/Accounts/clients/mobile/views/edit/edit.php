<?php
$viewdefs['Accounts'] = 
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
                'name' => 'business_type_c',
                'label' => 'LBL_BUSINESS_TYPE',
              ),
              3 => 
              array (
                'name' => 'visit_c',
                'label' => 'LBL_VISIT',
              ),
              4 => 
              array (
                'name' => 'reason_cancellation_c',
                'studio' => 'visible',
                'label' => 'LBL_REASON_CANCELLATION',
              ),
              5 => 
              array (
                'name' => 'photography_c',
                'studio' => 'visible',
                'label' => 'LBL_PHOTOGRAPHY',
              ),
              6 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
              ),
              7 => 'phone_office',
              8 => 
              array (
                'name' => 'phone_alternate',
                'comment' => 'An alternate phone number',
                'label' => 'LBL_PHONE_ALT',
              ),
              9 => 'email',
              10 => 
              array (
                'name' => 'website',
                'displayParams' => 
                array (
                  'type' => 'link',
                ),
              ),
              11 => 'billing_address_street',
              12 => 'billing_address_city',
              13 => 'billing_address_state',
              14 => 'billing_address_postalcode',
              15 => 'billing_address_country',
            ),
          ),
        ),
      ),
    ),
  ),
);
