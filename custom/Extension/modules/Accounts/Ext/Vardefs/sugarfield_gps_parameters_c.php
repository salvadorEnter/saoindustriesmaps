<?php
 // created: 2019-10-28 20:10:48
$dictionary['Account']['fields']['gps_parameters_c']['duplicate_merge_dom_value']=0;
$dictionary['Account']['fields']['gps_parameters_c']['labelValue']='GPS Parameters';
$dictionary['Account']['fields']['gps_parameters_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['gps_parameters_c']['calculated']='1';
$dictionary['Account']['fields']['gps_parameters_c']['formula']='toString(concat(toString("key=AIzaSyCVh5NcPi98UVoKI6wTVpiVBDZOht4rltc&q="),toString($gps_latitud_c),",",toString($gps_longitud_c)))';
$dictionary['Account']['fields']['gps_parameters_c']['enforced']='1';
$dictionary['Account']['fields']['gps_parameters_c']['dependency']='';

 ?>