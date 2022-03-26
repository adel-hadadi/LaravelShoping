@extends('admin.layouts.master')

@section('head-tag')
    <title>ویرایش تنظیمات سایت</title>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">بخش تنظیمات</a></li>

            <li class="breadcrumb-item font-size-12 active" aria-current="page">ویرایش تنظیمات سایت</li>
        </ol>
    </nav>

    <section class="row">

        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        ویرایش تنظیمات سایت<
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.setting.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form id="form" action="{{ route('admin.setting.update', $setting->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <section class="row">
                            <section class="col-12 col-md-6 my-2">
                                <div class="form-group">
                                    <label class="form-label" for="title">عنوان سایت</label>
                                    <input type="text" class="form-control form-control-sm" name="title" id="title"
                                        value="{{ old('title', $setting->title) }}">
                                </div>
                                @error('title')
                                    <span class="alert-requird bg-danger text-white p-1 rounded" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>

                            <section class="col-12 col-md-6 my-2">
                                <div class="form-group">
                                    <label class="form-label" for="description">توضیحات</label>
                                    <input type="text" class="form-control form-control-sm" name="description" id="description"
                                        value="{{ old('description', $setting->description) }}">
                                </div>
                                @error('description')
                                    <span class="alert-requird bg-danger text-white p-1 rounded" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>

                            <section class="col-12 col-md-6 my-2">
                                <div class="form-group">
                                    <label class="form-label" for="keywords">کلمات کلیدی</label>
                                    <input type="text" class="form-control form-control-sm" name="keywords" id="keywords"
                                        value="{{ old('keywords', $setting->keywords) }}">
                                </div>
                                @error('keywords')
                                    <span class="alert-requird bg-danger text-white p-1 rounded" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>

                            <section class="col-12 col-md-6 my-3">
                                <div class="form-group">
                                    <label class="form-label" for="logo">لوگو سایت</label>
                                    <input type="file" class="form-control form-control-sm" name="logo" id="logo">
                                </div>
                                @error('logo')
                                    <span class="alert-requird bg-danger text-white p-1 rounded" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>

                            <section class="col-12 col-md-6 my-3">
                                <div class="form-group">
                                    <label class="form-label" for="icon">آیکون سایت</label>
                                    <input type="file" class="form-control form-control-sm" name="icon" id="icon">
                                </div>
                                @error('icon')
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
