<?php

namespace App\Filament\Resources\Certificates;

use App\Filament\Resources\Certificates\Pages;
use App\Models\Certificate;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
// Sesuaikan import ini dengan letak file CertificateForm kamu
use App\Filament\Resources\Certificates\Schemas\CertificateForm; 
use BackedEnum;

class CertificateResource extends Resource
{
    protected static ?string $model = Certificate::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        // Panggil fungsi 'configure' sesuai pola ProjectForm yang kamu kasih tadi
        return CertificateForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Preview'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('issuer')
                    ->label('Penerbit'),
                Tables\Columns\TextColumn::make('issued_at')
                    ->label('Tanggal'),
            ])
            ->filters([])
            ->actions([
                // Kosongkan dulu sesuai permintaanmu sebelumnya agar tidak error
            ])
            ->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCertificates::route('/'),
            'create' => Pages\CreateCertificate::route('/create'),
            'edit' => Pages\EditCertificate::route('/{record}/edit'),
        ];
    }
}