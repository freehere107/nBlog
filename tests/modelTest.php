<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ArticleTest extends TestCase
{
    // 使用事务,这样每次测试失败后数据都会回滚
    use DatabaseTransactions;


    function it_fetches_trending_articles()
    {

    }
}
