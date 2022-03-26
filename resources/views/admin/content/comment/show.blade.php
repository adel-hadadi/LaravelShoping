@extends('admin.layouts.master')

@section('head-tag')
    <title>نظرات</title>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">نظرات</a></li>

            <li class="breadcrumb-item font-size-12 active" aria-current="page"> نمایش نظر ها</li>
        </ol>
    </nav>

    <section class="row">

        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        نمایش نظرات
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.market.comment.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section class="card mb-3">
                    <section class="card-header text-white bg-gray">
                            {{ $comment->user->fullName }} - {{ $comment->user->id }}
                    </section>

                    <section class="card-body">
                        <h5 class="card-title">کد کالا: {{ $comment->commentable->id }} مشخصات کالا: {{ $comment->commentable->title }}</h5>
                        <p class="card-text">{{ $comment->body }}</p>
                    </section>
                </section>

                @if($comment->parent_id == null)
                    <section>
                        <form action="{{ route('admin.content.comment.answer', $comment->id) }}" method="POST">
                            @csrf
                            <section class="row">
                                <section class="col-12">
                                    <div class="form-group">
                                        <label class=" form-label">پاسخ ادمین</label>
                                        <textarea name="body" id="" cols="30" rows="4" class="form-control form-control-sm"></textarea>
                                    </div>
                                </section>
                            
                            </section>
                            <button type="submit" class="btn btn-primary btn-sm">ثبت</button>

                        </form>
                    </section>
                @endif
            </section>
        </section>

    </section>
@endsection
