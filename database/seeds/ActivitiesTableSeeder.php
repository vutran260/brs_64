<?php

use Illuminate\Database\Seeder;
use App\Models\Activity;
use App\Models\User;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        factory(Activity::class, 10)->create()->each(function ($activity) use ($faker) {
            $userIds = User::pluck('id')->random(5)->all();

            foreach ($userIds as $userId) {
                $activity->likes()->attach($userId);
            }
        });
    }
}
