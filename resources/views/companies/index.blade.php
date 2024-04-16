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
<a href="{{route('companies.create')}}" class="button button-primary">Create</a>

<table>
  <tr>
    <th>Company Name</th>
    <th>Address</th>
    <th>Est Date</th>
    <th>Types</th>
    <th>Action</th>
  </tr>
  @foreach($companies as  $company)
  <tr>
    <td>{{$company->name}}</td>
    <td>{{$company->address}}</td>
    <td>{{$company->est_date}}</td>
    <td>{{$company->types}}</td>
    <!-- <td><a href="{{' companies/'.$company->id.'/edit'}}">Edit</a> -->
    <td>
      <a href="{{route('companies.edit',[$company->id])}}">Edit</a>
    |

    <form action="{{route('companies.destroy',[$company->id])}}" method="post">
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

