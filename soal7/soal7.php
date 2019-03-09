<?php
// New Connection
$db = new mysqli('localhost','root','','db_gudang');

// Check for errors
if(mysqli_connect_errno()){
  echo mysqli_connect_error();
}

$result = $db->query("Select categories.id as id,categories.name as category_name, GROUP_CONCAT(products.name) as products_name FROM categories JOIN products ON categories.id = products.category_id GROUP BY products.category_id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Table Soal 7</h2>         
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Category Name</th>
        <th>Products</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if($result){
         // Cycle through results
        while ($row = $result->fetch_object()){
      ?>
      <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->category_name ?></td>
        <td><?php echo $row->products_name ?></td>
      </tr>
    <?php }
    } else{
    ?>
      <tr>
        <td colspan="3"></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>