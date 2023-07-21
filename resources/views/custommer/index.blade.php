@extends('templates.layout')
@section('content')
<form action="{{route('search')}}" method="POST" class="row">
    @csrf
    <input type="text" name="search" class="form-control col-3">
    <button type="submit" class="btn btn-primary col-1">search</button>
</form>
<table class="row container" border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>birthday</th>
        <th>gender</th>
        <th>ảnh</th>

    </tr>
    @foreach($custommer as $cus)
    <tr>
        <td>{{$cus->id}}</td>
        <td>{{$cus->name}}</td>
        <td>{{$cus->email}}</td>
        <td>{{$cus->birthday}}</td>
        @if($cus->gender == 0 )
        <td>Nam</td>
        @else
        <td>Nữ</td>
        @endif
        <td><img src="{{$custommer->image? Storage::url($custommer->image) : ''}}" alt=""></td>
        <td><a href="{{ url('/custommer-update/{$id}')}}">sửa</a></td>
    </tr>
    @endforeach
</table>
@endsection