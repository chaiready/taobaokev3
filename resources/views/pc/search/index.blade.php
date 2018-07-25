@extends('pc.layouts.master')
@section('title')
  @include('pc.layouts._title_category')
@stop
@section('headcss')

@stop
@section('content')
    <header>
        @include('pc.layouts._save_url')
    </header>
    @include('pc.layouts._nav_tab')
    @include('pc.search._search_dashboard')
    <div class="container-fluid" id="recommend">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h3>——— 猜你喜欢 ———</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid coupon-list">
        <div class="container">
            <div class="row">
                @include('pc.layouts._guess_you_like_for_coupon')
            </div>
        </div>
    </div>
    @include('pc.layouts._ajax_tips')
    @include('pc.layouts._footer_adv')
    @include('pc.layouts._footer')
@stop
@section('footJs')
    @include('pc.search._ajax_items_coupon')
@stop
