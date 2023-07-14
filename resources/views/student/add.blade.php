@extends('templates.layout')
@section('content')
<div class="">
    <h1>Add student</h1>
    <form action="{{ url('/students-add')}}" method="POST">
        <div class="row col-4 my-3">
            <label for="">Tên</label>
            <input type="text" class="form-control" name="ten">
        </div>
        <div class="row col-4 my-3">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="row col-4 my-3">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" name="address">
        </div>
        <div class="row col-1 mt-4">
            <button type="submit" class="btn btn-primary">Gửi</button>
        </div>

    </form>
</div>
@endsection