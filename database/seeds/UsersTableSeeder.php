<?php

use App\User;
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
        // ketua
        $ketua = factory(User::class)->create([

            'name'     => 'Tata Usaha',
            'email'    => 'tatausaha@smpassalam.com',
            'email_verified_at' => now(),
            'password' => bcrypt('smpassalam'),
        ]);

        $ketua->assignRole('TU');

        $this->command->info('>_ Here is your tata usaha details to login:');
        $this->command->warn($ketua->email);
        $this->command->warn('Password is "smpassalam"');

        // bendahara
        $bendahara = factory(User::class)->create([

            'name'     => 'siswa',
            'email'    => 'siswa@smpassalam.com',
            'email_verified_at' => now(),
            'password' => bcrypt('smpassalam'),
        ]);

        $bendahara->assignRole('siswa');

        $this->command->info('>_ Here is your siswa details to login:');
        $this->command->warn($bendahara->email);
        $this->command->warn('Password is "smpassalam"');

        // sekretaris
        $sekretaris = factory(User::class)->create([

            'name'     => 'wali murid',
            'email'    => 'walimuridasir@smpassalam.com',
            'email_verified_at' => now(),
            'password' => bcrypt('smpassalam'),
        ]);

        $sekretaris->assignRole('wali murid');

        $this->command->info('>_ Here is your wali murid details to login:');
        $this->command->warn($sekretaris->email);
        $this->command->warn('Password is "smpassalam"');

        // bersihkan cache
        $this->command->call('cache:clear');
    }
}
