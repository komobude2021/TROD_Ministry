<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>The Root of David (TROD) - Admin Acces</title>

	<meta name="description" content="The Root of David also known as TROD is a Christian fellowship group committed to sharing love with our community, preaching the message of Jesus Christ and His kingdom">
    <meta name="keywords" content="The Root Of David,TROD,Christain Fellowship in Bradford,Church,Bradford,Church In Bradford,Bradford Church">
    <meta name="author" content="The Root of David (TROD)">
    <link rel="shortcut icon" href="{{ asset('images/favico.ico') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
        }
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        label {
            font-weight: bold;
        }
    </style>
  </head>
  <body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin-top: 250px;">

                <div style="text-align: center">
                    <img src="{{ asset('images/logo.png') }}" style="width: 50%" />
                </div>

                <div><hr/></div>

                <div>
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul class="ul-error-list list-none">
                                @foreach ($errors->all() as $error)
                                    <li><i class="fa fa-info-circle"></i> {{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form name="form1" id="form1" method="POST" action="{{ route('adminsubmit') }}" autocomplete="off">
                        @csrf
                        <div class="form-group">
                          <label>Email Address:</label>
                          <input type="email" name="email" class="form-control" placeholder="Enter Email Address" required>
                        </div>
                        <div class="form-group">
                          <label>Password:</label>
                          <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary" style="width: 100%"> 
                                <i class="fa fa-lock"></i> Login
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>