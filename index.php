<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <title>Customer Queuing System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <h1 class="display-5 text-white text-center mt-5">Queue Management</h1>

        <div class="row justify-content-center mt-3">

            <div class="col-sm-2 bg-color p-2 m-3 text-white shadow">
                <ul class="nav flex-column nav-pills text-center">
                    <li class="nav-item">
                        <a class="nav-link active m-1" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link non-active m-1" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link non-active m-1" href="#">Link</a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-8 bg-color p-3 m-3 shadow">
                <table class="table table-bordered bg-faded">
                    <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-custom float-right" data-toggle="modal" data-target="#exampleModalLong">
                    Add Customer
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">New Customer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group mb-4">
                                        <label class="font-weight-bold" for="exampleSelect1">Service Type</label>
                                        <select class="form-control" id="exampleSelect1">
                                            <option>None</option>
                                            <option>Housing</option>
                                            <option>Benefits</option>
                                            <option>Council Tax</option>
                                            <option>Fly-tipping</option>
                                            <option>Missed Bin</option>
                                        </select>
                                    </div>
                                    <div class="btn-group font-weight-bold" data-toggle="buttons">
                                        <label class="btn btn-primary active">
                                            <input type="radio" name="options" id="option1" autocomplete="off" checked> Citizen
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" id="option2" autocomplete="off"> Organisation
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" id="option3" autocomplete="off"> Anonymous
                                        </label>
                                    </div>
                                    <div class="form-group font-weight-bold">
                                        <label for="exampleSelect1">Title</label>
                                        <select class="form-control" id="exampleSelect1">
                                            <option>Mr.</option>
                                            <option>Mrs.</option>
                                            <option>Miss.</option>
                                            <option>Ms.</option>
                                            <option>Mx.</option>
                                        </select>
                                    </div>
                                    <div class="form-group font-weight-bold">
                                        <label for="formGroupExampleInput">First Name</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First Name">
                                    </div>
                                    <div class="form-group font-weight-bold">
                                        <label for="formGroupExampleInput2">Last Name</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Last Name">
                                    </div>
                                    <div class="form-group font-weight-bold">
                                        <label for="formGroupExampleInput2">Organisation Name</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Organisation Name">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>