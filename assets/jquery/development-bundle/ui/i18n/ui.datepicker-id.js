/* Indonesian initialisation for the jQuery UI date picker plugin. */
/* Written by Deden Fathurahman (dedenf@gmail.com). */
jQuery(function($){
	$.datepicker.regional['id'] = {
		closeText: 'Tutup',
		prevText: 'Mundur',
		nextText: 'Maju',
		currentText: 'Hari ini',
		monthNames: ['Januari','Februari','Maret','April','Mei','Juni',
		'Juli','Agustus','September','Oktober','November','Desember'],
		monthNamesShort: ['Januari','Februari','Maret','April','Mei','Juni',
		'Juli','Agustus','September','Oktober','November','Desember'],
		dayNames: ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'],
		dayNamesShort: ['Min','Sen','Sel','Rab','kam','Jum','Sab'],
		dayNamesMin: ['M','S','S','R','K','J','S'],
		dateFormat: 'DD, dd MM yy', firstDay: 0,
		isRTL: false};
	$.datepicker.setDefaults($.datepicker.regional['id']);
});