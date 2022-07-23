<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrants</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }

        .registrants {
            border-collapse: collapse;
            width: 100%;
        }

        .registrants th {
            text-align: left;
            background: #d7d8d7;
        }

        .registrants th,
        .registrants td {
            border: 1px solid #5f605f;
            padding: 8px;
        }
    </style>
</head>

<body>
    <table class="registrants">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>College/Institute</th>
                <th>Faculty</th>
                <th>Signature</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registrants as $registrant)
            <tr>
                <td>{{ $registrant->name }}</td>
                <td>{{ $registrant->email }}</td>
                <td>{{ $registrant->institute }}</td>
                <td>{{ $registrant->faculty }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>

    </table>
</body>

</html>
