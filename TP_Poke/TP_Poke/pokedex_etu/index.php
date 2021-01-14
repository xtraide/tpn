<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Pokedex</title>
  </head>
  <body>
<h1>My Pokedex</h1>

    <table>
      <thead>
        <tr>
          <th>Sprite</th>
          <th>ID</th>
          <th>Name</th>
          <th>Height</th>
          <th>Weight</th>
          <th>Base exp</th>
        </tr>
      </thead>

    <?php $link = mysqli_connect("localhost" , "root", "", "poke");
    if(!$link){
    exit;
   }
$req = " SELECT * FROM `pokemon`;";
$result = mysqli_query($link,$req);
  if ($result) {
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      if ($row['base_experience']>200) {
          echo "<tbody>";
          echo "<tr>";
          echo "<td><img src='sprites/" . $row['identifier'] . ".png' alt='" . $row['identifier'] . "'></td>";
          echo "<td class='super'>" . $row['id'] . "</td>";
          echo "<td class='super'>" . $row['identifier'] . "</td>";
          echo "<td class='super'>" . $row['height'] . "</td>";
          echo "<td class='super'>" . $row['weight'] . "</td>";
          echo "<td class='super'>" . $row['base_experience'] . "</td>";
          echo "</tr>";
          echo "</tbody>";
        # code...
      }else{
          echo "<tbody>";
          echo "<tr>";
          echo "<td><img src='sprites/" . $row['identifier'] . ".png' alt='" . $row['identifier'] . "'></td>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['identifier'] . "</td>";
          echo "<td>" . $row['height'] . "</td>";
          echo "<td>" . $row['weight'] . "</td>";
          echo "<td>" . $row['base_experience'] . "</td>";
          echo "</tr>";
          echo "</tbody>";
        }
      }
    }
$req = " SELECT COUNT(*)  FROM `pokemon`;";
$result = mysqli_query($link,$req);
  if ($result) {
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          echo "There are " . $row['COUNT(*)'] . " pokemons from the database.";
        }
  }
?>
</table>
</body>
</html>
