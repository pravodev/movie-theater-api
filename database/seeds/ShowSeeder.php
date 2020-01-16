<?php

use Illuminate\Database\Seeder;
use App\Models\Show;
use App\Models\ShowTime;
use App\Models\Movie;
use App\Models\Theater;
use Faker\Factory;

class ShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        try {
            $faker = Factory::create();
            $movies = Movie::all();
            $theaters = Theater::all();
            $totalData = 100;

            for ($i=0; $i < $totalData; $i++) { 
                $movie = $movies->random();
                $show = new Show;
                $show->movie_id = $movie->id;
                $show->date = now()->addDay($faker->numberBetween(0, $totalData));
                $show->save();

                $theater = $theaters->random();
                
                foreach($theater->studios as $studio){
                    $show_time = new ShowTime;
                    $show_time->show_id = $show->id;
                    $show_time->studio_id = $studio->id;
                    $show_time->theater_id = $theater->id;
                    $show_time->start_time = $show->date->copy()->addHour($faker->numberBetween(1,24));
                    $show_time->end_time = $show_time->start_time->copy()->addMinute($movie->duration);
                    $show_time->total_price = $faker->randomElement([20000, 50000, 90000]);
                    $show_time->save();
                }

                $this->command->info($movie->name. ' scheduled show for date ' . $show->date);
            }

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }
}
