<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $x = User::where('email', 'admin@ngumpullagi.com')->first();
        if ($x === null) {
            $new = new User(['id' => Str::uuid()]);
            $new->name =  'Admin';
            $new->email = 'admin@ngumpullagi.com';
            $new->password = Hash::make('123');
            $new->save();
        }
    }
}
