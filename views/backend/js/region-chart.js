$(document).ready(function(){
  $.ajax({
    url: "../../json_country.php",
    method: "GET",
    success: function(data1) {
      
      let country = [];
      let count = [];
     

      for(var i in data1) {
        country.push(data1[i].country);
        count.push(data1[i].count);
      }

    // Region Charts Starts

google.charts.load('current', {
  'packages': ['geochart','bar', 'corechart', 'table'],
  // Note: you will need to get a mapsApiKey for your project.
  // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
  'mapsApiKey': 'AIzaSyDgXqq9lo_kS_zbLPhbZ3rFrQmySqD0mPA'
});


      var timeout;

 $(document).ready(function(){
       timeout = setInterval(function () {
          if (google.visualization != undefined) {
             drawRegionsMap(country,count);
             clearInterval(timeout);
          }
       }, 300);
    });
console.log(country);
console.log(count);
console.log(Array.isArray(country));
function drawRegionsMap(country,count) {
  
  var data2 = new google.visualization.DataTable();
  data2.addColumn('string', 'Country');
  data2.addColumn('string', 'Number of visits');
 
  for (var i = 0; i < country.length; ++i) {
     

    data2.addRow([country[i],count[i]]);
}

  

  var options = {
    colorAxis: {
      colors: ['#76C1FA', '#63CF72', '#F36368', '#FABA66']
    }
  };
  var chart = new google.visualization.GeoChart(document.getElementById('regions-chart'));
  var chart_div = document.getElementById('regions-chart');


  // Wait for the chart to finish drawing before calling the getImageURI() method.
      google.visualization.events.addListener(chart, 'ready', function () {
        chart_div.innerHTML = '<img src="' + chart.getImageURI() + '">';
        document.getElementById('png').outerHTML = '<a class="dropdown-item" href="' + chart.getImageURI() + '">Image(PNG)</a>';
          var pdf_container = document.getElementById('chart-containter').innerHTML;
  console.log(pdf_container);
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


  chart.draw(data2, options);



  


}
    },
    error: function(data) {
      console.log(data);
    }
  });
});