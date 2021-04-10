<!DOCTYPE html>
<html>
<head>
	<title>lab 3</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=swap" rel="stylesheet">
</head>
<body onload="load()">
    <div class="header">
        <div id="Home" onclick="window.location.reload()"><a href="{{ route('main')}}"><img id="homec" src="{{asset('images/coffee-312521_1280.webp')}}" width="50px" onmouseover = "bigc(this)" onmouseover = "big(this)" onmouseout="smallc(this)"></a> </div>
        <div id="Coffee" onmouseover = "big(this)" onmouseout="def(this)"><a href = "{{ route('coffee')}}">{{__('index.coffee_h')}}</a></div>
        <div id="Order_online" onclick = "change(this)" onmouseover = "big(this)" onmouseout="def(this)" ><a href = "{{ route('order')}}">{{__('index.order_o_h')}}</a></div>
        <div id="Contacts" onclick = "change(this)" onmouseover = "big(this)" onmouseout="def(this)"><a href = "{{ route('contacts')}}">{{__('index.contacts_h')}}</a></div>
    </div>
   

    <div class="main">
        <div class="imgmain">
            <img id="img" src="{{url('https://www.freepnglogos.com/uploads/coffee-png/coffee-east-side-deli-ltd-artisan-delicatessen-organic-15.png')}}" alt="cofee" width="420px">
        </div>
        
        <div class="text" >
             <h1 id="text1">{{__('index.welcome')}}</h1>
              <p >{{__('index.p')}}</p>
        </div>
    </div>
    <script src="js/main.js"></script>

</body>

</html>