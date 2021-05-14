// document.write("Hello World", "<br>"); 
// console.log("Hello World");

var a = "Sunny";
var b = "Sahil";

document.getElementById("head").innerHTML = b;

// function myfunction(p
//     ) {
    
// }

// document.write(a+b, "<br>");
// document.write(a-b, "<br>");
// document.write(a*b, "<br>");
// document.write(a/b, "<br>");



   window.onscroll = function() {myfunction()};


   var navbar = document.getelementById("navbar");

   var sticky = navbar.offsetTop;

   function myfunction() {
     if (window.pageYOffset >= sticky) {
       navbar.classList.add("sticky")
     }
     else {navbar.classList.remove("sticky");
     }
   }




    var conatiner = document.getelementById("cnt_2");
    var btn = document.getelementById("btn_3");

    function sunny() {
        if(onsubmit.btn) {
            cnt_2.classList.remove("hidden")
        }
    }

