<?php

namespace Database\Seeders;

use App\Models\Listing;
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
         \App\Models\User::factory(5)->create();

         Listing::factory(6)->create();

        //  Listing::create([
        //     'title'=>'Senior Laravel Developer',
        //     'tags'=>'Laravel, JavaScript',
        //     'company'=>'Belva',
        //     'location'=>'Nairobi',
        //     'email'=>'people@belvadigital.com',
        //     'website'=>'belvadigital.com',
        //     'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        //     Nullam suscipit vel odio ac tempus. Fusce consequat magna sit amet nisl consectetur cursus. 
        //     Fusce euismod a risus consequat varius.'
        //  ]);

        //  Listing::create([
        //     'title'=>'Junior React Developer',
        //     'tags'=>'React, Python',
        //     'company'=>'Belva',
        //     'location'=>'Nairobi',
        //     'email'=>'people@belvadigital.com',
        //     'website'=>'belvadigital.com',
        //     'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        //     Nullam suscipit vel odio ac tempus. Fusce consequat magna sit amet nisl consectetur cursus. 
        //     Fusce euismod a risus consequat varius.'
        //  ]);

    }
}
