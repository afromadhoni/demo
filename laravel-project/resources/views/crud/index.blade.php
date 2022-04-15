<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ide=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="assets/bootstrap-3.1.1/bootstrap-3.1.1/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset=3" style="margin-top:50px">
        <h4>Create User</h4>
        <hr>

        @if(Session::get("success"))
            <div class="alert alert-success">
                {{ Session::get("success")}}
            </div>
        @endif

        @if(Session::get("fail"))
            <div class="alert alert-danger">
                {{ Session::get("fail")}}
            </div>
        @endif

            <form action="add" method="post">

            @csrf

                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="enter username" value="{{old('username')}}">
                    <span style="color:red">@error('username'){{$message}} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="enter password" value="{{old('password')}}">
                    <span style="color:red">@error('password'){{$message}} @enderror</span>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">SAVE</button>
                </div>
            </form>
        </hr>
        </div>
    </div>
</div>

</body>
</html>