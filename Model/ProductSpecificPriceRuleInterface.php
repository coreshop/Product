<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2015-2017 Dominik Pfaffenbauer (https://www.pfaffenbauer.at)
 * @license    https://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
*/

namespace CoreShop\Component\Product\Model;

use CoreShop\Component\Rule\Model\RuleInterface;

interface ProductSpecificPriceRuleInterface extends RuleInterface
{
    /**
     * @return bool
     */
    public function getInherit();

    /**
     * @param bool $inherit
     *
     * @return static
     */
    public function setInherit($inherit);

    /**
     * @return int
     */
    public function getPriority();

    /**
     * @param int $priority
     *
     * @return static
     */
    public function setPriority($priority);

    /**
     * @return int
     */
    public function getProduct();

    /**
     * @param int $id
     */
    public function setProduct($id);
}
