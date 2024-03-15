<?php

namespace App\Filament\Resources\MaintextResource\Pages;

use App\Filament\Resources\MaintextResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMaintext extends EditRecord
{
    protected static string $resource = MaintextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
