<?php

declare(strict_types=1);

namespace App\Tests;

use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

class BasicTestCaseTest extends TestCase
{
    #[TestDox('This is a test for sure that will pass')]
    public function testSomething(): void
    {
        $this->assertTrue(true);
    }

    /*#[TestDox('This is a test for sure that will be skipped')]
    public function testSkippedTest(): void
    {
        $this->markTestSkipped('This test has not been implemented yet.');
    }*/

    /*#[TestDox('This is a test for sure that will fail')]
    public function testFailure(): void
    {
        $this->assertTrue(false);
    }*/

    /*#[TestDox('This is a test for sure that will fail with a diff')]
    public function testFailureWithDiff(): void
    {
        $this->assertEquals('foo', 'bar');
    }*/
}
