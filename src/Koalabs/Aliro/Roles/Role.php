<?php namespace Koalabs\Aliro\Roles;

use Config;
use Illuminate\Database\Eloquent\Model;

class Role extends Model implements RoleInterface {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'roles';

  /**
   * The fields fillable via mass assignment
   *
   * @var array
   */
  protected $fillable = ['name'];

  /**
   * The User Relationship
   *
   * @return Koalabs\Aliro\Users\User
   */
  public function users()
  {
    $config = Config::get('aliro::users');

    return $this->belongsToMany($config['table'], $config['pivot_table']);
  }

}