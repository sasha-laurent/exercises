<?php

declare(strict_types=1);

namespace Test;

use App\Prime;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \App\Prime
 * @covers ::__construct()
 */
class PrimeTest extends TestCase
{
    private Prime $primeProvider;

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

    public static function provideSumFirstPrimes(): array
    {
        return [
            [0, 1],
            [17, 7],
            [100, 25],
        ];
    }
}
