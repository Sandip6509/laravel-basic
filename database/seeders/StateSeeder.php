<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ['name' => 'Andaman & Nicobar Islands', 'created_at' => now()->toDateString()],
            ['name' => 'Andhra Pradesh', 'created_at' => now()->toDateString()],
            ['name' => 'Arunachal Pradesh', 'created_at' => now()->toDateString()],
            ['name' => 'Assam', 'created_at' => now()->toDateString()],
            ['name' => 'Bihar', 'created_at' => now()->toDateString()],
            ['name' => 'Chandigarh', 'created_at' => now()->toDateString()],
            ['name' => 'Chhattisgarh', 'created_at' => now()->toDateString()],
            ['name' => 'Dadra & Nagar Haveli', 'created_at' => now()->toDateString()],
            ['name' => 'Daman & Diu', 'created_at' => now()->toDateString()],
            ['name' => 'Delhi', 'created_at' => now()->toDateString()],
            ['name' => 'Goa', 'created_at' => now()->toDateString()],
            ['name' => 'Gujarat', 'created_at' => now()->toDateString()],
            ['name' => 'Haryana', 'created_at' => now()->toDateString()],
            ['name' => 'Himachal Pradesh', 'created_at' => now()->toDateString()],
            ['name' => 'Jammu & Kashmir', 'created_at' => now()->toDateString()],
            ['name' => 'Jharkhand', 'created_at' => now()->toDateString()],
            ['name' => 'Karnataka', 'created_at' => now()->toDateString()],
            ['name' => 'Kerala', 'created_at' => now()->toDateString()],
            ['name' => 'Lakshadweep', 'created_at' => now()->toDateString()],
            ['name' => 'Madhya Pradesh', 'created_at' => now()->toDateString()],
            ['name' => 'Maharashtra', 'created_at' => now()->toDateString()],
            ['name' => 'Manipur', 'created_at' => now()->toDateString()],
            ['name' => 'Meghalaya', 'created_at' => now()->toDateString()],
            ['name' => 'Mizoram', 'created_at' => now()->toDateString()],
            ['name' => 'Nagaland', 'created_at' => now()->toDateString()],
            ['name' => 'Odisha', 'created_at' => now()->toDateString()],
            ['name' => 'Puducherry', 'created_at' => now()->toDateString()],
            ['name' => 'Punjab', 'created_at' => now()->toDateString()],
            ['name' => 'Rajasthan', 'created_at' => now()->toDateString()],
            ['name' => 'Sikkim', 'created_at' => now()->toDateString()],
            ['name' => 'Tamil Nadu', 'created_at' => now()->toDateString()],
            ['name' => 'Telangana', 'created_at' => now()->toDateString()],
            ['name' => 'Tripura', 'created_at' => now()->toDateString()],
            ['name' => 'Uttar Pradesh', 'created_at' => now()->toDateString()],
            ['name' => 'Uttarakhand', 'created_at' => now()->toDateString()],
            ['name' => 'West Bengal', 'created_at' => now()->toDateString()],
        ];

        State::truncate();
        State::insert($states);
    }
}
