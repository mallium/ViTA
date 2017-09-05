function gen_docs(){
	filetype_data = [
	{type_name:'word', 			ext:'docx'},
	{type_name:'excel', 		ext:'xlsx'},
	{type_name:'powerpoint', 	ext:'pptx'},
	{type_name:'archive', 		ext:'zip'},
	{type_name:'audio', 		ext:'mp3'},
	{type_name:'code', 			ext:'html'},
	{type_name:'image', 		ext:'png'},
	{type_name:'video', 		ext:'avi'},
	{type_name:'pdf', 			ext:'pdf'}]
	conds = filetype_data.map(function(i,e){return false})
	while (!conds.reduce(function(o,e,i){return o && e},true)){
		index_filetype = Math.floor(Math.random()*(filetype_data.length));
		$('#documents.collapsible .collapsible-body .row').append(
			$('<div/>',{class:'document col s2 center-align'})
				.append(
					$('<a/>',{class:'black-text', href:'#'})
						.append(
							$('<i/>',{class:'fa fa-3x fa-file-'+filetype_data[index_filetype].type_name+'-o'})))
				.append(
					$('<p/>').text(['assign',(index_filetype+1)*(conds.filter(function(e){return e}).length+1),'.',filetype_data[index_filetype].ext].join('')))
				.append($('<br>'))
		);
		$('#cant-docs').text($('#documents.collapsible .collapsible-body .row').children().length)
		conds[index_filetype] = true;
	}
}

$(document).ready(function(){
	$('.collapsible').collapsible();
	$('.course-progress').sparkline('html');
	gen_docs();
});