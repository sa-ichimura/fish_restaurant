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
        $Comparison = factory(Comparison::class)->create();
        $response = $this->put('/api/food_component/'.$Comparison->food_id.'/'.$Comparison->user_id);
        $response->assertStatus(200);
    }
}
