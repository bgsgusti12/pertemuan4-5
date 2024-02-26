<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-10">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CRUD APPLICATION</title>
    <style>
        body{
            text-align: center;
            
        }
    </style>
</head>
<body style="color: white; background-color: #1d2630;">

    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-5 mb-5"><strong>CRUB APPLICATION</strong></h1>
        </div>
        <div class="main row justify-content-center">
            <form action="" id="student-form" class="row justify-content-center mb-4" autocomplete="off">
                <div class="col-10 col-md-8 mb-3">
                    <label for="FirstName">First Name</label>
                    <input class="form-control" type="text" name="" id="firstname" placeholder="Enter First Name">
                </div>
                <div class="col-10 col-md-8 mb-3">
                    <label for="lastName">Last Name</label>
                    <input class="form-control" type="text" name="" id="lastname" placeholder="Enter Last Name">
                </div>
                <div class="col-10 col-md-8 mb-3">
                    <label for="roolNo">Roll No</label>
                    <input class="form-control" type="text" name="" id="roolno" placeholder="Enter Roll No">
                </div>
                <div class="col-10 col-md-8">
                    <input class="btn btn-success add-btn" type="submit" value="submit">
                </div>
            </form>
            <div class="col-12 col-md-10 mt-5">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                        <th>Frist Name</th>
                        <th>Last Name</th>
                        <th>Roll No</th>
                        <th>Frist Name</th>
                        </tr>
                    </thead>
                    <tbody id="student-list">
                        <tr>
                            <td>Bagas</td>
                            <td>rifai</td>
                            <td>16</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm edit">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>