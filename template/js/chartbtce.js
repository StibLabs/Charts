
		var lineChartData = {
			labels: ["Hour 0", "Hour 1", "Hour 2", "Hour 3", "Hour 4", "Hour 5", "Hour 6"],
			datasets : [
				{
					label: "My First dataset",
					fillColor : "rgba(220,220,220,0.2)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					 data: [385.25, 381.45, 345.25, 335.83, 56, 325.05, 315.25]
				},
				
			]

		}

	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myLine = new Chart(ctx).Line(lineChartData, {
			responsive: true
		});
	}


