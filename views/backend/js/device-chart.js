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

  var chart_div = document.getElementById('device-chart');

   // Wait for the chart to finish drawing before calling the getImageURI() method.
      google.visualization.events.addListener(Donutchart, 'ready', function () {
        chart_div.innerHTML = '<img src="' + Donutchart.getImageURI() + '">';
        document.getElementById('png').outerHTML = '<a class="dropdown-item" href="' + Donutchart.getImageURI() + '">Image(PNG)</a>';
          var pdf_container = document.getElementById('chart-containter').innerHTML;
  
  document.getElementById('hidden_html').value = pdf_container;

      });


        $('#submit').on("click", function(event) {
      event.preventDefault();
      console.log('lol');
        var html = document.getElementById('hidden_html').value;
        var email = document.getElementById('email').value
        console.log(email);
        
       $.ajax({
                    type: "POST",
                    url: "../pages/send_email.php",
                    data: 'email=' +  email +"&hidden_html=" +html ,
                    success: function(msg) {
                      console.log(msg);
                    },
                });

  });


  Donutchart.draw(data, options);
}



    },
    error: function(data) {
      console.log(data);
    }
  });

});
