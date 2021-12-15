<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'ine' => "4578245687F",
                'lastname' => "Martin",
                'name' => "Lucas",
                'birthdate' => "02/06/1995",
                'degree' => "Informatique",
                'mail' => "lucas.martin@ecole.com",
                'phone' => "0634353634",
                'nationality' => "France",
            ],
            [
                'ine' => "9645215874J",
                'lastname' => "Dupont",
                'name' => "Marie",
                'birthdate' => "14/02/1999",
                'degree' => "Communication",
                'mail' => "marie.dupont@ecole.com",
                'phone' => "0602145769",
                'nationality' => "France",
            ],
            [
                'ine' => "316629874AF",
                'lastname' => "Parker",
                'name' => "Peter",
                'birthdate' => "05/10/1996",
                'degree' => "Science",
                'mail' => "peter.parker@ecole.com",
                'phone' => "0658535142",
                'nationality' => "Etats-Unis",
            ],
            [
                'ine' => "2156347895A",
                'lastname' => "Frost",
                'name' => "Jack",
                'birthdate' => "23/12/2000",
                'degree' => "Métérologie",
                'mail' => "jack.frost@ecole.com",
                'phone' => "0631255105",
                'nationality' => "Royaume-Uni",
            ],
            [
                'ine' => "564521456SG",
                'lastname' => "Kent",
                'name' => "Clark",
                'birthdate' => "19/06/1989",
                'degree' => "Journalisme",
                'mail' => "clark.kent@ecole.com",
                'phone' => "0677198264",
                'nationality' => "Etats-Unis",
            ],
            [
                'ine' => "965412537ML",
                'lastname' => "Park",
                'name' => "Jimin",
                'birthdate' => "Afghanistan",
                'degree' => "Arts de la Scène",
                'mail' => "park.jimin@ecole.com",
                'phone' => "0697442356",
                'nationality' => "Corée du Sud",
            ],
            [
                'ine' => "6195327366K",
                'lastname' => "Stark",
                'name' => "Anthony",
                'birthdate' => "18/11/1980",
                'degree' => "Ingénierie",
                'mail' => "anthony.stark@ecole.com",
                'phone' => "0645558963",
                'nationality' => "Etats-Unis",
            ],
            [
                'ine' => "584721655HB",
                'lastname' => "Prince",
                'name' => "Diana",
                'birthdate' => "03/09/1983",
                'degree' => "Marché de l'Art",
                'mail' => "diana.prince@ecole.com",
                'phone' => "0610568479",
                'nationality' => "Etats-Unis",
            ],
        ]);
    }
}
