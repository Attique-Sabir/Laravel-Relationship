<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Relationship</title>
</head>
<body>
<div class="container">
  <h2>Countries</h2>
  <p>Choose Your Country</p>                                          
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Select Country
    </button>
    <div class="dropdown-menu">
    @foreach($country as $c)

      <a class="dropdown-item" href="{{route('view_province', $c->id )}}">{{$c->country_name}}</a>
      @endforeach

    </div>
  </div>
</div>


                <table class="table table-bordered table-striped table-hover bg-info">
                <h1 class="text-primary text-center">1-1 Relation</h1>
            <thead>
            <th>user Id</th>
            <th>user Name</th>
            <th>Address</th>


            </thead>
            @foreach($user as $u)
            <tbody>
           
            <td>{{$u->id}}</td>
            <td>{{$u->name}}</td>

            <td>{{$u->address->address}}</td>

            </tbody>
@endforeach
                </table>
                
                <table class="table table-bordered bg-warning">
                <h1 class="text-primary text-center">1-Many Relation</h1>
            <thead>
            <th>Country Id</th>
            <th>Country Name</th>
            <th>province</th>


            </thead>
            @foreach($country as $c)


            <tbody>
           
            <td>{{$c->id}}</td>
            <td>{{$c->country_name}}</td>
           
           <td>
           @foreach($c->province as $p)
           {{$p->province_name}}<br>
           @endforeach
           </td>
          


            </tbody>
@endforeach
</table>
                
                <table class="table table-bordered bg-danger">
                <h1 class="text-primary text-center">Many-Many Relation</h1>
            <thead>
            <th>Student Id</th>
            <th>Course Name</th>

            <th>Student Name</th>


            </thead>
            @foreach($cuser as $cu)


            <tbody>
           
            <td>{{$cu->id}}</td>
            <td>{{$cu->course_name}}</td>
           
           <td>
           @foreach($cu->users as $u)
           {{$u->name}}<br>
           @endforeach
           </td>
          


            </tbody>
@endforeach
                </table>

            </div>
        </div>
    </body>
</html>
