<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stock</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
    <br>
    <br>
    <div class="col-md-12">
        <div class="col-lg-10 mx-auto">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h3>Stock</h3>
                </div>
                <div class="card-content">
                    <div class="col-md-12 mt-3 mb-3">
                        <div class="col-lg-10 mx-auto">
                            <div class="row d-flex justify-content-around">
                                <a href="{{url('add')}}"><button class="btn btn-secondary">Stock Add</button></a>
                                <a href="{{url('out')}}"> <button class="btn btn-secondary">Stock Out</button></a>
                                <a href="{{url('report')}}"> <button class="btn btn-secondary">Report</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>