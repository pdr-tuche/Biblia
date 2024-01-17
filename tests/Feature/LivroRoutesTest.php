<?php

namespace Tests\Feature;

use App\Models\Testamento;
use App\Models\Livro;
use App\Models\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class LivroRoutesTest extends TestCase
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

    public function test_get_livro_endpoint(): void
    {
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->json('GET', '/api/livro/');
        $response->assertStatus(200);

        // $response->assertJsonStructure([
        //     '*' => [
        //         'id',
        //         'nome',
        //         'posicao',
        //         'abreviacao',
        //         'testamento_id',
        //         'created_at',
        //         'updated_at',
        //     ]
        // ]);

        $todosLivros = Livro::all()->toArray();
        $qntLivros = count($todosLivros);
        $response->assertJson(function (AssertableJson $json) use ($qntLivros) {
            for($i=0; $i < $qntLivros; $i++){
                $json->hasAll([
                    $i . '.id',
                    $i . '.nome',
                    $i . '.posicao',
                    $i . '.abreviacao',
                    $i . '.testamento_id',
                    $i . '.created_at',
                    $i . '.updated_at',
                ]);

                $json->whereAllType([
                    $i . '.id' => 'integer',
                    $i . '.nome' => 'string',
                    $i . '.posicao' => 'integer',
                    $i . '.abreviacao' => 'string',
                    $i . '.testamento_id' => 'integer',
                    $i . '.created_at' => 'string',
                    $i . '.updated_at' => 'string',
                ]);
            }
        });

    }

    public function test_get_livro_by_id_endpoint(): void
    {
        $livroId = $this->livros[0]['id'];
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->json('GET', "/api/livro/" . $livroId);

        $response->assertStatus(200);
        $response->assertJsonCount(8);
        $response->assertJson(function (AssertableJson $json){
            $json->hasAll([
                'id',
                'nome',
                'posicao',
                'abreviacao',
                'testamento_id',
                'created_at',
                'updated_at',
                'testamento'
            ]);

            $json->whereAllType([
                'id' => 'integer',
                'nome' => 'string',
                'posicao' => 'integer',
                'abreviacao' => 'string',
                'testamento_id' => 'integer',
                'created_at' => 'string',
                'updated_at' => 'string',
                'testamento' => 'array'
            ]);
        });

        $testamento = Testamento::find($this->livros[0]['testamento_id'])->toArray();
        $response->assertJsonFragment([
            'id' => $livroId,
            'nome' => $this->livros[0]['nome'],
            'posicao' => $this->livros[0]['posicao'],
            'abreviacao' => $this->livros[0]['abreviacao'],
            'testamento_id' => $this->livros[0]['testamento_id'],
            'created_at' => $this->livros[0]['created_at'],
            'updated_at' => $this->livros[0]['updated_at'],
            'testamento' => $testamento
        ]);
    }

    public function test_post_livro_endpoint()
    {
        $livro = [
            'nome' => 'nome do meu livro',
            'posicao' => 47,
            'abreviacao'=> 'NML',
            'testamento_id' => 2,
       ];

       $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->json('POST', '/api/livro/', $livro);

        $response->assertStatus(201);
        $response->assertJsonCount(7);
        $response->assertJson(function (AssertableJson $json){
            $json->hasAll([
                'id',
                'nome',
                'posicao',
                'abreviacao',
                'testamento_id',
                'created_at',
                'updated_at'
            ]);

            $json->whereAllType([
                'id' => 'integer',
                'nome' => 'string',
                'posicao' => 'integer',
                'abreviacao' => 'string',
                'testamento_id' => 'integer',
                'created_at' => 'string',
                'updated_at' => 'string',
            ]);
        });

        $response->assertJsonFragment([
            'nome' => $livro['nome'],
            'posicao' => $livro['posicao'],
            'abreviacao' => $livro['abreviacao'],
            'testamento_id' => $livro['testamento_id']
        ]);

        $responseData = $response->json();
        $this->assertEquals($livro['nome'], Livro::find($responseData['id'])->nome);
    }

    public function test_put_patch_livro_endpoint()
    {
        $livro = [
            'nome' => 'nome do meu livro',
            'posicao' => 47,
            'abreviacao'=> 'NML',
            'testamento_id' => 2,
       ];
       $livroObj = Livro::factory()->create($livro);
       $body = [
        'nome' => 'Mudei nome do meu livro',
        'posicao' => 47,
        'abreviacao'=> 'NML',
        'testamento_id' => 2
        ];

       $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->json('PUT', "/api/livro/" . $livroObj['id'], $body);

        $response->assertStatus(200);
        $response->assertJsonCount(7);
        $response->assertJson(function (AssertableJson $json){
            $json->hasAll([
                'id',
                'nome',
                'posicao',
                'abreviacao',
                'testamento_id',
                'created_at',
                'updated_at',
            ]);

            $json->whereAllType([
                'id' => 'integer',
                'nome' => 'string',
                'posicao' => 'integer',
                'abreviacao' => 'string',
                'testamento_id' => 'integer',
                'created_at' => 'string',
                'updated_at' => 'string',
            ]);
        });

        $response->assertJsonFragment([
            'nome' => $body['nome'],
            'posicao' => $body['posicao'],
            'abreviacao' => $body['abreviacao'],
            'testamento_id' => $body['testamento_id'],
        ]);
        $responseData = $response->json();
        $this->assertEquals($body['nome'], Livro::find($responseData['id'])->nome);
    }

    public function test_delete_livro_endpoint()
    {
        $livro = [
            'nome' => 'nome do meu livro',
            'posicao' => 47,
            'abreviacao'=> 'NML',
            'testamento_id' => 2,
       ];
       $livroObj = Livro::factory()->create($livro);

       $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->json('DELETE', "/api/livro/" . $livroObj['id']);

        $response->assertStatus(204);
        $response->assertNoContent();
        $this->assertNull(Livro::find($livroObj['id']));
    }

}
