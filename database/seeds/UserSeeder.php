<?php

use App\Address;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            DB::beginTransaction();

            $users = factory(User::class, 50)->make()->toArray();

            foreach ($users as $user) {

                $user['password'] = Hash::make('deixaoliek');

                $user = User::create($user);

                $address = factory(Address::class)->make()->toArray();

                $user->address()->create($address);
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
