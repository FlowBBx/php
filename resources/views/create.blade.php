<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create Person</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>Create Person</h1>
    </div>

    <div class="container mt-5">

        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    Persoana a fost salvata in baza de date.
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <form action="/" method="POST">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label class="form-label">Firstname:</label>
                        <input type="text" class="form-control" placeholder="Enter first name" name="Firstname">
                    </div>
                    <div class="mb-3 mt-3">
                        <label class="form-label">Lastname:</label>
                        <input type="text" class="form-control" placeholder="Enter last name" name="Lastname">
                    </div>
                    <div class="mb-3 mt-3">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" placeholder="Enter email" name="email">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Save Person</button>
                    <button type="reset" class="btn btn-success mt-3">Reset</button>
                    <a href="/" class="btn btn-outline-danger mt-3">Cancel</a>
                </form>

            </div>
        </div>

    </div>

</body>

</html>
