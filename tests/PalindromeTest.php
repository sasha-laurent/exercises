<?php

declare(strict_types=1);

namespace Test;

use App\Palindrome;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \App\Palindrome
 * @covers ::__construct()
 */
class PalindromeTest extends TestCase
{
    private Palindrome $checker;

    protected function setUp(): void
    {
        $this->checker = new Palindrome();
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
