<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous">
    </head>
    <body>
        <div style="padding: 5%;">
            <h1 style="text-align: center;">Showing Data</h1>

        <div class="row">

            @foreach ($myalldata as $data)
                
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card" style="margin-bottom: 26px;">
                    <div class="card-body">
                        <h5 class="card-title">User Id : {{$data->id}}</h5>
                        <h5 class="card-title">User Name : {{$data->name}}</h5>
                        <h5 class="card-title">User Email : {{$data->emial}}</h5>
                        <p class="card-text">User Added On : {{$data->created_at}}.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
           
            @endforeach

        </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    </body>
</html>