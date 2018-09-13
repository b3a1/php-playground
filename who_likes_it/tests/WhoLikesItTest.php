<?php
require __DIR__.'/../index.php';
use PHPUnit\Framework\TestCase;

class WhoLikesItTest extends TestCase
{
    public function testLikes()
    {
        $this->assertEquals("no one likes this", likes([]));
        $this->assertEquals("Jacob and Alex like this", likes(["Jacob", "Alex"]));
        $this->assertEquals("Max, John and Mark like this", likes(["Max", "John", "Mark"]));
        $this->assertEquals("Alex, Jacob and 2 others like this", likes(["Alex", "Jacob", "Mark", "Max"]));
    }
}