<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Usr = new User;
        $Usr-> username='kio'; 
        $Usr-> fullname ='kio Kusanagmi';
        $Usr-> email ='kio.kusanagmi@gmail.com';
        $Usr-> password =bcrypt('admin');
        $Usr-> birthdate ='1980-02-01';
        $Usr-> gender ='male';
        $Usr-> role ='Admin';
        $Usr->save();

        User::create(array(
            'username'=> 'Iory',
            'fullname'=> 'Iory Yagami',
            'email'=> 'iory.yagami@gmail.com',
            'password'=> bcrypt('editor'),
            'birthdate'=> '2018-01-11',
            'gender'=> 'male'
        ));
        //factory
        factory(User::class, 10)->create();
    }

}
