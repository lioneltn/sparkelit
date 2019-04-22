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
   
    ['France', 2],
    
    ['TN', 3]
  ]);

  var options = {
    colorAxis: {
      colors: ['#76C1FA', '#63CF72', '#F36368', '#FABA66']
    }
  };
  var chart = new google.visualization.GeoChart(document.getElementById('regions-chart'));

  chart.draw(data, options);
}
    },
    error: function(data) {
      console.log(data);
    }
  });
});