@extends('layouts.user')
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">لیست پادکست ها</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="{{ route('dashboard') }}">
                                <i class="fas fa-home"></i> خانه</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">پادکست</a>
                        </li>
                        <li class="breadcrumb-item active">لیست پادکست ها</li>
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
                                    <strong>لیست</strong> پادکست ها</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="left-align">
                                    <a href="{{ route('podcast.create') }}">
                                        <button type="button" class="btn btn-primary btn-border-radius waves-effect">افزودن جدید</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('pod-add-success'))
                        <div id="msg-alert" class="alert alert-success alert-block">
                            <button style="float: left" type="button" class="close" data-dismiss="alert">×
                            </button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @elseif ($message = Session::get('pod-create-success'))
                        <div id="msg-alert" class="alert alert-success alert-block">
                            <button style="float: left" type="button" class="close" data-dismiss="alert">×
                            </button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @elseif ($message = Session::get('pod-delete-success'))
                        <div id="msg-alert" class="alert alert-success alert-block">
                            <button style="float: left" type="button" class="close" data-dismiss="alert">×
                            </button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="body table-responsive">
                        <table class="table table-striped">
                            <thead align="center">
                            <tr align="center">
                                <th>#</th>
                                <th>کاور</th>
                                <th>عنوان</th>
                                <th>آلبوم</th>
                                <th>وضعیت</th>
                                <th>تاریخ انتشار</th>
                                <th>تاریخ بروزرسانی</th>
                                <th colspan="2">عملیات</th>
                            </tr>
                            </thead>
                            <tbody align="center">
                            <?php $num = 0; ?>
                            @foreach($podcasts as $podcast)
                                <?php $num++; ?>
                                <tr>
                                    <th scope="row">{{ $num }}</th>
                                    <td><img src="{{ $podcast->cover != '' ? $podcast->cover : '/img/no-image.png' }}" width="70" height="70"/></td>
                                    <td>{{ $podcast->name }}</td>
                                    <td>{{ $podcast->Album()->first()->title }}</td>
                                    <td>@if($podcast->status == 1)
                                            <span class="label bg-teal m-b-10">منتشر شده</span>
                                        @else
                                            <span class="label bg-blue-grey m-b-10">در حال بازبینی</span>
                                        @endif
                                    </td>
                                    <td>{{ Verta::instance($podcast->created_at)->format('%d %B %Y') }}</td>
                                    <td>{{ Verta::instance($podcast->updated_at)->format('%d %B %Y') }}</td>
                                        @if($podcast->status == 1)
                                        <td>
                                        <a href="{{ route('podcast.edit',$podcast->id) }}" type="button"
                                           class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        </td>
                                    <td>
                                        <form action="{{ route('podcast.destroy',$podcast->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                           class="btn bg-deep-orange btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete</i>
                                        </button>
                                        </form>
                                        @else
                                        <td colspan="2"><span>منتظر تایید مدیریت</span></td>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $podcasts->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
