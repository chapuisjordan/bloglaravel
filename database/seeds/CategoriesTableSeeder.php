<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
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
        DB::table('categories')->truncate();
        $this->command->info('Enabled foreign key');//Permet de mettre un message dans l'invite de commande.
        Schema::enableForeignKeyConstraints();

        factory(App\Category::class,10)->create();
    }
}


