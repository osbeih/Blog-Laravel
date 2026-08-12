<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
        <!-- As a link -->
    <nav class="navbar bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/test">Blogs</a>
        </div>
    </nav>
       
    <div class="container mt-5 p-2">
        <a class="btn btn-success">Create Post</a>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted_By</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post )
                    <tr>
                        <th scope="row">{{ $post['id'] }}</th>
                        <td>{{ $post['title'] }}</td>
                        <td>{{ $post['posted_by'] }}</td>
                        <td>{{ $post['created_at'] }}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="posts/{{ $post['id'] }}">view</a>
                            <a class="btn btn-primary btn-sm">edit</a>
                            <a class="btn btn-danger btn-sm">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>