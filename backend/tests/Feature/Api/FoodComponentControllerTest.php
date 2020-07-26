<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Model\Comparison;
use App\User;

class FoodComponentControllerTest extends TestCase
{
    /**
     * 比較データを商品詳細ページから追加するAPI
     *
     * @return void
     */
    public function test_comparison_data_set()
    {
        $user = factory(User::class)->create();
        $loginResponse = $this->actingAs($user)
        ->withSession(['foo' => 'bar']);
        $response = $this->put('/api/food_component/1'.'/'.$user->id);
        $response->assertStatus(200);
    }

    /**
     * 比較データを削除するAPI
     *
     * @return void
     */
    public function test_comparison_data_delete()
    {   
        $Comparison = factory(Comparison::class)->create();
        $url = "/api/food_component/delete/$Comparison->user_id/$Comparison->food_id";
        $response = $this->put($url);
        $response->assertStatus(200);
    }
}
