
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LARAVEL CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>STUDENT INFORMATION</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
 <a href="{{ url('/form') }}" class="btn btn-warning">ADD STUDENT</a>
 <table class="table table-bordered">
    <tr class="table-primary">
        <th>sl</th>
        <th>name</th>
        <th>email</th>
        <th>address</th>
        <th>action</th>
    </tr>
    @foreach ($data as $d)
        
    <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{ $d->name }}</td>
        <td>{{ $d->email }}</td>
        <td>{{ $d->address }}</td>
        <td>
            <a href="{{ url('/edit/'.$d->id) }}" class="btn btn-success">EDIT </a>
            <form action="{{ url('/delete/'.$d->id) }}" method="POST">
              @csrf
              @method('delete')
            <button class="btn btn-danger">Delete</button>
          </form>
            {{-- <a href="{{ url('/delete/'.$d->id) }}"  class="btn btn-danger">DELETE</a> --}}
        </td>
    </tr>

    @endforeach
 </table>