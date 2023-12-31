@extends('templates.layout')
@section('content')
<div class="">
    <h1>Add Custommer</h1>
    <form action="{{ route('store')}}" method="POST" enctype="multipart/formdata">
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
        <div class="row col-4 my-3">
            <label for="">Avata</label>
            <img id="anh_the_preview" src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" alt="your image" style="max-width: 250px; height:200px; margin-bottom: 10px;" class="img-fluid" />
            <input type="file" class="form-control" name="image" accept="image/*">
        </div>
        <div class="row col-1 mt-4">
            <button type="submit" class="btn btn-primary">Gửi</button>
        </div>

    </form>
</div>
@endsection