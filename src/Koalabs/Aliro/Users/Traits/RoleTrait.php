<?php namespace Koalabs\Aliro\Users\Traits;

use Config;
use Koalabs\Aliro\Roles\Role;

trait RoleTrait {

  /**
   * The Roles Relationship
   *
   * @return Koalabs\Aliro\Roles\Role
   */
  public function roles()
  {
    $config = Config::get('aliro::users');

    return $this->belongsToMany('Koalabs\Aliro\Roles\Role', $config['pivot_table']);
  }

  /**
   * Check if the user has a ceratin role
   *
   * @param  string $name
   * @return bool
   */
  public function hasRole($name)
  {
    foreach ($this->roles as $role)
    {
      if ($role->name == $name) return true;
    }

    return false;
  }

  /**
   * Assign a role to the user
   *
   * @param  mixed  $role
   * @return void
   */
  public function assignRole($role)
  {
    if (is_string($role)) $role = Role::whereName($role)->first();

    return $this->roles()->attach($role);
  }

  /**
   * Revoke a role from the user
   *
   * @param  mixed  $role
   * @return void
   */
  public function revokeRole($role)
  {
    if (is_string($role)) $role = Role::whereName($role)->first();

    return $this->roles()->detach($role);
  }

}