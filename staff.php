<?php
session_start();

// Check if the staff member is not logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
//connection
require_once('config/connection.php');
$query = "select * from staff";
$result = mysqli_query($conn,$query);


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Staff</title>
    <link rel="stylesheet" href="/css/dashboard.css">
  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <div class="top">
          <div class="logo">
            <img src="/assets/icons/drupal.png">
            <h2>phameds</h2>
          </div>
        </div>
        <a href="#" class="active">
          <img src="/assets/icons/dashboard.png">
          <h3>dashboard</h3>
        </a>
        <a href="./Sales.php" class="sales" onclick="selected1();">
          <img src="/assets/icons/plus.png">
          <h3>Sales</h3>
        </a>
        <a href="/Inventory.php" class="inventory" onclick="selected();">
          <img src="/assets/icons/inventory.png">
          <h3>Inventory</h3>
        </a>
        <a href="#" class="staff active">
          <img src="/assets/icons/staff icon.png">
          <h3>Staff</h3>
        </a>
        <a href="./logout.php">
          <img src="/assets/icons/enter.png">
          <h3>Log Out</h3>
        </a>
      </div>
      <!-- ---------END OF SIDEBAR----------------- -->

      <main>
        <div class="main-top">
          <div>
            <h1>Dashboard</h1>
          </div>
          <div class="right-top">
            <div class="theme-toggler">
              <button class="button1 active" onclick="
              changeTheme1();"><img class="toggle" src="assets/icons/moon.png"></button>
              <button class="button2" onclick="
              changeTheme();
              "><img class="toggle" src="assets/icons/brightness.png"></button>
            </div>
            <div class="profile">
              <div>
              <p><h5>Reagan</h5></p>
              <small class="text-muted">Admin</small>
              </div>
              <div>
                <img src="pictures/124-1246857_employee-avatar-transparent-background-png-icone-chef-d.png">
              </div>
            </div>
          </div>
        </div>

        <div class="table" style="margin-top: 4rem;">
          <h2>Staff</h2>
          <table>
            <thead>
              <tr>
                <th>Staff</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Contact</th>
                <th>email</th>
                <th>Role</th>
                
              </tr>
            </thead>
            <tbody>
              
              <tr>
                  <?php 
                  //displays data from staff table
                  while($row = mysqli_fetch_assoc($result))
                  {
                  ?>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['first_name'];?></td>
                  <td><?php echo $row['last_name'];?></td>
                  <td><?php echo $row['gender'];?></td>
                  <td><?php echo $row['contact'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['role'];?></td>

              </tr>
                <?php
                  }

                  ?>
              
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </body>
  <script>

   const themeToggler = document.querySelector('.theme-toggler');
   themeToggler.addEventListener('click', () =>{
   document.body.classList.toggle('dark-theme-variables');
    })
  </script>
</html>