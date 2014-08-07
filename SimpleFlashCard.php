<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple FlashCard</title>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<style>
		.hidden{
			display: none;
		}
		.items:first-child .previous, .items:last-child .next{
			visibility: hidden;
		}
		#box-0{
			display: block;
		}
	</style>

	<script>
	$.getJSON( "data.json", function(data){
		var output = '';
		$.each( data, function( key, val ) {
			output+= 
			"<div id='box-"+key+"' class='hidden items'>"+
				"<button onClick='showAnswer("+key+")'>Answer</button>"+
				"<button class='previous' onClick='goto("+(key-1)+")'>Previous</button>"+
				"<button class='next' onClick='goto("+(key+1)+")'>Next</button>"+
				"<p>"+val.question+"</p>"+
				"<p class='hidden' style='display: none'>"+val.answer+"</p>"+
			"</div>";
		});
		$('body').html(output);
	});

	function goto(id){
		$('.items').hide();
		$('#box-'+id).show();
	}

	function showAnswer(id){
		$('#box-'+id+' p.hidden').toggle();
	}

	</script>
</head>
<body>
</body>
</html>