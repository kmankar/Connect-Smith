$(document).ready(function(){
	$.ajax({
		url: "http://localhost/DBMS%20Project%20files_php/Chartjs/data.php",
		
		method: "GET",
		success: function(data) {
			console.log(data);
			var certName = [];
			var number = [];

			for(var i in data) {
				certName.push(data[i].certName);
				number.push(data[i].number);
			}

			var chartdata = {
				labels: certName,
				datasets : [
					{
						label: 'Certifications done by Alumnus',
						backgroundColor: '#e04f4f',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: number
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata,
				 options: {
                    responsive: true,
                    scales: {
                        yAxes: [{
                            ticks: {
								autoSkip: false,
                                beginAtZero: true,
                                steps: 1,
                                stepValue: 1,
                                max: 6 //max value for the chart is 60
                                }
                            }
                        ],
						xAxes: [{
							ticks: {
								autoSkip: false
									}
								}]
                    }
                }
				
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});