<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>GENDER</th>
                    <th>DOB</th>
                    <th>ADDRESS</th>
                    {{-- <th>LOCATION</th> --}}
                    <th>CITY</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($arham as $values)
                    <tr>
                        <td>{{ $values->std_id }}</td>
                        <td>{{ $values->name }}</td>
                        <td>{{ $values->email }}</td>
                        <td>
                            @if ($values->gender == 'M')
                                MALE
                            @elseif ($values->gender == 'F')
                                FEMALE
                            @else
                                OTHER
                            @endif
                        </td>
                        <td>{{ $values->dob }}</td>
                        <td>{{ $values->address }}</td>
                        {{-- <td>{{ $values->location }}</td> --}}
                        <td>{{ $values->city }}</td>
                        <td>
                            @if ($values->status == 1)
                                <span class="badge bg-success">ACTIVE</span>
                            @else
                                <span class="badge bg-danger">INACTIVE</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('/admission/delete', [$values->std_id]) }}" class="btn btn-danger btn-sm">Delete</a><br>
                            <button class="btn btn-primary btn-sm">Edit</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
