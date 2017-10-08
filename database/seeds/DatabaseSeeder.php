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
        \Illuminate\Database\Eloquent\Model::unguard();
        $this->call('DosenSeeder');
        $this->call('KegiatanSeeder');
        $this->call('BeasiswaSeeder');
        $this->call('FasilitasSeeder');
        $this->call('PrestasiSeeder');
        $this->call('BeasiswaSeeder');
        $this->call('BerandaSeeder');
        $this->call('LokerSeeder');
    }
}
