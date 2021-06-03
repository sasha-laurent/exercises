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
     * @covers ::compareByJunior
     */
    public function should_be_anagrams()
    {
        // Given
        $word1 = 'kata';
        $word2 = 'taka';

        // When
        $result = $this->comparator->compareByJunior($word1, $word2);

        // Then
        $this->assertTrue($result);
    }

    /**
     * @test
     *
     * @covers ::compareByJunior
     */
    public function should_not_be_anagrams()
    {
        // Given
        $word1 = 'kata';
        $word2 = 'toto';

        // When
        $result = $this->comparator->compareByJunior($word1, $word2);

        // Then
        $this->assertFalse($result);
    }

    /**
     * @test
     *
     * @covers ::compareByJunior
     */
    public function should_not_be_anagrams_different_length()
    {
        // Given
        $word1 = 'kata';
        $word2 = 'katat';

        // When
        $result1 = $this->comparator->compareByJunior($word1, $word2);
        $result2 = $this->comparator->compareByJunior($word2, $word1);

        // Then
        $this->assertFalse($result1);
        $this->assertFalse($result2);
    }

    /**
     * @test
     *
     * @covers ::compareByJunior
     */
    public function should_not_be_anagrams_precise()
    {
        // Given
        $word1 = 'kata';
        $word2 = 'katt';

        // When
        $result1 = $this->comparator->compareByJunior($word1, $word2);
        $result2 = $this->comparator->compareByJunior($word2, $word1);

        // Then
        $this->assertFalse($result1);
        $this->assertFalse($result2);
    }
}
