@extends('admin.layouts.master')

@section('head-tag')
    <title>ویرایش دسته بندی</title>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">دسته بندی</a></li>

            <li class="breadcrumb-item font-size-12 active" aria-current="page"> ویرایش دسته بندی</li>
        </ol>
    </nav>

    <section class="row">

        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        ویرایش دسته بندی
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.market.category.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="{{ route('admin.market.category.update', $productCategory->id) }}" method="post" id="form"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <section class="row">
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class=" form-label">نام دسته بندی</label>
                                    <input type="text" class="form-control form-control-sm" name="name"
                                        value="{{ old('name', $productCategory->name) }}">
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

                                    <label class=" form-label">دسته والد</label>
                                    <select name="parent_id" id="" class="form-control form-control-sm">
                                        <option value="">دسته اصلی</option>
                                        @foreach ($categories as $productCategoryItem)
                                            <option value="{{ $productCategoryItem->id }}"
                                                @if (old('parent_id') == $productCategoryItem->id) selected @endif>
                                                {{ $productCategoryItem->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </section>

                            <section class="col-12 col-md-6 my-3">
                                <div class="form-group">
                                    <label class="form-label" for="img">تصویر</label>
                                    <input type="file" class="form-control form-control-sm" name="img" id="img">
                                </div>
                                @error('img')
                                    <span class="alert-requird bg-danger text-white p-1 rounded" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror

                                <section class="row">
                                    @php
                                        $number = 1;
                                    @endphp
                                    @foreach ($productCategory->img['indexArray'] as $key => $value)
                                        <section class="col-md-{{ 6 / $number }}">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="currentImage"
                                                    value="{{ $key }}" id="{{ $number }}"
                                                    @if ($productCategory->img['currentImage'] == $key) checked @endif>
                                                <label for="{{ $number }}" class="form-check-label mx-2">
                                                    <img src="{{ asset($value) }}" alt="" class="w-100">
                                                </label>
                                            </div>
                                        </section>
                                        @php
                                            $number++;
                                        @endphp
                                    @endforeach
                                </section>
                            </section>

                            <section class="col-12 col-md-6 my-3">
                                <div class="form-group">
                                    <label class="form-label" for="tags">تگ ها</label>
                                    <input type="hidden" class="form-control form-control-sm" name="tags" id="tags"
                                        value="{{ old('tags', $productCategory->tags) }}">
                                    <select class="select2 form-control form-control-sm" id="select_tags" multiple></select>
                                </div>
                                @error('tags')
                                    <span class="alert-requird bg-danger text-white p-1 rounded" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>

                            <section class="col-12 col-md-6 my-2">
                                <div class="form-group">

                                    <label class=" form-label" for="status">وضعیت</label>
                                    <select name="status" id="status" class="form-control form-control-sm">
                                        <option selected>وضعیت را انتخاب کنید</option>
                                        <option value="0" @if (old('status', $productCategory->status) == 0) selected @endif>غیر فعال
                                        </option>
                                        <option value="1" @if (old('status', $productCategory->status) == 1) selected @endif>فعال</option>
                                    </select>
                                </div>
                                @error('status')
                                    <span class="alert-requird bg-danger text-white p-1 rounded" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>

                            <section class="col-12 col-md-6 my-2">
                                <div class="form-group">

                                    <label class=" form-label" for="show_in_menu">نمایش در منو</label>
                                    <select name="show_in_menu" id="show_in_menu" class="form-control form-control-sm">
                                        <option value="0" @if (old("show_in_menu", $productCategory->show_in_menu) == 0)
                                            selected
                                        @endif>خیر</option>
                                        <option value="1" @if (old("show_in_menu", $productCategory->show_in_menu) == 1)
                                            selected
                                        @endif>بله</option>
                                    </select>
                                </div>
                                @error('show_in_menu')
                                    <span class="alert-requird bg-danger text-white p-1 rounded" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>

                            <section class="col-12 my-2">
                                <div class="form-group">
                                    <label class=" form-label" for="description">توضیحات</label>
                                    <textarea name="description" id="description" class="form-control form-control-sm"
                                        rows="6">{{ old('description', $productCategory->description) }}</textarea>
                                </div>
                                @error('description')
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

@section('script')
    <script src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
    <script>
        $(document).ready(function() {
            var tags_input = $('#tags');
            var select_tags = $('#select_tags');
            var default_tags = tags_input.val();
            var default_data = null;

            if (tags_input.val() !== null && tags_input.val().length > 0) {
                default_data = default_tags.split(',');
            }

            select_tags.select2({
                placeholder: 'لطفا تگ های خود را وارد نمایید',
                tags: true,
                data: default_data
            });

            select_tags.children('option').attr('selected', true).trigger('change');
            $('#form').submit(function() {
                if (select_tags.val() !== null && select_tags.val().length > 0) {
                    var selectedSource = select_tags.val().join(',');
                    tags_input.val(selectedSource);
                }
            })
        })
    </script>
@endsection
