<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        $this->seedUserTable();

        Model::reguard();
    }

    public function seedUserTable()
    {
        $user = new User();
        $user->name="alex";
        $user->password=(env('PASSWORD_ESTIMAT','123456'));
        $user->email="alexbonavila@iesebre.com";
        $user->save();
    }

}
