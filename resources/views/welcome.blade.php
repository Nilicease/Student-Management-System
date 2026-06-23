<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
</head>

<body>
    <form action="{{ route('user_register') }}" method="post">
        @csrf
        <label for="name">Full Name</label>
        <input type="text" name="name" id="name" placeholder="Ex. John Doe" required>
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" placeholder="example@email.com" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your Password" required>
        <input type="submit" value="Register">

    </form>
</body>

</html>