<?php
namespace Chandan\MyGraphQL\Model\Resolver;

use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\Resolver\ContextInterface;

class Employees implements ResolverInterface
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
        $employees = [
            [
                'name' => 'Chandan Bhanopa',
                'email' => 'chandanbhanopa@gmail.com',
                'mobile' => '8817932366',
                'salary' => '25000',
                'date_of_joining' => '25/10/2021',
                'hobbies' => ['Cricket','Reading'],
                'is_contract_basis'=> true,
                'weight'=>70.4
            ],
            [
                'name' => 'Sushma Bhanopa',
                'email' => 'sushma@gmail.com',
                'mobile' => '1234567890',
                'salary' => '27000',
                'date_of_joining' => '26/11/2021',
                'hobbies' => ['Watching Movies','Typing'],
                'is_contract_basis'=> false,
                'weight'=>46.60

            ],
            [
                'name' => 'Jitendra Bhanopa',
                'email' => 'jitendrabhanopa@yahoo.com',
                'mobile' => '1234567890',
                'salary' => '27000',
                'date_of_joining' => '27/11/2021',
                'hobbies' => ['Writing articles','Programming'],
                'is_contract_basis'=> true,
                'weight'=>78.60

            ]
        ];

        return $employees;
    }
}
