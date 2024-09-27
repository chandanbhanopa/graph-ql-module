<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Chandan\MyGraphQL\Model\Resolver;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\GraphQl\Query\Resolver\TypeResolverInterface;

/**
 * @inheritdoc
 */
class EmployeeTypeResolver implements TypeResolverInterface
{
    /**
     * @inheritdoc
     */
    public function resolveType(array $data): string
    {
        
    }
}
