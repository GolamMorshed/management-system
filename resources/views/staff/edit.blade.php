<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Staff</title>
</head>
<body>
    <input type="text" value="{{$staff->first_name}}">
    <br>
    <input type="text" value="{{$staff->last_name}}">
    <br>
    <input type="text" value="{{$staff->dob}}">
    <br>
    <input type="text" value="{{$staff->email}}">  
    <br>
    <input type="text" value="{{$staff->employment_type}}">
    
    <br>
    <input type="text" value="{{$staff->address}}">
    <br>
    <input type="text" value="{{$staff->postcode}}">
    <br>
    <input type="text" value="{{$staff->phone_no}}">
    <br>
    <select name="shift_type" id="shift_type">
        <option value="morning" @if($staff->shift_type === 'morning') selected @endif)>Morning</option>
        <option value="afternoon"@if($staff->shift_type === 'afternoon') selected @endif)>Afternoon</option>
        <option value="night" @if($staff->shift_type === 'night') selected @endif)>Night</option>
    </select>
    
    <br>
    
</body>
</html>