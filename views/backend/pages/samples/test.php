<html>  
    <head>  
        <title>Inline Table Insert Update Delete in PHP using jsGrid</title>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
  <style>
  .hide
  {
     display:none;
  }
  </style>
    </head>  
    <body>  
        <div class="container">  
   <br />
   <div class="table-responsive">  
    <h3 align="center">Inline Table Insert Update Delete in PHP using jsGrid</h3><br />
    <div id="grid_table"></div>
   </div>  
  </div>
    </body>  
</html>  
<script>
 
    $('#grid_table').jsGrid({

     width: "100%",
     height: "600px",

     filtering: true,
     inserting:true,
     editing: true,
     sorting: true,
     paging: true,
     autoload: true,
     pageSize: 10,
     pageButtonCount: 5,
     deleteConfirm: "Do you really want to delete data?",

     controller: {
      loadData: function(filter){
       return $.ajax({
        type: "GET",
        url: "fetch_data.php",
        data: filter
       });
      },
      insertItem: function(item){
       return $.ajax({
        type: "POST",
        url: "fetch_data.php",
        data:item
       });
      },
      updateItem: function(item){
       return $.ajax({
        type: "PUT",
        url: "fetch_data.php",
        data: item
       });
      },
      deleteItem: function(item){
       return $.ajax({
        type: "DELETE",
        url: "fetch_data.php",
        data: item
       });
      },
     },

     fields: [
      {
       name: "id",
    type: "hidden",
    css: 'hide'
      },
      {
       name: "first_name", 
    type: "text", 
    width: 150, 
    validate: "required"
      },
      {
       name: "last_name", 
    type: "text", 
    width: 150, 
    validate: "required"
      },
      {
       name: "age", 
    type: "text", 
    width: 50, 
    validate: function(value)
    {
     if(value > 0)
     {
      return true;
     }
    }
      },
      {
       name: "gender", 
    type: "select", 
    items: [
     { Name: "", Id: '' },
     { Name: "Male", Id: 'male' },
     { Name: "Female", Id: 'female' }
    ], 
    valueField: "Id", 
    textField: "Name", 
    validate: "required"
      },
      {
       type: "control"
      }
     ]

    });

</script>
<?php

//fetch_data.php

$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
 $data = array(
  ':first_name'   => "%" . $_GET['first_name'] . "%",
  ':last_name'   => "%" . $_GET['last_name'] . "%",
  ':age'     => "%" . $_GET['age'] . "%",
  ':gender'    => "%" . $_GET['gender'] . "%"
 );
 $query = "SELECT * FROM sample_data WHERE first_name LIKE :first_name AND last_name LIKE :last_name AND age LIKE :age AND gender LIKE :gender ORDER BY id DESC";

 $statement = $connect->prepare($query);
 $statement->execute($data);
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'id'    => $row['id'],   
   'first_name'  => $row['first_name'],
   'last_name'   => $row['last_name'],
   'age'    => $row['age'],
   'gender'   => $row['gender']
  );
 }
 header("Content-Type: application/json");
 echo json_encode($output);
}

if($method == "POST")
{
 $data = array(
  ':first_name'  => $_POST['first_name'],
  ':last_name'  => $_POST["last_name"],
  ':age'    => $_POST["age"],
  ':gender'   => $_POST["gender"]
 );

 $query = "INSERT INTO sample_data (first_name, last_name, age, gender) VALUES (:first_name, :last_name, :age, :gender)";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == 'PUT')
{
 parse_str(file_get_contents("php://input"), $_PUT);
 $data = array(
  ':id'   => $_PUT['id'],
  ':first_name' => $_PUT['first_name'],
  ':last_name' => $_PUT['last_name'],
  ':age'   => $_PUT['age'],
  ':gender'  => $_PUT['gender']
 );
 $query = "
 UPDATE sample_data 
 SET first_name = :first_name, 
 last_name = :last_name, 
 age = :age, 
 gender = :gender 
 WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == "DELETE")
{
 parse_str(file_get_contents("php://input"), $_DELETE);
 $query = "DELETE FROM sample_data WHERE id = '".$_DELETE["id"]."'";
 $statement = $connect->prepare($query);
 $statement->execute();
}

?>