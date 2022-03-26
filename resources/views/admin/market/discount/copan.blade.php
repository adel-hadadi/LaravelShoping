@extends('admin.layouts.master')

@section('head-tag')
    <title>کپن تخفیف</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> کپن تخفیف</li>
        </ol>
    </nav>

    <section class="row">

        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        کپن تخفیف
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.market.discount.copan.create') }}" class="btn btn-info btn-sm">ایجاد کپن تخفیف</a>
                    <div class="width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">کد کپن</th>
                                <th scope="col">درصد تخفیف</th>
                                <th scope="col">سقف تخفیف</th>
                                <th scope="col">نوع کپن</th>
                                <th scope="col">تاریخ شروع</th>
                                <th scope="col">تاریخ پایان</th>
                                <th class="max-width-16-rem text-center" scope="col"><i class="fa fa-cogs"></i> تنظیمات
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>h3u12h3</td>
                                <td>15%</td>
                                <td>25.000 تومان</td>
                                <td>عمومی</td>
                                <td>24اردیبهشت 99</td>
                                <td>31اردیبهشت 99</td>
                                <td class="width-16-rem text-left">
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                    <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-alt"></i>
                                        حذف</button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>h3u12h3</td>
                                <td>15%</td>
                                <td>25.000 تومان</td>
                                <td>عمومی</td>
                                <td>24اردیبهشت 99</td>
                                <td>31اردیبهشت 99</td>
                                <td class="width-16-rem text-left">
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                    <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-alt"></i>
                                        حذف</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>h3u12h3</td>
                                <td>15%</td>
                                <td>25.000 تومان</td>
                                <td>عمومی</td>
                                <td>24اردیبهشت 99</td>
                                <td>31اردیبهشت 99</td>
                                <td class="width-16-rem text-left">
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                    <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-alt"></i>
                                        حذف</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>

    </section>
@endsection
