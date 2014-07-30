<?php namespace Koalabs\Aliro\Users\Traits;

trait RemindableTrait {

  /**
   * Get the e-mail address where password reminders are sent.
   *
   * @return string
   */
  public function getReminderEmail()
  {
    return $this->email;
  }

}
