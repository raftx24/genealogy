<?php

use LaravelEnso\Migrator\Database\Migration;

class CreateStructureForNotes extends Migration
{
    protected array $permissions = [
        ['name' => 'notes.index', 'description' => 'Show index for notes', 'is_default' => false],

        ['name' => 'notes.create', 'description' => 'Create note', 'is_default' => false],
        ['name' => 'notes.store', 'description' => 'Store a new note', 'is_default' => false],
        ['name' => 'notes.show', 'description' => 'Show note', 'is_default' => false],
        ['name' => 'notes.edit', 'description' => 'Edit note', 'is_default' => false],
        ['name' => 'notes.update', 'description' => 'Update note', 'is_default' => false],
        ['name' => 'notes.destroy', 'description' => 'Delete note', 'is_default' => false],
        ['name' => 'notes.initTable', 'description' => 'Init table for notes', 'is_default' => false],

        ['name' => 'notes.tableData', 'description' => 'Get table data for notes', 'is_default' => false],

        ['name' => 'notes.exportExcel', 'description' => 'Export excel for notes', 'is_default' => false],

        ['name' => 'notes.options', 'description' => 'Get note options for select', 'is_default' => false],
    ];

    protected array $menu = [
        'name' => 'Notes', 'icon' => 'users', 'route' => 'notes.index', 'order_index' => 999, 'has_children' => false,
    ];

    protected ?string $parentMenu = 'References';
}
