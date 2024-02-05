<?php
$title = "Exercise 3: Variable, Strings & Operators";
include 'ex2/header.php';

// Function to detect the browser
function get_browser_name() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    if (strpos($user_agent, 'MSIE') !== FALSE) {
        return 'Internet Explorer';
    } elseif (strpos($user_agent, 'Firefox') !== FALSE) {
        return 'Mozilla Firefox';
    } elseif (strpos($user_agent, 'Chrome') !== FALSE) {
        return 'Google Chrome';
    } elseif (strpos($user_agent, 'Safari') !== FALSE) {
        return 'Safari';
    } elseif (strpos($user_agent, 'Opera') !== FALSE) {
        return 'Opera';
    } else {
        return 'Unknown';
    }
}

// Function to get last modification time of a file
function get_last_modification_time($filename) {
    $last_modified_timestamp = filemtime($filename);
    return date("F d, Y H:i:s", $last_modified_timestamp);
}
?>

<div class="container custom-form">
  <h1>Form Creation: Create a simple HTML form to collect the users Firstname and Lastname.
      Use the echo statement to print “Hello [Firstname] [Lastname], 
      You are welcome to my site.” inside an h3 </h1>

  <form method="post" action="process.php">
      <div class="form-group">
          <label for="nimi">Name:</label>
          <input type="text" class="form-control" name="nimi" id="nimi" required>
      </div>
      <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="email" id="email" required>
      </div>
      <div class="form-group">
          <label for="dob">DOB:</label>
          <input type="date" class="form-control" name="dob" id="dob">
      </div>
      <div class="form-group">
          <label for="color">Select color:</label>
          <input type="color" class="form-control" name="color" id="color">
      </div>
      <input type="submit" class="btn btn-primary" value="Submit">
  </form>

  <?php
  // String Variables
  $str1 = "Hello";
  $str2 = "World";
  $combined_str = $str1 . " " . $str2;
  
  // Print the combined string and its length
  echo "<p>Combined string: $combined_str</p>";
  echo "<p>Length of the combined string: " . strlen($combined_str) . "</p>";
  
  // Numbers Addition
  $num1 = 298;
  $num2 = 234;
  $num3 = 46;
  $sum = $num1 + $num2 + $num3;
  
  // Print the sum of the numbers
  echo "<p>Sum of the numbers: $sum</p>";
  
  // Detect the browser
  echo "<p>Your browser is: " . get_browser_name() . "</p>";
  ?>

</div>



<?php include "ex2/footer.php"; ?>

</body>
</html>
