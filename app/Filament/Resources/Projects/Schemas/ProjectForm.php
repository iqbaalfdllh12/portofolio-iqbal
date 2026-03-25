<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TagsInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Project')
                    ->required()
                    ->placeholder('Contoh: Aplikasi Kasir')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, $set) => 
                        $operation === 'create' ? $set('slug', Str::slug($state)) : null
                    ),
                
                TextInput::make('slug')
                    ->label('Slug (URL)')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->helperText('URL otomatis yang akan muncul di browser'),
                
                Textarea::make('description')
                    ->label('Deskripsi')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),

                // --- TECH STACK ---
                TagsInput::make('tech_stack')
                    ->label('Tech Stack')
                    ->placeholder('Ketik tech (misal: Laravel) lalu tekan Enter')
                    ->required()
                    ->columnSpanFull()
                    ->suggestions([
                        'Laravel', 'Tailwind CSS', 'PHP', 'Livewire', 'MySQL', 'Alpine.js', 'Bootstrap'
                    ]),

                // --- LINKS (Dibuat sejajar tanpa Grid wrapper agar tidak error) ---
                TextInput::make('github_link')
                    ->label('Link GitHub')
                    ->url()
                    ->placeholder('https://github.com/username/repo')
                    ->columnSpan(1), // Mengambil 1 dari 2 kolom default
                
                TextInput::make('live_link')
                    ->label('Link Live Demo')
                    ->url()
                    ->placeholder('https://project-kamu.com')
                    ->columnSpan(1), // Mengambil 1 dari 2 kolom default
                
                FileUpload::make('image')
                    ->label('Screenshot Project')
                    ->image()
                    ->disk('public')
                    ->directory('projects')
                    ->visibility('public')
                    ->imageEditor()
                    ->columnSpanFull()
                    ->required(),
            ]);
    }
}