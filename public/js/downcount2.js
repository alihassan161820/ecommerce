function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
}

function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');

    function updateClock() {
        var t = getTimeRemaining(endtime);
        if (t.hours >= 0 || t.minutes >= 0 || t.seconds >= 0 || t.days >= 0){
             daysSpan.innerHTML = t.days;
             hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
             minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
             secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
        }
       
        if (t.total <= 0) {
            var clock = document.getElementById(id); 
            clock.style.display="none";            
            clearInterval(timeinterval);
            var img =   document.getElementById(id+'-img'); 
            img.innerHTML='<img src="/images/home/end.png" class="img img-responsive" alt="" />';
        }
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}


var x = document.getElementsByClassName('clockdiv');
var y = document.getElementsByClassName('endtime');

for (var i = 0; i < x.length; i++) {
    x[i].style.display="inherit";            
    var deadline = new Date(Date.parse(y[i].getAttribute('value')));
    initializeClock('clockdiv' + x[i].getAttribute('data-value'), deadline);
}