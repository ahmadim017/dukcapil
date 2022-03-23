<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->name = "Ahmad Muhrani";
        $administrator->email = "ahmadmuhrani89@gmail.com";
        $administrator->roles = "ADMIN";
        $administrator->status = "ACTIVE";
        $administrator->password = \Hash::make("sundulgan");
        $administrator->save();
        $this->command->info("user berhasil di simpan");
    }
}
