<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KurtiResource\Pages;
use App\Models\Kurti;
use Filament\Forms\Components\Section;
use Carbon\Carbon;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\Section as InfoSection;
use Filament\Infolists\Components\TextEntry;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

use Filament\Tables\Actions\Action;

class KurtiResource extends Resource
{
    protected static ?string $model = Kurti::class;

    protected static ?string $navigationIcon = 'icon-kurti';
    protected static ?int $navigationSort = 3;
    public static function getLabel(): ?string
    {
        return __("Kurti");
    }

    public static function getPluralLabel(): ?string
    {
        return __("Kurti");
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Measurement')
                    ->schema([
                        Forms\Components\TextInput::make('full_name')
                            ->label(__('Full Name'))
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone_number')
                            ->label(__('Phone Number'))
                            ->unique()
                            ->validationMessages([
                                'unique' => __("unique"),
                            ])
                            ->required()
                            ->maxLength(20),
                        Forms\Components\TextInput::make('qad')
                            ->label(__('Qad'))
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('shana')
                            ->label(__('Shana'))
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('astin')
                            ->label(__('Astin'))
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('baghal')
                            ->label(__('Baghal'))
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('kamar')
                            ->label(__('Kamar'))
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('soorin')
                            ->label(__('Soorin'))
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('tir_pesht')
                            ->label(__('Tir Pesht'))
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('bala_tana')
                            ->label(__('Bala Tana'))
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('bazo')
                            ->label(__('Bazo'))
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('moch')
                            ->label(__('Moch'))
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('tukma')
                            ->label(__('Tukma'))
                            ->native(false)
                            ->options([
                                1 => __('1 Tukma'),
                                2 => __('2 Tukma'),
                                3 => __('3 Tukma'),
                                3 => __('4 Tukma'),
                            ])->default(1),
                        Forms\Components\Select::make('chak')
                            ->label(__('Chak'))
                            ->native(false)
                            ->options([
                                1 => __('1 Chak'),
                                2 => __('2 Chak'),
                            ])->default(1),
                        Forms\Components\Select::make('yakhan')
                            ->label(__('Yakhan Type'))
                            ->native(false)
                            ->options([
                                1 => __('Englishe'),
                                2 => __('Frenche'),
                            ])->default(1),
                        Forms\Components\Select::make('daman')
                            ->label(__('Daman Type'))
                            ->native(false)
                            ->options([
                                1 => __('Daman Gol'),
                                2 => __('Daman Right'),
                            ])->default(1),
                        ])->columns(4),
                        Section::make(__('Bill'))
                            ->schema([
                                Forms\Components\TextInput::make('jami_quantity')
                                    ->label(__('Jami Quantity'))
                                    ->default(1)
                                    ->required()
                                    ->numeric(),
                                Forms\Components\TextInput::make('waskat_quantity')
                                    ->label(__('Waskat Quantity'))
                                    ->default(0)
                                    ->required()
                                    ->numeric(),
                                Forms\Components\TextInput::make('kurti_quantity')
                                    ->label(__('Kurti Quantity'))
                                    ->default(0)
                                    ->required()
                                    ->numeric(),
                                Forms\Components\DatePicker::make('order_date')
                                    ->label(__('Order Date'))
                                    ->default(Carbon::now())
                                    ->readOnly()
                                    ->required(),
                                Forms\Components\DatePicker::make('finish_date')
                                    ->label(__('Finish Date'))
                                    ->default(Carbon::now()->addDays(5))
                                    ->required(),
                                Forms\Components\TextInput::make('total_price')
                                    ->label(__('Total Price'))
                                    ->required()
                                    ->default(400)
                                    ->numeric(),
                                Forms\Components\TextInput::make('paid')
                                    ->label(__('Paid'))
                                    ->required()
                                    ->default(0)
                                    ->numeric(),
                                Forms\Components\TextInput::make('remain')
                                    ->label(__('Remain'))
                                    ->required()
                                    ->default(400)
                                    ->numeric(),
                    ])->columns(4),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('full_name')
                ->label(__('Full Name'))
                ->numeric()
                ->searchable(),
            Tables\Columns\TextColumn::make('phone_number')
                ->label(__('Phone Number'))
                ->searchable(),
            Tables\Columns\TextColumn::make('waskat_quantity')
                ->label(__('Waskat Quantity'))
                ->numeric()
                ->sortable(),
            Tables\Columns\TextColumn::make('order_date')
                ->label(__('Order Date'))
                ->date()
                ->sortable(),
            Tables\Columns\TextColumn::make('finish_date')
                ->label(__('Finish Date'))
                ->date()
                ->sortable(),
            Tables\Columns\TextColumn::make('total_price')
                ->label(__('Total Price'))
                ->numeric()
                ->sortable(),
            Tables\Columns\TextColumn::make('paid')
                ->label(__('Paid'))
                ->numeric()
                ->sortable(),
            Tables\Columns\TextColumn::make('remain')
                ->label(__('Remain'))
                ->numeric()
                ->sortable(),
        ])->defaultSort('updated_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Action::make('Print Bill')->label(__('Print Bill'))
                    ->icon('heroicon-o-printer')
                    ->color('7bdff2')
                    ->url(fn (Kurti $record): string => url('admin/kurtis/print?kurti=true&id=' . $record->id)),
                Action::make('Print Kurti')->label(__('Print Kurti'))
                    ->icon('heroicon-o-printer')
                    ->color('primary')
                    ->url(fn (Kurti $record): string => url('admin/kurtis/print?bill=true&id=' . $record->id)),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make()->label(__('Edit')),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                InfoSection::make('CEssential Information')
                    ->schema([
                        TextEntry::make('full_name')->label(__('Full Name')),
                        TextEntry::make('phone_number')->label(__('Phone Number')),
                        TextEntry::make('qad')->label(__('Qad')),
                        TextEntry::make('shana')->label(__('Shana'))->default('Not Available'),
                        TextEntry::make('astin')->label(__('Astin')),
                        TextEntry::make('baghal')->label(__('Baghal'))->default('Not Available'),
                        TextEntry::make('kamar')->label(__('Kamar')),
                        TextEntry::make('soorin')->label(__('Soorin'))->default('Not Available'),
                        TextEntry::make('tir_pesht')->label(__('Tir Pesht'))->default('Not Available'),
                        TextEntry::make('bala_tana')->label(__('Bala Tana'))->default('Not Available'),
                        TextEntry::make('bazo')->label(__('Bazo'))->default('Not Available'),
                        TextEntry::make('moch')->label(__('Moch'))->default('Not Available'),


                        TextEntry::make('tukma')
                            ->label(__('Tukma'))
                            ->formatStateUsing(
                                fn (string $state): string =>
                                    $state === '1' ? __('1 Tukma') :
                                    ($state === '2' ? __('2 Tukma') :
                                    ($state === '3' ? __('3 Tukma') :
                                    ($state === '4' ? ('4 Tukma') :
                                    '')))),
                        TextEntry::make('chak')
                                ->label(__('Chak'))
                            ->formatStateUsing(fn (string $state): string => $state == '1' ? __('1 Chak') : __('2 Chak')),

                        TextEntry::make('yakhan')
                            ->label(__('Yakhan'))
                            ->formatStateUsing(fn (string $state): string => $state == '1' ? __('Englishe') : __('Frenche')),

                        TextEntry::make('daman')
                                ->label(__('Daman'))
                            ->formatStateUsing(fn (string $state): string => $state == '1' ? __('Daman Gol') : __('Daman Right')),

                    ])->columns(4),
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
            'index' => Pages\ListKurtis::route('/'),
            'create' => Pages\CreateKurti::route('/create'),
            'edit' => Pages\EditKurti::route('/{record}/edit'),
            'print' => Pages\PrintKurti::route('/print'),
        ];
    }
}
