<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => config('settings.account.user.password'),
        'avatar' => config('settings.account.user.avatar'),
        'remember_token' => str_random(10),
        'role' => config('settings.role.user'),
    ];
});

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Models\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->paragraph,
        'publish_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'author' => $faker->name,
        'number_of_pages' => $faker->numberBetween(50, 100),
        'rating' => $faker->randomFloat(2, 0, 5),
        'status' => $faker->numberBetween(0, 2),
        'category_id' => $faker->randomElement(App\Models\Category::pluck('id')->toArray()),
    ];
});

$factory->define(App\Models\Review::class, function (Faker $faker) {
    return [
        'content' => $faker->paragraph,
        'score' => $faker->numberBetween(1, 5),
        'user_id' => $faker->randomElement(App\Models\User::pluck('id')->toArray()),
        'book_id' => $faker->randomElement(App\Models\Book::pluck('id')->toArray()),
    ];
});

$factory->define(App\Models\Mark::class, function (Faker $faker) {
    return [
        'read_status' => $faker->numberBetween(0, 2),
        'favorite' => $faker->numberBetween(0, 1),
        'user_id' => $faker->randomElement(App\Models\User::pluck('id')->toArray()),
        'book_id' => $faker->randomElement(App\Models\Book::pluck('id')->toArray()),
    ];
});

$factory->define(App\Models\Owner::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomElement(App\Models\User::pluck('id')->toArray()),
        'book_id' => $faker->randomElement(App\Models\Book::pluck('id')->toArray()),
    ];
});

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->paragraph,
        'review_id' => $faker->randomElement(App\Models\Review::pluck('id')->toArray()),
        'user_id' => $faker->randomElement(App\Models\User::pluck('id')->toArray()),
    ];
});

$factory->define(App\Models\Follow::class, function (Faker $faker) {
    return [
        'follower_id' => $faker->randomElement(App\Models\User::pluck('id')->toArray()),
        'followed_id' => $faker->randomElement(App\Models\User::pluck('id')->toArray()),
    ];
});

$factory->define(App\Models\Activity::class, function (Faker $faker) {
    return [
        'content' => $faker->paragraph,
        'activitable_id' => $faker->randomElement(App\Models\Follow::pluck('id')->toArray()),
        'activitable_type' => App\Models\Follow::class,
    ];
});

$factory->define(App\Models\Like::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomElement(App\Models\User::pluck('id')->toArray()),
        'activity_id' => $faker->randomElement(App\Models\Activity::pluck('id')->toArray()),
    ];
});
