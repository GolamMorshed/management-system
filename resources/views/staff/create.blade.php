<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy4Ck5MvkuA7eVX6SfB4imGt1Va4MZhe" crossorigin="anonymous">
    <title>Create Staff</title>
</head>
<body>
    <h1>Create Staff</h1>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form action="{{ route('staff.store') }}" method="post">
        @csrf

        <label for="initial">Initial:</label>
        <input type="text" id="initial" name="initial" required>
        <br>

        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
        <br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
        <br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>

        <label for="employment_type">Employment Type:</label>
        <select id="employment_type" name="employment_type" required>
            <option value="part-time">Part-Time</option>
            <option value="full-time">Full-Time</option>
        </select>
        <br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
        <br>

        <label for="postcode">Postcode:</label>
        <input type="text" id="postcode" name="postcode" required>
        <br>

        <label for="phone_no">Phone Number:</label>
        <input type="tel" id="phone_no" name="phone_no" required>
        <br>

        <label for="shift_type">Shift Type:</label>
        <select id="shift_type" name="shift_type" required>
            <option value="morning">Morning</option>
            <option value="afternoon">Afternoon</option>
            <option value="night">Night</option>
        </select>
        <br>

        <button type="submit">Create Staff</button>
    </form>
</body>
</html>
