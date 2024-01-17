<?php

namespace Tests\Feature;

use App\Models\Testamento;
use App\Models\Livro;
use App\Models\User;
use App\Models\Versiculo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class VersiculoRoutesTest extends TestCase
{
    use RefreshDatabase;

    protected string $token;
    protected object $user;
    protected array $testamentos;
    protected array $livros;

    public function setUp(): void
    {
        parent::setUp();
        // criando um usuario e pegando o token
        $user = User::factory()->create();
        $token = $user->createToken('TestToken')->plainTextToken;
        $this->token = $token;
        $this->user = $user;

        // criando testamentos e livros
        $testamentoInput = [
            ['nome' => 'Antigo Testamento'],
            ['nome' => 'Novo Testamento']
        ];
        foreach ($testamentoInput as $testamentoData) {
            $testamentoObj = Testamento::factory()->create($testamentoData);
            $this->testamentos[] = $testamentoObj->toArray();
        }

        $livros = [
            ['nome' => 'Gênesis',
             'posicao' => 1,
             'abreviacao'=> 'Gn',
             'testamento_id' => 1
            ],
            ['nome' => 'Apocalipse',
             'posicao' => 46,
             'abreviacao'=> 'Ap',
             'testamento_id' => 2
            ],
        ];

        foreach ($livros as $livroData) {
            $livroObj = Livro::factory()->create($livroData);
            $this->livros[] = $livroObj->toArray();
        }
    }

    public function test_get_versiculo_endpoint()
    {
        $response = $this->withHeader('Authorization', 'Bearer ' . $this->token)->get('/api/versiculo');
        $response->assertStatus(200);
        $qntdVersiculos = Versiculo::count();
        $response->assertJson( function (AssertableJson $json) use ($qntdVersiculos){
            for($i=0; $i< $qntdVersiculos; $i++){
                $json->hasAll([
                    $i . ".id",
                    $i . ".capitulo",
                    $i . ".versiculo",
                    $i . ".texto",
                    $i . ".livro_id",
                ]);
                $json->whereAllType([
                    $i . ".id" => "integer",
                    $i . ".capitulo" => "integer",
                    $i . ".versiculo" => "integer",
                    $i . ".texto" => "string",
                    $i . ".livro_id" => "integer",
                    ]);
                }
        });

    }

    public function test_get_versiculo_by_id_endpoint()
    {
        $versiculo = Versiculo::factory()->create(
            ['capitulo' => 1,
             'versiculo' => 1,
             'texto' => 'No princípio, Deus criou os céus e a terra.',
             'livro_id' => $this->livros[0]['id']]
        );
        $response = $this->withHeader('Authorization', 'Bearer ' . $this->token)->get('/api/versiculo/' . $versiculo->id);
        $response->assertStatus(200);
        $response->assertJsonCount(7);
        $response->assertJson( function (AssertableJson $json){
            $json->hasAll([
                "id",
                "capitulo",
                "versiculo",
                "texto",
                "livro_id",
                "created_at",
                "updated_at",
            ]);
        });
        $response->assertJson([
            'id' => $versiculo->id,
            'capitulo' => $versiculo->capitulo,
            'versiculo' => $versiculo->versiculo,
            'texto' => $versiculo->texto,
            'livro_id' => $versiculo->livro_id,
        ]);
    }

    public function test_post_versiculo_endpoint()
    {
        $versiculoData = [
            'capitulo' => 1,
            'versiculo' => 1,
            'texto' => 'No princípio, Deus criou os céus e a terra.',
            'livro_id' => $this->livros[0]['id']
        ];
        $response = $this->withHeader('Authorization', 'Bearer ' . $this->token)->post('/api/versiculo', $versiculoData);
        $response->assertStatus(201);
        $response->assertJsonCount(7);
        $response->assertJson( function (AssertableJson $json) use ($versiculoData){
            $json->hasAll([
                "id",
                "capitulo",
                "versiculo",
                "texto",
                "livro_id",
                "created_at",
                "updated_at",
            ]);
            $json->whereAllType([
                "id" => "integer",
                "capitulo" => "integer",
                "versiculo" => "integer",
                "texto" => "string",
                "livro_id" => "integer",
                "created_at" => "string",
                "updated_at" => "string",
            ]);
            $json->where('capitulo', $versiculoData['capitulo']);
            $json->where('versiculo', $versiculoData['versiculo']);
            $json->where('texto', $versiculoData['texto']);
            $json->where('livro_id', $versiculoData['livro_id']);
        });
    }

    public function test_put_patch_versiculo_endpoint()
    {
        $versiculo = Versiculo::factory()->create(
            ['capitulo' => 1,
             'versiculo' => 1,
             'texto' => 'No princípio, Deus criou os céus e a terra.',
             'livro_id' => $this->livros[0]['id']]
        );
        $versiculoData = [
            'capitulo' => 1,
            'versiculo' => 1,
            'texto' => 'No princípio, Deus criou os céus e a terra. E a terra era sem forma e vazia; e havia trevas sobre a face do abismo, mas o Espírito de Deus pairava sobre a face das águas.',
            'livro_id' => $this->livros[0]['id']
        ];
        $response = $this->withHeader('Authorization', 'Bearer ' . $this->token)->put('/api/versiculo/' . $versiculo->id, $versiculoData);
        $response->assertStatus(200);
        $response->assertJsonCount(7);
        $response->assertJson( function (AssertableJson $json) use ($versiculoData){
            $json->hasAll([
                "id",
                "capitulo",
                "versiculo",
                "texto",
                "livro_id",
                "created_at",
                "updated_at",
            ]);
            $json->whereAllType([
                "id" => "integer",
                "capitulo" => "integer",
                "versiculo" => "integer",
                "texto" => "string",
                "livro_id" => "integer",
                "created_at" => "string",
                "updated_at" => "string",
            ]);
            $json->where('capitulo', $versiculoData['capitulo']);
            $json->where('versiculo', $versiculoData['versiculo']);
            $json->where('texto', $versiculoData['texto']);
            $json->where('livro_id', $versiculoData['livro_id']);
        });
    }

    public function test_delete_versiculo_endpoint(){
        $versiculo = Versiculo::factory()->create(
            ['capitulo' => 1,
             'versiculo' => 1,
             'texto' => 'No princípio, Deus criou os céus e a terra.',
             'livro_id' => $this->livros[0]['id']]
        );
        $response = $this->withHeader('Authorization', 'Bearer ' . $this->token)->delete('/api/versiculo/' . $versiculo->id);
        $response->assertStatus(200);
        $response->assertJsonCount(1);
        $response->assertJson(fn (AssertableJson $json) => $json->where('message', 'versiculo deletado'));
    }
}
