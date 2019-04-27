$(document).ready(function(){
  $.ajax({
    url: "../../json_country.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var country = [];
      var count = [];

      for(var i in data) {
        country.push("Country " + data[i].country);
        count.push(data[i].count);
      }

    // Region Charts Starts

google.charts.load('current', {
  'packages': ['geochart'],
  // Note: you will need to get a mapsApiKey for your project.
  // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
  'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
});
google.charts.setOnLoadCallback(drawRegionsMap);

function drawRegionsMap() {
  var data = google.visualization.arrayToDataTable([
    ['Country', 'Popularity'],
    ['Germany', 200],
    ['United States', 300],
    ['Brazil', 400],
    ['Canada', 500],
    ['France', 600],
    ['RU', 700],
    ['TN', 700]
  ]);

  var options = {
    colorAxis: {
      colors: ['#76C1FA', '#63CF72', '#F36368', '#FABA66']
    }
  };
  var chart = new google.visualization.GeoChart(document.getElementById('regions-chart'));
<<<<<<< HEAD
  var chart_div = document.getElementById('regions-chart');


  // Wait for the chart to finish drawing before calling the getImageURI() method.
      google.visualization.events.addListener(chart, 'ready', function () {
        chart_div.innerHTML = '<img src="' + chart.getImageURI() + '">';
        document.getElementById('png').outerHTML = '<a class="dropdown-item" href="' + chart.getImageURI() + '">Image(PNG)</a>';
          var pdf_container = document.getElementById('chart-containter').innerHTML;
  console.log(pdf_container);
  document.getElementById('hidden_html').value = pdf_container;

      });
||||||| merged common ancestors
  var chart_div = document.getElementById('regions-chart');


  // Wait for the chart to finish drawing before calling the getImageURI() method.
      google.visualization.events.addListener(chart, 'ready', function () {
        chart_div.innerHTML = '<img src="' + chart.getImageURI() + '">';
        console.log(chart_div.innerHTML);
      });
=======
>>>>>>> 4c6e22f693ac17169d2bfa9352fd9f4344d7ba6f

<<<<<<< HEAD
  


  chart.draw(data2, options);



  


||||||| merged common ancestors
  chart.draw(data2, options);
=======
  chart.draw(data, options);
>>>>>>> 4c6e22f693ac17169d2bfa9352fd9f4344d7ba6f
}
    },
    error: function(data) {
      console.log(data);
    }
  });
});