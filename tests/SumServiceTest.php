<?php

namespace Oscmarb\tests;

use Oscmarb\Infection\SumService;
use PHPUnit\Framework\TestCase;

final class SumServiceTest extends TestCase
{
    private SumService $sumService;

    protected function setUp(): void
    {
        $this->sumService = new SumService();

        parent::setUp();
    }

    public function testShouldReturnValidSum(): void
    {
        self::assertEquals(
            2,
            $this->sumService->__invoke([-1, 1])
        );
    }

    public function testShouldReturnValidSumWhenExistsAReset(): void
    {
        self::assertEquals(
            1,
            $this->sumService->__invoke([-1, 0, 1])
        );
    }
}