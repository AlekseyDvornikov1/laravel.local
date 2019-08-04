<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Автор неизвестен',
                'email' => 'unknown_author@gmail.com',
                'password' => bcrypt(Str::random(16))
            ],
            [
                'name' => 'Автор',
                'email' => 'author@gmail.com',
                'password' => bcrypt('123123123')
            ]
        ];

        DB::table('users')->insert($data);
    }
}
