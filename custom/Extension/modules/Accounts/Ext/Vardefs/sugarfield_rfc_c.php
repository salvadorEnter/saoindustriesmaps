<?php
 // created: 2019-10-24 09:02:43
$dictionary['Account']['fields']['rfc_c']['labelValue']='RFC';
$dictionary['Account']['fields']['rfc_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['rfc_c']['enforced']='';
$dictionary['Account']['fields']['rfc_c']['dependency']='ifElse(equal($person_type_c,"Moral"),true,false)';

 ?>