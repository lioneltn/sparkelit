$(document).ready(function(){
  $.ajax({
    url: "../../json_browser.php",
    method: "GET",
    success: function(data1) {
      
      let browser = [];
      let count = [];
     

      for(var i in data1) {
        browser.push(data1[i].browser);
        count.push(data1[i].count);
      }

    // Region Charts Starts

google.charts.load('current', {
  'packages': ['geochart','bar', 'corechart', 'table'],
  // Note: you will need to get a mapsApiKey for your project.
  // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
  'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
});


      var timeout;

 $(document).ready(function(){
       timeout = setInterval(function () {
          if (google.visualization != undefined) {
             drawStuff(browser,count);
             clearInterval(timeout);
          }
       }, 300);
    });
console.log(browser);
console.log(count);
console.log(Array.isArray(browser));



function drawStuff(browser,count) {
  var data2 = new google.visualization.DataTable();
  data2.addColumn('string', 'Browser');
  data2.addColumn('string', 'Number of visits');
 
  for (var i = 0; i < browser.length; ++i) {
     

    data2.addRow([browser[i],count[i]]);
}

  var options = {
    title: 'Approximating Normal Distribution',
    legend: {
      position: 'none'
    },
    colors: ['#76C1FA'],

    chartArea: {
      width: 401
    },
    hAxis: {
      ticks: [-1, -0.75, -0.5, -0.25, 0, 0.25, 0.5, 0.75, 1]
    },
    bar: {
      gap: 0
    },

    histogram: {
      bucketSize: 0.02,
      maxNumBuckets: 200,
      minValue: -1,
      maxValue: 1
    }
  };

  var chart = new google.charts.Bar(document.getElementById('browsers-chart'));
  chart.draw(data2, options);
};

    },
    error: function(data) {
      console.log(data);
    }
  });
});