<?php
/**
 *  app/Providers/AppServiceProvider.php
 *
 * Date-Time: 07.06.21
 * Time: 15:32
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Providers;

use App\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use App\Models\Language;

/**
 * Class AppServiceProvider
 * @package App\Providers
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        Request::macro('breadcrumbs',function () {
            return new Breadcrumbs($this);
        });

        view()->composer('client.layout.includes.header.header',function($view){
            $langs = Language::select('id','title','locale')->get();

            $result = [];
            foreach ($langs as $lang){
                $result[$lang->id]['title'] = $lang->title;
                $result[$lang->id]['locale'] = $lang->locale;
            }
            $view->with('langs',$result);
        });
    }
}
