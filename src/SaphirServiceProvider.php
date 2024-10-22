<?php

namespace Saphircrud\Saphir;

use Illuminate\Support\ServiceProvider;
use Saphircrud\Saphir\Console\Commands\Mycommand;
use Illuminate\Support\Facades\Blade;

class SaphirServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Mycommand::class,
            ]);
        }

      
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views','saphir');

        Blade::directive('inputArea', function ($nom) {
            return "<?php echo view('saphir::inputarea',['nom' => $nom])->render(); ?>";
        });


        
    }
}
