<?php

use LaravelEnso\Migrator\Database\Migration;

class CreateStructureForFamiliesParent extends Migration
{
    protected array $menu = [
        'name' => 'Families', 'icon' => 'book', 'route' => null, 'order_index' => 796, 'has_children' => true,
    ];
}
