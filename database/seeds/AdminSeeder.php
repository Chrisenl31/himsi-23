<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *ini sebagai seeder admin seeder untuk akun admin
     *inibolehdicobasih -> username&password
     * @return void
     */
    public function run()
    {
        $code = "inibolehdicobasih";
        $admin = new User();
        $admin->name = $code;
        $admin->email = $code;
        $admin->password = Hash::make($code);
        $admin->role = $code;
        $admin->save();
    }
}
