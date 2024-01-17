<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Testamento;
use App\Models\Livro;

use Carbon\CarbonInterval as Duration;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Sleep;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class TestamentoRoutesTest extends TestCase
{
    use RefreshDatabase;

    protected $token;
    protected $user;
    protected array $testamentos;
    protected array $livros;

    // setUp é executado antes de cada teste
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

    public function test_get_testamento_endpoint(): void
    {
        // enviando uma requisição para a rota /api/testamento
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->json('GET', '/api/testamento/');
        $response->assertStatus(200); // verificando se o status retornado é 200

        $todosTestamentos = Testamento::all()->toArray();
        $arraySize = count($todosTestamentos);
        // verificando se o tamanho do array retornado é o mesmo do banco de dados sqlite( valor: 2)
        $response->assertJsonCount($arraySize);
        // verificando se o json retornado tem os campos id, nome, created_at e updated_at
        $response->assertJson(function (AssertableJson $json) use ($arraySize) {
            for($i=0; $i < $arraySize; $i++){
                $json->hasAll([
                    $i . '.id',
                    $i . '.nome',
                    $i . '.created_at',
                    $i . '.updated_at'
                ]);

                $json->whereAllType([
                    $i . '.id' => 'integer',
                    $i . '.nome' => 'string',
                    $i . '.created_at' => 'string',
                    $i . '.updated_at' => 'string'
                ]);
            }
        });
    }

    public function test_get_testamento_by_id_endpoint(): void
    {
        // enviando uma requisição para a rota /api/testamento/{id}
        $testamentoId = $this->testamentos[0]['id'];
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->json('GET', "/api/testamento/" . $testamentoId);

        $response->assertStatus(200);
        // verificando se o json retornado tem 5 campos (id, nome, created_at, updated_at e livros)
        $response->assertJsonCount(5);
        // verificando se o json retornado tem os campos id, nome, created_at, updated_at e livros
        $response->assertJson(function (AssertableJson $json){
            $json->hasAll([
                'id',
                'nome',
                'created_at',
                'updated_at',
                'livros'
            ]);

            $json->whereAllType([
                'id' => 'integer',
                'nome' => 'string',
                'created_at' => 'string',
                'updated_at' => 'string',
                'livros' => 'array'
            ]);
        });

        // pegando os livros do testamento
        $livrosTestamento = Livro::where('testamento_id', $testamentoId)->get()->toArray();
        // verificando se o json retornado tem os livros do testamento
        $response->assertJsonFragment([
            'livros' => $livrosTestamento
        ]);
    }

    public function test_post_testamento_endpoint(): void
    {
        // enviando uma requisição para a rota /api/testamento
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->json('POST', '/api/testamento/', [
            'nome' => 'Testamento de teste'
        ]);

        $response->assertStatus(201);

        // verificando se o json retornado tem 5 campos (id, nome, created_at, updated_at e livros)
        $response->assertJson(function (AssertableJson $json){
            $json->hasAll([
                'id',
                'nome',
                'created_at',
                'updated_at'
            ]);

            $json->whereAllType([
                'id' => 'integer',
                'nome' => 'string',
                'created_at' => 'string',
                'updated_at' => 'string'
            ]);
        });

        $responseData = $response->json();
        // verificando se o nome do testamento foi criado
        $this->assertEquals($responseData['nome'], Testamento::find($responseData['id'])->nome);
    }

    public function test_put_patch_testamento_endpoint(): void
    {
        // criando um testamento inexistente
        $testamento = Testamento::factory()->create(['nome' => 'Testamento inexistente'])->toArray();
        // body da requisicao
        $body = [
            'nome' => 'Testamento de teste atualizado'
        ];
        // enviando uma requisição para a rota /api/testamento/{id} e atualizando o nome do testamento
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->json('PUT', "/api/testamento/" . $testamento['id'], $body);

        $response->assertStatus(200);

        // verificando se o json retornado tem 5 campos (id, nome, created_at, updated_at)
        $response->assertJson(function (AssertableJson $json){
            $json->hasAll([
                'id',
                'nome',
                'created_at',
                'updated_at'
            ]);

            $json->whereAllType([
                'id' => 'integer',
                'nome' => 'string',
                'created_at' => 'string',
                'updated_at' => 'string'
            ]);
        });

        $responseData = $response->json();
        // verificando se o nome do testamento foi atualizado
        $this->assertEquals($body['nome'], Testamento::find($responseData['id'])->nome);
    }

    public function test_delete_testamento_endpoint(): void
    {
        $testamento = Testamento::factory()->create(['nome' => 'Testamento inexistente'])->toArray();
        // enviando uma requisição para a rota /api/testamento/{id} e deletando o testamento
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->json('DELETE', "/api/testamento/" . $testamento['id']);

        $response->assertStatus(200);
        // verificando se o json retornado tem a mensagem de sucesso
        $response->assertJsonFragment([
            'message' => 'testamento removido com sucesso'
        ]);

        // verificando se o testamento foi removido
        $this->assertNull(Testamento::find($testamento['id']));
    }

}
