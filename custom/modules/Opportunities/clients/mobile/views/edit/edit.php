<?php
$viewdefs['Opportunities'] = 
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
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
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
              1 => 'amount',
              2 => 'account_name',
              3 => 'date_closed',
              4 => 'sales_stage',
              5 => 'probability',
              6 => 'assigned_user_name',
              7 => 'team_name',
              8 => 
              array (
                'name' => 'commit_stage',
                'comment' => 'Forecast commit ranges: Include, Likely, Omit etc.',
                'related_fields' => 
                array (
                  0 => 'probability',
                ),
                'label' => 'LBL_COMMIT_STAGE_FORECAST',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
