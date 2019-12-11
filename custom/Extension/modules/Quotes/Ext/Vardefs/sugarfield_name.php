<?php
 // created: 2019-10-23 13:54:19
$dictionary['Quote']['fields']['name']['audited']=false;
$dictionary['Quote']['fields']['name']['massupdate']=false;
$dictionary['Quote']['fields']['name']['importable']='false';
$dictionary['Quote']['fields']['name']['duplicate_merge']='disabled';
$dictionary['Quote']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['Quote']['fields']['name']['merge_filter']='disabled';
$dictionary['Quote']['fields']['name']['unified_search']=false;
$dictionary['Quote']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.61',
  'searchable' => true,
);
$dictionary['Quote']['fields']['name']['calculated']='true';
$dictionary['Quote']['fields']['name']['formula']='concat(related($shipping_accounts,"business_name_c"),"-",toString($date_entered))';
$dictionary['Quote']['fields']['name']['enforced']=true;

 ?>