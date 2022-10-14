<?php

namespace Ultra\Foundation;

class Bootstrap{

  // this class will start and create all system required and set them as a singleton or something else to be available
  // application-wide without having to create a new instance.
  // might have to check for something else than a singleton since it's considered an anti-pattern

  public function __construct(){
    $this->directus_constructor();
    $this->slim_constructor();
    $this->twig_constructor();
    $this->redis_constructor();
  }

  #region Constructors

  protected function twig_constructor(){
    $configs = $this->twig_configurator();
  }

  protected function slim_constructor(){
    $configs = $this->slim_configurator();
  }

  protected function directus_constructor(){
    $configs = $this->directus_configurator();
  }

  protected function redis_constructor(){
    $configs = $this->redis_configurator();
  }

  #endregion

  #region Configurators

  protected function twig_configurator(){
    
  }
  
  protected function slim_configurator(){
     
  }

  protected function directus_configurator(){
    
  }

  protected function redis_configurator(){
    
  }

  #endregion
}