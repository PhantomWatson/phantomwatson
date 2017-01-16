// Animated bubbles

// These "weighed rows" result in bubbles more often appearing closer to
// the sides of the window, rather than closer to the middle
var bubble_rows = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
var bubble_row_weights = [5, 4, 3, 2, 1, 1, 2, 3, 4, 5];
var total_bubble_row_weight = eval(bubble_row_weights.join("+"));
var weighed_bubble_rows = new Array();
var current_bubble_row = 0;
while (current_bubble_row < bubble_rows.length) {
	for (i = 0; i < bubble_row_weights[current_bubble_row]; i++) {
		weighed_bubble_rows[weighed_bubble_rows.length] = bubble_rows[current_bubble_row];
	}
	current_bubble_row++;
}
var bubbles_running;
var frequency = 500;
var max_bubbles = 20;

var toggle_bubbles = function () {
	if (bubbles_running) {
		$('body').removeClassName('bubbles');
		clearInterval(bubbles_running);
		bubbles_running = null;
	} else if ($$('html')[0].hasClassName('csstransitions')) {
		$('body').addClassName('bubbles');
		bubbles_running = setInterval(bubbles_run, frequency);
	} else {
		alert('Sorry, your browser sucks and doesn\'t support this kind of animation. Please switch to... well, literally any other browser and it\'ll probably work.');
	}
};

var bubbles_run = function () {
	var bubbles = $$('#bubbles > div').each(move_bubbles);
	if (bubbles.length < max_bubbles) {
		bubbles_add();
	}
};

var bubbles_add = function () {
	var rand_class = 'bub' + (Math.floor(Math.random()*5) + 1);
	var bubble_y = new Element('div', {'class': rand_class});
	var bubble_x = new Element('div');
	var rand = Math.floor(Math.random() * total_bubble_row_weight);
	var rand_left = weighed_bubble_rows[rand] - Math.floor(Math.random()*10) + '%';
	bubble_x.setStyle({'left': rand_left});
	bubble_y.setStyle({'top': '100%'});
	bubble_y.insert(bubble_x);
	$('bubbles').insert(bubble_y);
};

var move_bubbles = function (bubble_y) {
	var bubble_x = bubble_y.down('div');
	var y_offset = bubble_y.cumulativeOffset().top;
	var x_offset = bubble_x.cumulativeOffset().left;
	
	// Remove a bubble if it has left the top of the window
	if (y_offset <= -50) {
		bubble_y.remove();
		return;
	}

	//var speed_factor = parseInt(bubble_y.className.replace('bub', ''));
	//var y_mod = Math.floor(Math.sqrt(speed_factor * 20) * 10);
	if (bubble_y.getStyle('top') != '-50%') {
		bubble_y.setStyle({'top': '-50%'});
	}
	
	
	// Wiggle bubbles left and right
	/*
	if ((Math.random() * 10) < 3) {
		var x_mod = Math.floor(Math.random() * 10);
		if (Math.floor(Math.random() * 2)) {
			 x_mod *= -1;
		}
		bubble_x.setStyle({'left': parseInt(x_offset) + x_mod + 'px'});
	}
	*/
};