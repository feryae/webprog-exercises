// Insert your ajax code here

$(function(){
	$.ajax({
		type : 'GET',
		url : '/tp/datatweet.json',
		success: function(data){
			var s = '.tweet';
			$.each(data, function(i,datas){
				    _newElm = $(s).clone(true);
					_newElm.attr('class',i);
					_newElm.find('img').attr('src', datas.user.url_image);
					_newElm.find('h4').html(datas.user.screen_name);
					_newElm.find('p').html(datas.text);
					_newElm.find('.glyphicon-retweet').html(datas.retweet_count);
					_newElm.find('.glyphicon-star').html(datas.favourite_count);
					$(s).append(_newElm);
					s = '.' + i;
			});
		},

		error : function(){
			alert('error');
		}
	});
});



// End of your ajax code
// Insert your getJSON code here

$.getJSON('/tp/profile.json',function(data){

	$('#fotopf').find('img').attr('src',data.url_image);
	$('#twt').find('a').html(data.tweet_count);
	$('#flwi').find('a').html(data.friends_count);
	$('#flwrs').find('a').html(data.followers_count);
	$('#fotosml').find('img').attr('src',data.url_fotosmall);

});





// End of your code