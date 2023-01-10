<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Outlaw;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Outlaw::factory()->create ([

            'name' => 'José Miguel Dalton',
            'alias' => 'JM',
            'crime' => 'Laravel',
            'hint' => 'PHP',
            'reward' => '5000',
            'description' => 'French-speaking outlaw wandering around Granada cantinas. He wears glasses, looks calm but turns dangerous when he draws his favourite weapon: Laravel. Regular player in most Western saloons',
            'deadline' => '2023-01-19 08:30:00',
            'gang' => '25',
            'img' => 'https://drive.google.com/uc?export=view&id=14mEnJxgAmGiWBtbIWjN-elZDHB_zBTZJ',
        ]);

        Outlaw::factory()->create ([

            'name' => 'Celia Millán',
            'alias' => 'CM',
            'crime' => 'Symfony',
            'hint' => 'JavaScript',
            'reward' => '5001',
            'description' => 'Medium-built outlaw with long hair and a soft voice.
            Frequents the Malaga-bound railway, mugging people with her JavaScript gun.  
            Extremely dangerous with a pen and paper in her hand.',
            'deadline' => '2023-01-10 12:00:00',
            'gang' => '25',
            'img' => 'https://drive.google.com/uc?export=view&id=1zyX3TzTZg3EoYewBpxJmFZrWYHf_80WR',
        ]);
        Outlaw::factory(1)->create();

        User::factory()->create(['name' => 'admin', 'email' =>'admin@admin.com', 'isAdmin' => true]);

        User::factory()->create(['name' => 'use1', 'email' =>'user1@user1.com', 'isAdmin' => false]);

        //User::factory(5)->create();
    }
}
