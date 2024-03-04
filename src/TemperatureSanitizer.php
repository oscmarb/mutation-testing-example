<?php

namespace Oscmarb\Infection;

final class TemperatureSanitizer
{
    private const MIN_TEMPERATURE = 0;
    private const MAX_TEMPERATURE = 30;

    /**
     * Return sanitized temperatures given min and max temperatures.
     *
     * @param int[] $temperatures
     * @return int[]
     */
    public function __invoke(array $temperatures): array
    {
        return array_values(
            array_filter(
                $temperatures,
                static fn(int $temperature) => $temperature >= self::MIN_TEMPERATURE && $temperature <= self::MAX_TEMPERATURE
            )
        );
    }
}