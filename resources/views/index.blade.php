<!DOCTYPE html>
<html lang="en">

<head>
    <title>People List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>People List</h1>
    </div>

    <div class="container mt-5">

        <div class="row">
            <div class="col-sm-12">
                <a href="/create" class="btn btn-outline-primary mb-4">Add new person</a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Updated At</th>
                            <th>Deleted At</th>
                            <th>Created At</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($values as $val)
                            <tr>
                                <td>{{ $val->id }}</td>
                                <td>{{ $val->Firstname }}</td>
                                <td>{{ $val->Lastname }}</td>
                                <td>{{ $val->email }}</td>
                                <td>{{ $val->updated_at }}</td>
                                <td>{{ $val->deleted_at }}</td>
                                <td>{{ $val->created_at }}</td>
                                <td>
                                    <a href="/show/{{ $val->id }}">show</a> &nbsp;
                                    <a href="/edit/{{ $val->id }}">edit</a> &nbsp;
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <ul class="pagination mt-4">
            <li class="page-item"><a class="page-link" href="">Previous</a></li>
            <li class="page-item"><a class="page-link" href="">1</a></li>
            <li class="page-item"><a class="page-link" href="">2</a></li>
            <li class="page-item"><a class="page-link" href="">3</a></li>
            <li class="page-item"><a class="page-link" href="">Next</a></li>
        </ul>

    </div>

</body>

</html>
