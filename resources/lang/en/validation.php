<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'The :attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'The :attribute field is required.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute has already been taken.',
    'url'                  => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],


    'general' => [
        'common' => [
            'requested-for' => 'Requested For',
            'employee-id'   => 'Employee ID',
            'employee-name' => 'Employee Name',
            'approver'      => 'Approver',
            'department'    => 'Department',
            'team'          => 'Team',
            'mobile-number' => 'Mobile Number',
            'requested-date' => 'Requested Date',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [

        'backend' => [
            'access' => [
                'permissions' => [
                    'associated_roles' => 'Associated Roles',
                    'dependencies' => 'Dependencies',
                    'display_name' => 'Display Name',
                    'group' => 'Group',
                    'group_sort' => 'Group Sort',

                    'groups' => [
                        'name' => 'Group Name',
                    ],

                    'name' => 'Name',
                    'system' => 'System?',
                ],

                'roles' => [
                    'associated_permissions' => 'Associated Permissions',
                    'name' => 'Name',
                    'sort' => 'Sort',
                ],

                //Roaster Employee
                'transport-request' => [
                    'from-date'     => 'Request From Date',
                    'to-date'       => 'Request To Date',
                    'employee-id'   => 'Employee ID',
                    'employee-name' => 'Employee Name',
                    'department'    => 'Department',
                    'team'          => 'Team',
                    'request-id'    => 'Request ID',
                    'status'        => 'Status',
                 ],

                 //Regular-Request
                 'regular-request' => [
                    'from-date'      => 'From Date',
                    'to-date'        => 'To Date',
                    'shift-start'    => 'Shift Start Time (IST)',
                    'shift-end'      => 'Shift End Time (IST)',
                    'department'     => 'Department',
                    'team'           => 'Team',
                    'employee-name' => 'Employee Name',
                 ],

                 //View Travel Request
                 'view-travel-request' => [
                   'request-from-date'  => 'Request From Date',
                   'request-to-date'    => 'Request To Date',
                   'employee-id'        => 'Employee ID',
                   'employee-name'      => 'Employee Name',
                   'travel-request-id'         => 'Travel Request ID',
                   'billable-cost-center'               => 'Billable Cost Center',
                   'status' => 'Status',
                   
                 ],

                 //view-app Request
                 'view-app' => [
                   'request-from-date'  => 'Request From Date',
                   'request-to-date'    => 'Request To Date',
                   'employee-id'        => 'Employee ID',
                   'employee-name'      => 'Employee Name',
                   'department'         => 'Department',
                   'team'               => 'Team',
                   'request-id'         => 'Request ID',
                   'status'             => 'Status',
                 ],

                  //Manager Approver
                'manageaprover' => [
                    'name'      => 'First Name',
                    'lastname'  => 'Last Name',
                    'emp-id'    => 'Managers id',
                    'emp-email' => 'Managers E-mail',
                 ],

                //Travelreim
                'Travelreim' => [
                    'associated_permissions' => 'Associated Permissions',
                    'name' => 'Name',

                    'employee-id'   => 'Employee ID',
                    'employee-name' => 'Employee Name',
                    'department'    => 'Department',
                    'team'          => 'Team',
                    'designation'   => 'Designation',
                    'site'          => 'Site',

                    'requested-for'         => 'Requested For',
                    'billable-cost-center'  => 'Billable Cost Center',
                    'is-billable'           => 'Is Billable',
                    'type-of-travel'        => 'Type Of Travel',
                    'approver'              => 'Approver',
                    'on-behalf-of'          => 'On Behalf Of',

                    //Travel insurance Form
                    'travel-insurance-req' => 'Travel Insurance Required',
                    'visa-required'        => 'Visa Required',
                    'type-of-visa'         => 'Type Of Visa',
                    'sex'                  => 'Sex',
                    'dob'                  => 'DOB(as per Passport)',
                    'passport-number'      => 'Passport Number',
                    'address-insured-person' => 'Address of the Insured person',
                    'surname'              => 'Surname as per Passport',
                    'nominee-name'         => 'Nominee Name',
                    'state'                => 'State',
                    'relationship'         => 'Relationship with the Nominee',
                    'mobile-no'            => 'Mobile No',


                    //Travel Details
                     'purpose-of-travel'    => 'Purpose Of Travel',
                     'specific-purpose'     => 'Brief Summary',
                     'project-type'         => 'Project Type',
                     'project-name'         => 'Project Name',
                     'ticket-booking'       => 'Ticket Booking Required',
                     'accomodation-required' => 'Accomodation Required',

                     //Travel Advance
                     'advance-required' => 'Advance Required',
                     'forex-required' => 'FOREX Required',
                     'amount-requested' => 'Amount Requested',
                     'amount' => 'Amount',
                     'card-number'      => 'Card Number',

                     //Additional Details
                     'remarks'              => 'Remarks',
                     'attach'               => 'Attach', 
                     'attached-documents'   => 'Attached Documents ',
                     'personal-email-id'    => 'Personal Email ID'

                ],

                'users' => [
                    'active'            => 'Active',
                    'associated_roles'  => 'Associated Roles',
                    'confirmed'         => 'Confirmed',
                    'email'             => 'E-mail Address',
                    'name'              => 'Name',
                    'other_permissions' => 'Other Permissions',
                    'password'          => 'Password',
                    'password_confirmation'   => 'Password Confirmation',
                    'send_confirmation_email' => 'Send Confirmation E-mail',
                ],
            ],
        ],

        'frontend' => [
            'email'                 => 'E-mail Address',
            'name'                  => 'Name',
            'password'              => 'Password',
            'password_confirmation' => 'Password Confirmation',
            'old_password'          => 'Old Password',
            'new_password'          => 'New Password',
            'new_password_confirmation' => 'New Password Confirmation',
        ],
    ],

];
