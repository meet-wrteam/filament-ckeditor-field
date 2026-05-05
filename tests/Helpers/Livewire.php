<?php

namespace Wrteam\FilamentCkeditorField\Tests\Helpers;

use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Livewire\Component;

class Livewire
{
    public static function make(?Component $component = null): Component&HasSchemas
    {
        return $component ?? new class extends Component implements HasSchemas
        {
            use InteractsWithSchemas;

            public function render()
            {
                return '';
            }
        };
    }
}

