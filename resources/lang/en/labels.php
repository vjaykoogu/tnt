<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => 'All',
        'yes' => 'Yes',
        'no' => 'No',
        'male' => 'Male',
        'female' => 'Female',
        'father' => 'Father',
        'mother' => 'Mother',
        'brother' => 'Brother',
        'sister' => 'Sister',
        'spouse' => 'Spouse',
        'otherr' => 'Other',
        'custom' => 'Custom',
        'self' => 'Self',
        'air' => 'Air',
        'train' => 'Train',
        'visitor' => 'Visitor',
        'domestic' => 'Domestic',
        'international' => 'International',
        'on-behalf'  => 'On Behalf',
        'actions' => 'Actions',
        'business-meeting' => 'Business Meeting',
        'training' => 'Training',
        'Knowledge-transfer' => 'Knowledge Transfer',
        'seminar-workshop' => 'Seminar or Workshop',
        'business-knowledge' => 'Business Meeting and Knowledge Transfer',
        'work-on-site' => 'Work-on Site Project',
        'bau' => 'BAU',
        'client-project' => 'Client Project',
        'internal-project' => 'Internal Project',
        'select' => 'Select',
        'inr' => 'INR',
        'usd' => 'USD',
        'euro' => 'Euro',
        'singapore-dollar' => 'Singapore Dollar',
        'gbp' => 'GBP',
        'hkd' => 'HKD',
        'japanese-yen' => 'Japanese yen',
        'chf' => 'CHF',
        'aed' => 'AED',
        'otherr' => 'Other',
        'buttons' => [
            'save' => 'Save',
            'update' => 'Update',
        ],
        'hide' => 'Hide',
        'none' => 'None',
        'show' => 'Show',
        'toggle_navigation' => 'Toggle Navigation',
        'approved' => 'Approved',
        'cancle' => 'cancled',
        'close' => 'closed',
        'not-submitted' => 'Not Submitted',
        'rejected' => 'Rejected',
    ],

    'visa' => [
        'business' => 'Business',
        'work-permit' => 'Work Permit',
        'visa-on-arrival' => 'Visa On Arrival',
        'd-type' => 'D Type',
        'b1' => 'B1',
        'b2' => 'B2',
        'Others' => 'Others Please Specify',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',

                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions' => 'Permissions',
                    'role' => 'Role',
                    'sort' => 'Sort',
                    'total' => 'role total|roles total',
                ],
            ],

            //Travelreim module labels
            'travelreim' => [
                'create' => 'Travel Request Form',
                'edit' => 'Edit Travel Request',
                'title' => 'Raise Travel Request',
                'tid'   => 'Travel Insurance Details',

                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions' => 'Permissions',
                    'role' => 'Role',
                    'sort' => 'Sort',
                    'total' => 'role total|roles total',
                ],
            ],

             //Transport module labels
            'transport' => [
                'main' => 'Transport Request - Adhoc ',
                'empl_details' => 'Employee Details',
                'request_details' => 'Request Details',

                //Inner Request Details
                    'pickup-date'       => 'Pickup Date(From)',
                    'pickup-date-to'    => 'Pickup Date(TO)',
                    'pickup-time'       => 'Pickup Time (IST)',
                    'pickup-address'    => 'Pickup Address',
                    'pickup-landmark'   => 'Pickup Landmark',
                    'drop-requred'      => 'Drop Requred',
                    'drop-time'      => 'Drop Time',
                    'drop-address'      => 'Drop Address',
                    'reason-for-request'  => 'Reason for Request',
                    'adhoc-request-sheet' => 'Attach Adhoc Request Sheet ',
                    'adhoc-request'     => 'Adhoc Request',
               
                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions' => 'Permissions',
                    'role' => 'Role',
                    'sort' => 'Sort',
                    'total' => 'role total|roles total',
                ],
            ],

            'transport-request' => [
                'main-title' => 'Adhoc Request Detailed Report ',
                'filter-emp' => 'Cab Request Detailed Report',

            ],

            'view-app' => [
                'main-title' => 'View Adhoc Cab Requests',
                'filter-emp' => 'Filter Adhoc Cab Request',
            ],

            //RegularRequest
            'regular-request' => [
                'main-title' => 'View Cab Roaster - Employees ',
                'filter-emp' => 'Filter Employee Cab Roaster',
                'main-title-view' => 'View Travel Request ',
                'search-criteria' => 'Search-Criteria',

            ],

            //Manager Approver
            'manageapprover' => [
                'create' => 'Create New Approver',
                'main'  => 'Manager Approver',
                'createe' => 'Add New Approver',                
            ],

            'users' => [
                'active' => 'Active Users',
                'all_permissions' => 'All Permissions',
                'change_password' => 'Change Password',
                'change_password_for' => 'Change Password for :user',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'management' => 'User Management',
                'no_permissions' => 'No Permissions',
                'no_roles' => 'No Roles to set.',
                'permissions' => 'Permissions',

                'table' => [
                    'confirmed' => 'Confirmed',
                    'created' => 'Created',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Name',
                    'no_deactivated' => 'No Deactivated Users',
                    'no_deleted' => 'No Deleted Users',
                    'roles' => 'Roles',
                    'total' => 'user total|users total',
                ],
            ],
        ],
    ],

    'frontend' => [

        'auth' => [
            'login_box_title' => 'Login',
            'login_button' => 'Login',
            'login_with' => 'Login with :social_media',
            'register_box_title' => 'Register',
            'register_button' => 'Register',
            'remember_me' => 'Remember Me',
        ],

        'passwords' => [
            'forgot_password' => 'Forgot Your Password?',
            'reset_password_box_title' => 'Reset Password',
            'reset_password_button' => 'Reset Password',
            'send_password_reset_link_button' => 'Send Password Reset Link',
        ],

        'macros' => [
            'country' => [
                'alpha' => 'Country Alpha Codes',
                'alpha2' => 'Country Alpha 2 Codes',
                'alpha3' => 'Country Alpha 3 Codes',
                'numeric' => 'Country Numeric Codes',
            ],

            'macro_examples' => 'Macro Examples',

            'state' => [
                'mexico' => 'Mexico State List',
                'us' => [
                    'us' => 'US States',
                    'outlying' => 'US Outlying Territories',
                    'armed' => 'US Armed Forces',
                ],
            ],

            'territories' => [
                'canada' => 'Canada Province & Territories List',
            ],

            'timezone' => 'Timezone',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Change Password',
            ],

            'profile' => [
                'avatar' => 'Avatar',
                'created_at' => 'Created At',
                'edit_information' => 'Edit Information',
                'email' => 'E-mail',
                'last_updated' => 'Last Updated',
                'name' => 'Name',
                'update_information' => 'Update Information',
            ],
        ],

    ],
];
