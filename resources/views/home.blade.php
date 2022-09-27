<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="m-5 rounded border">
    <table class="table">
        <thead>
          <tr class="table-dark">
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dataoftable as $item )
          <tr>
            <th scope="row">{{$item['id']}}</th>
            <td>{{$item['name']}}</td>
            <td>{{$item['email']}}</td>
      
          </tr>
          @endforeach
         
       
        </tbody>
      </table>
      
    </div>
    <span>
      {{ $dataoftable->links() }}

      
    </span>
    <style>
      .w-5{
        display: none;  
      }
    </style>
</body>
</html>