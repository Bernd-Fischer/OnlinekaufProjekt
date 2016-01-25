// database/seeds/userdataseeder.php

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $this->call('UserTableSeeder');

    }
}

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('einkaufusers')->delete();


        DB::table('einkaufusers')->insert(array(
            'vorname'     => 'Chris',
            'nachname'     => 'Müller',
            'alter'     => '21',
            'gender'    => 'men',
            'email'    => 'test@test.de',
            'password' => Hash::make('test'),
        ));
    }

}