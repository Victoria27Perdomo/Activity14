<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class CategoryFilter extends ApiFilter {
    protected $safeParms = [
        'id' => ['eq', 'gt', 'lt', 'lte', 'gte', 'ne'],
        'category' => ['eq']
    ];

    protected $columnMap = [
        'id' => 'id',
    ];
    
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '≤',
        'gt' => '>',
        'gte' => '≥',
        'ne' => '≠'
    ];
}