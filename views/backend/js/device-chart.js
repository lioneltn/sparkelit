$(document).ready(function(){
  $.ajax({
    url: "../../json_device.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var device = [];
      var count = [];

      for(var i in data) {
        device.push(data[i].device);
        count.push(data[i].count);
      }

    // Region Charts Starts
google.charts.load("current", {
  packages: ['geochart','bar', 'corechart', 'table']
});
      var timeout;

 $(document).ready(function(){
       timeout = setInterval(function () {
          if (google.visualization != undefined) {
             drawChart(device,count);
             clearInterval(timeout);
          }
       }, 300);
    });


function drawChart() {

    var data = new google.visualization.DataTable();
  data.addColumn('string', 'Device');
  data.addColumn('number', 'Number of visits');
 
  for (var i = 0; i < device.length; ++i) {
     

    data.addRow([device[i],Number(count[i])]);
}





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
