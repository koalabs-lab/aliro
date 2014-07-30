<?php namespace Koalabs\Aliro\Users;

use Config;
use Illuminate\Database\Eloquent\Model;
use Koalabs\Aliro\Users\Traits\AuthTrait;
use Koalabs\Aliro\Users\Traits\RemindableTrait;

class User extends Model implements UserInterface {

  use AuthTrait, RemindableTrait;

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = Config::get('aliro::users.table');

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = ['password', 'remember_token'];

  /**
   * The fields fillable via mass assignment
   *
   * @var array
   */
  protected $fillable = ['email', 'firstname', 'lastname'];

  /**
   * The Credential Relationship
   *
   * @return Koalabs\Aliro\Credentials\Credential
   */
  public function credential()
  {
    return $this->hasOne('Koalabs\Aliro\Credentials\Credential');
  }

  /**
   * The Roles Relationship
   *
   * @return Koalabs\Aliro\Roles\Role
   */
  public function roles()
  {
    return $this->hasOne(Config::get('aliro::roles.model'));
  }

}