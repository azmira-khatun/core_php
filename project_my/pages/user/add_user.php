<?php 
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
?> 

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
                <label for="exampleInputName">Name</label>
                <input type="text" name="firstname" class="form-control" id="exampleInputName" placeholder="Enter your name" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
              </div>
              <div class="form-group">
                <label for="exampleInputContact">Contact</label>
                <input type="number" name="contact" class="form-control" id="exampleInputContact" placeholder="Enter Your Contact number" required>
              </div>
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
