@extends('layouts.user')
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">لیست آلبوم ها</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="{{ route('dashboard') }}">
                                <i class="fas fa-home"></i> خانه</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">آلبوم</a>
                        </li>
                        <li class="breadcrumb-item active">لیست آلبوم ها</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Basic Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <h2>
                                    <strong>لیست</strong> آلبوم ها</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="left-align">
                                    <a href="{{ route('album.create') }}">
                                        <button type="button" class="btn btn-primary btn-border-radius waves-effect">افزودن جدید</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>کاور</th>
                                <th>نام آلبوم</th>
                                <th>توضیحات آلبوم</th>
                                <th>دسته بندی</th>
                                <th>تاریخ انتشار</th>
                                <th>تاریخ بروزرسانی</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $num = 0; ?>
                            @foreach($albums as $album)
                                <?php $num++; ?>
                                <tr>
                                    <th scope="row">{{ $num }}</th>
                                    <td><img src="{{ $album->cover != '' ? $album->cover : '/img/no-image.png' }}" width="70" height="70"/></td>
                                    <td>{{ $album->title }}</td>
                                    <td>{{ $album->description }}</td>
                                    <td>{{ $album->Category()->first()->name }}</td>
                                    <td>{{ Verta::instance($album->created_at)->format('%d %B %Y') }}</td>
                                    <td>{{ Verta::instance($album->updated_at)->format('%d %B %Y') }}</td>
                                    <td>
                                        <a href="{{ route('album.edit',$album->id) }}" type="button"
                                           class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <form action="{{ route('album.destroy',$album->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                           class="btn bg-deep-orange btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete</i>
                                        </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $albums->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
