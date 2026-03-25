<?php

namespace App\Filament\Resources\Certificates\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CertificateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Sertifikat')
                    ->required()
                    ->placeholder('Contoh: Sertifikat Laravel Dasar'),
                
                TextInput::make('issuer')
                    ->label('Penerbit')
                    ->required()
                    ->placeholder('Contoh: Dicoding / Udemy'),

                TextInput::make('issued_at')
                    ->label('Waktu Terbit')
                    ->required()
                    ->placeholder('Contoh: Januari 2024'),

                FileUpload::make('image')
                    ->label('Foto Sertifikat')
                    ->image()
                    ->disk('public')
                    ->directory('certificates')
                    ->visibility('public')
                    ->imageEditor()
                    ->required(),
            ]);
    }
}