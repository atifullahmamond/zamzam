<div>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href={{ asset('assets/design/FormDesign.css') }}>
        <link rel="stylesheet" href={{ asset('assets/design/paper.css') }}>
        <link rel="stylesheet" href={{ asset('assets/font-awesome/css/font-awesome.rtl.min.css') }}>
        <script src={{ asset('assets/design/jquery-3.3.1.min.js') }}></script>
        <title>Print Libas Info</title>
        <style>
            {
                size: A6;
            }

            body.paper .sheet {
                max-width: 105mm;
                max-height: 148mm;
            }

            table {
                border-collapse: collapse;
            }
        </style>
    </head>

    <body dir="rtl" class="paper">

        @if (!request()->has('kurti'))
            <div class="sheet" style="padding:4.5mm;">
                <table class="tableForm" style="width:100% ;border:1px solid black;width:100%">
                    <thead>
                        <tr style="height:16mm">
                            <th colspan="4">
                                <div style="height:12mm;margin-top:2mm;vertical-align:bottom;font-size: 28px">خیاطی و
                                    رخت
                                    فروشی زم زم</div>
                                <div style="height:5mm;margin-bottom:1mm;text-align:right;vertical-align:bottom">
                                    <span style="display: inline-block; width: 10mm;">&nbsp;نام:</span>
                                    <span
                                        style="display: inline-block; width: 40mm;border-bottom:1px solid black;font-size:14px;">
                                        {{ $report->full_name }}
                                    </span>
                                    <span style="display: inline-block; width: 10mm;">نمبر :</span>
                                    <span
                                        style="display: inline-block; width: 30mm;border-bottom:1px solid black">{{ $report->phone_number }}</span>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody style="vertical-align:center">
                        <tr style="height: 12mm; position: relative; font-size:20px">
                            <td style="width: 15mm;">قد</td>
                            <td style="width: 15mm;">{{ $report->qad }}</td>
                            <td>تیر پشت</td>
                            <td>{{ $report->tir_pesht }}</td>

                        </tr>
                        <tr style="height: 12mm; font-size:20px">
                            <td>آستین</td>
                            <td>
                                {{ $report->astin }}
                            </td>
                            <td>کمر</td>
                            <td>{{ $report->bala_tana }}</td>

                        </tr>
                        <tr style="height: 12mm; font-size:20px">
                            <td>شانه</td>
                            <td>
                                {{ $report->shana }}
                            </td>
                            <td> سورین</td>
                            <td>
                                {{ $report->soorin }}
                            </td>

                        </tr>
                        <tr style="height: 12mm; font-size:20px">
                            <td>بغل</td>
                            <td>{{ $report->baghal }}</td>
                            <td style="width: 15mm">نوع یخن</td>
                            <td style="width: 15mm;">
                                @switch($report->yakhan)
                                    @case(1)
                                        انګیسی
                                    @break

                                    @case(2)
                                        فرانسوی
                                    @break
                                @endswitch
                            </td>
                        </tr>
                        <tr style="height: 12mm; font-size:20px">
                            <td>بالا تنه</td>
                            <td>{{ $report->kamar }}</td>
                            <td> تعداد تکمه</td>
                            <td>
                                @switch($report->tukma)
                                    @case(1)
                                        یک
                                        @break

                                    @case(2)
                                        دوه
                                        @break

                                    @case(3)
                                        سه
                                        @break

                                    @case(۴)
                                        چهار
                                        @break
                                @endswitch
                            </td>
                        </tr>
                        <tr style="height: 12mm; font-size:20px">
                            <td>مچ</td>
                            <td>
                                {{ $report->moch }}
                            </td>
                            <td> تعداد چاک</td>
                            <td>
                                @switch($report->chak)
                                    @case(1)
                                         یک
                                    @break

                                    @case(2)
                                        دوه
                                    @break
                                @endswitch
                            </td>
                        </tr>
                        <tr style="height: 12mm; font-size:20px">
                            <td>بازو</td>
                            <td>
                                {{ $report->bazo }}
                            </td>
                            <td>نوع دامن</td>
                            <td>
                                @switch($report->daman)
                                    @case(1)
                                        ګول
                                        @break
                                        راست
                                    @case(2)
                                        @break
                                @endswitch

                            </td>
                        </tr>
                        <tr style="height: 12mm; font-size:20px">
                            <td style="border: none !important;"></td>
                            <td style="border: none !important;"></td>
                            <td style="border: none !important;"></td>
                            <td style="border: none !important;"></td>
                        </tr>
                        <tr style="height: 12mm; font-size:20px">
                            <td style="border: none !important;"></td>
                            <td style="border: none !important;"></td>
                            <td style="border: none !important;"></td>
                            <td style="border: none !important;"></td>
                        </tr>
                        <tr style="height:10mm;">
                            <td colspan="4" style="font-size:14px"><b>آدرس : احمد شاه بابا مینه، بلاک چهار، مقابل
                                    تانک
                                    تیل احمد شاه بابا</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endif


        @if (!request()->has('bill'))
            <div class="sheet" style="padding: 5mm">
                <div style="padding:5mm;border:1px solid black">
                    <div style="height:40mm">
                        <div style="width:40mm;display:inline-block">
                            <span style="text-align:right;font-size:30px;display:inline-block">
                                خیاطی و رخت فروشی زم زم
                            </span>
                        </div>
                        <div style="width:40mm;display:inline-block">
                            <span style="float:left;font-size:20px;display:inline-block">
                                <br> 0787870010
                                <br> 0787870010
                            </span>
                        </div>
                    </div>
                    <div style="height:13mm">
                        <div style="display:inline-block;">
                            <span style="border-bottom:1px solid black;display:inline-block;width:5mm">نام</span>
                            <span style="border-bottom:1px solid black;display:inline-block;width:35mm;font-size:14px">
                                {{ $report->full_name }}
                            </span>
                        </div>
                        <div style="display:inline-block;margin-right:3mm">
                            <span style="border-bottom:1px solid black;display:inline-block;width:18mm">نمبر
                                مشتری</span>
                            <span style="border-bottom:1px solid black;display:inline-block;width:20mm">
                                {{ $report->phone_number }}
                            </span>
                        </div>
                    </div>
                    <div style="height:13mm;">
                        <div style="display:inline-block">
                            <span
                                style="border-bottom:1px solid black;display:inline-block;width:20mm;font-size:15px">تاریخ
                                امروزی</span>
                            <span style="border-bottom:1px solid black;display:inline-block;width:20mm;font-size:15px">
                                {{ $report->order_date }}
                            </span>
                        </div>
                        <div style="display:inline-block;margin-right:3mm">
                            <span
                                style="border-bottom:1px solid black;display:inline-block;width:18mm;font-size:15px">تاریخ
                                واپسی</span>
                            <span style="border-bottom:1px solid black;display:inline-block;width:20mm;font-size:15px">
                                {{ $report->finish_date }}
                            </span>
                        </div>
                    </div>
                    <div style="height:13mm;text-align:center">
                        <div style="display:inline-block">
                            <span style="border-bottom:1px solid black;display:inline-block;width:20mm">تعداد
                                جوره</span>
                            <span style="border-bottom:1px solid black;display:inline-block;width:20mm;">
                                {{ $report->jami_quantity }}
                            </span>
                        </div>
                        <div style="display:inline-block;margin-right:3mm">
                            <span style="border-bottom:1px solid black;display:inline-block;width:18mm">تعداد
                                واسکټ</span>
                            <span style="border-bottom:1px solid black;display:inline-block;width:20mm;">
                                {{ $report->waskat_quantity }}
                            </span>
                        </div>
                    </div>
                    <div style="height:13mm;text-align:center">
                        <div style="display:inline-block">
                            <span style="border-bottom:1px solid black;display:inline-block;width:20mm">تعداد
                                کرتي</span>
                            <span style="border-bottom:1px solid black;display:inline-block;width:20mm;">
                                {{ $report->kurti_quantity }}
                            </span>
                        </div>
                        <div style="display:inline-block;margin-right:3mm">
                            <span style="border-bottom:1px solid black;display:inline-block;width:18mm">قیمت</span>
                            <span style="border-bottom:1px solid black;display:inline-block;width:20mm;">
                                {{ $report->total_price }}
                            </span>
                        </div>
                    </div>
                    <div style="height:13mm;text-align:center">
                        <div style="display:inline-block">
                            <span style="border-bottom:1px solid black;display:inline-block;width:20mm">رسید</span>
                            <span style="border-bottom:1px solid black;display:inline-block;width:20mm;">
                                {{ $report->paid }}
                            </span>
                        </div>
                        <div style="display:inline-block;margin-right:3mm">
                            <span style="border-bottom:1px solid black;display:inline-block;width:18mm">باقی</span>
                            <span style="border-bottom:1px solid black;display:inline-block;width:20mm;">
                                {{ $report->remain }}
                            </span>
                        </div>
                    </div>
                    <div style="height:20mm">
                        <div style="display:inline-block;width:20mm">
                            <img src="{{ asset('assets/design/logo.png') }}" style="height: 20mm; width: 20mm">
                        </div>
                        <div
                            style="display:inline-block;width:60mm;text-align:center;font-size:17px;vertical-align:top;font-wieght:300">
                            د یوی میاشتی نه بعد دجامو زیمواری نشته د برق د نه موجودیت په صورت که د جامو معطل کیدل د خیاط
                            زیمواری نده.</div>
                    </div>
                </div>
            </div>
        @endif


        <script type="text/javascript">
            window.print();
            window.onafterprint = function() {
                window.location.assign("/admin/jamis/");
            }
        </script>

    </body>

</div>
