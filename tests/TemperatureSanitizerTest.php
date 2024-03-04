<?php

namespace Oscmarb\tests;

use Oscmarb\Infection\TemperatureSanitizer;
use PHPUnit\Framework\TestCase;

final class TemperatureSanitizerTest extends TestCase
{
    private TemperatureSanitizer $temperatureFormatter;

    protected function setUp(): void
    {
        $this->temperatureFormatter = new TemperatureSanitizer();

        parent::setUp();
    }

    public function test_should_return_valid_temperatures(): void
    {
        self::assertEquals(
            [20],
            $this->temperatureFormatter->__invoke([-1, 20, 45])
        );
    }

    /**
     * This test kill all mutants
     *
     * @return void
     */
    public function test_should_return_valid_temperatures_without_mutants(): void
    {
        self::markTestSkipped(); // Remove this line to kill all mutants

        self::assertEquals(
            [0, 30],
            $this->temperatureFormatter->__invoke([-1, 0, 30])
        );
    }
}