<?php
declare(strict_types=1);

/*
 * CoreShop
 *
 * This source file is available under two different licenses:
 *  - GNU General Public License version 3 (GPLv3)
 *  - CoreShop Commercial License (CCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.org)
 * @license    https://www.coreshop.org/license     GPLv3 and CCL
 *
 */

namespace CoreShop\Component\Product\Model;

use CoreShop\Component\Pimcore\Slug\SluggableInterface;
use CoreShop\Component\Resource\Pimcore\Model\PimcoreModelInterface;

interface CategoryInterface extends PimcoreModelInterface, SluggableInterface
{
    public function getName(?string $language = null): ?string;

    public function setName(?string $name, ?string $language = null);

    public function getDescription(?string $language = null): ?string;

    public function setDescription(?string $description, ?string $language = null);

    public function getParentCategory(): ?self;

    public function setParentCategory(?self $parentCategory);

    /**
     * @return CategoryInterface[]
     */
    public function getChildCategories(): array;

    public function hasChildCategories(): bool;

    /**
     * @return CategoryInterface[]
     */
    public function getHierarchy(): array;
}
