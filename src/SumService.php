<?php

namespace Oscmarb\Infection;

final class SumService
{
    /**
     * Returns the absolute sum of the values after zero.
     *
     * @param int[] $numbers
     */
    public function __invoke(array $numbers): int
    {
        $result = 0;

        foreach ($numbers as $number) {
            if (0 === $number) {
                $result = 0;
                continue;
            }

            if (1 > $number) {
                $result -= $number;
                continue;
            }

            $result += $number;
        }

        return $result;
    }
}