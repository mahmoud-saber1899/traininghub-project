<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organizations = [
            ['name' => 'Organization A'],
            ['name' => 'Organization B'],
            ['name' => 'Organization C'],
            ['name' => 'Organization D'],
            ['name' => 'Organization E'],
        ];
        foreach ($organizations as $organization) {
            Organization::create($organization);
        }
    }
}
