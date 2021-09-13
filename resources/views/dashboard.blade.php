@extends('layouts.user')
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style">
                        <li class="breadcrumb-item 	bcrumb-1">
                            <a href="{{ route('dashboard') }}">
                                <i class="material-icons">home</i>
                                خانه</a>
                        </li>
                        <li class="breadcrumb-item active">داشبورد</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Widgets -->
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <a href="{{ route('podcast.index') }}">
                <div class="info-box7 l-bg-green order-info-box7">
                    <div class="info-box7-block">
                        <h4 class="m-b-20">پادکست های من</h4>
                        <h2 class="text-right"><i class="fas fa-podcast pull-left"></i><span>{{ $podcastCount }}</span></h2>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-lg-3 col-sm-6">
                <a href="{{ route('album.index') }}">
                <div class="info-box7 l-bg-purple order-info-box7">
                    <div class="info-box7-block">
                        <h4 class="m-b-20">آلبوم های من</h4>
                        <h2 class="text-right"><i class="fas fa-compact-disc pull-left"></i><span>{{ $albumCount }}</span></h2>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-lg-3 col-sm-6">
                <a href="{{ route('dashboard') }}">
                <div class="info-box7 l-bg-orange order-info-box7">
                    <div class="info-box7-block">
                        <h4 class="m-b-20">فضای استفاده شده</h4>
                        <h2 class="text-right"><i class="fas fa-users pull-left"></i><span>{{ $diskSize }}</span></h2>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-lg-3 col-sm-6">
                <a href="{{ route('dashboard') }}">
                <div class="info-box7 l-bg-cyan order-info-box7">
                    <div class="info-box7-block">
                        <h4 class="m-b-20">تعداد دانلود پادکست ها</h4>
                        <h2 class="text-right"><i class="fas fa-download pull-left"></i><span>{{ $downloads }} بار</span></h2>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
@endsection
