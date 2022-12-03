<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
          {{-- <td> {{$Mobile->id}}</td>
          <td> {{$Mobile->model}}</td>
          <td> {{$Customer->name}}</td> --}}

          <td> {{$customer->id}}</td>
          <td> {{$customer->name}}</td>
          <td> {{$customer->email}}</td>
          <td> {{$customer->mobile->model}}</td>
        </tr>
    </table>
</body>
</html>