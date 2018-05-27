<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(MarksTableSeeder::class);
        $this->call(OwnersTableSeeder::class);
        $this->call(FollowsTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(LikesTableSeeder::class);
    }
}
