<?php
 // created: 2019-10-28 20:23:00
$dictionary['Account']['fields']['business_name_c']['duplicate_merge_dom_value']=0;
$dictionary['Account']['fields']['business_name_c']['labelValue']='Nombre del negocio';
$dictionary['Account']['fields']['business_name_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['business_name_c']['calculated']='1';
$dictionary['Account']['fields']['business_name_c']['formula']='concat($business_type_c," ",$name)';
$dictionary['Account']['fields']['business_name_c']['enforced']='1';
$dictionary['Account']['fields']['business_name_c']['dependency']='';

 ?>