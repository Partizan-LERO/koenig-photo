<?php

use App\Tariff;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TariffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tariffs')->delete();

        Tariff::create([
            'id' => 1,
            'title' => 'Прогулочная фотосессия',
            'price' => 1000,
            'total_photos' => 70,
            'total_photoshopied_photos' => 15,
            'duration' => 1
        ]);

        Tariff::create([
            'id' => 2,
            'title' => 'Свадебная фотосессия',
            'price' => 2000,
            'total_photos' => 150,
            'total_photoshopied_photos' => 50,
            'duration' => 1
        ]);

        Tariff::create([
            'id' => 3,
            'title' => 'Детская фотосессия',
            'price' => 2000,
            'total_photos' => 50,
            'total_photoshopied_photos' => 15,
            'duration' => 1
        ]);

        Tariff::create([
            'id' => 4,
            'title' => 'Фотосессия с животными',
            'price' => 2000,
            'total_photos' => 40,
            'total_photoshopied_photos' => 15,
            'duration' => 1
        ]);

        Tariff::create([
            'id' => 5,
            'title' => 'Семейная фотосессия',
            'price' => 2000,
            'total_photos' => 60,
            'total_photoshopied_photos' => 15,
            'duration' => 1
        ]);

        Tariff::create([
            'id' => 6,
            'title' => 'Романтическая фотосессия',
            'price' => 2000,
            'total_photos' => 60,
            'total_photoshopied_photos' => 20,
            'duration' => 1
        ]);

        Tariff::create([
            'id' => 7,
            'title' => 'Студийная фотосессия',
            'price' => 3000,
            'total_photos' => 80,
            'total_photoshopied_photos' => 30,
            'duration' => 1
        ]);

        Tariff::create([
            'id' => 8,
            'title' => 'Праздничная фотосессия',
            'price' => 2000,
            'total_photos' => 70,
            'total_photoshopied_photos' => 25,
            'duration' => 1
        ]);
    }
}
