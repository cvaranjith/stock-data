<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stock</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>
    <br>
    <br>
    <div class="col-md-12">
        <div class="col-lg-11 mx-auto">
            <div class="row d-flex justify-content-around">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="crad-header text-center mb-2">
                            <h3>Stock In Report</h3>
                        </div>
                       <div class="card-content">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Date</th>
                                    <th>IN</th>
                                    <th>Opening</th>                           
                                   
                                </tr>
                            </thead>
                            @foreach ( $report_in as $in )
                            <tr>
                                    <td>{{$in->product}}</td>
                                    <td>{{$in->date}}</td>
                                    <td>{{$in->in_qty}}</td>
                                    <td>Opening</td>                           
                                                 
                            </tr>
                            @endforeach
                        </table>
                       </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="crad-header text-center mb-2">
                            <h3>Stock Out Report</h3>
                        </div>
                        <div class="card-content">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Date</th>
                                        <th>Out</th>
                                        <th>Clossing</th>                           
                                       
                                    </tr>
                                </thead>
                                @foreach ( $report_out as $out )
                                <tr>
                                        <td>{{$out->product}}</td>
                                        <td>{{$out->date}}</td>
                                        <td>{{$out->out_qty}}</td>
                                        <td>Closse</td>                           
                                                  
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
