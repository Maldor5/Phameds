<!DOCTYPE html>
<html>
      <head>
        <title>Inventory</title>
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
                                <img src="assets/icons/dashboard.png">
                                <h3>dashboard</h3>
                          </a>
                          <a href="./Sales.php" class="sales active" onclick="selected1();">
                                <img src="/assets/icons/plus.png">
                                <h3>Sales</h3>
                          </a>
                          <a href="./Inventory.php" class="inventory" onclick="selected();">
                                <img src="/assets/icons/inventory.png">
                                <h3>Inventory</h3>
                          </a>
                          <a href="./staff.php" class="staff"  onclick="selected();">
                                <img src="/assets/icons/staff icon.png">
                                <h3>Staff</h3>
                          </a>
                          <!-- <a href="#" class="reports" onclick="selected2();">
                            <img src="icons/medicine.png">
                            <h3>Reports</h3>
                          </a> -->
                          <a href="./logout.php">
                                <img src="/assets/icons/enter.png">
                                <h3>Log out</h3>
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
                                              <button class="button1 active" onclick="changeTheme1();">
                                                      <img class="toggle" src="/assets/icons/moon.png">
                                              </button>
                                              <button class="button2" onclick="changeTheme();">
                                                      <img class="toggle" src="/assets/icons/brightness.png">
                                              </button>
                                        </div>
                                        <div class="profile">
                                              <div>
                                                  <p><h5><?=$session_details[0];?></h5></p>
                                                  <small class="text-muted"><?=$session_details[1];?></small>
                                              </div>
                                              <div>
                                                    <img src="pictures/124-1246857_employee-avatar-transparent-background-png-icone-chef-d.png">
                                              </div>
                                        </div>
                                  </div>
                            </div>
                                <!-- -------------------end of HEADER----------------------- -->
                      <!-- <div class="date">
                        <input type="date">
                      </div> -->
                        <!-- ---------------------end of DASHBORD----------------------- -->
                      <?=$output?>
                    </main>
               </div>
      </body>
          <script>
                  // changes theme
                  
                const themeToggler = document.querySelector('.theme-toggler');
                themeToggler.addEventListener('click', () =>{
                document.body.classList.toggle('dark-theme-variables');
                  })
                
          
          </script>
</html>