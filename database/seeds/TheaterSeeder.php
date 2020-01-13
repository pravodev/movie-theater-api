<?php

use Illuminate\Database\Seeder;
use App\Models\Theater;
use Faker\Factory;
use Carbon\Carbon;

class TheaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $theaters = ['Anggrek 21 Cinema', 'Arion 21 Cinema', 'Binjai 21 Cinema', 'Citra 21 Cinema', 'Gading XXI Cinema', 'Grand 21 Cinema', 'International 21 Cinema'];
        
        DB::beginTransaction();

        $faker = Factory::create();

        try {
            foreach($theaters as $theater){
                
            }
            // $totalData = 10;
            // for ($i=0; $i < $totalData; $i++) { 
            //     # code...
            // }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            throw new \Exception($th);
        }
    }

}
