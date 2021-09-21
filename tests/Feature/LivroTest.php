<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LivroTest extends TestCase
{

    public function testSalvarLivro()
    {
        $user = User::first();
        $this->actingAs($user)
            ->visitRoute('livros.create')
            ->type("Nome do livro", "titulo")
            ->type("Pedro", "autor")
            ->type("Nome do livro", "descricao")
            ->type("Nome do livro", "numero_de_paginas")
            ->press('Cadastrar')
            ->see("Livro cadastrado com sucesso");
    }

    public function testSalvarLivroSemCamposNecessarios()
    {
        $user = User::where('email', 'teste@gmail.com')->first();
        $this->actingAs($user)
            ->visitRoute('livros.create')
            ->type("Nome do livro", "titulo")
            ->type("", "autor")
            ->type("Nome do livro", "descricao")
            ->type("Nome do livro", "numero_de_paginas")
            ->press('Cadastrar')
            ->see("The autor field is required.");
    }

}
