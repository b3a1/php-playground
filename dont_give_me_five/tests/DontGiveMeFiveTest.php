<?php

require __DIR__.'/../index.php';
use PHPUnit\Framework\TestCase;

class DontGiveMeFiveTest extends TestCase
{
    public function testDontGiveMeFive()
    {
        $this->assertEquals(8, dont_give_me_five(1,9));
        $this->assertEquals(12, dont_give_me_five(4,17));
    }
}