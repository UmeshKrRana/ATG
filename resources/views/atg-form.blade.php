<!doctype html>
<html lang="en">
  <head>
    <title>ATG :: Register Form </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="container mt-4">
            <form action="{{url('atg')}}" method="post">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 m-auto">
                        <div class="card shadow">
                            <div class="card-header">
                                <h5 class="card-title">ATG Registration</h5>
                            </div>
                            <div class="card-body">
                                @if (Session::has('success'))
                                    <div class="alert alert-info">{{ Session::get('success') }}</div>
                                @elseif(Session::has('exist'))
                                    <div class="alert alert-danger">{{ Session::get('exist') }}</div>
                                @endif

                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                    @if ($errors->has('name'))
                                    <small class="text-danger">{{$errors->first('name')}}</small>
                                    @endif
                                </div> 
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Your E-mail">
                                    @if ($errors->has('email'))
                                    <small class="text-danger">{{$errors->first('email')}}</small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Your Pincode">
                                    @if ($errors->has('pincode'))
                                    <small class="text-danger">{{$errors->first('pincode')}}</small>
                                    @endif
                                </div>  
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                                {{ csrf_field() }}
                                </div>
                            </div>   
                        </div>  
                    </div>               
                </div>
            </form>
        </div>
  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>