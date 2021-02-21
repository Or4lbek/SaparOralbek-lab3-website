<!DOCTYPE html>
<html>
<head>
	<title>lab 3</title>	
    <link rel="stylesheet" type="text/css" href="style5.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=swap" rel="stylesheet">
</head>
<body onload="load()">
	<div class="header">
        <div id="Home" onclick="window.location.reload()"><a href="{{ route('main')}}"><img id="homec" src="{{asset('images/coffee-312521_1280.webp')}}" width="50px" onmouseover = "bigc(this)" onmouseover = "big(this)" onmouseout="smallc(this)"></a> </div>
        <div id="Coffee" onmouseover = "big(this)" onmouseout="def(this)"><a href = "{{ route('coffee')}}">Coffee</a></div>
        <div id="Order_online" onclick = "change(this)" onmouseover = "big(this)" onmouseout="def(this)" ><a href = "{{ route('order')}}">Order online</a></div>
        <div id="Contacts" onclick = "change(this)" onmouseover = "big(this)" onmouseout="def(this)"><a href = "{{ route('contacts')}}">Contacts</a></div>
    </div>
   

    <div class="main">
        <div class="imgmain">
            <img id="img" src="{{asset('images/logol.png')}}" alt="cofee" width="420px">
        </div>
        
        <div class="text" >
             <h1 id="text1">Contacts</h1>
              <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor  incididunt ut  labore  et  dolore <br> magna aliqua. Ut enim ad  minim  veniam,  quis exercitation<br>  ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
    </div>
    <script>
	function change(element){
            var a = element.innerHTML;
            switch(a){
                case "Coffee":
                    document.getElementById("img").src="coffee.png";
                    document.getElementById("text1").innerHTML = "Coffee";
                    break;
                case "Order online":
                    document.getElementById("img").src="bag.png.png";
                    document.getElementById("text1").innerHTML = "Order online";
                    break;
                case "About us":
                    document.getElementById("img").src = "https://pngimg.com/uploads/cup/cup_PNG1996.png";
                    document.getElementById("text1").innerHTML = "About us";
                    break;
                case "Contacts":
                    document.getElementById("img").src = "logol.png";
                    document.getElementById("text1").innerHTML = "Contacts";

            }
            $("#img").animate({left: ' - = 100px', opacity: '0'}, "slow");
            $("#img").animate({right: ' + = 100px', opacity: '1'}, "slow");
            $(".text").animate({opacity: '0'}, "slow");
            $(".text").animate({opacity: '1'}, "slow");
        }
function big(element){
    element.style.fontSize = "30px";
}
function def(element){
    element.style.fontSize = "25px";
}
function bigc(element){
    element.style.width = "55px";
}
function smallc(element){
    element.style.width = "50px";
}


    
    </script>
</body>
<style>
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
</html>