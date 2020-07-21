<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Contact;

class ContactSeeder extends Seeder
{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			// use factory to seed the db
			factory(Contact::class, 10)->create();

			/**
			 * manual set
			 *
			for ($i = 0; $i < 20; $i++)
			{
				$fn = Str::random(6);
				$ln = Str::random(8);
				$email = Str::substr($fn, 0, 3) . "_" . Str::substr($ln, 0, 4) . "@iastate.edu";

				DB::table('contacts')->insert([
					'first_name' => $fn,
					'last_name' => $ln,
					'email' => $email,
					'addr' => Str::random(15),
					'city' => Str::random(6),
					'state' => 'IA',
					'zipcode' => '50000',
				]);
			}
			*/
		}
}
