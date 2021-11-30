@extends('layouts.main')

@section('content')

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="/">首頁</a>
    </li>
</ul>
<br />

<form action="/api/v1/rooms/edit/{{ $id }}" method="POST" style="width: 100%;" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">房型資料</h1>
    </div>
    <div class="form-label-group">
        <label for="roomName">房型名稱</label>
        <input type="text" name="roomName" class="form-control" value={{ $name }}>
    </div>
    <br />
    <div class="form-label-group">
        <label for="roomPrice">價格</label>
        <input type="number" name="roomPrice" class="form-control" value={{ $price }}>
    </div>
    <br />
    <div class="form-label-group">
        <label for="roomQuantity">房間數</label>
        <input type="number" name="roomQuantity" class="form-control" value={{ $quantity }}>
    </div>
    <br />
    <div class="form-group">
        <label for="roomImage">照片</label>
        <input type="file" class="form-control-file" id="roomImage" name="roomImage" value={{ $name }}>
    </div>
    <br />
    <div class="form-group">
        <label for="roomDescription">房型簡介</label>
        <textarea name="roomDescription" id="roomDescription" class="form-control" rows="10">{{ $description }}</textarea>
    </div>
    <br />
    <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
    <div class="text-center mb-4">
        <p><a href="/">回上一頁</a></p>
    </div>
</form>





    
    
    
    
    

@endsection