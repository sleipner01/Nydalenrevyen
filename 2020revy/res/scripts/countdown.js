var _second = 1000;
var _minute = _second * 60;
var _hour = _minute * 60;
var _day = _hour * 24;
var timer;
var end;
var container;

function showRemaining() {
    var now = new Date();
    var distance = end - now;
    if (distance < 0) {
        clearInterval(timer);
        return;
    }
    var days = Math.floor(distance / _day);
    var hours = Math.floor((distance % _day) / _hour);
    var minutes = Math.floor((distance % _hour) / _minute);
    var seconds = Math.floor((distance % _minute) / _second);

    container.getElementsByClassName('days')[0].getElementsByClassName("num")[0].innerHTML = days;
    container.getElementsByClassName('hours')[0].getElementsByClassName("num")[0].innerHTML = hours;
    container.getElementsByClassName('minutes')[0].getElementsByClassName("num")[0].innerHTML = minutes;
    container.getElementsByClassName('seconds')[0].getElementsByClassName("num")[0].innerHTML = seconds;
}

function startCountdown(elem, date){
	end = date;
	container = elem;
	timer = setInterval(showRemaining, 1000);
}