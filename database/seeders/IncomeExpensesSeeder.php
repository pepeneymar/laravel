<?php

namespace Database\Seeders;
use App\Models\IncomeExpenses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncomeExpensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        IncomeExpenses::factory(20)->create();
    }
}
