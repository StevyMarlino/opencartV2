<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'role_id' => 2,
                'name' => 'Nyasia Dach',
                'email' => 'xpagac@example.org',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-11-27 23:46:16',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'e7SqDbldRMiasTnZIAtfwBDOnSZIXcc8uAr8vT6JYIzwwpn2lhjNzP2jLj1B',
                'settings' => '{"locale":"en"}',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-11-27 23:46:16',
                'updated_at' => '2021-11-29 12:54:07',
            ),
            1 =>
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'stevy',
                'email' => 'admin@application.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NmxWdk4inNDh22PtuABjWeKRv8LjhqiTqU29S0ZgaaCzZI1I12rh6',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-11-28 20:27:41',
                'updated_at' => '2021-11-28 20:27:42',
            ),
            2 =>
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'Lars Hicks',
                'email' => 'poje@mailinator.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-11-29 13:10:37',
                'password' => '$2y$10$j.JSLvmkzrk8Vu5E5HvT4eZhGd99GGoobrnL3UBANIOcRftY2cNYG',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'CvN4IHNkmidufClqjQZURxHgTfgFe9VzyjTX5GfWPdjHV3eOak555CIUh0t8',
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-11-29 12:57:55',
                'updated_at' => '2021-11-29 13:12:13',
            ),
            3 =>
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'Nathan Vang',
                'email' => 'zogomolyz@mailinator.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-11-29 13:13:19',
                'password' => '$2y$10$.fDHqPrTpEFPCNiFLpLJ3eUDTngvjc9ui.iIImmyRZ3HsuWvoUtpi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-11-29 13:12:59',
                'updated_at' => '2021-11-29 13:13:19',
            ),
            4 =>
                array (
                    'id' => 5,
                    'role_id' => 3,
                    'name' => 'John wick',
                    'email' => 'johnwick@mailinator.com',
                    'avatar' => 'users/default.png',
                    'email_verified_at' => '2021-11-29 13:13:19',
                    'password' => '$2y$10$.fDHqPrTpEFPCNiFLpLJ3eUDTngvjc9ui.iIImmyRZ3HsuWvoUtpi',
                    'two_factor_secret' => NULL,
                    'two_factor_recovery_codes' => NULL,
                    'remember_token' => NULL,
                    'settings' => NULL,
                    'current_team_id' => NULL,
                    'profile_photo_path' => NULL,
                    'created_at' => '2021-11-29 13:12:59',
                    'updated_at' => '2021-11-29 13:13:19',
                ),
        ));


    }
}
