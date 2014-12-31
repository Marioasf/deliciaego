(function(){
	jQuery.fn.ajaxInsert = function(options){
		this.each(function(){
			var settings = {
				url: "",
				type: "POST",
				dataType: "JSON"
		};
		if(options)
		{
			$.extend(settings, options);
		}

		$this = jQuery(this);

		var url_base = document.location.pathname;

		$this.bind('click', function(){
			$.ajax({
				url: url_base + settings.url,
				type: settings.type,
				dataType: settings.dataType,
				data: data,
				success: function(data){
					$.each(data, function(i, val){
						console.log(val.msg);
					});
				}
			});
			//$(this).parents("li").fadeOut("slow");
		});

	});

 };
})(jQuery);