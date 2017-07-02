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

function getDay(endtime){
      return ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"][endtime.getDay()];
}

function formatAMPM(date) {
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var ampm = hours >= 12 ? 'pm' : 'am';
  hours = hours % 12;
  hours = hours ? hours : 12; 
  minutes = minutes < 10 ? '0'+minutes : minutes;
  var strTime = hours + ':' + minutes + ' ' + ampm;
  return strTime;
}

function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    // var daysSpan = clock.querySelector('.days');
    // var hoursSpan = clock.querySelector('.hours');
    // var minutesSpan = clock.querySelector('.minutes');
    // var secondsSpan = clock.querySelector('.seconds');
    var timecount = clock.querySelector('.timecount');
    
    function updateClock() {
        var t = getTimeRemaining(endtime);
        var dayname = '';
        if (t.hours >= 0 || t.minutes >= 0 || t.seconds >= 0 || t.days >= 0){

            dayname =endtime.getDay()==new Date().getDay() ? 'today' : getDay(endtime);

            if (t.days > 0){
                timecount.innerHTML =  t.days +" day/s left ( "+dayname+" , "+formatAMPM(endtime) +")";
            }
            else if (t.hours > 0){
                timecount.innerHTML = t.hours+" h left ( "+dayname+" , "+formatAMPM(endtime) +")";
            }
            else if (t.minutes>0){
                timecount.innerHTML = t.minutes+" m left ( "+dayname+" , "+formatAMPM(endtime) +")";
            }
            else if(t.seconds>0){
                timecount.innerHTML = t.seconds+" s left ( "+dayname  +" , "+formatAMPM(endtime) +")";
            }
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