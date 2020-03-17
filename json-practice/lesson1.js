$.getJSON('/lesson/lesson1.json',function(data){

	console.log();
	$.each(data.employees,function(i,elm){
		var s = '<tr>'+'<td>'+ elm.name +'</td> <td>'+ elm.id +'</td> <td>'+ elm.address +'</td> </tr>';
		$('table').append(s);	
	})
	

});