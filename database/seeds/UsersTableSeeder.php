<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        factory(User::class, 10)->create()->each(function ($user) use ($faker) {
            $userIds = User::where('id', '!=', $user->id)->pluck('id')->random(5)->all();
            foreach ($userIds as $userId) {
                $user->followings()->attach($userId);
            }
        });

        User::findOrFail(1)->update([
            'email' => 'admin@gmail.com',
            'name' => 'Admin',
            'password' => config('settings.account.admin.password'),
            'avatar' => config('settings.account.admin.avatar'),
            'role' => config('settings.role.admin'),
        ]);
    }
}
