<?php

namespace Ultra\Foundation;

class Bootstrap
{

  // this class will start and create all system required and set them as a singleton or something else to be available
  // application-wide without having to create a new instance.
  // might have to check for something else than a singleton since it's considered an anti-pattern

  #region Properties

  // will need to find a way without using globals to make all those properties available at all times 
  // within the full scope of the application

  public $twig;
  public $slim;
  public $directus;
  public $redis;

  #endregion

  public function __construct()
  {
    $this->directus_constructor();
    $this->slim_constructor();
    $this->twig_constructor();
    $this->redis_constructor();
  }

  #region Constructors

  protected function twig_constructor()
  {
    $this->twig = $this->twig_configurator();
  }

  protected function slim_constructor()
  {
    $this->slim = $this->slim_configurator();
  }

  protected function directus_constructor()
  {
    $this->directus = $this->directus_configurator();
  }

  protected function redis_constructor()
  {
    $this->redis = $this->redis_configurator();
  }

  #endregion

  #region Configurators

  protected function twig_configurator()
  {
    // here we will start the twig and set it to be available application wide (probably with the dependency injection container)
  }

  protected function slim_configurator()
  {
    // here we will start the slim and set it to be available application wide (probably with the dependency injection container)
  }

  protected function directus_configurator()
  {
    // here we will start the directus and set it to be available application wide (probably with the dependency injection container)
  }

  protected function redis_configurator()
  {
    // here we will start the redis and set it to be available application wide (probably with the dependency injection container)    
  }

  #endregion
}