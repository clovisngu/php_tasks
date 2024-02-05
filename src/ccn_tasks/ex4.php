<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 4</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="ex1.php">Exercise 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ex2.php">Exercise 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ex3.php">Exercise 3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ex4.php">Exercise 4</a> <!-- Link to this exercise -->
      </li>
    </ul>
  </div>
</nav>

<!-- Main content -->
<div class="container mt-5">
  <h1> Exercise 4 Control flow and loops</h1>
  
  <!-- Form to collect user inputs -->
  <form method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="number" class="form-control" id="age" name="age" required>
    </div>
    <button type="submit" class="btn btn-primary">Check Eligibility</button>
  </form>

  <?php
// Check if the form is submitted and the 'name' and 'age' keys are set in the $_POST array
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) && isset($_POST['age'])) {
    // Get the user inputs
    $name = $_POST['name'];
    $age = $_POST['age'];

    // Decide if the user is eligible for voting
    if ($age >= 18) {
        echo "<p>$name is eligible for voting.</p>";
    } else {
        echo "<p>$name is not eligible for voting.</p>";
    }
}
?>
</div>

 <!-- PHP script to print response based on current month -->
 <?php
  // Get the current month name
  $current_month = date("F");

  // Switch case to handle different months
  switch ($current_month) {
    case 'August':
      echo "<p>It's August, so it's still holiday.</p>";
      break;
    default:
      echo "<p>Not August, this is $current_month so I don't have any holidays.</p>";
      break;
  }
  ?>
  </div>
  <!-- Main content -->
<div class="container mt-5">
  <h1>Multiplication Table</h1>
  
  <!-- Form to collect user input -->
  <form method="post">
    <div class="form-group">
      <label for="number">Enter a number:</label>
      <input type="number" class="form-control" id="number" name="number" required>
    </div>
    <button type="submit" class="btn btn-primary">Generate Table</button>
  </form>
  
  <?php
  // Check if the form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Get the number entered by the user
      $number = $_POST['number'];

      // Display the multiplication table
      echo "<h3>Multiplication Table of $number</h3>";
      echo "<table class='table'>";
      echo "<thead><tr><th>Multiplier</th><th>Result</th></tr></thead>";
      echo "<tbody>";
      for ($i = 1; $i <= 10; $i++) {
          echo "<tr>";
          echo "<td>$number x $i</td>";
          echo "<td>" . ($number * $i) . "</td>";
          echo "</tr>";
      }
      echo "</tbody>";
      echo "</table>";
  }
  ?>
  
</div>
<!-- Form to collect user input -->
<form method="post">
  <label for="number">Enter a number:</label>
  <input type="number" id="number" name="number" required>
  <button type="submit">Print Numbers</button>
</form>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the number entered by the user
    $number = $_POST['number'];

    // Display the numbers from 1 to n using a while loop
    echo "<h3>Numbers from 1 to $number</h3>";
    echo "<p>";
    $i = 1; // Initialize counter
    while ($i <= $number) {
        echo "$i ";
        $i++; // Increment counter
    }
    echo "</p>";
}
?>
<?php
$myarray = array("HTML", "CSS", "PHP", "JavaScript");

// Print all elements of the array
foreach ($myarray as $element) {
    echo $element . "<br>";
}
?>


</body>
</html>
