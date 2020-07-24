<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use App\User;

class ComparisonController extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_not_login()
    {
        //未ログインの場合loginページに遷移
        $notLoginResponse = $this->get('/comparison')->assertRedirect('/login');
        $notLoginResponse->assertStatus(302);
    }

    /**
     * ログイン済みの場合比較ページの表示を行う
     */
    public function test_login()
    {
        $user = factory(User::class)->create();
        $loginResponse = $this->actingAs($user)
        ->withSession(['foo' => 'bar'])
        ->get('/comparison');
        $loginResponse->assertStatus(200);
    }

    
}
