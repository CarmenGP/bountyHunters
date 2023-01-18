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
            'deadline' => '2023-01-20 08:30:00',
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
            'deadline' => '2023-01-21 12:00:00',
            'gang' => '10',
            'img' => 'https://drive.google.com/uc?export=view&id=1zyX3TzTZg3EoYewBpxJmFZrWYHf_80WR',
        ]);
        Outlaw::factory()->create ([

            'name' => 'Anabel Vilar',
            'alias' => 'Calamity Anna',
            'crime' => 'Abisal',
            'hint' => 'Hires women to do her bidding',
            'reward' => '4050',
            'description' => 'Lone woman who roams villages on horseback, recruiting rural women to her gang to teach them her outlaw tactics.',
            'deadline' => '2023-01-23 15:30:00',
            'gang' => '8',
            'img' => 'http://drive.google.com/uc?export=view&id=1fRCqoO82Na8FgGEXj1DMdXCieDfoQq5Z',
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
            'hint' => 'Fried Eggs',
            'reward' => '3050',
            'description' => 'She usually entures near to flow charts to throw her pursuers off the scent. She travels through Spain in a northwesterly direction accompanied by her partner, with her wagon although she has no registration and bumps into everything in her path.',
            'deadline' => '2023-02-10 16:30:00',
            'gang' => '2',
            'img' => 'http://drive.google.com/uc?export=view&id=1Q9_b9JtHjZM2tICAAa0F02OmWdB7RkFM',
        ]);

        Outlaw::factory()->create ([

            'name' => 'Lola Navarro',
            'alias' => 'ZLoL',
            'crime' => 'Illustrator',
            'hint' => 'Vectorizes',
            'reward' => '4090',
            'description' => 'She hides behind comfortable places where she can rest from her vector adventures, she is usually sleeping at the inn. She can be recognized by her sleepy face.',
            'deadline' => '2023-01-05 16:30:00',
            'gang' => '1',
            'img' => 'https://drive.google.com/uc?export=view&id=14mEnJxgAmGiWBtbIWjN-elZDHB_zBTZJ',
        ]);
        Outlaw::factory()->create ([

            'name' => 'Carmen Gallardo',
            'alias' => 'Amapola',
            'crime' => 'Google',
            'hint' => 'Intell seeker',
            'reward' => '5020',
            'description' => 'Short-haired blonde with a friendly smile. She cajoles her informants and convinces them to obtain information that she sells to criminals for exorbitant loot. Last seen on the train bound for Madrid.',
            'deadline' => '2023-03-15 14:30:00',
            'gang' => '5',
            'img' => 'https://drive.google.com/uc?export=view&id=14mEnJxgAmGiWBtbIWjN-elZDHB_zBTZJ',
        ]);
        Outlaw::factory()->create ([

            'name' => 'Florencia Tiscornia',
            'alias' => 'Flora',
            'crime' => 'Indiscreet questions',
            'hint' => 'Question raiser',
            'reward' => '2020',
            'description' => 'Dont let her questions confuse you, she is undisciplined in the face of the indiscreet questions she asks in order to get the information she needs to achieve her goals.',
            'deadline' => '2023-03-14 10:30:00',
            'gang' => '7',
            'img' => 'https://drive.google.com/uc?export=view&id=14mEnJxgAmGiWBtbIWjN-elZDHB_zBTZJ',
        ]);
        Outlaw::factory(1)->create();

        User::factory()->create(['name' => 'admin', 'email' =>'admin@admin.com', 'isAdmin' => true]);

        User::factory()->create(['name' => 'user1', 'email' =>'user1@user1.com', 'isAdmin' => false]);

        User::factory()
            ->has(Outlaw::factory()->count(5))     
            ->create();
    
        Outlaw::factory()
            ->has(User::factory()->count(1))     
            ->create();
    }

}
