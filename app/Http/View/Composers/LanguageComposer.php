<?php
/**
 *  app/Http/View/Composers/LanguageComposer.php
 *
 * Date-Time: 07.06.21
 * Time: 13:22
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\View\Composers;


use App\Models\Category;
use App\Models\Language;
use App\Models\Setting;
use Illuminate\View\View;

/**
 * Class LanguageComposer
 * @package App\Http\View\Composers
 */
class LanguageComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $defaultLanguage = Language::where('default', true)->first();
        $activeLanguage = Language::where('locale', $this->languageSlug())->first();

        $gemail = Setting::where('key','email')->first();
        $gemail2 = Setting::where('key','email_second')->first();
        $gaddress = Setting::where('key','address')->first();
        $gphone = Setting::where('key','phone')->first();
        $ginstagram = Setting::where('key','instagram')->first();
        $gfacebook = Setting::where('key','facebook')->first();
        $gtiktok = Setting::where('key','tiktok')->first();


        $view->with('localizations', $this->languageItems())
            ->with('activeLanguage', $activeLanguage ? $activeLanguage->id : null)
            ->with('ginstagram',$ginstagram)
            ->with('gfacebook',$gfacebook)
            ->with('gtiktok',$gtiktok)
            ->with('gemail',$gemail)
            ->with('gemail2',$gemail2)
            ->with('gaddress',$gaddress)
            ->with('gphone',$gphone)
            ->with('defaultLanguage', $defaultLanguage ? $defaultLanguage->id : null);
    }

    /**
     * @return array
     */
    public function languageItems(): array
    {
        $localizations = Language::where('status', true)->get();
        $languages = [];
        $languages['data'] = [];
        if (count($localizations) > 0) {
            foreach ($localizations as $localization) {
                if ($this->isCurrent($localization->locale)) {
                    $languages['current'] = [
                        'title' => $localization->title,
                        'url' => '',
                        'locale' => $localization->locale
                    ];
                    continue;
                }
                $languages['data'][] = [
                    'title' => $localization->title,
                    'url' => $this->getUrl($localization->locale),
                    'locale' => $localization->locale
                ];
            }
        }
        return $languages;
    }

    /**
     * @param $lang
     *
     * @return string
     */
    protected function getUrl($lang): string
    {

        $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        $uriSegments[1] = $lang;

        $uriSegments = implode('/', $uriSegments);
        return $host . $uriSegments;
    }


    protected function isCurrent(string $lang): bool
    {
        return $this->languageSlug() === $lang;
    }

    protected function languageSlug()
    {
        return explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[1];
    }
}
