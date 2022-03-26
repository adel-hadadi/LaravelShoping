@extends('admin.layouts.master')

@section('head-tag')
    <title>ایجاد مشتری جدید</title>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">بخش کابران</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">مشتریان</a></li>

            <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد کاربر ادمین</li>
        </ol>
    </nav>

    <section class="row">

        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        ایجاد مشتری جدید
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.user.customer.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="{{ route('admin.user.customer.update', $customer->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <section class="row">
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class=" form-label">نام</label>
                                    <input type="text" class="form-control form-control-sm" name="first_name" value="{{ old('first_name', $customer->first_name) }}">
                                </div>
                                @error('first_name')
                                    <span class="alert-requird bg-danger text-white p-1 rounded" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class=" form-label">نام خانوداگی</label>
                                    <input type="text" class="form-control form-control-sm" name="last_name" value="{{ old('last_name', $customer->last_name) }}">
                                </div>
                                @error('last_name')
                                    <span class="alert-requird bg-danger text-white p-1 rounded" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>
                            
                            <section class="col-12">
                                <div class="form-group">
                                    <label class=" form-label">تصویر</label>
                                    <input type="file" class="form-control form-control-sm" name="profile_photo_path">
                                    <img src="{{ asset($customer->profile_photo_path) }}" alt="" width="300" height="300" class="rounded my-3">
                                </div>
                                @error('profile_photo_path')
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
