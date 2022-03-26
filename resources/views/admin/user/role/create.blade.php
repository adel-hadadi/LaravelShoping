@extends('admin.layouts.master')

@section('head-tag')
    <title>نقش ها</title>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">بخش کابران</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">نقش ها</a></li>

            <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد نقش جدید</li>
        </ol>
    </nav>

    <section class="row">

        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        ایجاد نقش جدید
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.user.role.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="{{ route('admin.user.role.store') }}" method="POST">
                        @csrf
                        <section class="row">
                            <section class="col-12 col-md-5">
                                <div class="form-group">
                                    <label class=" form-label">عنوان نقش</label>
                                    <input type="text" class="form-control form-control-sm" name="name" value="{{ old('name') }}">
                                </div>
                                @error('name')
                                    <span class="alert-requird bg-danger text-white p-1 rounded" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-5">
                                <div class="form-group">
                                    <label class=" form-label">توضیحات نقش</label>
                                    <input type="text" class="form-control form-control-sm"  name="description" value="{{ old('description') }}">
                                </div>
                                @error('description')
                                    <span class="alert-requird bg-danger text-white p-1 rounded" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-2 mt-4">
                                <button type="submit" class="btn btn-primary btn-sm">ثبت</button>
                            </section>
                        </section>

                        <section class="col-12">
                            <section class="row border-top mt-3 py-3">
                                @foreach ($permissions as $key => $permission)
                                    <section class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" name="permissions[]" type="checkbox" value="{{ $permission->id }}" id="{{ $permission->id }}" checked>
                                            <label class="form-check-label mr-3 mt-1" for="{{ $permission->id }}">
                                                {{ $permission->name }}
                                            </label>
                                        </div>
                                        <div class="mt-2">  
                                            @error('permission.' . $key)
                                            <span class="alert-requird bg-danger text-white p-1 rounded" role="alert">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </section>
                                @endforeach
                            </section>
                        </section>

                    </form>
                </section>
            </section>
        </section>

    </section>
@endsection
