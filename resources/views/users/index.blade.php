<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
   

<h1>A Fancy Table</h1>

<table id="customers">

<h2><?php echo $title; ?></h2>

 <h2>{{ $title }}</h2>

 <?php foreach($index_records as $key=> $record) { ?>
    <tr>
    <td> <?php echo $record[0]; ?> </td>
    <td> <?php echo $record[1]; ?> </td>
    <td> <?php echo $record[2]; ?> </td>
    <?php }  ?>


@foreach($index_records as $key=> $record)
  <tr>
    <!-- <td><?php echo $record[$key]; ?></td> -->
    <td> {{ $record[0] }} </td>
    <td> {{ $record[1] }} </td>
    <td> {{ $record[2] }} </td>
  </tr>
@endforeach
</table>

</body>
</html>


