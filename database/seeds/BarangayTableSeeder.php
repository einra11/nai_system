<?php

use Illuminate\Database\Seeder;
use App\Barangay;


class BarangayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $barangay1 = new Barangay();
        $barangay1->b_name = 'Apopong';
        $barangay1->save();

        $barangay2 = new Barangay();
        $barangay2->b_name = 'Baluan';
        $barangay2->save();

        $barangay3 = new Barangay();
        $barangay3->b_name = 'Batomelong';
        $barangay3->save();

        $barangay4 = new Barangay();
        $barangay4->b_name = 'Buayan';
        $barangay4->save();

        $barangay5 = new Barangay();
        $barangay5->b_name = 'Bula';
        $barangay5->save();

        $barangay6 = new Barangay();
        $barangay6->b_name = 'Calumpang';
        $barangay6->save();

        $barangay7 = new Barangay();
        $barangay7->b_name = 'City Heights';
        $barangay7->save();

        $barangay8 = new Barangay();
        $barangay8->b_name = 'Conel';
        $barangay8->save();

        $barangay9 = new Barangay();
        $barangay9->b_name = 'Dadiangas East';
        $barangay9->save();

        $barangay0 = new Barangay();
        $barangay0->b_name = 'Dadiangas North';
        $barangay0->save();

        $barangay11 = new Barangay();
        $barangay11->b_name = 'Dadiangas South';
        $barangay11->save();

        $barangay12 = new Barangay();
        $barangay12->b_name = 'Dadiangas West';
        $barangay12->save();

        $barangay13 = new Barangay();
        $barangay13->b_name = 'Fatima';
        $barangay13->save();

        $barangay14 = new Barangay();
        $barangay14->b_name = 'Katangawan';
        $barangay14->save();

        $barangay15 = new Barangay();
        $barangay15->b_name = 'Labangal';
        $barangay15->save();

        $barangay16 = new Barangay();
        $barangay16->b_name = 'Lagao';
        $barangay16->save();

        $barangay17 = new Barangay();
        $barangay17->b_name = 'Ligaya';
        $barangay17->save();

        $barangay18 = new Barangay();
        $barangay18->b_name = 'Mabuhay';
        $barangay18->save();
    }
}
