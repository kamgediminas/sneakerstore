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
        // $this->call(UserSeeder::class);
        $this->call('sneaker_table_seeder');
        $this->call('user_table_seeder');

        $this->command->info('seeded succ');

    }
}

class sneaker_table_delete extends Seeder{
    public function run(){
    }
}

class user_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('test1234')
        ]);
    }
}


class sneaker_table_seeder extends Seeder {
    
    public function run()
    {
        DB::table('sneakers')->delete();
        //DB::sneaker_store_database
        //sneaker_store_database::create(['make' => 'Reebok']);
        DB::table('sneakers')->insert(
            [
                'make' => 'Nike',
                'model' => 'Air Force 1',
                'price' => 99,
                'photo' => 'air-force-1-white.jpg',
                'gender' => 'm'
                ]
            );
            
        DB::table('sneakers')->insert(
            [
                'make' => 'Adidas',
                'model' => 'Ultraboost',
                'price' => 159,
                'photo' => 'ultraboost-pink.jpg',
                'gender' => 'm'
            ]
        );
        
        DB::table('sneakers')->insert(
            [
                'make' => 'Vans',
                'model' => 'Old Skool',
                'price' => 39,
                'photo' => 'old-skool-black.jpg',
                'gender' => 'm'
            ]
        );

        DB::table('sneakers')->insert(
            [
                'make' => 'Nike',
                'model' => 'Air Max 97',
                'price' => 159,
                'photo' => 'air-max-97-black.jpg',
                'gender' => 'm'
            ]
        );

        DB::table('sneakers')->insert(
            [
                'make' => 'Adidas',
                'model' => 'NMD_R1',
                'price' => 87,
                'photo' => 'nmd_r1-black.jpg',
                'gender' => 'm'
            ]
        );

        DB::table('sneakers')->insert(
            [
                'make' => 'Nike',
                'model' => 'Air Force 1',
                'price' => 99,
                'photo' => 'air-force-1-black.jpg',
                'gender' => 'm'
            ]
        );
        
        DB::table('sneakers')->insert(
            [
                'make' => 'Fila',
                'model' => 'Ray Low',
                'price' => 99,
                'photo' => 'ray-low-white.jpg',
                'gender' => 'f'
            ]
        );

    }
}
