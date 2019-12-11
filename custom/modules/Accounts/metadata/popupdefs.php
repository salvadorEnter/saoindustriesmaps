<?php
$popupMeta = array (
    'moduleMain' => 'Account',
    'varName' => 'ACCOUNT',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'accounts.name',
  'phone_office' => 'accounts.phone_office',
  'account_type' => 'accounts.account_type',
  'industry' => 'accounts.industry',
  'email' => 'accounts.email',
  'assigned_user_id' => 'accounts.assigned_user_id',
  'person_type_c' => 'accounts_cstm.person_type_c',
  'quick_contact_c' => 'accounts_cstm.quick_contact_c',
  'business_type_c' => 'accounts_cstm.business_type_c',
  'visit_c' => 'accounts_cstm.visit_c',
  'customer_status_c' => 'accounts_cstm.customer_status_c',
  'rate_c' => 'accounts_cstm.rate_c',
  'date_modified' => 'accounts.date_modified',
  'date_entered' => 'accounts.date_entered',
  'photography_c' => 'accounts_cstm.photography_c',
  'service_level' => 'accounts.service_level',
  'razon_social_c' => 'accounts_cstm.razon_social_c',
  'rfc_c' => 'accounts_cstm.rfc_c',
  'route_c' => 'accounts_cstm.route_c',
),
    'searchInputs' => array (
  0 => 'name',
  2 => 'phone_office',
  3 => 'account_type',
  4 => 'industry',
  5 => 'email',
  6 => 'assigned_user_id',
  7 => 'person_type_c',
  8 => 'quick_contact_c',
  9 => 'business_type_c',
  10 => 'visit_c',
  11 => 'customer_status_c',
  12 => 'rate_c',
  13 => 'date_modified',
  14 => 'date_entered',
  15 => 'photography_c',
  16 => 'service_level',
  17 => 'razon_social_c',
  18 => 'rfc_c',
  19 => 'route_c',
),
    'create' => array (
  'formBase' => 'AccountFormBase.php',
  'formBaseClass' => 'AccountFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'AccountSave',
  ),
  'createButton' => 'LNK_NEW_ACCOUNT',
),
    'searchdefs' => array (
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10',
  ),
  'rate_c' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_RATE',
    'width' => 10,
    'name' => 'rate_c',
  ),
  'email' => 
  array (
    'name' => 'email',
    'width' => '10',
  ),
  'customer_status_c' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_CUSTOMER_STATUS',
    'width' => '10',
    'name' => 'customer_status_c',
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'label' => 'LBL_DATE_MODIFIED',
    'width' => 10,
    'name' => 'date_modified',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'label' => 'LBL_DATE_ENTERED',
    'width' => 10,
    'name' => 'date_entered',
  ),
  'photography_c' => 
  array (
    'type' => 'image',
    'studio' => 'visible',
    'width' => 10,
    'label' => 'LBL_PHOTOGRAPHY',
    'sortable' => false,
    'name' => 'photography_c',
  ),
  'industry' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_INDUSTRY',
    'width' => '10',
    'name' => 'industry',
  ),
  'service_level' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_SERVICE_LEVEL',
    'width' => 10,
    'name' => 'service_level',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10',
  ),
  'quick_contact_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_QUICK_CONTACT',
    'width' => '10',
    'name' => 'quick_contact_c',
  ),
  'razon_social_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RAZON_SOCIAL',
    'width' => 10,
    'name' => 'razon_social_c',
  ),
  'rfc_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RFC',
    'width' => 10,
    'name' => 'rfc_c',
  ),
  'route_c' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_ROUTE',
    'width' => 10,
    'name' => 'route_c',
  ),
  'phone_office' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_OFFICE',
    'width' => '10',
    'name' => 'phone_office',
  ),
  'account_type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => '10',
    'name' => 'account_type',
  ),
  'person_type_c' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_PERSON_TYPE',
    'width' => '10',
    'name' => 'person_type_c',
  ),
  'business_type_c' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_BUSINESS_TYPE',
    'width' => '10',
    'name' => 'business_type_c',
  ),
  'visit_c' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_VISIT',
    'width' => '10',
    'name' => 'visit_c',
  ),
),
    'listviewdefs' => array (
  'PERSON_TYPE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_PERSON_TYPE',
    'width' => 10,
    'name' => 'person_type_c',
  ),
  'ACCOUNT_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => 10,
    'name' => 'account_type',
  ),
  'NAME' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'QUICK_CONTACT_C' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_QUICK_CONTACT',
    'width' => 10,
    'default' => true,
    'name' => 'quick_contact_c',
  ),
  'VISIT_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_VISIT',
    'width' => 10,
    'name' => 'visit_c',
  ),
  'INDUSTRY' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_INDUSTRY',
    'width' => 10,
    'name' => 'industry',
  ),
),
);
