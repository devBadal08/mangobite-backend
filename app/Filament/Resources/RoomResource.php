<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomResource\Pages;
use App\Filament\Resources\RoomResource\RelationManagers;
use App\Models\Rooms;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\Set;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\RichEditor;

class RoomResource extends Resource
{
    protected static ?string $model = Rooms::class;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Room Details')
                    ->schema([

                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (Set $set, ?string $state) {
                                $set('slug', Str::slug($state));
                            }),

                        FileUpload::make('image')
                            ->label('Main Image')
                            ->image()
                            ->disk('public')
                            ->directory('rooms/main')
                            ->getUploadedFileNameForStorageUsing(function (\Illuminate\Http\UploadedFile $file, Forms\Get $get) {
                                $name = $get('title') ? \Illuminate\Support\Str::slug($get('title')) : 'room-' . time();
                                return $name . '.' . $file->getClientOriginalExtension();
                            })
                            ->required(),

                        RichEditor::make('description')
                            ->label('Description')
                            ->columnSpanFull(),

                        TextInput::make('price')
                            ->label('Price Per Night')
                            ->numeric()
                            ->prefix('₹')
                            ->required(),

                        FileUpload::make('sub_images')
                            ->label('Room Images')
                            ->multiple()
                            ->image()
                            ->reorderable()
                            ->appendFiles()
                            ->disk('public')
                            ->directory('rooms/sub')
                            ->getUploadedFileNameForStorageUsing(function (\Illuminate\Http\UploadedFile $file, Forms\Get $get) {
                                $title = $get('title') ? \Illuminate\Support\Str::slug($get('title')) : 'room';
                                $originalName = \Illuminate\Support\Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME));
                                return $title . '-' . $originalName . '.' . $file->getClientOriginalExtension();
                            })
                            ->columnSpanFull(),

                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Main Image')
                    ->disk('public'),
                TextColumn::make('title')
                    ->label('Room Title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('price')
                    ->label('Price Per Night')
                    ->prefix('₹')
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
            'index' => Pages\ListRooms::route('/'),
            'create' => Pages\CreateRoom::route('/create'),
            'edit' => Pages\EditRoom::route('/{record}/edit'),
        ];
    }
}
