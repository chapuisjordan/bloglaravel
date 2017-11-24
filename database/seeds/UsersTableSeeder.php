<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Disable foreign key');//Permet de mettre un message dans l'invite de commande.
        Schema::disableForeignKeyConstraints();
        $this->command->info('Truncate user table');//Permet de mettre un message dans l'invite de commande.
        DB::table('users')->truncate();
        $this->command->info('Enabled foreign key');//Permet de mettre un message dans l'invite de commande.
        Schema::enableForeigneKeyConstraints();
      //Pour créer un admin.
      DB::table('users')->insert([
        'firstname' => 'admin',
        'lastname' => 'admin',
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('0000'),
        'status' => 1,
      ]);
        $this->command->info('User admin create with password 0000');//Permet de mettre un message dans l'invite de commande.
        //Créer 50 fakers.
        factory(App\User::class,50)->create();
        $this->command->info('Faker user created');//Permet de mettre un message dans l'invite de commande.
    }
}
