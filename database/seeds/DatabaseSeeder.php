<?php

use Illuminate\Database\Seeder;
use App\sysuser;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        sysuser::insert([
            'uname' => 'admin',
            'namalengkap' => 'Achmad Agung Putra Mintarya',
            'email' => 'admin@pbo4.com',
            'upass' => sha1('admin')
            ]);
    }
}
