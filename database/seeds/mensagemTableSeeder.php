<?php

use Illuminate\Database\Seeder;
use App\Mensagem;

class mensagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensagem::create([
            'titulo' => 'Prova de Português',
            'texto' => 'Prova sobre crase',
            'autor' => 'Laura H',
            'user_id' => 1,
            'atividade_id' => 1


        ]);

        Mensagem::create([
            'titulo' => 'Olá inicial',
            'texto' => 'Olá mundo...',
            'autor' => 'Laura H',
            'user_id' => 1,
            'atividade_id' => 1
        ]);

        Mensagem::create([
            'titulo' => 'Prova de Matemática',
            'texto' => 'Prova sobre números imaginários',
            'autor' => 'Laura H',
            'user_id' => 3,
            'atividade_id' => 2

        ]);

        Mensagem::create([
            'titulo' => 'Prova de História',
            'texto' => 'Prova sobre Era Vargas',
            'autor' => 'Laura H',
            'user_id' => 1,
            'atividade_id' => 2

        ]);
    }
}
