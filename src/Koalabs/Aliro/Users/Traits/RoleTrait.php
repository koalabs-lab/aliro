<?php namespace Koalabs\Aliro\Users\Traits;

use Config;

trait RoleTrait {

  /**
   * The Roles Relationship
   *
   * @return Koalabs\Aliro\Roles\Role
   */
  public function roles()
  {
    $config = Config::get('aliro::users');

    return $this->belongsToMany('roles', $config['pivot_table']);
  }

}