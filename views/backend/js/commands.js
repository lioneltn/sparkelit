$(document).ready(function(){
  $.ajax({
    url: "../backend/pages/json_commands.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      

      


  document.getElementById('commandes').innerHTML ='<p class="text-muted mb-0">' + data[0] +' % change cette semaine </p>';
    document.getElementById('nCommandes').innerHTML ='<h3 class="text-primary">' + data[1] +' </h3>';
 document.getElementById('nVisites').innerHTML ='<h3 class="text-danger">' + data[3] +' </h3>';
   document.getElementById('VisiteM').innerHTML ='<p class="text-muted mb-0">' + data[2] +' % change ce mois </p>';

    document.getElementById('nVisiteS').innerHTML ='<h3 class="text-danger">' + data[5] +' </h3>';
   document.getElementById('VisiteS').innerHTML ='<p class="text-muted mb-0">' + data[4] +' % change cette semaine </p>';

   

   




    },
    error: function(data) {
      console.log(data);
    }
  });

   

});
