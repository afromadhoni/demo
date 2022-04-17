<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ide=edge">
    <title>INSERT HOBBIES</title>
    <link rel="stylesheet" href="assets/bootstrap-3.1.1/bootstrap-3.1.1/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset=3" style="margin-top:50px">
        <h4>Insert Hobbies</h4>
        <hr>

        @if(Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success')}}
            </div>
        @endif

        @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail')}}
            </div>
        @endif

            <form action="add4" method="post">

            @csrf

                <div class="form-group">
                    <label for="">Hobbies</label>
                    <input type="text" class="form-control" name="hobby" placeholder="enter hobby" value="{{old('hobby')}}">
                    <span style="color:red">@error('username'){{$message}} @enderror</span>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">INSERT</button>
                </div>
            </form>
        </hr>
        </div>
    </div>
</div>

</body>
</html>