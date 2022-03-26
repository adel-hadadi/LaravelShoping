@extends('admin.layouts.master')

@section('head-tag')
    <title>سفارشات</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> سفارشات</li>
        </ol>
    </nav>

    <section class="row">

        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        سفارشات
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.market.brand.create') }}" class="btn btn-info btn-sm disabled">ایجاد برند</a>
                    <div class="width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>

                <div class="table-responsive">
                    <table class="table table-striped table-hover h-150">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">کد سفارش</th>
                                <th scope="col">مبلق سفارش</th>
                                <th scope="col">مبلق تخفیف</th>
                                <th scope="col">مبلق نهایی</th>
                                <th scope="col">وضعیت پرداخت</th>
                                <th scope="col">شیوه پرداخت</th>
                                <th scope="col">بانک</th>
                                <th scope="col">وضعیت ارسال</th>
                                <th scope="col">شیوه ارسال</th>
                                <th scope="col">وضعیت سفارش</th>
                                <th class="max-width-16-rem text-center" scope="col"><i class="fa fa-cogs"></i> تنظیمات
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>19488-464645</td>
                                <td>981.000 تومان</td>
                                <td>98.000 تومان</td>
                                <td>351.000 تومان</td>
                                <td>پرداخت شده</td>
                                <td>آنلاین</td>
                                <td>ملت</td>
                                <td>درحال ارسال</td>
                                <td>پیک موتوری</td>
                                <td>درحال ارسال</td>
                                <td class="width-8-rem text-left">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-success btn-sm btn-block dropdown-toggle" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-tools"></i> عملیات
                                        </a>

                                        <div class="dropdown-menu" aria-label="dropdownMenuLink">
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-images"></i>
                                                مشاهده فاکتور</a>
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-list-ul"></i> تغییر وضعیت ارسال</a>
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-edite"></i> تغییر وضعیت سفارش</a>
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-window-close"></i> باطل کردن سفارش</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">2</th>
                                <td>19488-464645</td>
                                <td>981.000 تومان</td>
                                <td>98.000 تومان</td>
                                <td>351.000 تومان</td>
                                <td>پرداخت شده</td>
                                <td>آنلاین</td>
                                <td>ملت</td>
                                <td>درحال ارسال</td>
                                <td>پیک موتوری</td>
                                <td>درحال ارسال</td>
                                <td class="width-8-rem text-left">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-success btn-sm btn-block dropdown-toggle" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-tools"></i> عملیات
                                        </a>

                                        <div class="dropdown-menu" aria-label="dropdownMenuLink">
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-images"></i>
                                                مشاهده فاکتور</a>
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-list-ul"></i> تغییر وضعیت ارسال</a>
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-edite"></i> تغییر وضعیت سفارش</a>
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-window-close"></i> باطل کردن سفارش</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>19488-464645</td>
                                <td>981.000 تومان</td>
                                <td>98.000 تومان</td>
                                <td>351.000 تومان</td>
                                <td>پرداخت شده</td>
                                <td>آنلاین</td>
                                <td>ملت</td>
                                <td>درحال ارسال</td>
                                <td>پیک موتوری</td>
                                <td>درحال ارسال</td>
                                <td class="width-8-rem text-left">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-success btn-sm btn-block dropdown-toggle" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-tools"></i> عملیات
                                        </a>

                                        <div class="dropdown-menu" aria-label="dropdownMenuLink">
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-images"></i>
                                                مشاهده فاکتور</a>
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-list-ul"></i> تغییر وضعیت ارسال</a>
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-edite"></i> تغییر وضعیت سفارش</a>
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-window-close"></i> باطل کردن سفارش</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </section>
        </section>

    </section>
@endsection
