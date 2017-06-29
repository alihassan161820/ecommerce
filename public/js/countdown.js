var countdown = function(enddate , attributes ,finish){
	var _second=1000, /*we make variable named _second = 1000 wich means 1000 mille seconds which is real second  */
	_minute = _second * 60,
	_hour = _minute * 60,
	_day = _hour *24,
	
	end = new Date(enddate),
	timer,
	calculate = function(){
		
		var now = new Date(),
		remaining = end.getTime() - now.getTime(),
        data;		
		if(isNaN(end)){
			
			console.log('invalid date/time');
			return;
		}
		
		if(remaining <= 0) {
			//if time finish
			/*
			callback
			clear our timer 
			*/
			
			
		} else{
			  if(!timer){
				
				timer = setInterval(calculate, _second);
				
			  }
			  data = {
				'days': Math.floor(remaining / _day),
				'hours': Math.floor((remaining % _day) / _hour),
				'minutes': Math.floor((remaining % _hour) / _minute),
				'seconds': Math.floor((remaining % _minute) / _second),
			}
		if(attributes.length) {
			for(x in attributes){
				var x = attributes[x];
				
				document.getElementById(x).innerHTML = data[x];
				
			}
			
		}
			}
			
	};
	
	calculate();
}