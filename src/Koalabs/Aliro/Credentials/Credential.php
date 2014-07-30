<?php namespace Koalabs\Aliro\Credentials;

use Config;
use Illuminate\Database\Eloquent\Model;

class Credential extends Model implements CredentialInterface {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'credentials';

  /**
   * The User Relationship
   *
   * @return Illuminate\Database\Eloquent\Model
   */
  public function user()
  {
    return $this->belongsTo(Config::get('aliro::users.model'));
  }

}