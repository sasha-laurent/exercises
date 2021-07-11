<?php

namespace Test\Amundi\Exercises;

use Amundi\Exercises\PalindromeChecker;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Amundi\Exercises\PalindromeChecker
 * @covers ::__construct()
 */
class PalindromeCheckerTest extends TestCase
{
    /** @var PalindromeChecker */
    private $checker;

    protected function setUp(): void
    {
        $this->checker = new PalindromeChecker();
    }

    /**
     * @test
     *
     * @covers ::check
     */
    public function isPalindrome()
    {
        // Given
        $word = 'kayak';

        // When
        $result = $this->checker->check($word);

        // Then
        $this->assertTrue($result);
    }

    /**
     * @test
     *
     * @covers ::check
     */
    public function isNotPalindrome()
    {
        // Given
        $word = 'bonjour';

        // When
        $result = $this->checker->check($word);

        // Then
        $this->assertFalse($result);
    }
}
