<?php namespace Koalabs\Aliro\Users;

use Config;
use Illuminate\Database\Eloquent\Model;
use Koalabs\Aliro\Users\Traits\CredentialTrait;
use Koalabs\Aliro\Users\Traits\RemindableTrait;
use Koalabs\Aliro\Users\Traits\RoleTrait;

class User extends Model implements UserInterface {

  use CredentialTrait, RemindableTrait, RoleTrait;

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'users';

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

}