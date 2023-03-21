<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $showId->Firstname }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>{{ $showId->Firstname }}</h1>
    </div>

    <div class="container mt-5">

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <strong>ID</strong>
                        <label style="float: right;">{{ $showId->id }}</label>
                    </li>
                    <li class="list-group-item">
                        <strong>Firstname</strong>
                        <label style="float: right;">{{ $showId->Firstname }}</label>
                    </li>
                    <li class="list-group-item">
                        <strong>Lastname</strong>
                        <label style="float: right;">{{ $showId->Lastname }}</label>
                    </li>
                    <li class="list-group-item">
                        <strong>Email</strong>
                        <label style="float: right;">{{ $showId->email }}</label>
                    </li>
                    <li class="list-group-item">
                        <strong>Deleted At</strong>
                        <label style="float: right;">{{ $showId->deleted_at }}</label>
                    </li>
                    <li class="list-group-item">
                        <strong>Last Update</strong>
                        <label style="float: right;">{{ $showId->updated_at }}</label>
                    </li>
                    <li class="list-group-item">
                        <strong>Created At</strong>
                        <label style="float: right;">{{ $showId->created_at }}</label>
                    </li>
                </ul>
                <form action="/show/{{ $showId->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/edit/{{ $showId->id }}" class="btn btn-outline-primary mt-4">Edit</a>
                    <button class="btn btn-outline-danger mt-4" name="delete">Delete</button>
                    <a href="/softdelete/{{ $showId->id }}" class="btn btn btn-outline-danger mt-4" style="margin-right:4px;" name="softdelete">SoftDelete</button>
                    <a href="/" class="btn btn-outline-success mt-4">Back</a>
                </form>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</body>

</html>
