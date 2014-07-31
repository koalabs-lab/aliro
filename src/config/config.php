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

    'model' => 'Koalabs\Aliro\Users\User',

    /*
    |--------------------------------------------------------------------------
    | Pivot Table
    |--------------------------------------------------------------------------
    |
    | Here you can specify the name of the pivot table for relating users to roles.
    | It's a convention to use the singular version of the two tables.
    |
    */

    'pivot_table' => 'role_user',

  ]

);