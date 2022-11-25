<?php

use Illuminate\Database\Capsule\Manager as Capsule;

namespace Ultra\Foundation;

class Database
{
  protected $capsule;

  protected $driver = null;
  protected $host = null;
  protected $database = null;
  protected $username = null;
  protected $password = null;
  protected $charset = null;
  protected $collation = null;
  protected $prefix = null;

  public function __construct(array $db_infos)
  {
    foreach ($db_infos as $k => $v) {
      $this->$k = $v;
    }
  }

  #region Setters
  public function set_driver($driver)
  {
    $this->driver = $driver;
  }

  public function set_host($host)
  {
    $this->host = $host;
  }

  public function set_database($database)
  {
    $this->datbase = $database;
  }

  public function set_username($username)
  {
    $this->username = $username;
  }

  public function set_password($password)
  {
    $this->password = $password;
  }

  public function set_charset($charset)
  {
    $this->charset = $charset;
  }

  public function set_collation($collation)
  {
    $this->collation = $collation;
  }

  public function set_prefix($prefix)
  {
    $this->prefix = $prefix;
  }
  #endregion

  #region Getters
  public function get_host()
  {
    return $this->host;
  }

  public function get_database()
  {
    return $this->database;
  }

  public function get_username()
  {
    return $this->username;
  }

  public function get_password()
  {
    return $this->password;
  }

  public function get_charset()
  {
    return $this->charset;
  }

  public function get_collation()
  {
    return $this->collation;
  }

  public function get_prefix()
  {
    return $this->prefix;
  }
  #endregion
}