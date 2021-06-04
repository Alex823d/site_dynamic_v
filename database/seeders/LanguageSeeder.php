<?php
/**
 *  database/seeders/LanguageSeeder.php
 *
 * Date-Time: 04.06.21
 * Time: 10:22
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

/**
 * Class LanguageSeeder
 * @package Database\Seeders
 */
class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Language array
        $languages = [
            [
                'title' => 'ქართული',
                'locale' => 'ge',
                'status' => true,
                'default' => true
            ],
            [
                'title' => 'English',
                'locale' => 'en',
                'status' => true,
                'default' => false
            ],
            [
                'title' => 'Русский',
                'locale' => 'ru',
                'status' => true,
                'default' => false
            ]
        ];

        // Insert Languages
        Language::insert($languages);
    }
}
