<?php
// created: 2019-08-21 20:57:40
$viewdefs['Leads']['base']['menu']['quickcreate'] = array (
  'layout' => 'create',
  'label' => 'LNK_NEW_LEAD',
  'visible' => true,
  'order' => 0,
  'icon' => 'fa-plus',
  'related' => 
  array (
    0 => 
    array (
      'module' => 'Accounts',
      'link' => 'leads',
    ),
    1 => 
    array (
      'module' => 'Contacts',
      'link' => 'leads',
    ),
    2 => 
    array (
      'module' => 'Opportunities',
      'link' => 'leads',
    ),
  ),
);