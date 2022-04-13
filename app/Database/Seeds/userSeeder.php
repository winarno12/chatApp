<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class userSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i <= 10; $i++) {
            $data = [
                'uniq_id'       => md5(rand()),
                'email'         => $faker->safeEmail(),
                'password'      => md5('12345'),
                'username'      => $faker->name(),
                'about'         => 'about',
                'profile'       => 'profile.jpg',
                'created_at'    => Time::createFromTimestamp($faker->unixTime),
                'updated_at'     => Time::createFromTimestamp($faker->unixTime),
            ];
            # code...
            $this->db->table('users')->insert($data);
        }

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
    }
}
