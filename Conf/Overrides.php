<?php

namespace Conf;

class Overrides{
  // this file contains only static arrays with all the configurations for each system, so they can be overriden
  // without editing the bootstrap files.

  public static $twig_overrides = [
#    "AUTO-RELOAD" => "",
#    "AUTOESCAPE" => "",
#    "AUTOESCAPE_SERVICE" => "",
#    "AUTOESCAPE_SERVICE_METHOD" => "",
#    "BASE_TEMPLATE_CLASS" => "",
#    "CACHE" => "",
#    "CHARSET" => "",
#    "DATE" => "",
#    "DEBUG" => "",
#    "DEFAULT_PATH" => "",
#    "FILE_NAME_PATTERN" => "",
#    "FORM_THEMES" => "",
#    "GLOBALS" => "",
#    "NUMBER_FORMAT" => "",
#    "OPTIMIZATIONS" => "",
#    "PATHS" => "",
#    "STRICT_VARIABLES" => "",
  ];
  
  public static $slim_overrides = [
    
  ];
  
  public static $directus_overrides = [
#    "API_URL" => "",
#    "AUTH_PREFIX" => "",
#    "AUTH_STORAGE" => "",
#    "AUTH_DOMAIN" => "",
#    "STRIP_HEADERS" => "",
  ];
  
  public static $redis_overrides = [
#    "SCHEME" => "",
#    "HOST" => "",
#    "PORT" => "",
#    "PATH" => "",
#    "SSL" => "",
#    "PREFIX" => "",
#    "EXCEPTIONS" => "",
#    "CONNECTIONS" => "",
#    "CLUSTER" => "",
#    "REPLICATION" => "",
#    "AGGREGATE" => "",
#    "PARAMETERS" => "",
#    "COMMANDS" => "",
  ];

  public static function is_in_twig($key, $default = null){
    if(in_array(strtoupper($key), Overrides::$twig_overrides)){
      return Overrides::$twig_overrides[strtoupper($key)];
    }else{
      if(is_null($default)) return null;
      return $default;
    }
  }

  public static function is_in_slim($key, $default = null){
    if(in_array(strtoupper($key), Overrides::$slim_overrides)){
      return Overrides::$slim_overrides[strtoupper($key)];
    }else{
      if(is_null($default)) return null;
      return $default;
    }
  }

  public static function is_in_directus($key, $default = null){
    if(in_array(strtoupper($key), Overrides::$directus_overrides)){
      return Overrides::$directus_overrides[strtoupper($key)];
    }else{
      if(is_null($default)) return null;
      return $default;
    }
  }

  public static function is_in_redis($key, $default = null){
    if(in_array(strtoupper($key), Overrides::$redis_overrides)){
      return Overrides::$redis_overrides[strtoupper($key)];
    }else{
      if(is_null($default)) return null;
      return $default;
    }
  }
}