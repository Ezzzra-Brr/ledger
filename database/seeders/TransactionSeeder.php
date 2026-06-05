<?php namespace Database\Seeders;
use App\Models\Transaction;
use App\Models\JournalEntry;
use Illuminate\Database\Seeder;
class TransactionSeeder extends Seeder {
    public function run(): void {
        $t1 = Transaction::create(['date' => now(), 'description' => 'Поступление в кассу']);
        JournalEntry::insert([
            ['transaction_id' => $t1->id, 'account_id' => 1, 'amount' => 10000, 'type' => 'debit'],
            ['transaction_id' => $t1->id, 'account_id' => 2, 'amount' => 10000, 'type' => 'credit'],
        ]);

        $t2 = Transaction::create(['date' => now()->subDay(), 'description' => 'Оплата поставщику']);
        JournalEntry::insert([
            ['transaction_id' => $t2->id, 'account_id' => 3, 'amount' => 5000, 'type' => 'debit'],
            ['transaction_id' => $t2->id, 'account_id' => 1, 'amount' => 5000, 'type' => 'credit'],
        ]);
    }
}