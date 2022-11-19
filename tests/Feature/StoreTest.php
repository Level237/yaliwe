<?php

namespace Tests\Feature;

use App\Models\Store;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_an_store_can_be_stored(){

        $response=$this->post('stores',[
            'name'=>'new Store',
            'address_id'=>1,
            'image_id'=>1,
            'status'=>'pending'
        ]);

        //$response->assertRedirect(route('admin.stores.index'));
        $this->assertCount(1,Store::all());
    }
}
