<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>Add Item</title>
</head>

<body>
    <section style="padding-top:60px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Add Item
                            <a href="/show" class="btn btn-success float-right">Back</a>
                        </div>
                        <div class="card-body">
                            @if (Session::has('item-created'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('item-created')}}
                                </div>
                            @endif
                            <form action="{{ route('item.create') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="from-group">
                                    <label for="title">Item Title</label>
                                    <input type="text" name="title" class="form-control"
                                        placeholder="Enter item title">
                                </div>
                                <div class="from-group">
                                    <label for="description">Item Description</label>
                                    <textarea name="description" class="form-control" rows="4"></textarea>
                                </div>
                                <button type="submit" class="btn btn-success mt-4">Add Item</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>


</html>
