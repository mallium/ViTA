$(document).ready(function(){
	//  the data that powers the bar chart, a simple array of numeric values
	var chartdata = [40, 60, 80, 100, 70, 120, 100, 60, 70, 150, 120, 140];
	 
	//  the size of the overall svg element
	var height = 200,
	    width = 720,
	 
	//  the width of each bar and the offset between each bar
	    barWidth = 40,
	    barOffset = 20;

	var yScale = d3.scale.linear()
        .domain([0, d3.max(chartdata)])
        .range([0, height]);
 
	var xScale = d3.scale.ordinal()
	        .domain(d3.range(0, chartdata.length))
	        .rangeBands([0, width]);

	var colors = d3.scale.linear()
					.domain([0, chartdata.length*.33, chartdata.length*.66, chartdata.length])
					.range(['#d6e9c6', '#bce8f1', '#faebcc', '#ebccd1']);
	 
	 
	d3.select('#bar-chart').append('svg')
		  .attr('width', width)
		  .attr('height', height)
		  .style('background', '#bce8f1')
		  .selectAll('rect').data(chartdata)
		  .enter().append('rect')
		.style({'fill': function(data,i){return colors(i);}, 'stroke': '#31708f', 'stroke-width': '5'})
		    .attr('width', xScale.rangeBand())
		    .attr('height', function (data) {
		        return yScale(data);
		    })
		    .attr('x', function (data, i) {
		        return xScale(i);
		    })
		    .attr('y', function (data) {
		        return height - yScale(data);
		    })
		    .on('mouseover', function(data) {
		        dynamicColor = this.style.fill;
		        d3.select(this)
		            .style('fill', '#3c763d')
		    })
		 
		    .on('mouseout', function(data) {
		        d3.select(this)
		            .style('fill', dynamicColor)
		    })
		    .on('mousedown',function(data){
		    	console.log(d3.select(this).attr("x"));
		    });
});