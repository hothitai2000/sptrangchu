<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class accountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $limit=100;

        // Thêm dữ liệu ngẫu nhiên vào bảng "renter"
        for ($i = 1; $i <= 100; $i++) {
          DB::table('account')->insert([
              'id' => $i, 
              'email' => $faker->email,
              'password' => $faker->password,
              'verify' => $faker->verify,
              'role' => bcrypt($faker->role),
          ]);
      }
              
    }
}
