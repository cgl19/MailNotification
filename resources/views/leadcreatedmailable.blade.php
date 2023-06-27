

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: Arial, sans-serif;
        }
        .lead-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .lead-info {
            margin-top: 20px;
        }
        .lead-info-item {
            margin-bottom: 10px;
        }
        .lead-info-label {
            font-weight: bold;
        }
        .lead-info-value {
            color: #007bff;
            font-weight: bold;
        }
    </style>
  </head>
  <body>
   
  <div class="container">
        <h1 class="lead-title">New lead has created</h1>
      

        <div class="lead-info">
            <div class="lead-info-item">
                <span class="lead-info-label">First Name:</span>
                <span class="lead-info-value">{{$leadinfo['firstname']}}</span>
            </div>
            <div class="lead-info-item">
                <span class="lead-info-label">Last Name:</span>
                <span class="lead-info-value">{{$leadinfo['lastname']}}</span>
            </div>
            <div class="lead-info-item">
                <span class="lead-info-label">Email:</span>
                <span class="lead-info-value">{{$leadinfo['email']}}</span>
            </div>
            <div class="lead-info-item">
                <span class="lead-info-label">Phone:</span>
                <span class="lead-info-value">{{$leadinfo['phone']}}</span>
            </div>
            <div class="lead-info-item">
                <span class="lead-info-label">Company:</span>
                <span class="lead-info-value">{{$leadinfo['company']}}</span>
            </div>
            <div class="lead-info-item">
                <span class="lead-info-label">Title:</span>
                <span class="lead-info-value">{{$leadinfo['title']}}</span>
            </div>
            <div class="lead-info-item">
                <span class="lead-info-label">Consulting:</span>
                <span class="lead-info-value">{{$leadinfo['consulting']}}</span>
            </div>
            <div class="lead-info-item">
                <span class="lead-info-label">Message:</span>
                <span class="lead-info-value">{{$leadinfo['message']}}</span>
            </div>
        </div>
        <button type="button" class="btn btn-secondary btn-sm">Visit Now</button>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>