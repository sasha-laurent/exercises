<?php

declare(strict_types=1);

namespace Test;

use App\Anagram;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \App\Anagram
 * @covers ::__construct()
 */
class AnagramTest extends TestCase
{
    private Anagram $comparator;

    protected function setUp(): void
    {
        $this->comparator = new Anagram();
    }

    /**
     * @test
     *
     * @covers ::compare
     */
    public function shouldBeAnagrams()
    {
        // Given
        $word1 = 'kata';
        $word2 = 'taka';

        // When
        $result = $this->comparator->compare($word1, $word2);

        // Then
        $this->assertTrue($result);
    }

    /**
     * @test
     *
     * @covers ::compare
     */
    public function shouldNotBeAnagrams()
    {
        // Given
        $word1 = 'kata';
        $word2 = 'toto';

        // When
        $result = $this->comparator->compare($word1, $word2);

        // Then
        $this->assertFalse($result);
    }
}
