<!-- <?php 
include("config.php");

if (isset($_POST['submit'])) {
    $first_name = $_POST['firstname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO users(`name`, `email`, `contact`) 
            VALUES ('$first_name','$email','$contact')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>  -->

<div class="content-wrapper">
  <section class="content-header">
    <!-- header section -->
  </section>

  <section class="content">
    <div class="card" style="max-width: 700px;">
      <div class="card-header">
        <h3 class="card-title">Add User</h3>
      </div>

      <div class="card-body" style="background-color: #e7d1c2ff !important;">
        <div class="card card-primary">
          <div class="card-header" style="background-color: #cb590eff !important; padding:10px;color: white;">
            <h3 class="card-title">Add User</h3>
          </div>

          <!-- form start -->
          <form method="post" action="">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputName">First Name</label>
                <input type="text" name="firstname" class="form-control" id="exampleInputName" placeholder="Enter your name" required>
              </div>
              <div class="form-group">
                <label for="exampleInputName">Last Name</label>
                <input type="text" name="lastname" class="form-control" id="exampleInputName" placeholder="Enter your name" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
              </div>
              <div class="form-group">
                <label for="exampleInputName">Adderss</label>
                <input type="text" name="address" class="form-control" id="exampleInputName" placeholder="Enter your address" required>
              </div>
              <div class="form-group">
                <label for="exampleInputContact">Password</label>
                <input type="number" name="password" class="form-control" id="exampleInputContact" placeholder="Enter Your password number" required>
              </div>
            </div>

            <!-- <div class="form-group">
                <label for="exampleInputContact">Roll</label>
                <input type="number" name="roll" class="form-control" id="exampleInputContact" placeholder=" please Enter" required>
              </div>
            </div> -->

            <?php
$roles = [
    1 => 'Admin',
    2 => 'Editor',
    3 => 'Author',
];
?>
<div class="form-group">
  <label for="role">Role</label>
  <select name="role_id" class="form-control" id="role" required>
    <option value="">-- Select Role --</option>
    <?php foreach ($roles as $id => $name): ?>
      <option value="<?php echo htmlspecialchars($id); ?>">
        <?php echo htmlspecialchars($name); ?>
      </option>
    <?php endforeach; ?>
  </select>
</div>


            <div class="card-footer">
              <button type="submit" name="submit" class="btn btn-primary" style="background-color: #cb590eff !important;">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
