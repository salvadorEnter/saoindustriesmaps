<?php
 // created: 2019-12-05 23:38:39
$dictionary['Account']['fields']['reason_cancellation_c']['labelValue']='Razón de cancelación';
$dictionary['Account']['fields']['reason_cancellation_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['reason_cancellation_c']['enforced']='false';
$dictionary['Account']['fields']['reason_cancellation_c']['dependency']='ifElse(equal($visit_c,"Canceled"),true,false)';

 ?>