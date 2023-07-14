@extends('templates.layout')
@section('content')

<table class="row container" border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>birthday</th>
        <th>gender</th>
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
    </tr>
    @endforeach
</table>
@endsection