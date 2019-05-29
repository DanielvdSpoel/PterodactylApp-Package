<?php
namespace DanielvdSpoel\PterodactylApp;
use Illuminate\Support\ServiceProvider;
class PterodactylAppServiceProvider extends ServiceProvider
{
    /**
    * boot method
    *
    * @return  void
    */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');

    }
    /**
    * Register method
    *
    * @return  void
    */
    public function register()
    {
       
    }
}