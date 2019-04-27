$(document).ready(function(){
  $.ajax({
    url: "../../json_device.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var device = [];
      var count = [];

      for(var i in data) {
        device.push("Country " + data[i].device);
        count.push(data[i].count);
      }

    // Region Charts Starts
google.charts.load("current", {
  packages: ["corechart"]
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
 var data = google.visualization.arrayToDataTable([
    ['Device', 'Visits'],
    ['Mobile', 2],
    ['Desktop', 11],
    
  ]);


  var options = {
    title: 'Visits by devices',
    pieHole: 0.4,
    colors: ['#76C1FA', '#63CF72', '#F36368', '#FABA66'],
    chartArea: {
      width: 500
    },
  };

  var Donutchart = new google.visualization.PieChart(document.getElementById('device-chart'));
  Donutchart.draw(data, options);
}



    },
    error: function(data) {
      console.log(data);
    }
  });

});
