<?php

namespace Test\Amundi\Exercises;

use Amundi\Exercises\Prime;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Amundi\Exercises\Prime
 * @covers ::__construct()
 */
class PrimeTest extends TestCase
{
    /** @var Prime */
    private $primeProvider;

    protected function setUp(): void
    {
        $this->primeProvider = new Prime();
    }

    /**
     * @test
     *
     * @dataProvider provideSumFirstPrimes
     *
     * @covers ::getSumFirstPrimes
     */
    public function testSumFirstPrimes(int $expected, int $input)
    {
        $result = $this->primeProvider->getSumFirstPrimes($input);

        $this->assertSame($expected, $result);
    }

    public function provideSumFirstPrimes(): array
    {
        return [
            [0, 1],
            [17, 7],
            [100, 25],
        ];
    }
}
