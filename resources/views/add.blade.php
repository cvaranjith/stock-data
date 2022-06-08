<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stock Add</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
    <br>
    <br>
    <div class="col-md-12">
        <div class="col-lg-10 mx-auto">
            <div class="card shadow">
                 <div class="crad-header ml-2 mt-2 mb-2">
                    <a href="{{url('/')}}"> <button class="btn btn-success">Go Back</button> </a>
                </div>
               <div class="card-content">
                <div class="col-md-12 mt-3 mb-3">
                    <form action="{{url('store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-4">Product</label>
                            <div class="col-sm-8">
                                
                              <select name="product_id" id="search"  class="form-control">
                                <option value="">Please Select</option>
                                @foreach ($products as $product)
                  
                                  <option value="{{$product->id}}">{{$product->product}}</option>
                                @endforeach 
                              </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4">Date</label>
                            <div class="col-sm-8">
                                <input type="date" name="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4">Quantity</label>
                            <div class="col-sm-8">
                                <input type="number" name="qty" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="row d-flux justify-content-center">
                                <button class="btn btn-success">Add</button>
                            </div>
                        </div>

                    </form>

                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success','')}}
                        </div>
                    @endif
                </div>
               </div>
            </div>
        </div>
    </div> 
</body>
</html>