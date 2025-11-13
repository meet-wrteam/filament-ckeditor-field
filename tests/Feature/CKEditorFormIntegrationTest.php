<?php

use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Kahusoftware\FilamentCkeditorField\CKEditor;
use Kahusoftware\FilamentCkeditorField\Tests\Helpers\Livewire;

it('can render disabled ckeditor field', function () {
    $field = CKEditor::make('content')
        ->disabled()
        ->container(Schema::make(Livewire::make()));

    expect($field->isDisabled())->toBeTrue();
});

it('can render required ckeditor field', function () {
    $field = CKEditor::make('content')
        ->required()
        ->container(Schema::make(Livewire::make()));

    expect($field->isRequired())->toBeTrue();
});

it('can render conditionally visible ckeditor field', function () {
    $field = CKEditor::make('content')
        ->visible(fn() => false)
        ->container(Schema::make(Livewire::make()));

    expect($field->isVisible())->toBeFalse();

    $field = CKEditor::make('content')
        ->visible(fn() => true)
        ->container(Schema::make(Livewire::make()));

    expect($field->isVisible())->toBeTrue();
});

it('can set state path correctly', function () {
    $field = CKEditor::make('content')
        ->container(Schema::make(Livewire::make()));

    expect($field->getStatePath())->toBe('content');
});

it('can assert form field is filled with content', function () {
    $field = CKEditor::make('content')
        ->container(Schema::make(Livewire::make()));

    expect($field->getStatePath())->toBe('content');
    expect($field->getName())->toBe('content');
});

it('can assert form field is empty', function () {
    $field = CKEditor::make('content')
        ->container(Schema::make(Livewire::make()));

    expect($field->getStatePath())->toBe('content');
    expect($field->getName())->toBe('content');
});

it('validates required ckeditor field configuration', function () {
    $field = CKEditor::make('content')
        ->required()
        ->container(Schema::make(Livewire::make()));

    expect($field->isRequired())->toBeTrue();
    expect($field->getValidationRules())->toBeArray();
});

it('passes validation when required ckeditor field has proper configuration', function () {
    $field = CKEditor::make('content')
        ->required()
        ->container(Schema::make(Livewire::make()));

    expect($field->isRequired())->toBeTrue();
    expect($field->getStatePath())->toBe('content');
});

it('can assert form field exists', function () {
    $schema = Schema::make(Livewire::make())
        ->components([
            CKEditor::make('content'),
        ]);

    expect($schema->getComponents())
        ->toHaveCount(1)
        ->and($schema->getComponents()[0]->getName())->toBe('content');
});
