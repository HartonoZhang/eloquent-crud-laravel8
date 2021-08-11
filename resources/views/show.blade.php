<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>List Items</title>
</head>

<body>
    <section style="padding-top:60px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            List Items
                            <a href="/add" class="btn btn-success float-right">Add Item</a>
                        </div>
                        <div class="card-body">
                            @if (Session::has('item-deleted'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('item-deleted')}}
                                </div>
                            @endif
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Item Title</th>
                                        <th>Item Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>
                                                <a href="/detail/{{ $item->id }}" class="btn btn-info">Details</a>
                                                <a href="/edit/{{ $item->id }}" class="btn btn-success">Edit</a>
                                                <a href="/delete-item/{{ $item->id }}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>


</html>
