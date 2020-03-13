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
        for($i=1;$i<=2;$i++){
            DB::table('users')->insert([
                'name' => 'jinjiajin'.$i,
                'password' => bcrypt('admin123'),
            ]);
            DB::table('admins')->insert([
                'name' => 'jinjiajin'.(122+$i),
                'password' => bcrypt('admin123'),
            ]);
        }
    }
}
