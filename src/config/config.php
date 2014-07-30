<?php

return array(

  /*
  |--------------------------------------------------------------------------
  | Users
  |--------------------------------------------------------------------------
  |
  | Configuration specific to the user management.
  |
  */

  'users' => [

    /*
    |--------------------------------------------------------------------------
    | Users Table
    |--------------------------------------------------------------------------
    |
    | Here you can specify the name of the table for storing your users' records.
    | 'users' is a pretty safe default.
    |
    */

    'table' => 'users',

    /*
    |--------------------------------------------------------------------------
    | Eloquent User Model
    |--------------------------------------------------------------------------
    |
    | You can choose the Eloquent model to be used for your users.
    |
    */

    'model' => 'Koalabs/Aliro/Users/User',

  ],

  /*
  |--------------------------------------------------------------------------
  | Roles
  |--------------------------------------------------------------------------
  |
  | Configuration specific to the role management.
  |
  */

  'roles' => [

    /*
    |--------------------------------------------------------------------------
    | Roles Table
    |--------------------------------------------------------------------------
    |
    | Here you can specify the name of the table for storing your roles.
    | 'roles' is a pretty safe default.
    |
    */

    'table' => 'roles',

    /*
    |--------------------------------------------------------------------------
    | Pivot Table
    |--------------------------------------------------------------------------
    |
    | Here you can specify the name of the pivot table.
    | It's a convention to use the singular version of the other tables.
    |
    */

    'pivot_table' => 'role_user',

    /*
    |--------------------------------------------------------------------------
    | Eloquent Role Model
    |--------------------------------------------------------------------------
    |
    | You can choose the Eloquent model to be used for your roles.
    | Role is a very safe bet.
    |
    */

    'model' => 'Koalabs/Aliro/Roles/Role',
  ]

);