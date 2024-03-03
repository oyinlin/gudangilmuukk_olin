<!-- <?php
$conn = mysqli_connect("localhost", "root", "", "eperpus");
session_start();

if(!isset($_SESSION["user_id"]) ) {
  header("Location: ../../login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Eperpus</title>
    <link rel="stylesheet" href="../../register/register.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="container">
      <div class="title">Registration</div>
      <div class="content">        
        <form action="../../backend/loginpetugas.php" method="post">          
          <div class="user-details">
            <div class="input-box">
              <span class="details">Full Name</span>
              <input type="text" placeholder="Enter your name" required name="fullname" />
            </div>
            <div class="input-box">
              <span class="details">Username</span>
              <input type="text" placeholder="Enter your username" required name="username" />
            </div>
            <div class="input-box">
              <span class="details">Email</span>
              <input type="text" placeholder="Enter your email" required name="email"/>
            </div>
            <div class="input-box">
              <span class="details">Alamat</span>
              <input type="text" placeholder="Enter your number" required name="alamat" />
            </div>
            <div class="input-box">
              <span class="details">Password</span>
              <input type="text" placeholder="Enter your password" required name="password" />
            </div>
          </div>
          <div class="button">
            <input type="submit" value="Register" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html> -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Eperpus</title>
    <link rel="stylesheet" href="../../register/register.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
      body {
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f0f0f0;
}

.container {
  width: 400px;
  background: #fff;
  padding: 40px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.title {
  font-size: 24px;
  font-weight: bold;
  text-align: center;
  margin-bottom: 20px;
}

.content {
  display: flex;
  flex-direction: column;
}

.input-box {
  margin-bottom: 20px;
}

.details {
  font-size: 16px;
  color: #333;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="submit"] {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s;
}

input[type="submit"]:hover {
  background-color: #0056b3;
}

    </style>
  </head>
  <body>
    <div class="container">
      <div class="title">Registration</div>
      <div class="content">        
        <form action="../../backend/loginpetugas.php" method="post">          
          <div class="user-details">
            <div class="input-box">
              <span class="details">Full Name</span>
              <input type="text" placeholder="Enter your name" required name="fullname" />
            </div>
            <div class="input-box">
              <span class="details">Username</span>
              <input type="text" placeholder="Enter your username" required name="username" />
            </div>
            <div class="input-box">
              <span class="details">Email</span>
              <input type="text" placeholder="Enter your email" required name="email"/>
            </div>
            <div class="input-box">
              <span class="details">Alamat</span>
              <input type="text" placeholder="Enter your number" required name="alamat" />
            </div>
            <div class="input-box">
              <span class="details">Password</span>
              <input type="password" placeholder="Enter your password" required name="password" />
            </div>
          </div>
          <div class="button btn btn-info">
            <input type="submit" value="Register" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
