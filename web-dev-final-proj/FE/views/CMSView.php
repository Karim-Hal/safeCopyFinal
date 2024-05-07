<?php

function listItems() {
    
    ?>
        <h1>
            <center>
                List of Items
            </center>
        </h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Status</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            $items = getPlates(getConnection());
            
            foreach ($items as $item) { ?>
                <tr>
                    <td><?php echo $item['ID']; ?></td>
                    <td><?php echo $item['PLATTER']; ?></td>
                    <td><?php echo $item['DESCRIPTION']; ?></td>
                    <td><?php echo $item['isActive'] ? "Active" : "Deactivated"; ?></td>
                    <td>
                        <form name="activateForm" method="POST" action="../../BE/controllers/userController.php">
                            <input type="hidden" name="action" value="ACTIVATE">
                            <input type="hidden" name="ID" value="<?php echo $item["ID"] ?>">
                          
                            
                            <input type="submit" value="<?php echo $item["isActive"] ? "Deactivate" : "Activate"; ?>">
                        </form>
                    </td>
                    <td>
                        <form name="deleteForm" method="post" action="../../BE/controllers/userController.php">
                            <input type="hidden" name="action" value="DELETEPLATTER">
                            <input type="hidden" name="id" value="<?php echo $item["ID"] ?>">
                            <input type="submit" value="Delete" >
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    <?php
    


}
function addItemForm() {
    ?>
    <form method="POST" action="../../BE/controllers/userController.php">
                    <div class="form-group">
                            <label for="platter">ID (1-12)</label>
                            <input type="text" class="form-control" id="id-plate" name="id" required>
                        </div>
                        <div class="form-group">
                            <label for="platter">Platter Name</label>
                            <input type="text" class="form-control" id="platter" name="platter" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="isActive">Is Active</label>
                            <select class="form-control" id="isActive" name="isActive">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label >Click Here to add an item:</label >

                        <input type="hidden" name="action" value="ADDITEM">
                        <input type="submit"  class="form-control">
                        </div>
                        
                    </form>
<?php
}
function signupForm(){
    ?>
    <form action="../../BE/controllers/userController.php" method="POST">
      <input type="hidden" name="action" value="SIGNUP">
      <h1>Add an Admin</h1>
      <section id="personal-details">
        <h2>Personal Details</h2>
        <ul>
          <li>
            <label for="fn">Full Name</label>
            <input
              type="text"
              id="fn"
              name="full-name"
              required
              maxlength="20"
            />
          </li>

          <li>
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="date-of-birth" />
          </li>

          <li id="gender-box">
            <label for="m-sex"
              ><input type="radio" id="m-sex" name="sex" checked value="M"/> Male</label
            >
            <br />
            <label for="f-sex"
              ><input type="radio" id="f-sex" name="sex" value="F"/> Female</label
            >
          </li>
        </ul>
      </section>

      <section id="account-creation">
        <h2>Account Creation</h2>
        <ul>
          <li>
            <label for="dn">Display Name</label>
            <input type="text" id="dn"  name="display-name" />
          </li>

          <li>
            <label for="user-email">Email Address</label>
            <input type="email" id="user-email" name="user-email">
          </li>
          <li>
            <label for="pass1">Password</label>
            <input type="password" id="pass1"  name="password" />
          </li>

          <li>
            <label for="pass2">Confirm Password</label>
            <input type="password" id="pass2"  />
          </li>
        </ul>
      </section>

      <section id="submission">
        <button type="button" onclick="validityCheck()">Add Admin</button>
       
      </section>
    </form>

    <?php
}


function loginForm(){
?>
 <form action="..\..\be\controllers\userController.php" method="POST">
 <input type="hidden" name="action" value="LOGIN">

      <h1>Login Form</h1>
    
      <section id="account-creation">
        <h2>Enter your credentials</h2>
        <ul>
          <li>
            <label for="dn">Email Address</label>
            <input type="email" id="dn" name="user-email" />
          </li>
          <li>
            <label for="pass1">Password</label>
            <input type="password" id="pass1" name="pass" />
          </li>

        </ul>
      </section>

      <section id="submission">
        <button type="submit">Log In</button>
       
      </section>
    </form>
    


<?php
}

?>


