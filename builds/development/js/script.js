(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
//tree list functionality
$(function () {
    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
    $('.tree li.parent_li > span').on('click', function (e) {
        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            $(this).attr('title', 'Expand this branch').find(' > i').addClass('icon-plus-sign').removeClass('icon-minus-sign');
        } else {
            children.show('fast');
            $(this).attr('title', 'Collapse this branch').find(' > i').addClass('icon-minus-sign').removeClass('icon-plus-sign');
        }
        e.stopPropagation();
    });
});
//end of tree list functionality
$(function(){
    //Better to construct options first and then pass it as a parameter
	var options = {
		title: {
			text: "2013-2016 Crimes Summary"
		},
                animationEnabled: true,
		data: [
                {
                    type: "column", //change it to line, area, bar, pie, etc
                    name: "Crimes against women",
                    legendText:"Crimes against women",
                    showInLegend: true,
                    dataPoints: [
                        { label: 2013, y: 2200 },
                        { label: 2014, y: 2000 },
                        { label: 2015, y: 2050 },
                        { label: 2016, y: 2030 },

                    ]
                },
                {
                    type: "column", //change it to line, area, bar, pie, etc
                    name: "Crimes against children",
                    legendText:"Crimes against children",
                    
                    showInLegend: true,
                    dataPoints: [
                        { label: 2013, y: 460 },
                        { label: 2014, y: 420 },
                        { label: 2015, y: 210 },
                        { label: 2016, y: 190 },

                    ]
                }    
		]
	};
    
    $("#chartCrimeOne").CanvasJSChart(options);
    
    //Better to construct options first and then pass it as a parameter
	var options = {
		
                animationEnabled: true,
		data: [
                {
                    type: "line", //change it to line, area, bar, pie, etc
                    name: "Crimes against women",
                    legendText:"Crimes against women",
                    showInLegend: true,
                    dataPoints: [
                        { label: 2013, y: 2600 },
                        { label: 2014, y: 2400 },
                        { label: 2015, y: 2250 },
                        { label: 2016, y: 2200 },

                    ]
                },
                {
                    type: "line", //change it to line, area, bar, pie, etc
                    name: "Crimes against children",
                    legendText:"Crimes against children",  
                    showInLegend: true,
                    dataPoints: [
                        { label: 2013, y: 2190 },
                        { label: 2014, y: 2000 },
                        { label: 2015, y: 2050 },
                        { label: 2016, y: 2000 },

                    ]
                }    
		]
	};	

	$("#chartCrimeTwo").CanvasJSChart(options);
});


$(document).ready( function() {
    $('#myCarousel').carousel({
      
        interval:   4000,
        pause: false, // don't forget the colon here, it's an object 
        interval: false, 
        wrap: false
	});
	
	var clickEvent = false;
	$('#myCarousel').on('click', '.nav a', function() {
			clickEvent = true;
			$('.nav li').removeClass('active');
			$(this).parent().addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.nav').children().length -1;
			var current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.nav li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
    
$('#featured-carousel').carousel
   (
       {
           interval:3000,
           pause: false,
           wrap: true,
           keyboard: true
       }   
   );     
}
                  
);
$(function(){
    //Better to construct options first and then pass it as a parameter
	var options = {
		title: {
			text: "Sample Chart"
		},
                animationEnabled: true,
		data: [
		{
			type: "column", //change it to line, area, bar, pie, etc
			dataPoints: [
				{ x: 10, y: 10 },
				{ x: 20, y: 11 },
				{ x: 30, y: 14 },
				{ x: 40, y: 16 },
				{ x: 50, y: 19 },
				{ x: 60, y: 15 },
				{ x: 70, y: 12 },
				{ x: 80, y: 10 }
			]
		}
		]
	};

	$("#chartContainer").CanvasJSChart(options);
});
},{}]},{},[1])