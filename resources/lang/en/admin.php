<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'slider' => [
        'title' => 'Sliders',

        'actions' => [
            'index' => 'Sliders',
            'create' => 'New Slider',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'slider' => [
        'title' => 'Sliders',

        'actions' => [
            'index' => 'Sliders',
            'create' => 'New Slider',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'activated' => 'Activated',
            'is_published' => 'Is published',
            'link1' => 'Link1',
            'link2' => 'Link2',
            
        ],
    ],

    'identity' => [
        'title' => 'Identities',

        'actions' => [
            'index' => 'Identities',
            'create' => 'New Identity',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            
        ],
    ],

    '$table;' => [
        'title' => '$Table-;',

        'actions' => [
            'index' => '$Table-;',
            'create' => 'New $Table-;',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'pro' => [
        'title' => 'Pros',

        'actions' => [
            'index' => 'Pros',
            'create' => 'New Pro',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'link1' => 'Link1',
            'title' => 'Title',
            'text' => 'Text',
            
        ],
    ],

    'service' => [
        'title' => 'Services',

        'actions' => [
            'index' => 'Services',
            'create' => 'New Service',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'body' => 'Body',
            'is_published' => 'Is published',
            
        ],
    ],

    'job' => [
        'title' => 'Jobs',

        'actions' => [
            'index' => 'Jobs',
            'create' => 'New Job',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'is_published' => 'Is published',
            
        ],
    ],

    'application' => [
        'title' => 'Applications',

        'actions' => [
            'index' => 'Applications',
            'create' => 'New Application',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'testimonial' => [
        'title' => 'Testimonials',

        'actions' => [
            'index' => 'Testimonials',
            'create' => 'New Testimonial',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'job' => 'Job',
            'text' => 'Text',
            'is_published' => 'Is published',
            
        ],
    ],

    'social' => [
        'title' => 'Socials',

        'actions' => [
            'index' => 'Socials',
            'create' => 'New Social',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'icon' => 'Icon',
            'link' => 'Link',
            'is_published' => 'Is published',
            
        ],
    ],

    'package' => [
        'title' => 'Packages',

        'actions' => [
            'index' => 'Packages',
            'create' => 'New Package',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'weight' => 'Weight',
            'number' => 'Number',
            'is_published' => 'Is published',
            
        ],
    ],

    'page' => [
        'title' => 'Pages',

        'actions' => [
            'index' => 'Pages',
            'create' => 'New Page',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'h1' => 'H1',
            'body' => 'Body',
            'is_published' => 'Is published',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];