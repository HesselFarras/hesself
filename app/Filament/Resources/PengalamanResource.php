<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengalamanResource\Pages;
use App\Filament\Resources\PengalamanResource\RelationManagers;
use App\Models\Pengalaman;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengalamanResource extends Resource
{
    protected static ?string $model = Pengalaman::class;

    protected static ?string $pluralLabel = 'Pengalaman Kerja';

    protected static ?string $navigationIcon = 'heroicon-o-bars-3-bottom-left';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make(name: "company_name")
                ->required()
                ->label("Nama Perusahaan"),
                TextInput::make(name: "position")
                ->required(),
                DatePicker::make(name: "start_date")
                ->required()
                ->label("Tanggal Mulai"),
                DatePicker::make(name: "end_date")
                ->label("Tanggal Selesai"),
                TextInput::make(name: "description")
                ->required()
                ->label("Deskripsi"),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make(name: "company_name"),
                Tables\Columns\TextColumn::make(name: "position"),
                Tables\Columns\TextColumn::make(name: "start_date")
                ->date(),
                Tables\Columns\TextColumn::make(name: "end_date")
                ->date(),
                Tables\Columns\TextColumn::make(name: "description")

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPengalamen::route('/'),
            'create' => Pages\CreatePengalaman::route('/create'),
            'edit' => Pages\EditPengalaman::route('/{record}/edit'),
        ];
    }
}
