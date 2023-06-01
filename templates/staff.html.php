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