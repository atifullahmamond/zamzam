<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JamiResource\Pages;
use App\Models\Jami;
use Carbon\Carbon;
use Filament\Forms\Components\Checkbox;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Section;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\Section as InfoSection;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\IconEntry;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Actions\Action;






class JamiResource extends Resource
{
    protected static ?string $model = Jami::class;

    protected static ?string $navigationIcon = 'icon-jami';
    protected static ?int $navigationSort = 1;

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
        return __("Jami");
    }

    public static function getPluralLabel(): ?string
    {
        return __("Jami");
    }

    protected ?Model $record = null;



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__("Measurement"))
                    ->schema([
                        Forms\Components\TextInput::make('full_name')
                            ->label(__("Full Name"))
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
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
                        Forms\Components\TextInput::make('yakhan')
                            ->label(__('Yakhan'))
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('chahati')
                            ->label(__('Chahati'))
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('baghal')
                            ->label(__('Baghal'))
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('kamar')
                            ->label(__('Kamar Jami'))
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('tumban')
                            ->label(__('Tumban'))
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('pacha')
                            ->label(__('Pacha'))
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('pati_widht')
                            ->label(__('Pati Widht'))
                            ->numeric()
                            ->required(),
                        Forms\Components\TextInput::make('pati_height')
                            ->label(__('Pati Height'))
                            ->numeric()
                            ->required(),
                        Forms\Components\TextInput::make('qol')
                            ->label(__('Qol'))
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('kaf')
                            ->label(__('Kaf'))
                            ->required()
                            ->numeric(),
                        Forms\Components\Select::make('bar_tumban')
                            ->label(__('Bar Tumban'))
                            ->native(false)
                            ->required()
                            ->options([
                                1 => __('Sada'),
                                2 => __('Nema Gebea'),
                                3 => __('Full Gebea'),
                            ])->default(1),
                        Forms\Components\Select::make('kaf_type')
                            ->label(__('Kaf Type'))
                            ->native(false)
                            ->required()
                            ->options([
                                1 => __('Kaf dukaj'),
                                2 => __('Kaf Gol'),
                                3 => __('Kaf Chors'),
                            ])->default(1),
                        Forms\Components\Select::make('astin_type')
                            ->label(__('Astin Type'))
                            ->native(false)
                            ->required()
                            ->options([
                                1 => __('Fat Kaf'),
                                2 => __('Aam Kaf'),
                                3 => __('Astin Gol'),
                                4 => __('Astin Mija'),
                                5 => __('Astin Narm Qat'),
                            ])->default('1'),
                        Forms\Components\Select::make('kalar')
                            ->label(__('Yakhan Type'))
                            ->native(false)
                            ->required()
                            ->options([
                                1 => __('Kalar'),
                                2 => __('Ben'),
                                3 => __('Nema Ben'),
                                4 => __('Qhasemi'),
                                5 => __('Hindi'),
                                6 => __('Arabic'),
                            ])->default('1'),
                        Forms\Components\Select::make('daman_type')
                            ->label(__('Daman Type'))
                            ->native(false)
                            ->required()
                            ->options([
                                1 => __('Chaharquanj'),
                                2 => __('Gol'),
                            ])->default('2'),
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
                        Checkbox::make('jeb_roy')->label(__('Jeb Roy'))->inline(),
                        Checkbox::make('jeb_tumban')->label(__('Jeb Tumban'))->inline(),
                        Checkbox::make('double_salaie')->label(__('Double Salaie'))->inline(),
                        Checkbox::make('chamak_tar')->label(__('Chamak Tar'))->inline(),
                        Checkbox::make('double_tak')->label(__('Double Tak'))->inline(),
                    ])->columns(5),

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
                Tables\Columns\TextColumn::make('jami_quantity')
                    ->label(__('Jami Quantity'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('waskat_quantity')
                    ->label(__('Waskat Quantity'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kurti_quantity')
                    ->label(__('Kurti Quantity'))
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
                    ->url(fn (Jami $record): string => url('admin/jamis/print?jami=true&id=' . $record->id)),
                Action::make('Print Jami')->label(__('Print Jami'))
                    ->icon('heroicon-o-printer')
                    ->color('primary')
                    ->url(fn (Jami $record): string => url('admin/jamis/print?bill=true&id=' . $record->id)),
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
                InfoSection::make(__('Measurement Information'))
                    ->schema([

                        TextEntry::make('full_name')->label(__('Full Name'))->columnSpanFull(),
                        TextEntry::make('phone_number')->label(__('Phone Number')),
                        TextEntry::make('qad')->label(__('Qad')),
                        TextEntry::make('shana')->label(__('Shana'))->default('Not Available'),
                        TextEntry::make('astin')->label(__('Astin')),
                        TextEntry::make('yakhan')->label(__('Yakhan'))->default('Not Available'),
                        TextEntry::make('chahati')->label(__('Chahati'))->default('Not Available'),
                        TextEntry::make('baghal')->label(__('Baghal'))->default('Not Available'),
                        TextEntry::make('kamar')->label(__('Kamar Jami'))->default('Not Available'),
                        TextEntry::make('tumban')->label(__('Tumban'))->default('Not Available'),
                        TextEntry::make('pacha')->label(__('Pacha'))->default('Not Available'),
                        TextEntry::make('pati_widht')->label(__('Pati Widht'))->default('Not Available'),
                        TextEntry::make('pati_height')->label(__('Pati Height'))->default('Not Available'),
                        TextEntry::make('qol')->label(__('Qol'))->default('Not Available'),
                        TextEntry::make('kaf')->label(__('Kaf'))->default('Not Available'),

                            TextEntry::make('bar_tumban')
                            ->label(__('Bar Tumban'))
                            ->formatStateUsing(fn (string $state): string => $state == '1' ? __('Sada') : ($state == '2' ? __('Nema Gebea') : __('Full Gebea'))),

                            TextEntry::make('astin_type')
                            ->label(__('Astin Type'))
                            ->formatStateUsing(
                                fn (string $state): string =>
                                    $state === '1' ? __('Fat Kaf') :
                                    ($state === '2' ? __('Aam Kaf') :
                                    ($state === '3' ? __('Astin Gol') :
                                    ($state === '4' ? __('Astin Mija') :
                                    'Astin Narm Qat')))),



                        TextEntry::make('kalar')
                            ->label(__('Yakhan Type'))
                            ->formatStateUsing(
                                fn (string $state): string =>
                                    $state === '1' ? __('Kalar') :
                                    ($state === '2' ? __('Ben') :
                                    ($state === '3' ? __('Nema Ben') :
                                    ($state === '4' ? __('Qhasemi') :
                                    ($state === '5' ? __('Hindi') :
                                    __('Arabic'))))),
                                ),
                            TextEntry::make('kaf_type')
                                ->label(__('Kaf Type'))
                                ->formatStateUsing(
                                    fn (string $state): string =>
                                        $state === '1' ? __('Kaf dukaj') :
                                        ($state === '2' ? __('Kaf Gol') :
                                        ($state === '3' ? __('Kaf Chors') :
                                        ''))),
                        TextEntry::make('daman_type')
                            ->label(__('Daman Type'))
                            ->formatStateUsing(fn (string $state): string => $state == '1' ? __('Chaharquanj') : __('Gol') ),


                        TextEntry::make('tukma')
                            ->label(__('Tukma Type'))
                            ->formatStateUsing(
                                fn (string $state): string =>
                                    $state === '1' ? __('Sada') :
                                    ($state === '2' ? __('Steal') :
                                    ($state === '3' ? __('Push') :
                                    ($state === '4' ? __('Design') :
                                    '')))),

                        IconEntry::make('jeb_roy')
                            ->label(__('Jeb Roy'))
                            ->icon(fn (string $state): string => match ($state) {
                                '0' => 'heroicon-o-x-circle',
                                '1' => 'heroicon-o-check-circle',
                            })
                            ->color(fn (string $state): string => match ($state) {
                                '0' => 'danger',
                                '1' => 'success',
                                'default' => 'gray',
                            }),

                        IconEntry::make('jeb_tumban')
                            ->label(__('Jeb Tumban'))
                            ->icon(fn (string $state): string => match ($state) {
                                '0' => 'heroicon-o-x-circle',
                                '1' => 'heroicon-o-check-circle',
                            })
                            ->color(fn (string $state): string => match ($state) {
                                '0' => 'danger',
                                '1' => 'success',
                                'default' => 'gray',
                            }),

                        IconEntry::make('double_salaie')
                            ->label(__('Double Salaie'))
                            ->icon(fn (string $state): string => match ($state) {
                                '0' => 'heroicon-o-x-circle',
                                '1' => 'heroicon-o-check-circle',
                            })
                            ->color(fn (string $state): string => match ($state) {
                                '0' => 'danger',
                                '1' => 'success',
                                'default' => 'gray',
                            }),

                        IconEntry::make('chamak_tar')
                            ->label(__('Chamak Tar'))
                            ->icon(fn (string $state): string => match ($state) {
                                '0' => 'heroicon-o-x-circle',
                                '1' => 'heroicon-o-check-circle',
                            })
                            ->color(fn (string $state): string => match ($state) {
                                '0' => 'danger',
                                '1' => 'success',
                                'default' => 'gray',
                            }),



                        IconEntry::make('double_tak')
                            ->label(__('Double Tak'))
                            ->icon(fn (string $state): string => match ($state) {
                                '0' => 'heroicon-o-x-circle',
                                '1' => 'heroicon-o-check-circle',
                            })
                            ->color(fn (string $state): string => match ($state) {
                                '0' => 'danger',
                                '1' => 'success',
                                'default' => 'gray',
                            }),
                    ])->columns(5),
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
            'index' => Pages\ListJamis::route('/'),
            'create' => Pages\CreateJami::route('/create'),
            'edit' => Pages\EditJami::route('/{record}/edit'),
            'print' => Pages\PrintJami::route('/print'),
        ];
    }
}
