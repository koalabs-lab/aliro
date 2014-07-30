<?php namespace Koalabs\Aliro\Roles;

use Config;
use Illuminate\Database\Eloquent\Model;

class Role implements RoleInterface {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'roles';

  /**
   * The User Relationship
   *
   * @return Koalabs\Aliro\Users\User
   */
  public function users()
  {
    return $this->belongsToMany(Config::get('aliro::users.model'));
  }

}