<?php

class UserAddDataSeeder extends Seeder {

    public function run()
    {
       $data = array(
       		'username'	=> 'mamat',
       		'email'		=> 'mamat@mamat.com',
       		'password'	=> Hash::make('password'),
       		'first_name'	=> 'Mamat',
       		'last_name'		=> 'Metal'
       	);

       $user = new User;
       $user->fill($data);
       $user->save();

       if($user)  $this->command->info('User data seeded!');

    }

}