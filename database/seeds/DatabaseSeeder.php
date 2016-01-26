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

        //disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // $this->call(UserTableSeeder::class);
        $this->call('WareTableSeeder');
        // supposed to only apply to a single connection and reset it's self
        // but I like to explicitly undo what I've done for clarity
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}

class WareTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('Ware')->delete();

        DB::table('Ware')->insert(array(

            'name'=>'Fußball',
            'beschreibung'=>'Premiumfußball aus Leder',
            'kategorie'=>'Sport',
            'preis'=>9.99,
            'bild'=>'/pic/ware/fussball.jpg',
        ));

        DB::table('Ware')->insert(array(

            'name'=>'Fußballschuhe',
            'beschreibung'=>'Fußballschuhe für den Profi',
            'kategorie'=>'Sport',
            'preis'=>49.59,
            'bild'=>'/pic/ware/fussballschuhe.jpg',
        ));

        DB::table('Ware')->insert(array(

            'name'=>'Golfball',
            'beschreibung'=>'Golfball mit PLating Füllung',
            'kategorie'=>'Sport',
            'preis'=>3.99,
            'bild'=>'/pic/ware/golfball.jpg',
        ));

        DB::table('Ware')->insert(array(

            'name'=>'Trikot',
            'beschreibung'=>'Trikot der Nationalmannschaft',
            'kategorie'=>'Sport',
            'preis'=>20,
            'bild'=>'/pic/ware/Trikot.jpg',
        ));

        DB::table('Ware')->insert(array(

            'name'=>'CDs',
            'beschreibung'=>'5er Pack Cds',
            'kategorie'=>'Elektronik',
            'preis'=>2.99,
            'bild'=>'/pic/ware/cd.jpg',
        ));

        DB::table('Ware')->insert(array(

            'name'=>'Computermaus',
            'beschreibung'=>'Funkmaus mit Akku',
            'kategorie'=>'Elektronik',
            'preis'=>18.99,
            'bild'=>'/pic/ware/computermaus.jpg',
        ));

        DB::table('Ware')->insert(array(

            'name'=>'Monitor',
            'beschreibung'=>'Flachbildschirm 144Hz 18Zoll',
            'kategorie'=>'Elektronik',
            'preis'=>80,
            'bild'=>'/pic/ware/monitor.jpg',
        ));

        DB::table('Ware')->insert(array(

            'name'=>'Tastatur',
            'beschreibung'=>'Kabeltastatur mit leisen Tasten',
            'kategorie'=>'Elektronik',
            'preis'=>30,
            'bild'=>'/pic/ware/tastatur.jpg',
        ));

        DB::table('Users')->delete();

        DB::table('Users')->insert(array(

            'email'=>'test@test.de',
            'password'=>bcrypt('123456'),
            'vorname'=>'Bernd',
            'nachname'=>'Fischer',
            'guthaben'=>100,
        ));

        DB::table('Gekauft')->delete();

        DB::table('Gekauft')->insert(array(

            'userid'=>'1',
            'wareid'=>'1',

            'menge'=>5,
            'datum'=>Carbon\Carbon::now(),
        ));

        DB::table('Gekauft')->insert(array(

            'userid'=>'1',
            'wareid'=>'2',

            'menge'=>2,
            'datum'=>Carbon\Carbon::now(),
        ));









    }

}