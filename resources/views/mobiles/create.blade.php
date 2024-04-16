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
  <form action="{{route('mobiles.store')}}" method="post">
        @csrf
    <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->
        
    <div class="form-group">
      <label for="name">Brand:</label>
      <input type="name" class="form-control" id="brand" 
      value="{{old('brand')}}"
      placeholder="Enter name" name="brand">
    </div>
  
    <div class="form-group">
      <label for="model">MOdel:</label>
      <input type="text" class="form-control" id="model" 
      value="{{old('model')}}"
      placeholder="Enter model" name="model">
    </div>

    <div class="form-group">
      <label for="storage">storage:</label>
      <input type="number" class="form-control" id="storage" 
      value="{{old('storage')}}"
      placeholder="Enter storage" name="storage">
    </div>

    <div class="form-group">
      <label for="price">price:</label>
      <input type="number" class="form-control" id="price" 
      value="{{old('price')}}"
      placeholder="Enter price" name="price">
    </div>

  
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
