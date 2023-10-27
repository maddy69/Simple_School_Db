<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Home</title>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div>
            <h1>Welcome, Please click the link below:</h1>
            <p class="text-center"><a href="{{ route('students.index') }}" class="btn btn-primary">View Student Data</a></p>
        </div>
    </div>
</body>
</html>
