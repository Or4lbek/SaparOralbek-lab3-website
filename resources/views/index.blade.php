<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<title>lab 3</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style">


</head>

<body data-spy="scroll" data-target=".navbar">
	<div class="header">
		<nav class="navbar navbar-expand-sm navbar-dark fixed-top">
			<div class="container">
				<button class = "navbar-toggler" data-toggle="collapse" data-target="#Navbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="Navbar">
				<ul class="mr-auto navbar-nav" id ="navbarToggle">
					<li class="nav-item"><a href="{{ route('main')}}"><img id="homec" src="{{asset('images/coffee-312521_1280.webp')}}" width="50px" onmouseover = "bigc(this)" onmouseover = "big(this)" onmouseout="smallc(this)"></a></li>
					<li class="nav-item"><a href = "{{ route('coffee')}}">{{__('index.coffee_h')}}</a></li>
					<li class="nav-item"><a href = "{{ route('order')}}">{{__('index.order_o_h')}}</a></li>
					<li class="nav-item" ><a href = "{{ route('contacts')}}">{{__('index.contacts_h')}}</a></li>
					@php $locale = session()->get('locale'); @endphp
					<li class="nav-item dropdown">
						 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     @switch($locale)
                        @case('en')
                                <img src="{{asset('images/us.png')}}"> {{__('English') }}
                               @break
                          @case('ru')
                                <img  src="{{asset('images/ru.png')}}"> {{__('Russian') }}
                                @break
                          @case('kz')
                                <img src="{{asset('images/kz2.png')}}"> {{__('Kazakh') }}
                                @break
                         @default
                                <img src="{{asset('images/us.png')}}"> English
                            @endswitch

						<span class="caret"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/en"><img src="{{asset('images/us.png')}}"> English</a>
                            <a class="dropdown-item" href="/ru"><img src="{{asset('images/ru.png')}}"> Russian</a>
                            <a class="dropdown-item" href="/kz"><img src="{{asset('images/kz2.png')}}"> Kazakh</a>

                        </div>
					</li>
				</ul>
				</div>
			</div>
		</nav>
 <main class="py-4">
        @yield('content')
    </main>

	</div>
	
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
    <style>

.nav-item{
    margin-top: 30px;
    margin-left: 50px;
}

body{
	margin: 0;
	padding: 0;
	
	background-color: #EADC68; 
}
.header{
	display: flex;
	justify-content: space-around;
	
	align-items: center;
	background-color: #EADC68;
	padding: 10px 200px;
	font-size: 25px;
	color: #A5292A;
	font-family: 'Fredoka One', cursive;
	
}
#Order_online,#Home,#About_us, #Contacts, #Coffee{
	cursor: pointer;
	
}
.main{
	display: flex;
	justify-content: space-around;
}.main img{
	padding-top: 90px;
	margin-left: 40px;
}
.text{
	padding-top: 36px;
	text-align: center;
}
.text p{
	padding-left: 50px;
	padding-right: 30px;
	font-size: 28px;
	text-align: justify;
	
}
.text h1{
	font-size: 80px;
	text-align: left;
	padding-left: 50px;
}

</style>
</body>

</html>