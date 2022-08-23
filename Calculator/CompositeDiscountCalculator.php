<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.org)
 * @license    https://www.coreshop.org/license     GPLv3 and CCL
 */

declare(strict_types=1);

namespace CoreShop\Component\Product\Calculator;

use CoreShop\Component\Product\Model\ProductInterface;
use CoreShop\Component\Registry\PrioritizedServiceRegistryInterface;

class CompositeDiscountCalculator implements ProductDiscountCalculatorInterface
{
    public function __construct(protected PrioritizedServiceRegistryInterface $discountCalculator)
    {
    }

    public function getDiscount(ProductInterface $product, array $context, int $price): int
    {
        $discount = 0;

        /**
         * @var ProductDiscountCalculatorInterface $calculator
         */
        foreach ($this->discountCalculator->all() as $calculator) {
            $discount += $calculator->getDiscount($product, $context, $price);
        }

        return $discount;
    }
}
