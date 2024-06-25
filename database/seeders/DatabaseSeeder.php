<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Cliente;
use App\Models\Proveedor;
use App\Models\Traje;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(UserSeeder::class);
        Cliente::factory(50)->create();
        $this->call(CategoriaSeeder::class);
        Proveedor::factory(10)->create();
        traje::factory(10)->create();
    }
}
