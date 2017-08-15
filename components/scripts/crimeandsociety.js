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