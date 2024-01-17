<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    protected function setUp(): void
    {
        $this->user = new \App\Models\User();
        $this->user->setAge(20);
        //$this->user->setEmail("admin@admin");
    }

    /**
     * @dataProvider userProvider
     */
    public function testAge ()
    {
        // ==
        $this->assertEquals(20, $this->user->getAge());
        return 3;
    }

    /**
     * @depends testAge
     */
    public function testAge2 ($age)
    {
        // ==
        $this->assertEquals($age, $this->user->getAge());
    }

    public function userProvider()
    {
        return [
            'one' => [1],
            'two' => [2],
            'tree' =>[20],
        ];
    }

    public function testEmail()
    {
        //$this->expectException(\PHPUnit\Framework\Error::class);
        //include "file123213.php";
        //$this->expectException(InvalidArgumentException::class);
        //$this->expectExceptionCode(200);
        //$this->expectExceptionMessage("Error");
        $this->expectExceptionMessageMatches("/\d/");
        $this->user->getEmail();
    }

    public function testEcho()
    {
        $this->expectOutputString("success");
        echo "success";
    }

    public function testArray ()
    {
        // ===
        $this->assertSame(
            [1,2,3,4,5],
            [1,2,3,44,5],
        );
    }
}