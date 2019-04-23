<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            'name'  =>  'ALERGOLOGIA',
            'description' => null
        ]);
        DB::table('activities')->insert([
            'name'  =>  'ANGIOLOGIA',
            'description' => null
        ]);
        DB::table('activities')->insert([
            'name'  =>  'BUCO MAXILO',
            'description' => null
        ]);
        DB::table('activities')->insert([
            'name'  =>  'CARDIOLOGIA CLÍNICA',
            'description' => null
        ]);
        DB::table('activities')->insert([
            'name'  =>  'CARDIOLOGIA INFANTIL',
            'description' => null
        ]);
        DB::table('activities')->insert([
            'name'  =>  'CIRURGIA CABEÇA E PESCOÇO',
            'description' => null
        ]);
        DB::table('activities')->insert([
            'name'  =>  'CIRURGIA CARDÍACA',
            'description' => null
        ]);
        DB::table('activities')->insert([
            'name'  =>  'CIRURGIA DE CABEÇA/PESCOÇO',
            'description' => null
        ]);
        DB::table('activities')->insert([
            'name'  =>  'CIRURGIA DE TÓRAX',
            'description' => null
        ]);
        DB::table('activities')->insert([
            'name'  =>  'CIRURGIA GERAL',
            'description' => null
        ]);
        DB::table('activities')->insert([
            'name'  =>  'CIRURGIA PEDIÁTRICA',
            'description' => null
        ]);
        DB::table('activities')->insert([
            'name'  =>  'CIRURGIA PLÁSTICA',
            'description' => null
        ]);
        DB::table('activities')->insert([
            'name'  =>  'CIRURGIA TORÁCICA',
            'description' => null
        ]);
        DB::table('activities')->insert([
            'name'  =>  ' CIRURGIA VASCULAR',
            'description' => null
        ]);
        DB::table('activities')->insert([
            'name'  =>  'CLÍNICA MÉDICA',
            'description' => null
        ]);
    }
}
