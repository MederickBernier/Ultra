<?php

namespace Conf;

class Overrides{
  // this file contains only static arrays with all the configurations for each system, so they can be overriden
  // without editing the bootstrap files.

  public static $twig_overrides = [
    
  ];
  
  public static $slim_overrides = [
    
  ];
  
  public static $directus_overrides = [
    
  ];
  
  public static $redis_overrides = [
    
  ];

  public static function is_in_twig($key, $default){
    if(in_array($key, Overrides::$twig_overrides)){
      return Overrides::$twig_overrides[$key];
    }else{
      return $default;
    }
  }

  public static function is_in_slim($key, $default){
    if(in_array($key, Overrides::$slim_overrides)){
      return Overrides::$slim_overrides[$key];
    }else{
      return $default;
    }
  }

  public static function is_in_directus($key, $default){
    if(in_array($key, Overrides::$directus_overrides)){
      return Overrides::$directus_overrides[$key];
    }else{
      return $default;
    }
  }

  public static function is_in_redis($key, $default){
    if(in_array($key, Overrides::$redis_overrides)){
      return Overrides::$redis_overrides[$key];
    }else{
      return $default;
    }
  }
}