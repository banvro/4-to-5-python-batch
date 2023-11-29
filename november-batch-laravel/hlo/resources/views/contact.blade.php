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

        <form action="/save-info-url" method="post">
            {{@csrf_field()}}
            <div style="padding: 59px; margin-left: 57px; margin-right: 59px;">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name"
                        id="exampleFormControlInput1" placeholder="Enter your name">
                    @error("name")
                        <span style="color: red;" >{{$message}}</span>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email
                        address</label>
                    <input type="text" class="form-control" name="email"
                        id="exampleFormControlInput1" placeholder="Enter your email">
                    @error("email")
                <span style="color: red;" >{{$message}}</span>
                 @enderror
                </div>
                

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example
                        textarea</label>
                    <textarea class="form-control" name="desc" id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                        @error("desc")
                        <span style="color: red;" >{{$message}}</span>
                         @enderror
                </div>
    
                <div style="text-align: center;">
                    <button type="submit" class="btn btn-success">Submit</button>
    
                </div>
            </div>
        </form>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    </body>
</html>