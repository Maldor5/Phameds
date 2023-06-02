<div class="insights">
      <div class="sales">
        
            <div class="middle">
                  <img src="/assets/icons/product.png">
                  <div class="left">
                        <h2>Stock Price</h2>
                        <h1>Shs.<?php echo number_format($totalSum); ?></h1>
                  </div>
            </div>
            <small class="text-muted">Last 24 Hours</small>
      </div>


      <div class="inventory">
        
            <div class="middle">
                  <img src="/assets/icons/inventory.png">
                  <div class="left">
                        <h2>Inventory</h2>
                        <h1><?=$rowCount; ?></h1>
                  </div>
            </div>
            <small class="text-muted">Last week</small>
      </div>


      <div class="status">
        
            <div class="middle">
                  <img src="/assets/icons/medicine.png">
                  <div class="left">
                        <h2>Inventory</h2>
                        <h1><?=$totalQuantity;?></h1>
                  </div>
            </div>
            <small class="text-muted">Last 24 Hours</small>
      </div>
</div>
<div class="table">
          <h2>Inventory</h2>
          <table>
                  <thead>
                    <tr>
                          <th>Product</th>
                          <th>Product Name</th>
                          <th>Unit Price</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th>Expiry</th>
                          <th>Category</th>
                          <th>Description</th>
                          <th>Add</th>
                    </tr>
                  </thead>
                  <tbody>
                          <!-- posts data to the db -->
                          <form action="Inventory.php" method="post">
                          <tr>
                                <td><input type="text" name="id" value=""></td>
                                <td><input type="text" id="input" name="name" value="" required></td>
                                <td><input type="text" name="unit_price" value=""></td>
                                <td><input type="text" name="quantity" value=""></td>
                                <td><input type="text" name="price" value=""></td>
                                <td><input type="date" name="expiry_date" value=""></td>
                                <td><input id="input" type="text" name="category" value=""></td>
                                <td><input id="input" type="text" name="description" value=""></td>
                                <td><button type="submit" name="submit"><img src="/assets/icons/plus.png"></button></td>
                          </tr>   
                          <tr>
                                <?php 
                                //displays data from the db table
                                mysqli_data_seek($result, 0); // Reset the result pointer to the beginning
                                while($row = mysqli_fetch_assoc($result))
                                {
                                ?>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['unit_price'];?></td>
                                <td><?php echo $row['quantity'];?></td>
                                <td><?php echo $row['unit_price'] * $row['quantity'];?></td>
                                <td><?php echo $row['expiry_date'];?></td>
                                <td><?php echo $row['category'];?></td>
                                <td><?php echo $row['description'];?></td>

                          </tr>
                              <?php
                                }

                                ?>
                  
                  </tbody>
          </table>
</div>