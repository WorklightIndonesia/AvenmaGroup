<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Illuminate\Database\Eloquent\Model;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function handleRecordUpdate(
        Model $record,
        array $data
    ): Model {
        $record->name = $data['name'];
        $record->email = $data['email'];
        $record->email_verified_at = $data['email_verified_at'] ?? null;

        // Don't allow the current user to demote themselves.
        if ($record->getKey() !== auth()->id()) {
            $record->role = $data['role'];
        }

        // Only update the password when a new one is entered.
        if (filled($data['password'] ?? null)) {
            $record->password = $data['password'];
        }

        $record->save();

        return $record;
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

