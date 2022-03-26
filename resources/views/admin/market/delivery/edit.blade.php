@extends('admin.layouts.master')

@section('head-tag')
    <title>ویرایش روش ارسال</title>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">برندها</a></li>

            <li class="breadcrumb-item font-size-12 active" aria-current="page"> ویرایش روش ارسال جدید</li>
        </ol>
    </nav>

    <section class="row">

        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        ویرایش روش ارسال
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.market.delivery.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="{{ route('admin.market.delivery.update', $delivery->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <section class="row">
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class=" form-label">نام روش ارسال</label>
                                    <input type="text" class="form-control form-control-sm" name="name"
                                        value="{{ old('name', $delivery->name) }}">
                                </div>
                                @error('name')
                                    <span class="alert-requird bg-danger text-white p-1 rounded" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">

                                    <label class=" form-label">هزینه ارسال</label>
                                    <input type="texxt" class="form-control form-control-sm" name="amount"
                                        value="{{ old('amount', $delivery->amount) }}" id="">
                                </div>
                                @error('amount')
                                    <span class="alert-requird bg-danger text-white p-1 rounded" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">

                                    <label class=" form-label">زمان ارسال</label>
                                    <input type="text" class="form-control form-control-sm" name="delivery_time"
                                        id="delivery_time" value="{{ old('delivery_time', $delivery->delivery_time) }}">
                                </div>
                                @error('delivery_time')
                                    <span class="alert-requird bg-danger text-white p-1 rounded" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">

                                    <label class=" form-label">واحد زمان ارسال</label>
                                    <input type="text" class="form-control form-control-sm" name="delivery_time_unit"
                                        id="delivery_time_unit"
                                        value="{{ old('delivery_time_unit', $delivery->delivery_time_unit) }}">
                                </div>
                                @error('delivery_time_unit')
                                    <span class="alert-requird bg-danger text-white p-1 rounded" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>
                        </section>
                        <button type="submit" class="btn btn-primary btn-sm">ثبت</button>

                    </form>
                </section>
            </section>
        </section>

    </section>
@endsection
