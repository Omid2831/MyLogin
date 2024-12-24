<?php

# include the data configuration file
include 'dbConection.php';

# get the id 
$id = $_GET['Update_id'];

# update the data in the database
$sql = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

# get the data from the database
$name = $row['name'];
$email = $row['email'];
$password = $row['password'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    # Update the data in the database
    $sql = "UPDATE users SET name = '$name', email = '$email', password = '$password' WHERE id = '$id'";    
    $result = mysqli_query($conn, $sql);

    # Check if the update was successful
    if ($result) {
        header("Location: MainPage.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Re-change your information</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="./Js/movement.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</head>

<body>
  <nav>
    <h3 class="name gradiant">
      <i class="fas fa-star lit-icon" style="margin-right: 8px;"></i>
      <span class="letters">E</span>
      <span class="letters">D</span>
      <span class="letters">I</span>
      <span class="letters">T</span>
      <span class="letters">_</span>
      <span class="letters">Y</span>
      <span class="letters">O</span>
      <span class="letters">U</span>
      <span class="letters">R</span>
      <span class="letters">S</span>
    </h3>
  </nav>

  <div class="box">
    <div class="container">
      <form method="POST" action="">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
            maxlength="35" required value="<?php echo htmlspecialchars($email); ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" minlength="7" maxlength="14"
            required value="<?php echo htmlspecialchars($password); ?>">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Change</button>
      </form>
    </div>
  </div>
</body>
</html>