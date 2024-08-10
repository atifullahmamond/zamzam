<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WaskatResource\Pages;
use App\Models\Waskat;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Section;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Carbon\Carbon;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\Section as InfoSection;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\IconEntry;
use Illuminate\Database\Eloquent\Model;

class WaskatResource extends Resource
{
    protected static ?string $model = Waskat::class;

    protected static ?string $navigationIcon = 'icon-waistcoat';
    protected static ?int $navigationSort = 2;

    public static function getGloballySearchableAttributes(): array
    {
        return ['phone_number', 'full_name'];
    }

    public static function getGlobalSearchResultDetails(Model $record): array
    {
        return [
            __('Phone Number') => $record->phone_number,
            __('Full Name') => $record->full_name,
        ];
    }


    public static function getLabel(): ?string
    {
        return __("Waskat");
    }

    public static function getPluralLabel(): ?string
    {
        return __("Waskat");
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('Measurement'))
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
                        Forms\Components\TextInput::make('chahati_baghal')
                            ->label(__('Baghal'))
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('kamar')
                            ->label(__('Kamar'))
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('hip_soorin')
                            ->label(__('Hip Soorin'))
                            ->required()
                            ->maxLength(255)
                            ->numeric(),
                        Forms\Components\TextInput::make('yakhan')
                            ->label(__('Yakhan'))
                            ->required()
                            ->numeric(),
                        Forms\Components\Select::make('kalar')
                            ->label(__('Yakhan Type'))
                            ->native(false)
                            ->required()
                            ->options([
                                1 => __('Haft v'),
                                2 => __('Gol'),
                                3 => __('yakhan Dar'),
                                4 => __('Hindi Damn Gol'),
                            ])->default('1'),
                        Forms\Components\Select::make('daman_gol')
                            ->label(__('Daman'))
                            ->native(false)
                            ->required()
                            ->options([
                                1 => __('Gol'),
                                2 => __('seda'),
                            ])->default('1'),
                        Forms\Components\Select::make('shana_type')
                            ->label(__('Shana Type'))
                            ->native(false)
                            ->options([
                                1 => __('Full Don'),
                                2 => __('Nema Don'),
                                3 => __('seda'),
                            ])->default('1'),
                        Forms\Components\Select::make('tukma')
                            ->label(__('Tukma Type'))
                            ->native(false)
                            ->required()
                            ->options([
                                1 => __('Sada'),
                                2 => __('Steal'),
                                3 => __('Push'),
                                4 => __('Design'),
                            ])->default('1'),
                            Checkbox::make('jeb_Gul')->label(__('Gul Jeb')),
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
                    ->url(fn (Waskat $record): string => url('admin/waskats/print?waskat=true&id=' . $record->id)),
                Action::make('Print Waskat')->label(__('Print Waskat'))
                    ->icon('heroicon-o-printer')
                    ->color('primary')
                    ->url(fn (Waskat $record): string => url('admin/waskats/print?bill=true&id=' . $record->id)),
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
                        TextEntry::make('chahati_baghal')->label(__('Baghal')),
                        TextEntry::make('kamar')->label(__('Kamar'))->default('Not Available'),
                        TextEntry::make('hip_soorin')->label(__('Hip Soorin'))->default('Not Available'),
                        TextEntry::make('yakhan')->label(__('Yakhan'))->default('Not Available'),

                        TextEntry::make('shana_type')
                            ->label(__('Shana Type'))
                            ->formatStateUsing(fn (string $state): string => $state == '1' ? __('Full Don') : ($state == '2' ? __('Nema Don') : __('seda'))),

                        TextEntry::make('kalar')
                            ->label(__('Yakhan Type'))
                            ->formatStateUsing(
                                fn (string $state): string =>
                                    $state === '1' ? __('Haft v') :
                                    ($state === '2' ? __('Gol') :
                                    ($state === '3' ? __('yakhan Dar') :
                                    ($state === '4' ? ('Hindi Damn Gol') :
                                    '')))),

                        TextEntry::make('tukma')
                                    ->label(__('Tukma Type'))
                                    ->formatStateUsing(
                                        fn (string $state): string =>
                                            $state === '1' ? __('Sada') :
                                            ($state === '2' ? __('Steal') :
                                            ($state === '3' ? __('Push') :
                                            ($state === '4' ? __('Design') :
                                            '')))),
                        TextEntry::make('daman_gol')
                                    ->label(__('Daman Type'))
                                    ->formatStateUsing(fn (string $state): string => $state == '1' ? __('Gol') : __('seda') ),

                        IconEntry::make('jeb_Gul')
                            ->label(__('Gul Jeb'))
                            ->icon(fn (string $state): string => match ($state) {
                                '0' => 'heroicon-o-x-circle',
                                '1' => 'heroicon-o-check-circle',
                            })
                            ->color(fn (string $state): string => match ($state) {
                                '0' => 'danger',
                                '1' => 'success',
                                'default' => 'gray',
                            }),
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
            'index' => Pages\ListWaskats::route('/'),
            'create' => Pages\CreateWaskat::route('/create'),
            'edit' => Pages\EditWaskat::route('/{record}/edit'),
            'print' => Pages\PrintWaskat::route('/print'),
        ];
    }
}
