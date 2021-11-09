{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row" style="margin-top: 120px;">
            <div class="col-md-offset-3 col-md-6">
    
                {{-- @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4 style="margin-bottom: 0;"><i class="icon fa fa-ban"></i> {{Session('success')}}</h4>
                    </div>
                @endif --}}
    
                {{-- <form action="{{route('sms') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Mobile number</label>
                        <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile number">
                    </div>
                    <button type="submit" class="btn btn-primary">Send SMS</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html> --}} 
 @extends('layouts.app')
@section('content')
<form action="{{route('check') }}" method="POST">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-6">
<div class="form-group">
    <label for="email">Mobile number</label>
    <input type="text" name="phone" class="form-control" id="phone" placeholder="Mobile number">
</div>
<button type="submit" class="btn btn-primary">Send SMS</button>
            </div>
        </div>
    </div>
</form>
@endsection 

