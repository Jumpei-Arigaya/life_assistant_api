<?php

namespace Tests\Feature;

use App\Http\Controllers\ShopController;
use App\Models\Shop;
use App\Models\ShopType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

use function PHPUnit\Framework\assertTrue;

class ShopTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_shop(): void
    {
        $rs = false;
        $this->assertFalse($rs);

        ShopType::factory()->create([
            'name' => 'test'
        ]);

        Shop::factory()->createMany([[
            'name' => '1番目',
            'shop_branch' => Str::random(10),
            'shop_type_id' => 1,
        ], [
            'name' => '2番目',
            'shop_branch' => Str::random(10),
            'shop_type_id' => 1,
        ], [
            'name' => '3番目',
            'shop_branch' => Str::random(10),
            'shop_type_id' => 1,
        ]]);

        $shop = Shop::orderBy('name', 'asc')->get();
        $this->assertDatabaseHas('shops', [
            'name' => '2番目',
        ]);

        $this->assertEquals($shop[0]['name'], '1番目');
        $this->assertEquals($shop[1]['name'], '2番目');
        $this->assertEquals($shop[2]['name'], '3番目');
    }

    public function test_status(): void
    {
        $shop_controller = new ShopController;
        assertTrue($shop_controller->getStatus(1));
    }
}
