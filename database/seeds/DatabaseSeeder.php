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
        // $this->call(UsersTableSeeder::class);

        App\User::create([
            'name'  => 'Cristobal CA',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);

            factory(App\Contact::class, 50)->create();
    }
}
