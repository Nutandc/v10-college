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
  <h2>Student Create Form</h2>
  <form action="{{route('companies.store')}}" method="post">
        @csrf
    <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->
        
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" 
      value="{{old('name')}}"
      placeholder="Enter name" name="name">
    </div>
  
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" 
      value="{{old('address')}}"
      placeholder="Enter address" name="address">
    </div>

    <div class="form-group">
      <label for="est_date">Est Date:</label>
      <input type="date" class="form-control" id="est_date" placeholder="Enter address" name="est_date">
    </div>
    <div class="form-group">
      <label for="types">Types:</label>
      <select name="types" id="types" class="form-control" >
        <option value="test"> Test </option>
        <option value="engineering"> engineering </option>
        <option value="finance"> finance </option>
    </div>

 
    <div class="status">
      <label><input type="checkbox" name="status"> Status</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
