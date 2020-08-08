window.drunk = false;

function getDrunk(level) {
	if (level == 0) {
		return soberUp();
	}
	
	window.drunk = true;
	
	var drunk_info = $('drunk_level');
	drunk_info.className = 'drunk_level_'+level;
	drunk_info.addClassName('wobblies_enabled');

	var delay = 500 + (Math.random() * 5000);
	setTimeout('switchDrunkTilt(' + level +')', delay);

	var delay = 500 + (Math.random() * 3000);
	setTimeout('switchDrunkScale(' + level + ')', delay);
}

function soberUp() {
	window.drunk = false;
	
	var drunk_info = $('drunk_level');
	drunk_info.className = '';
	
	// Clear tilt
	if (window.wobblies_tilt) {
		clearTimeout(window.wobblies_tilt);
	}
	$('wrapper_tilt').className = '';

	// Clear scale
	if (window.wobblies_scale) {
		clearTimeout(window.wobblies_scale);
	}
	$('wrapper_scale').className = '';
}

function switchDrunkTilt(level) {
	var wrapper = $('wrapper_tilt');
	var class_a = 'drunk_tilt_' + level + 'a';
	var class_b = 'drunk_tilt_' + level + 'b';
	if (wrapper.hasClassName(class_a)) {
		wrapper.removeClassName(class_a);
		wrapper.addClassName(class_b);
	} else {
		wrapper.removeClassName(class_b);
		wrapper.addClassName(class_a);
	}
	var delay = 8000 + (Math.random() * 5000);
	window.wobblies_tilt = setTimeout('switchDrunkTilt(' + level + ')', delay);
}

function switchDrunkScale(level) {
	var wrapper = $('wrapper_scale');

	var max_scale_level = Math.floor(level / 2) - 1;
	var scale_level = randomFromTo(0, max_scale_level);
	var negative = (Math.random() < .5);
	var new_class = 'drunk_scale_';
	if (negative && scale_level > 0) {
		new_class += 'n';
	}
	new_class += scale_level;
	wrapper.className = new_class;
	var delay = 5000 + (Math.random() * 8000);
	window.wobblies_scale = setTimeout('switchDrunkScale(' + level + ')', delay);
}

function randomFromTo(from, to) {
	return Math.floor(Math.random() * (to - from + 1) + from);
}