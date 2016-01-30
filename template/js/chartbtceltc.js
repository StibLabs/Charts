
		var lineChartData2 = {
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
					 data: [85.25, 31.45, 45.25, 35.83, 56, 25.05, 15.25]
				},
				
			]

		}

	window.onload = function(){
		var ctx = document.getElementById("canvas2").getContext("2d");
		window.myLine = new Chart(ctx).Line(lineChartData2, {
			responsive: true
		});
	}


