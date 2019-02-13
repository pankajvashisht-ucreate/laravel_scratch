<?php 

namespace App\Providers;
use App\Service\Create;
use Illuminate\Support\ServiceProvider;
class SomeFunctionProvider extends ServiceProvider {

   public function register(){
       $this->app->singleton('somefunction',function(){
            return new Create;
       });
   }

}