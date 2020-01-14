<?php

use Illuminate\Database\Seeder;
use App\Models\Theater;
use Faker\Factory;
use Carbon\Carbon;
use App\Models\TheaterStudio;

class TheaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();

        $faker = Factory::create();

        try {
            $totalData = 10;
            $provinces = [
                ['West Java', ['Bandung', 'Jakarta']],
                ['East Java', ['Semarang']],
                ['East Kalimantan', ['Balikpapan']]
            ];

            for ($i=0; $i < $totalData; $i++) { 
                shuffle($provinces);
                $province = $provinces[0];

                $attribute = [
                    'name' => $faker->text('20') . ' Cinema',
                    'about' => $faker->paragraph,
                    'address' => $faker->address,
                    'city' => $faker->randomElement($province[1]),
                    'province' => $province[0],
                    'website' => $faker->url
                ];

                $theater = new Theater;
                $theater->fill($attribute)->save();
                $this->command->info($theater->name . ' created');
                $totalStudio = $faker->numberBetween(3, 5);
                for ($j=0; $j < $totalStudio; $j++) { 
                    $studio = new TheaterStudio;
                    $studio->name = 'Studio ' . $faker->text('5');
                    $studio->total_seat = $faker->numberBetween(20, 90);
                    $studio->theater_id = $theater->id;
                    $studio->save();
                }

            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            throw new \Exception($th);
        }
    }

}
