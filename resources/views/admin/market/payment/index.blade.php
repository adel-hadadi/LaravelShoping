@extends('admin.layouts.master')

@section('head-tag')
    <title>پرداخت ها</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> پرداخت ها</li>
        </ol>
    </nav>

    <section class="row">

        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        پرداخت ها
                    </h5>
                </section>
    
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="#" class="btn btn-info btn-sm disabled">پرداخت جدید</a>
                    <div class="width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">کد تراکنش</th>
                                <th scope="col">بانک</th>
                                <th scope="col">پرداخت کننده</th>
                                <th scope="col">وضعیت پرداخت</th>
                                <th scope="col">نوع پرداخت</th>
                                <th class="max-width-16-rem text-center" scope="col"><i class="fa fa-cogs"></i> تنظیمات </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>94465664</td>
                                <td>ملت</td>
                                <td>عادل حدادی</td>
                                <td>تایید شده</td>
                                <td>آنلاین</td>
                                <td class="width-22-rem text-left">
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> مشاهده</a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-close"></i> باطل کردن</a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-reply"></i> برگرداندن</a>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>94465664</td>
                                <td>ملت</td>
                                <td>عادل حدادی</td>
                                <td>تایید شده</td>
                                <td>آفلاین</td>
                                <td class="width-22-rem text-left">
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> مشاهده</a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-close"></i> باطل کردن</a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-reply"></i> برگرداندن</a>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>94465664</td>
                                <td>کشاورزی</td>
                                <td>عادل حدادی</td>
                                <td>تایید شده</td>
                                <td>آنلاین</td>
                                <td class="width-22-rem text-left">
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> مشاهده</a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-close"></i> باطل کردن</a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-reply"></i> برگرداندن</a>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>

    </section>
@endsection
