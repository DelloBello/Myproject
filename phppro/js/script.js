
var countDownDate = new Date("may 1 , 2024 23:10:00").getTime();


var x = setInterval(function() {

var counter =  document.querySelector("#demo");
  var now = new Date().getTime();


  var distance = countDownDate - now;


  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

 
  document.getElementById("#demo").innerHTML = days + " " +"  يوم " + hours + " " + "  ساعة "
  + minutes + " " + "  دقيقة " +  " " +seconds + " " + "  ثانية ";


  if (distance < 0) {
    clearInterval(x);
    document.getElementById("#demo").innerHTML = "  لقد انتهى السحب ";
  }
}, 1000);
//برمجية اختيار الرابح

const Win = document.querySelector("#winner");

Win.addEventListener('click', function(){
     alert("test");
});