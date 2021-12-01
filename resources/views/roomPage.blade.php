@extends('layouts.main')

@section('content')

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="/">首頁</a>
    </li>
</ul>
<br />


    <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">房型資料</h1>
    </div>
    <div class="form-label-group">
        房型名稱
        {{ $name }}
    </div>
    <br />
    <div class="form-label-group">
        價格
        {{ $price }}
    </div>
    <br />
    <div class="form-label-group">
        房間數
        {{ $quantity }}
    </div>
    <br />
    <div class="form-group">
        照片
       {{ $name }}
    </div>
    <br />
    <div class="form-group">
        房型簡介
        {{ $description }}
    </div>
    <br />
    <div class="text-center mb-4">
        <p><a href="/">回首頁</a></p>
    </div>


@endsection