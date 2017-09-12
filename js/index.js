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

// JSON data
var nodeData = {
    "name": "TOPICS", "children": [{
        "name": "Topic A",
        "children": [{"name": "Sub A1", "size": 1}, {"name": "Sub A2", "size": 4}]
    }, {
        "name": "Topic B",
        "children": [{"name": "Sub B1", "size": 2}, {"name": "Sub B2", "size": 3}, {
            "name": "Sub B3", "children":[{"name": "Sub B1", "size": 2},{"name": "Sub B1", "size": 2},{"name": "Sub B1", "size": 2}]}]
    }, {
        "name": "Topic C",
        "children": [{"name": "Sub A1", "size": 5}, {"name": "Sub A2", "size":3, "children":[{"name": "Sub B1", "size": 2},{"name": "Sub B1", "size": 2},{"name": "Sub B1", "size": 2}]}]
    }]
};

function course_graph(element, options = {}){
    (function(i,s){
      console.log(i);
      console.log(s);
      (function(o,g,r,a){
          r(o);
          g.selectAll('path')
              .data(o.descendants())
              .enter().append('path')
              .attr("display", function (d) { return d.depth ? null : "none"; })
              .attr("d", a)
              .style('stroke', s['border-color'])
              .style("fill", s['fill-color']);
      })( d3.hierarchy(s.data)
                .sum(function (d) {return d.size}),
          d3.select(element)
                .append('svg')
                .attr('width', s.width)
                .attr('height', s.height)
                .append('g')
                .attr('transform', 'translate(' + s.width / 2 + ',' + s.height / 2 + ')'),
          d3.partition()
              .size([2 * Math.PI, Math.min(s.width, s.height) / 2]),
          d3.arc()
              .startAngle(function (d) { return d.x0 })
              .endAngle(function (d) { return d.x1 })
              .innerRadius(function (d) { return d.y0 })
              .outerRadius(function (d) { return d.y1 }))
    })(element, Object.assign({}, {
      'width': 500,
      'height': 500,
      'border-color': "#fff",
      'fill-color': "#000",
      'data': {}
    }, options));
  }
(function($){
	$.fn.course = function(options){
		var settings = $.extend({
			'width': 500,
	      	'height': 500,
	      	'border-color': "#fff",
	      	'fill-color': "#000",
	      	'data': {}
		},options);
	}
}(jQuery));

$(document).ready(function(){
	$('.collapsible').collapsible();
	gen_docs();
	$('').each(function(i,e){});
});