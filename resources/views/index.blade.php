<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ownego</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<div class="container-fluid main-container">
    <div class="main">
        <div>
            <div class="text-center">
                <h2 style="color: white">
                    Milk Tea Store
                </h2>
            </div>
            <ul style="color: white" class="text-center">
                {{--                @for($index = 0; $index < 4; $index++)--}}
                {{--                        <h2 class="text-center">--}}
                {{--                            <li style="color: white"><a href="#">Store {{$index + 1}}</a></li>--}}
                {{--                        </h2>--}}
                {{--                @endfor--}}
                <h2 class="text-center">
                    <li style="color: white"><a href="#"><h2 style="color: lightblue">Store 1</h2></a></li>
                </h2>
                <h2 class="text-center">
                    <li style="color: white"><a href="#"><h2 style="color: lightblue">Store 2</h2></a></li>
                </h2>

                <h2 class="text-center">
                    <li style="color: white"><a href="#"><h2 style="color: lightblue">Store 3</h2></a></li>
                </h2>

                <h2 class="text-center">
                    <li style="color: white"><a href="#"><h2 style="color: lightblue">Store 4</h2></a></li>
                </h2>
            </ul>
        </div>
    </div>
    <div class="sidebar">
        <div class="text-center">
            <h2 style="color: black;font-size: 50px">
                Store 1 Menu
            </h2>
        </div>
        <div class="filter-wrapper">
            <div class="dropdown">
                <button type="button" class="btn">Filter</button>
            </div>
        </div>
        <div class="filter-wrapper">
            <div class="sortBy">
                <h4 style="color: black;font-size: 25px">Sort By</h4>
            </div>
            <div>
                <div class="filterName">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Name
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownexport">
                        <a class="dropdown-item" href="#">Name</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="checkBox">
            <h4 style="font-size: 25px;color: black">Toppings: </h4>
            @for($index = 0; $index <= 6; $index++)
                <input class="checkBoxStyle" type="checkbox">Milk Foam
            @endfor
        </div>
        <div class="row">
            @for($index = 0; $index < 3; $index++)
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-stretched">
                                    <thead>
                                    <tr>
                                        <h4>
                                            MT-0{{$index+1}}
                                        </h4>
                                        @foreach($products as $product)
                                            <h4 style="font-size: 20px;color: black">
                                                {{$product->name}}
                                            </h4>
                                        @endforeach
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <h3 style="font-size: 20px;color: black">Toppings: </h3>
                                            Milk Foam
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="price">
                                                <h1 style="font-size: 30px;color: black; margin-left: 160px">$4,8</h1>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>
