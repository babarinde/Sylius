<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Review\Calculator;

use Sylius\Component\Review\Model\Reviewable;

/**
 * @author Mateusz Zalewski <mateusz.zalewski@lakion.com>
 */
interface AverageRatingCalculatorInterface
{
    /**
     * @param Reviewable $reviewable
     *
     * @return float
     */
    public function calculate(Reviewable $reviewable);
}
