@extends('admin.layouts.master')

@section('head-tag')
    <title>نظرات</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> نظرات</li>
        </ol>
    </nav>

    <section class="row">

        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        نظرات
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="#" class="btn btn-info btn-sm disabled"
                        aria-disabled="true">ایجاد نظر جدید</a>
                    <div class="width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">نویسنده نظر</th>
                                <th scope="col">کد کاربر</th>
                                <th scope="col">کد کالا</th>
                                <th scope="col">کالا</th>
                                <th scope="col">وضعیت</th>
                                <th class="max-width-16-rem text-center" scope="col"><i class="fa fa-cogs"></i> تنظیمات
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>سهیل کاشانی</td>
                                <td>4763874</td>
                                <td>3798854</td>
                                <td>شارژر type c</td>
                                <td>در انتظار تایید</td>
                                <td class="width-16-rem text-left">
                                    <a href="{{ route('admin.market.comment.show') }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> نمایش</a>
                                    <a href="#" class="btn btn-success btn-sm"><i class="fa fa-check"></i> تایید</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>سهیل کاشانی</td>
                                <td>4763874</td>
                                <td>3798854</td>
                                <td>شارژر type c</td>
                                <td>تایید شده</td>
                                <td class="width-16-rem text-left">
                                    <a href="{{ route('admin.market.comment.show') }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> نمایش</a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-clock"></i> عدم تایید</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>سهیل کاشانی</td>
                                <td>4763874</td>
                                <td>3798854</td>
                                <td>شارژر type c</td>
                                <td>در انتظار تایید</td>
                                <td class="width-16-rem text-left">
                                    <a href="{{ route('admin.market.comment.show') }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> نمایش</a>
                                    <a href="#" class="btn btn-success btn-sm"><i class="fa fa-check"></i> تایید</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </section>
        </section>

    </section>
@endsection
