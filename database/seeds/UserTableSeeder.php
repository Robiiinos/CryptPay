<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert(array(
            array(
                'name'             =>  'admin',
                'email'            =>  'hello@cryptodonate.io',
                'api_token'        =>  '3v555M6H28QF4E7X6570fX5062335t64f0fG7Sn88KV71u25c2949327GDng',
                'webhook_token'    =>  '5Ty98Wy9JlTw7pdV88lbD2jgEcGnpqSrSbywZs3yTcVzWMcHCnA9pVUq2qRJ'
            )
        ));
    }
}
