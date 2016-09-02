<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->json('GET', '/api/home', ['type' => 'all'])
            ->seeJsonStructure([
                'current_page', 'from', 'last_page', 'next_page_url', 'per_page', 'to', 'total', 'prev_page_url',

                'data' => [
                    '*' => ['id', 'title', 'content', 'created_at', 'updated_at', 'status', 'user_id']
                ]
            ]);
    }
}
