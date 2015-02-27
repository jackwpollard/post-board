(function() {
	$('.data-remote').on('click', function(e) {
		e.preventDefault();
		var thumb = this;
		var rating_value = $(thumb).next()

		rating_value.animate({ opacity: 0 })

		var type       = $(this).attr('data-type');
		var type_id    = $(this).attr('data-type-id');
		var type_value = $(this).attr('data-type-value');

		var data = {};
		data['value']      = type_value;
		//data['_token']     = '{{ Session::token() }}';
		data[type + '_id'] = type_id;
		console.log(data);
		$.ajax({
			headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
			type: 'POST',
			url: type + '_rating',
			data: data,
			success: function() {
				// increment the likes/dislikes
				new_likes = parseInt(rating_value.text()) + 1;
				$(thumb).next().text(new_likes);
				rating_value.animate({ opacity: 1 })
			}
		});
	});
})();