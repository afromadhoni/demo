<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LIST USER HOBBIES</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">    
            <br />
            <h1 class="text-center text-primary">List User Hobbies</h1>
            <br />
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Users</th>
                            <th>Hobbies</th>
                            <th>User_Hobbies</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{ $row->username }}</td>
                                <td>{{ $row->hobby }}</td>
                                <td>{{ $row->id_hobby }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
