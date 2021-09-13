<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customers')->insert([
            [
                'name' => 'Prof. Norma Abernathy',
                'email' => 'katelyn661@example.com',
                'password' => bcrypt('password'),
                'created_at' => "2021-07-04 00:00:00",
            ],
            [
                'name' => 'Dallin Aufderhar',
                'email' => 'ywaelchi@example.org',
                'password' => bcrypt('password'),
                'created_at' => "2021-07-04 00:00:00",
            ],
            [
                'name' => 'Camylle Lindgren',
                'email' => 'emelie.ohara@example.net',
                'password' => bcrypt('password'),
                'created_at' => "2021-08-06 00:00:00",
            ],
            [
                'name' => 'Luz Quitzon',
                'email' => 'ebogan@example.com',
                'password' => bcrypt('password'),
                'created_at' => "2021-04-04 00:00:00",
            ],
            [
                'name' => 'Nikolas Yundt DDS',
                'email' => 'margaret96@example.org',
                'password' => bcrypt('password'),
                'created_at' => "2020-09-12 00:00:00",
            ],
            [
                'name' => 'Rosalind Kertzmann',
                'email' => 'buck52@example.com',
                'password' => bcrypt('password'),
                'created_at' => "2021-05-25 00:00:00",
            ],

            [
                'name' => 'Jamar Barton',
                'email' => 'brannon34@example.com',
                'password' => bcrypt('password'),
                'created_at' => "2020-10-14 00:00:00",
            ],
            [
                'name' => 'Valentina Bins II',
                'email' => 'howe.liliana@example.org',
                'password' => bcrypt('password'),
                'created_at' => "2021-06-30 00:00:00",
            ],
            [
                'name' => 'Prof. Golden Skiles',
                'email' => 'tremaine.oconnell@example.net',
                'password' => bcrypt('password'),
                'created_at' => "2020-11-26 00:00:00",
            ],
            [
                'name' => 'Dr. Kay Casper',
                'email' => 'dicki.danny@example.org',
                'password' => bcrypt('password'),
                'created_at' => "2021-04-17 00:00:00",
            ],
            [
                'name' => 'Favian Ankunding',
                'email' => 'ylang@example.com',
                'password' => bcrypt('password'),
                'created_at' => "2020-10-30 00:00:00",
            ],
            [
                'name' => 'Mrs. Mariana Predovic',
                'email' => 'jlakin@example.net',
                'password' => bcrypt('password'),
                'created_at' => "2020-12-16 00:00:00",
            ],
            [
                'name' => 'Dr. Jay Gerhold',
                'email' => 'vicky59@example.net',
                'password' => bcrypt('password'),
                'created_at' => "2021-08-26 00:00:00",
            ],
            [
                'name' => 'Mr. Joany Huel DVM',
                'email' => 'sonny13@example.org',
                'password' => bcrypt('password'),
                'created_at' => "2021-06-16 00:00:00",
            ],
            [
                'name' => 'Felicia Schumm',
                'email' => 'dvandervort@example.com',
                'password' => bcrypt('password'),
                'created_at' => "2021-02-07 00:00:00",
            ],
            [
                'name' => 'Grady Keeling',
                'email' => 'haley.magnolia@example.com',
                'password' => bcrypt('password'),
                'created_at' => "2021-07-08 00:00:00",
            ],
            [
                'name' => 'Walker Langworth',
                'email' => 'kelsi.brekke@example.net',
                'password' => bcrypt('password'),
                'created_at' => "2021-01-13 00:00:00",
            ],
            [
                'name' => 'Stefanie Schuppe',
                'email' => 'mccullough.angela@example.org',
                'password' => bcrypt('password'),
                'created_at' => "2020-12-15 00:00:00",
            ],
            [
                'name' => 'Prof. Leonardo Murray',
                'email' => 'heathcote.mary@example.com',
                'password' => bcrypt('password'),
                'created_at' => "2020-12-05 00:00:00",
            ],
            [
                'name' => 'Adrianna Davis',
                'email' => 'scarlett02@example.org',
                'password' => bcrypt('password'),
                'created_at' => "2021-07-15 00:00:00",
            ],
            [
                'name' => 'Ms. Briana Funk II',
                'email' => 'billie.wilderman@example.org',
                'password' => bcrypt('password'),
                'created_at' => "2021-03-07 00:00:00",
            ],

        ]);
    }
}
