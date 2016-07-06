<?php
namespace App\GestaoEscolar\Aluno;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class AlunoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    protected $namespace = 'App\GestaEscolar\Aluno';
    public function boot(Router $router)
    {
        parent::boot($router);
    }

    public function map(Router $router)
    {
        $this->mapWebRoutes($router);

        //
    }
    protected function mapWebRoutes(Router $router)
    {
        $router->group([
            'namespace' => $this->namespace, 'middleware' => 'web',
        ], function ($router) {
            require app_path('GestaoEscolar/Aluno/routes.php');
        });
    }
}
