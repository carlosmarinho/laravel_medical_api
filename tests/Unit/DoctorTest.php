<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DoctorTest extends TestCase
{
    /**
     * Testando o cadastro de novo médico.
     *
     * @return void
     */
    public function newDoctor()
    {
        $response = $this->json('POST', '/api/doctors', ['name' => 'Médico1', "crm" => "238749234","telefone" => "053593", "activity_id" => 1]);

        $response
            ->assertStatus(201)
            ->assertJson([
                'created' => true,
            ]);
    }

    /**
     * Testando a listagem de medicos.
     *
     * @return void
     */
    public function fetchDoctors()
    {
        $response = $this->json('GET', '/api/doctors');

        $response->assertStatus(200);
    }
}
