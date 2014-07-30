<?php namespace Koalabs\Aliro\Users\Traits;

trait RoleTrait {

  /**
   * The Roles Relationship
   *
   * @return Koalabs\Aliro\Roles\Role
   */
  public function roles()
  {
    return $this->belongsToMany(Config::get('aliro::roles.model'));
  }
  
}