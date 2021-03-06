<?php namespace Koalabs\Aliro\Users;

interface UserInterface {

  /**
   * Get the unique identifier for the user.
   *
   * @return mixed
   */
  public function getAuthIdentifier();

  /**
   * Get the password for the user.
   *
   * @return string
   */
  public function getAuthPassword();

  /**
   * Get the token value for the "remember me" session.
   *
   * @return string
   */
  public function getRememberToken();

  /**
   * Set the token value for the "remember me" session.
   *
   * @param  string  $value
   * @return void
   */
  public function setRememberToken($value);

  /**
   * Get the column name for the "remember me" token.
   *
   * @return string
   */
  public function getRememberTokenName();

  /**
   * Get the e-mail address where password reminders are sent.
   *
   * @return string
   */
  public function getReminderEmail();

}