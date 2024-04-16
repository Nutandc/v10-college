<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Create Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <h2>Login FOrm Form</h2>
    <form action="{{route('login.store')}}" method="post">
        @csrf
        <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->


        <div class="form-group">
            <label for="model">EMail:</label>
            <input type="email" class="form-control" id="email"
                   value="{{old('email')}}"
                   placeholder="Enter email" name="email">
        </div>

        <div class="form-group">
            <label for="storage">Password:</label>
            <input type="password" class="form-control" id="password"
                   placeholder="Enter password" name="password">
        </div>
        <div class="form-group">
            <label for="remember_me">Remember Me:</label>
            <input type="checkbox" class="checkbox" id="remember_me"
                   name="remember" value="1">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>
