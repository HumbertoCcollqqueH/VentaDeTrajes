<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([

            'nombre'=>'Traje de marinera',
            'descripcion'=>'Originario de la región costeña del norte del Perú, especialmente popular en Trujillo y Chiclayo.',

        ]);
        Categoria::create([
            'nombre'=>'Traje de huaso',
            'descripcion'=>'Proveniente de la región andina del Perú, típico de las celebraciones en los Andes.',

        ]);
        Categoria::create([
            'nombre'=>'Traje de danzas folclóricas',
            'descripcion'=>'Ejemplos incluyen el traje de la danza de las tijeras, la diablada, la marinera norteña, entre otras. Cada una tiene características únicas que reflejan la cultura y tradición de la región de donde provienen.',

        ]);
        Categoria::create([
            'nombre'=>'Traje Típico de la Sierra',
            'descripcion'=>'Usado en las regiones andinas, este traje varía según la comunidad y la festividad. Incluye polleras (faldas), mantas tejidas, chullos (gorros) y otros accesorios que reflejan la identidad cultural de cada lugar.',

        ]);
        Categoria::create([
            'nombre'=>'Traje de Negrito',
            'descripcion'=>'Característico de la región de la costa norte del Perú, este traje es usado en la festividad del carnaval y está compuesto por túnicas y máscaras coloridas que representan personajes afroperuanos.',

        ]);
        Categoria::create([
            'nombre'=>'Traje de Caporal',
            'descripcion'=>'Parte de la tradición afroboliviana que también se celebra en algunas regiones del sur del Perú. Incluye pantalones ajustados, camisas bordadas y sombreros de ala ancha, con un estilo distintivo y colorido.',

        ]);

    }
}
