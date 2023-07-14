@extends('templates.layout')
@section('content')

<table class="row container" border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>address</th>
        <th>status</th>
    </tr>
    @foreach($student as $std)
    <tr>
        <td>{{$std->id}}</td>
        <td>{{$std->name}}</td>
        <td>{{$std->email}}</td>
        <td>{{$std->address}}</td>
        @if($std->status == 1 )
        <td>Có mặt</td>
        @else
        <td>Vắng mặt</td>
        @endif
    </tr>
    @endforeach
</table>
@endsection