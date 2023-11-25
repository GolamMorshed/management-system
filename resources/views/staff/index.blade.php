<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Staffs</title>
</head>
<body>
    @foreach ($staffs as $staff)
        <p>{{$staff->first_name}}</p>
        <p>
            @can('isAdmin')
            <a href="{{ route('staff.edit', ['staff' => $staff]) }}">
                <button>Edit</button>
            </a>
            @endcan
            
        </p>
    @endforeach
</body>
</html>