<?php

namespace Tests\Feature;

use App\Models\Usuario;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UnitarioTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUsuarioContem()
    {
        $user = new Usuario(['Maykon', 'teste', '123']);
        $this->assertTrue($user->contem('Maykon'));
        $this->assertFalse($user->contem('12345'));
    }
}
