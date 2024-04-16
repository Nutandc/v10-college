<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<h2>HTML Table</h2>
<a href="{{route('mobiles.create')}}" class="button button-primary">Create</a>

<table>
  <tr>
    <th>Brand Name</th>
    <th>MOdel</th>
    <th>Storage</th>
    <th>Price</th>
    <th>Action</th>
  </tr>

  @foreach($mobiles as $key=>  $mobile)
  <tr>
    <td>{{$mobile->brand}}</td>
    <td>{{$mobile->model}}</td>
    <td>{{$mobile->storage}}</td>
    <td>{{$mobile->price}}</td>
    <!-- <td><a href="{{' mobiles/'.$mobile->id.'/edit'}}">Edit</a> -->
    <td>
      <a href="{{route('mobiles.edit',[$mobile->id])}}">Edit</a>
    |

    <form action="{{route('mobiles.destroy',[$mobile->id])}}" method="post">
      @method('delete')
        @csrf
        <button type="submit" class="btn btn-default" onclick="return confirm('Are you sure?')">Delete</button>
  </form>

  </td>
  </tr>
  @endforeach
</table>

</body>
</html>

