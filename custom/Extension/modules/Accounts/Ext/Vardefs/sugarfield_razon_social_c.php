<?php
 // created: 2019-10-24 09:02:25
$dictionary['Account']['fields']['razon_social_c']['labelValue']='Razón social';
$dictionary['Account']['fields']['razon_social_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['razon_social_c']['enforced']='false';
$dictionary['Account']['fields']['razon_social_c']['dependency']='ifElse(equal($person_type_c,"Moral"),true,false)';

 ?>