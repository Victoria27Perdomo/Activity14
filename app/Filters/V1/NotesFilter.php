<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class NotesFilter extends ApiFilter {
    protected $safeParms = [
        'id' => ['eq', 'gt', 'lt', 'lte', 'gte', 'ne'],
        'authorID' => ['eq', 'gt', 'lt', 'lte', 'gte', 'ne'],
        'categoryID' => ['eq', 'gt', 'lt', 'lte', 'gte', 'ne'],
        'title' => ['eq'],
        'content' => ['eq'],
        'dateTime' => ['eq']
    ];

    protected $columnMap = [
        'id' => 'id',
        'authorID' => 'author_id',
        'categoryID' => 'category_id'
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