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

        @if (!request()->has('jami'))
            <div class="sheet" style="padding:4.5mm;">
                <table class="tableForm" style="width:100%">
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
                        <tr style="height: 12mm; font-size:20px">
                            <td style="width: 15mm;">قد</td>
                            <td style="width: 15mm;">{{ $report->qad }}</td>
                            <td rowspan="9" style="width: 35mm; font-size: 20px">

                                <div style="width:50mm;height:6mm;display:inline-block;margin-top:2mm;">
                                    <span style="float:right; margin-right:2mm;">یخن</span>
                                    <span
                                        style="float:left; display:inline-block; font-size:17px; height: 6mm;width: 17mm; border: 1px solid black;";>
                                            @switch($report->kalar)
                                                @case(1)
                                                    کالر
                                                @break

                                                @case(2)
                                                    بین
                                                @break

                                                @case(3)
                                                    نیمه بین
                                                @break

                                                @case(4)
                                                    قاسیمی
                                                @break

                                                @case(5)
                                                    هندی
                                                @break

                                                @case(6)
                                                    عربی
                                                @break
                                        @endswitch
                                    </span>
                                </div><br>
                                <div style="width:50mm;height:6mm;display:inline-block;">
                                    <span style="float:right; margin-right:2mm;">دامن</span>
                                    <span
                                        style="float:left; display:inline-block; font-size:17px; height: 6mm;width: 17mm; border: 1px solid black">
                                        @switch($report->daman_type)
                                            @case(1)
                                                چهارکنج
                                            @break

                                            @case(2)
                                                ګول
                                            @break
                                        @endswitch
                                    </span>
                                </div><br>
                                <div style="width:50mm;height:6mm;display:inline-block;">
                                    <span style="float:right; margin-right:2mm;">کف</span>
                                    <span
                                        style="float:left; display:inline-block; font-size:17px; height: 6mm;width: 17mm; border: 1px solid black">
                                        @switch($report->kaf_type)
                                            @case(1)
                                                کف دوکاج
                                            @break

                                            @case(2)
                                                ګول کف
                                            @break
                                            @case(3)
                                                 چورس کف
                                            @break
                                        @endswitch
                                    </span>
                                </div><br>
                                <div style="width:50mm;height:6mm;display:inline-block;">
                                    <span style="float:right; margin-right:2mm;">آستین</span>
                                    <span
                                        style="float:left; display:inline-block; font-size:17px; height: 6mm;width: 17mm; border: 1px solid black">
                                        @switch($report->astin_type)
                                            @case(1)
                                                کف فت
                                            @break

                                            @case(2)
                                                عام کف
                                            @break

                                            @case(3)
                                                آستین ګول
                                            @break

                                            @case(4)
                                                آستین میجه
                                            @break

                                            @case(5)
                                                آستین نرم قات
                                            @break
                                        @endswitch
                                    </span>
                                </div><br>
                                <div style="width:50mm;height:6mm;display:inline-block;">
                                    <span style="float:right; margin-right:2mm;">تکمه</span>
                                    <span
                                        style="float:left; display:inline-block; font-size:17px; height: 6mm;width: 17mm; border: 1px solid black">
                                        @switch($report->tukma)
                                            @case(1)
                                                ساده
                                            @break

                                            @case(2)
                                                ستیل
                                            @break

                                            @case(3)
                                                پوش
                                            @break
                                            @case(4)
                                                دیزاین
                                            @break
                                        @endswitch
                                    </span>
                                </div><br>
                                <div style="width:50mm;height:6mm;display:inline-block;">
                                    <span style="float:right; margin-right:2mm;"> بر تنبان</span>
                                    <span
                                        style="float:left; display:inline-block; font-size:17px; height: 6mm;width: 17mm; border: 1px solid black">
                                        @switch($report->bar_tumban)
                                            @case(1)
                                                ساده
                                            @break

                                            @case(2)
                                                نیمه ګیبی
                                            @break

                                            @case(3)
                                                فول ګیبی
                                            @break
                                            @break
                                        @endswitch
                                    </span>
                                </div><br>

                                <div style="width:50mm;height:6mm;display:inline-block;">
                                    <span style="float:right; margin-right:2mm;"> جیب روی</span>
                                    <span
                                        style="float:left;font-size:13px; display:inline-block; height: 5mm;width: 13mm; border: 1px solid black">
                                        @if ($report->jeb_roy == true)
                                            <i class="fa fa-check"></i>
                                        @else
                                        @endif
                                    </span>
                                </div><br>
                                <div style="width:50mm;height:6mm;display:inline-block;">
                                    <span style="float:right; margin-right:2mm;"> جیب تنبان</span>
                                    <span
                                        style="float:left;font-size:13px; display:inline-block; height: 5mm;width: 13mm; border: 1px solid black">
                                        @if ($report->jeb_tumban == true)
                                            <i class="fa fa-check"></i>
                                        @else
                                        @endif
                                    </span>
                                </div><br>
                                <div style="width:50mm;height:6mm;display:inline-block;">
                                    <span style="float:right; margin-right:2mm;"> دبل سلائی</span>
                                    <span
                                        style="float:left;font-size:13px; display:inline-block; height: 5mm;width: 13mm; border: 1px solid black">
                                        @if ($report->double_salaie == true)
                                            <i class="fa fa-check"></i>
                                        @else
                                        @endif
                                    </span>
                                </div><br>
                                <div style="width:50mm;height:6mm;display:inline-block;">
                                    <span style="float:right; margin-right:2mm;"> چمک تار</span>
                                    <span
                                        style="float:left;font-size:13px; display:inline-block; height: 5mm;width: 13mm; border: 1px solid black">
                                        @if ($report->chamak_tar == true)
                                            <i class="fa fa-check"></i>
                                        @else
                                        @endif
                                    </span>
                                </div><br>
                                <div style="width:50mm;height:6mm;display:inline-block;">
                                    <span style="float:right; margin-right:2mm;"> دبل تک</span>
                                    <span
                                        style="float:left;font-size:13px; display:inline-block; height: 5mm;width: 13mm; border: 1px solid black">
                                        @if ($report->double_tak == true)
                                            <i class="fa fa-check"></i>
                                        @else
                                        @endif
                                    </span>
                                </div><br>
                                <div style="width:50mm;height:6mm;display:inline-block;">
                                    <span style="float:right; margin-right:2mm;">پټی طول</span>
                                    <span
                                        style="float:left; display:inline-block; font-size:15px;font-weight:bold; height: 5mm;width: 13mm; border: 1px solid black">
                                        {{ $report->pati_height }}
                                    </span>
                                </div><br>
                                <div style="width:50mm;height:6mm;display:inline-block;">
                                    <span style="float:right; margin-right:2mm;">پټی عرض</span>
                                    <span
                                        style="float:left; display:inline-block; font-size:15px;font-weight:bold; height: 5mm;width: 13mm; border: 1px solid black">
                                        {{ $report->pati_widht }}
                                    </span>
                                </div><br>
                                <div style="width:50mm;height:6mm;display:inline-block;">
                                    <span style="float:right; margin-right:2mm;"> کف</span>
                                    <span
                                        style="float:left; display:inline-block; font-size:15px;font-weight:bold; height: 5mm;width: 13mm; border: 1px solid black">
                                        {{ $report->kaf }}
                                    </span>
                                </div><br>
                                <div style="width:50mm;height:6mm;display:inline-block;">
                                    <span style="float:right; margin-right:2mm;"> قول</span>
                                    <span
                                        style="float:left; display:inline-block; font-size:15px;font-weight:bold; height: 5mm;width: 13mm; border: 1px solid black">
                                        {{ $report->qol }}
                                    </span>
                                </div><br>
                            </td>
                        </tr>
                        <tr style="height: 6mm; font-size:20px">
                            <td>شانه</td>
                            <td>
                                {{ $report->shana }}
                            </td>
                        </tr>
                        <tr style="height: 6mm; font-size:20px">
                            <td>آستین</td>
                            <td>
                                {{ $report->astin }}
                            </td>
                        </tr>

                        <tr style="height: 6mm; font-size:20px">
                            <td>یخن</td>
                            <td>
                                {{ $report->yakhan }}
                            </td>
                        </tr>

                        <tr style="height: 6mm; font-size:20px">
                            <td>چهاتی</td>
                            <td>
                                {{ $report->chahati }}
                            </td>
                        </tr>
                        <tr style="height: 6mm; font-size:20px">
                            <td>بغل</td>
                            <td>
                                {{ $report->baghal }}
                            </td>
                        </tr>
                        <tr style="height: 6mm; font-size:20px">
                            <td>دامن</td>
                            <td>
                                {{ $report->kamar }}
                            </td>
                        </tr>

                        <tr style="height: 6mm; font-size:20px">
                            <td>تمبان</td>
                            <td>{{ $report->tumban }}</td>
                        </tr>
                        <tr style="height: 6mm; font-size:20px">
                            <td>پاچه</td>
                            <td>{{ $report->pacha }}</td>
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
