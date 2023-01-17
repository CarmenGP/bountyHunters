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
            'gang' => '10',
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
            'gang' => '10',
            'img' => 'https://drive.google.com/uc?export=view&id=1zyX3TzTZg3EoYewBpxJmFZrWYHf_80WR',
        ]);
        Outlaw::factory()->create ([

            'name' => 'Lola García',
            'alias' => 'LoLaG',
            'crime' => 'HTML',
            'hint' => 'Web',
            'reward' => '5050',
            'description' => 'Tall woman with a lot of ambition to learn Full Stack Web Development at any cost, she takes all FrameWork and libraries in her stride. She has been seen hanging around Arrabal on Tuesdays and Thursdays.',
            'deadline' => '2023-02-14 11:30:00',
            'gang' => '5',
            'img' => 'https://drive.google.com/uc?export=view&id=1Jt3zV5oGqamZSJbKuMYFCNe2-PzIx-wN',
        ]);
        Outlaw::factory()->create ([

            'name' => 'Veronica Flores',
            'alias' => 'VeFlo',
            'crime' => 'Workflow',
            'hint' => 'fried Eggs',
            'reward' => '3050',
            'description' => 'Latina loose in Malaga, she usually ventures near to flow charts to throw her pursuers off the scent. She travels through Spain in a northwesterly direction accompanied by her partner, with her wagon although she has no registration and bumps into everything in her path.',
            'deadline' => '2023-02-10 16:30:00',
            'gang' => '2',
            'img' => 'https://drive.google.com/uc?export=view&id=14mEnJxgAmGiWBtbIWjN-elZDHB_zBTZJ',
        ]);
        Outlaw::factory(1)->create();

        User::factory()->create(['name' => 'admin', 'email' =>'admin@admin.com', 'isAdmin' => true]);

        User::factory()->create(['name' => 'user1', 'email' =>'user1@user1.com', 'isAdmin' => false]);

        User::factory()
            ->has(Outlaw::factory()->count(5))     
            ->create();
    
        Outlaw::factory()
            ->has(User::factory()->count(5))     
            ->create();
    }

}
