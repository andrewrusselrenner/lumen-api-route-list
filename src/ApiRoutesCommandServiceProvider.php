<?php
namespace CbxSoftware\LumenApiRoutesList;
use Illuminate\Support\ServiceProvider;
class RoutesCommandServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){
        $this->commands('CbxSoftware\LumenApiRoutesList\ApiRoutesCommand');
    }
}