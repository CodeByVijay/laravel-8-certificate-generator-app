<!doctype html>
<html lang="en">
  <head>
    <title>Certificate Generator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
<div class="container mt-5 mb-5 w-50">
    <div class="card">
        <div class="card-header">
            <h4 class="text-center text-primary">Certificate Generator</h4>
        </div>
        <div class="card-body">
            <form action="{{route('certificate')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="">Enter Name</label>
                  <input type="text" name="name" id="" class="form-control" placeholder="Enter Student Name">
                </div>
                <div class="btn">
                    <button type="submit" class="btn btn-success">Generate</button>
                </div>
            </form>
        </div>
        <div class="card-footer">&copy; Vijay Amule</div>
    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
