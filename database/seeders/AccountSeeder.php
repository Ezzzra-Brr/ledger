<?php namespace Database\Seeders;
use App\Models\Account;
use Illuminate\Database\Seeder;
class AccountSeeder extends Seeder {
    public function run(): void {
        Account::insert([
            ['name' => 'Касса', 'code' => '1001', 'type' => 'asset', 'is_active' => true],
            ['name' => 'Расчётный счёт', 'code' => '1002', 'type' => 'asset', 'is_active' => true],
            ['name' => 'Выручка', 'code' => '2001', 'type' => 'revenue', 'is_active' => true],
        ]);
    }
}