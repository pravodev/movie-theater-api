<?php

use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Cast;
use Faker\Factory;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'title' => 'Avengers: Endgame',
                'synopsis' => "In the opening, Clint Barton is teaching his daughter archery on his secluded farm while his wife prepares a picnic lunch for them. Suddenly, Clint's daughter vanishes and the rest of Clint's family disintegrates, along with half of all life across the universe, the result of Thanos' snapping his fingers after acquiring all six Infinity Stones. Nebula and Tony Stark are stranded in space following their defeat by Thanos on Titan, but are returned to Earth by Carol Danvers and reunited with Natasha Romanoff, Bruce Banner, Steve Rogers, Rocket, Thor, and James Rhodes. The team formulates a plan to steal the Infinity Stones back from Thanos and use them to reverse his actions, but learn upon finding him that he had used the stones a second time to destroy them, preventing their further use. He tells the remaining Avengers that he did so to avoid using the Stones for further nefarious purposes. Enraged, Thor cuts off Thanos' head, saying it's what he should have done in Wakanda",
                'rating' => 8.5,
                'release_date' => '2019-04-20',
                'duration' => 180,
                'director' => 'Anthony Russo',
                'casts' => 'Robert Downey Jr., Chris Evans, Mark Ruffalo',
                'genres' => 'Action, Adventure, Drama'
            ],
            [
                'title' => 'The Shawshank Redemption',
                'synopsis' => "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
                'rating' => 9.3,
                'release_date' => '1994-10-14',
                'duration' => 122,
                'director' => 'Frank Darabont',
                'casts' => 'Tim Robbins, Morgan Freeman, Bob Gunton',
                'genres' => 'Drama'
            ],
            [
                'title' => 'The Darknight',
                'synopsis' => "When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.",
                'rating' => 9.0,
                'release_date' => '2008-07-18',
                'duration' => 132,
                'director' => 'Christopher Nolan',
                'casts' => 'Christian Bale, Heath Ledger, Aaron Eckhart',
                'genres' => 'Action, Crime, Drama'
            ],
            [
                'title' => 'Parasite',
                'synopsis' => "All unemployed, Ki-taek and his family take peculiar interest in the wealthy and glamorous Parks, as they ingratiate themselves into their lives and get entangled in an unexpected incident.",
                'rating' => 8.6,
                'release_date' => '2019-11-08',
                'duration' => 132,
                'director' => 'Bong Joon Ho',
                'casts' => 'Kang-ho Song, Sun-kyun Lee, Yeo-jeong Jo',
                'genres' => 'Comedy, Drama, Thriller'
            ],
            [
                'title' => 'Joker',
                'synopsis' => "In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: the Joker.",
                'rating' => 8.6,
                'release_date' => '2019-10-04',
                'duration' => 120,
                'director' => 'Todd Philips',
                'casts' => 'Joaquin Phoenix, Robert De Niro, Zazie Beetz',
                'genres' => 'Chrime, Drama, Thriller'
            ],
        ];
        $faker = Faker\Factory::create();
        $genres = ['action', 'adventure', 'comedy', 'drama', 'fantasy', 'historical', 'historical fiction', 'horror', 'mystery', 'sciene fiction', 'social', 'western', 'romance'];
        DB::beginTransaction();
        try {
            foreach($movies as $attribute){
                $this->createMovie($attribute);
            }

            $totalData = 50;
            for ($i=0; $i < $totalData; $i++) { 
                shuffle($genres);
                $genre = array_splice($genres, 0, $faker->numberBetween(1, 4));

                $attribute = [
                    'title' => $faker->text(15),
                    'synopsis' => $faker->paragraph,
                    'rating' => $faker->numberBetween(6, 8),
                    'release_date' => $faker->dateTime(),
                    'duration' => $faker->numberBetween(120, 360),
                    'director' => $faker->name,
                    'casts' => [],
                    'genres' => $genre
                ];
                for ($j = 0; $j < 5; $j++) {
                   $attribute['casts'][] = $faker->name;
                }

                $this->createMovie($attribute);
            }
            
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            throw new \Exception($th);
        }
    }
    public function createMovie($attribute)
    {
        $movie = new Movie;
        $fillable = collect($attribute)->only($movie->getFillable())->toArray();
        $fillable['release_date'] = \Carbon\Carbon::parse($fillable['release_date']);
        $movie->fill($fillable);
        $movie->save();
        $casts = is_string($attribute['casts']) ? explode(', ', $attribute['casts']) : $attribute['casts'];
        $genres = is_string($attribute['genres']) ? explode(', ', $attribute['genres']) : $attribute['genres'];
        // dd($genres);
        foreach($genres as $name){
            $genre = Genre::firstOrCreate(['name' => ucwords($name)]);
            $movie->genres()->attach($genre);
        }

        foreach($casts as $name){
            $cast = Cast::firstOrCreate(['name' => $name]);
            $movie->casts()->attach($cast);
        }
        $this->command->info($movie->title . ' created');
    }
}
