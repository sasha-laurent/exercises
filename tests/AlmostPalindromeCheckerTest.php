<?php

namespace Test\Amundi\Exercises;

use Amundi\Exercises\AlmostPalindromeChecker;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Amundi\Exercises\AlmostPalindromeChecker
 * @covers ::__construct()
 */
class AlmostPalindromeCheckerTest extends TestCase
{
    /** @var AlmostPalindromeChecker */
    private $checker;

    protected function setUp(): void
    {
        $this->checker = new AlmostPalindromeChecker();
    }

    /**
     * @test
     *
     * @covers ::check
     */
    public function isAlmostPalindrome()
    {
        // Given
        $word = 'katyak';

        // When
        $result = $this->checker->check($word);

        // Then
        $this->assertTrue($result->isAlmostPalindrome);
        $this->assertEquals('t', $result->letterToRemove);
        $this->assertEquals('kayak', $result->obtainedPalindrome);
    }

    /**
     * @test
     *
     * @covers ::check
     */
    public function isNotAlmostPalindrome()
    {
        // Given
        $word = 'bonjour';

        // When
        $result = $this->checker->check($word);

        // Then
        $this->assertFalse($result->isAlmostPalindrome);
        $this->assertNull($result->letterToRemove);
        $this->assertNull($result->obtainedPalindrome);
    }
}
