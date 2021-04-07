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


