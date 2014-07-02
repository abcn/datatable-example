<?php

class UserAddDataSeeder extends Seeder {

    public function run()
    {
      $data = [array(
       		'username'	=> 'mamat',
       		'email'		=> 'mamat@mamat.com',
       		'password'	=> Hash::make('password'),
       		'first_name'	=> 'Mamat',
       		'last_name'		=> 'Metal'
       	),
        array(
          'username'  => 'metal',
          'email'   => 'metal@mamat.com',
          'password'  => Hash::make('password'),
          'first_name'  => 'metal',
          'last_name'   => 'mamat'
        ),
      ];

      $roles = [array('id'=> 1, 'name'=> 'Administrator', 'slug'=> 'administrator'),array('id'=> 2, 'name'=> 'User', 'slug'=> 'user')];

      foreach ($roles as $key => $x) {
        $role = new Role;
        $role->fill($x);
        $role->save();
      }   

      foreach ($data as $key => $value) {
        $user = new User;
        $user->fill($value);
        $user->save();

        $user->roles()->attach(rand (1,2) );
      }


      if($user)  $this->command->info('User data seeded!');
      if($role)  $this->command->info('Role data add');
    }

}