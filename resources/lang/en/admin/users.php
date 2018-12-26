<?php
return [
    'cols' => [
        'name'                      => 'Username',
        'email'                     => 'Email',
        'password'                  => 'Password',
        'password-confirmation'     => 'Password (again)',
    ],
    'view' => [
        'title'                     => 'Users',
        'create'                    => 'Create new user',
        'edit'                      => 'Edit',
        'delete'                    => 'Delete',
        'delete-confirmation'       => 'Are you sure you want to delete this user?',
        'delete-ok'                 => 'User has succefully been deleted',
        'delete-failed'             => 'User cannot be deleted',
    ],

    'create' => [
        'title'                     => 'Create user',
        'save'                      => 'Create',
        'status-ok'                 => 'User successfully created',
    ],

    'update' => [
        'save'                      => 'Save',
        'close'                     => 'Cancel',
        'new-password'              => 'New password',
        'new-password-confirmation' => 'New password (again)',
        'success'                   => ':value was changed successfully',
        'status-ok'                 => 'User successfully updated',
        'error'                     => ':value could not be changed',

        'values' => [
            'your' => [
                'name'              => 'your username',
                'email'             => 'your email',
                'password'          => 'your password',
            ],

            'their' => [
                'name'              => 'the username',
                'email'             => "the user's email",
                'password'          => "the user's password",
            ],
        ],

        'update-self'     => [
            'title'                  => 'Your information',
            'password'               => 'Old password (to change the password)',
        ],

        'update-other'  => [
            'title'                  => 'Edit user',
        ],
    ],
];
