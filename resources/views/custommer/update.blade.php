@extends('templates.layout')
@section('content')
<div class="">
    <h1>Update Custommer</h1>
    <form action="{{ route('put')}}" method="POST">
        @csrf

        <div class="row col-4 my-3">
            <label for="">Tên</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="row col-4 my-3">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="row col-4 my-3">
            <label for="">Ngày sinh</label>
            <input type="date" class="form-control" name="birthday">
        </div>
        <div>
            <label for="">Giới tính</label>
            nam <input type="radio" name="gender" value="0">
            nữ <input type="radio" name="gender" value="1">
        </div>
        <div class="row col-1 mt-4">
            <button type="submit" class="btn btn-primary">Gửi</button>
        </div>

    </form>
</div>
@endsection