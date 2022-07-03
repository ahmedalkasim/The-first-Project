var counter = document.querySelector("#countDown");
var countDownDate = new Date("July 03, 2022 12:59:00").getTime();

var x = setInterval(function () {

  var now = new Date().getTime();

  var distance = countDownDate - now;


  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  counter.innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "EXPIRED";
    const buttun = document.querySelector("#winner");
    buttun.style.display = 'block';
  }
}, 1000);


