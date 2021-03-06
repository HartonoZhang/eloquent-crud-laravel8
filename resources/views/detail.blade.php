<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>Detail Item</title>
</head>

<body>

    <section style="padding-top:60px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Detail Item
                            <a href="/show" class="btn btn-success float-right">Back</a>
                        </div>
                        <div class="card-body">
                           <h1>{{$item->title}}</h1>
                           <p>{{$item->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>


</html>
