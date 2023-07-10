<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>

<body>
    <h1>{{$name}}</h1>
    <table>
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
        @endforeach;
    </table>
</body>

</html>