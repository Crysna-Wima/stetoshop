<?php

use Illuminate\Database\Seeder;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Trig\Cosine;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CostcenterSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ActionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolePermissionsTableSeeder::class);
        $this->call(RoleHasMenusTableSeeder::class);
        $this->call(RoutesTableSeeder::class);
        $this->call(GlobalVarsTableSeeder::class);
    }
}
