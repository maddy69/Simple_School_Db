<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        background-color: #f8f9fa;
        }
    </style>
    <title>Student Data</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">StudentDB</a>
</nav>

<div class="container mt-5">
    @foreach($data as $tableName => $tableData)
        <h3 class="mt-4 mb-3">{{ ucfirst(str_replace('_', ' ', $tableName)) }}</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        @foreach($tableData[0] ?? [] as $key => $value)
                            <th>{{ ucfirst(str_replace('_', ' ', $key)) }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($tableData as $row)
                        <tr>
                            @foreach($row as $value)
                                <td>{{ $value }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
</div>

<footer class="mt-5">
    <div class="text-center py-3">© 2023 StudentDB Demo!!</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
