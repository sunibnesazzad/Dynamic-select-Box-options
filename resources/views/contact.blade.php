<!DOCTYPE html>

<html>

<head>

    <title>Laravel 5.5 Ajax Request example</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body>

<div class="container">

    <h1>Laravel 5.5 Ajax Request example</h1>



    <form >

        <div class="form-group">

            <label>Name:</label>

            <input type="text" name="name" class="form-control" placeholder="Name" required="">

        </div>

        <div class="form-group">

            <label>Password:</label>

            <input type="password" name="password" class="form-control" placeholder="Password" required="">

        </div>

        <div class="form-group">

            <strong>Email:</strong>

            <input type="email" name="email" class="form-control" placeholder="Email" required="">

        </div>

        <div class="form-group">

            {{--<button class="btn btn-success btn-submit">Submit</button>--}}
            <button class="btn btn-success btn-submit1" value="S" name="name1">Value S</button>
            <button class="btn btn-success btn-submit2" value="L" name="name2">Value L</button>
            <button class="btn btn-success btn-submit3" value="M" name="name3">Value M</button>

        </div>

        <div class="form-group">
            <label>Name</label>
            <select name="category">
                @foreach ($result1 as $result)
                <option value="{{$result->name}}"> {{$result->name}} </option>
                @endforeach
            </select>
        </div>

    </form>

</div>

</body>

{{--<script type="text/javascript"> $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit").click(function(e){
        e.preventDefault();
        var name = $("input[name=name]").val();
        var password = $("input[name=password]").val();
        var email = $("input[name=email]").val();

        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name, password:password, email:email},
            success:function(data){
                alert(data.success);
            }
        });
    });
</script>--}}

<script type="text/javascript">



    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  /*for bunnon S*/
    $(".btn-submit1").click(function(e){
        e.preventDefault();
        var name = $("button[name=name1]").val();
        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='category'").html('');
                $("select[name='category'").html(data.options);
                /*alert(data.success);*/
            }
        });
    });
    /*for bunnon L */
    $(".btn-submit2").click(function(e){
        e.preventDefault();
        var name = $("button[name=name2]").val();
        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='category'").html('');
                $("select[name='category'").html(data.options);
                /*alert(data.success);*/
            }
        });
    });

    /*for bunnon M */
    $(".btn-submit3").click(function(e){
        e.preventDefault();
        var name = $("button[name=name3]").val();
        $.ajax({
            type:'POST',
            url:'/ajaxRequest',
            data:{name:name},
            success:function(data){
                $("select[name='category'").html('');
                $("select[name='category'").html(data.options);
                /*alert(data.success);*/
            }
        });
    });
</script>

</html>