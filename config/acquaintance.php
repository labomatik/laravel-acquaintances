<?php

return [

    'tables' => [
        /*
         * Table name of followships relations.
         */
        'followships' => 'followships',
        /*
         * Table name of friendships relations.
         */
        'friendships' => 'friendships',
        /*
         * Table name of friendship Groups relations.
         */
        'friendship_groups' => 'friendship_groups',
    ],

    'friendships_groups' => [
        'acquaintances' => 0,
        'close_friends' => 1,
        'family' => 2
    ],

    /*
     * Model class name of users.
     */
    'user_model' => 'App\User',

    /*
     * Table name of users table.
     */
    'users_table_name' => 'users',

    /*
     * Primary key of users table.
     */
    'users_table_primary_key' => 'id',


    /*
     * Prefix of many-to-many relation fields.
     */
    'morph_prefix' => 'followable',

    /*
     * Date format for created_at.
     */
    'date_format' => 'Y-m-d H:i:s',

    /*
     * Models Namespace.
     */
    'model_namespace' => 'App',
];