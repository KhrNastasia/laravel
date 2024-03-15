<?php

namespace App\Filament\Resources\MaintextResource\Pages;

use App\Filament\Resources\MaintextResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMaintexts extends ListRecords
{
    protected static string $resource = MaintextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
