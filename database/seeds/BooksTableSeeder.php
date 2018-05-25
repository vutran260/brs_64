<?php

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\User;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        factory(Book::class, 20)->create()->each(function ($book) use ($faker) {
            $userIds = User::pluck('id')->random(5)->all();

            foreach ($userIds as $userId) {
                $score = $faker->numberBetween(1, 5);
                $scores[] = $score;

                $book->reviews()->attach($userId, [
                    'score' => $score,
                    'content' => $faker->text(255),
                ]);

                $book->marks()->attach($userId, [
                    'read_status' => $faker->numberBetween(0, 2),
                    'favorite' => $faker->numberBetween(0, 1),
                ]);

                $book->owners()->attach($userId);
            }

            $book->update([
                'rating' => array_sum($scores) / count($scores),
            ]);
        });
    }
}
