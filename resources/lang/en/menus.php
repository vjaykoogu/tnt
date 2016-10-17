<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'title' => 'Access Management',

            'roles' => [
                'all' => 'All Roles',
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',
                'main' => 'Roles',
            ],

            'users' => [
                'all' => 'All Users',
                'change-password' => 'Change Password',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'main' => 'Users',
            ],
        ],

        'log-viewer' => [
            'main' => 'Log Viewer',
            'dashboard' => 'Dashboard',
            'logs' => 'Logs',
        ],

        'user-management' => [
            'main' => 'User Management',
            'dashboard' => 'All USers',
            'new-user' => 'Create User',
        ],

        'role-management' => [
            'main' => 'Role Management',
            'dashboard' => 'All Roles',
            'new-user' => 'Create Role',
        ],

         'travel-reimbursement' => [
            'main' => 'Travel & Reimbursement',
            'menua' => 'Raise Travel Request',
            'menub' => 'View Travel Request',
            'menuc' => 'Travel Reimbursement Form',
            'menud' => 'View Travel Reimbursement',
            'dashboard' => 'All Roles',
            'new-user' => 'Create Role',
        ],

        //Transport Management
        'transport' => [
            'main' => 'Transport',
            'menua' => 'Adhoc Requests',
            'submenua' => 'Raise Adhoc Request',
            'submenub' => 'View/Approve Requests',
            'submenuc' => 'View Cab Roaster-Employees',
            'submenud' => 'Adhoc Request Detailed',
            'submenue' => 'Manage Approver', 
            'menub' => 'Regular Requests',
            'menuc' => 'Transport Reports',            
            'dashboard' => 'Transport Request - Adhoc',
            'dashboardb' => 'View Adhoc Cab Requests',
            'dashboardc' => 'Cab Request Detailed Report',
            'dashboardd' => 'View Cab Roaster - Employees',
           
        ],

        //regularrequest
        'regularrequest' => [
            
        ],


        'sidebar' => [
            'dashboard' => 'Dashboard',
            'general' => 'Travel',
            'generaltwo' => 'Transport  Management',
        ],
    ],

    'language-picker' => [
        'language' => 'Language',
        /**
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'ar' => 'Arabic',
            'da' => 'Danish',
            'de' => 'German',
            'en' => 'English',
            'es' => 'Spanish',
            'fr' => 'French',
            'it' => 'Italian',
            'pt-BR' => 'Brazilian Portuguese',
            'sv' => 'Swedish',
            'th' => 'Thai',
        ],
    ],
];
