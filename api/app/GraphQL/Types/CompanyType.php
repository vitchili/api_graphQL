<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use App\Models\Company;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class CompanyType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Company',
        'model' => Company::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::id(),
                'description' => 'Auto incremented company ID',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of a company'
            ],
            'contact_email' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The email of a company'
            ],
            'street_address' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The street address of a company'
            ],
            'city' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The city of a company'
            ],
            'country' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The country of a company'
            ],
            'domain' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The domain of a company'
            ],

        ];
    }
}
