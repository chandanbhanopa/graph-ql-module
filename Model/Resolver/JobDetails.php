<?php
namespace Chandan\MyGraphQL\Model\Resolver;

use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\Resolver\ContextInterface;

class JobDetails implements ResolverInterface
{
    /**
     * Resolve employee list data for GraphQL query
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        // Sample static data for now; you can replace it with data from a database or another source.
        $department = [
            [
                'department' => 'HR',
                'total_employee' => 10

            ],
            [
                'department' => 'Information Technology',
                'total_employee' => 105

            ],
            [
                'department' => 'House Keeping',
                'total_employee' => 10

            ],
            [
                'department' => 'Marketing',
                'total_employee' => 6

            ]
        ];

        return $department;
    }
}
