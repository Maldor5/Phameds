<div class="insights">
          <div class="sales">
            
            <div class="middle">
              <img src="/assets/icons/product.png">
              <div class="left">
                <h2>Total Sales</h2>
                <h1>Shs.<?php echo number_format($totalSum); ?></h1>
              </div>
            </div>
            <small class="text-muted">Last 24 Hours</small>
          </div>


          <div class="inventory">
            
            <div class="middle">
              <img src="/assets/icons/inventory.png">
              <div class="left">
                <h2>Sales Number</h2>
                <h1><?php echo $rowCount;?></h1>
              </div>
            </div>
            <small class="text-muted">Last week</small>
          </div>
          

          <div class="status">
           
            <div class="middle">
              <img src="/assets/icons/medicine.png">
              <div class="left">
                <h2>Inventory Sold</h2>
                <h1><?php echo $totalQuantity;             
                ?></h1>
              </div>
            </div>
            <small class="text-muted">Last 24 Hours</small>
          </div>
        </div>
        <div class="table">
          <h2>Sales</h2>
          <table>
            <thead>
              <tr>
                <th>id</th>
                <th>date</th>
                <th>name</th>
                <th>unit price</th>
                <th>quantity</th>
              </tr>
            </thead>
            <tbody>
              <form action="Sales.php" method="post">
              <tr>
                <td><input type="text" name="id" value=""></td>
                <td><input type="date" name="date" value="<?php echo date('Y-m-d'); ?>"></td>
                <td><input type="text" id="input" name="name" value="" required></td>
                <td><input type="text" name="unit_price" value=""></td>
                <td><input type="text" name="quantity" value=""></td>
                <td><button type="submit" name="submit"><img src="/assets/icons/shopping cart.png"></button></td>
              </tr>
              <tr>
                    <?php 
                    mysqli_data_seek($result, 0); // Reset the result pointer to the beginning
                    while($row = mysqli_fetch_assoc($result))
                    {
                    ?>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['unit_price'];?></td>
                    <td><?php echo $row['quantity'];?></td>
                    <td><?php echo $row['unit_price'] * $row['quantity'];?></td>
   

             </tr>
   <?php
    }

    ?>
          
            </tbody>
          </table>