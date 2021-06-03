<?php

namespace Test\Amundi\Exercises;

use Amundi\Exercises\Anagram;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Amundi\Exercises\Anagram
 * @covers ::__construct()
 */
class AnagramTest extends TestCase
{
    /** @var Anagram */
    private $comparator;

    protected function setUp(): void
    {
        $this->comparator = new Anagram();
    }

    /**
     * @test
     *
     * @covers ::compare
     */
    public function should_be_anagrams()
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
    public function should_not_be_anagrams()
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
