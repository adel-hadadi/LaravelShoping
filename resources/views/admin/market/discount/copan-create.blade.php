@extends('admin.layouts.master')

@section('head-tag')
    <title>کپن تخفیف</title>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">کپن تخفیف</a></li>

            <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد کپن تخفیف</li>
        </ol>
    </nav>

    <section class="row">

        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        ایجاد کپن تخفیف
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.market.discount.copan') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="#" method="post">
                        <section class="row">
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class=" form-label">کد کپن</label>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">

                                <label class=" form-label">نوع کپن</label>
                                <select name="" id="" class="form-control form-control-sm"> 
                                    <option selected>نوع کپن رو مشخص کنید</option>
                                    <option >عمومی</option>
                                    <option >خصوصی</option>
                                </select>
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">

                                <label class=" form-label">درصد تخفیف</label>
                                <input type="text" class="form-control form-control-sm">
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">

                                <label class=" form-label">حداکثر تخفیف</label>
                                <input type="text" class="form-control form-control-sm">
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">

                                <label class=" form-label">عنوان مناسبت</label>
                                <input type="text" class="form-control form-control-sm">
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">

                                <label class=" form-label">تاریخ شروع</label>
                                <input type="text" class="form-control form-control-sm">
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">

                                <label class=" form-label">تاریخ پایان</label>
                                <input type="text" class="form-control form-control-sm">
                                </div>
                            </section>
                        </section>
                        <button type="submit" class="btn btn-primary btn-sm">ثبت</button>

                    </form>
                </section>
            </section>
        </section>

    </section>
@endsection
