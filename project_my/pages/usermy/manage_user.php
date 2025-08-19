<?php 
include("config.php");

// Insert Data
if (isset($_POST['submit'])) {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO users (`name`, `email`, `contact`) VALUES ('$name','$email','$contact')";
    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>New record created successfully.</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}

// Fetch Data
$result = $conn->query("SELECT * FROM users");
?>

<!-- Content Wrapper -->
<div class="content-wrapper">

  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manage Users</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manage Users</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Add User Form -->
    <div class="card card-primary" style="max-width: 600px; margin-bottom: 20px;">
      <div class="card-header">
        <h3 class="card-title">Add User</h3>
      </div>
      <form method="post" action="">
        <div class="card-body">
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <label>Email address</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
          </div>
          <div class="form-group">
            <label>Contact</label>
            <input type="number" name="contact" class="form-control" placeholder="Enter Contact Number" required>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>

    <!-- User List Table -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Users List</h3>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Contact</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            if ($result->num_rows > 0) {
                $i = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$i}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['contact']}</td>
                            <td>
                              <button class='btn btn-sm btn-primary'>Edit</button>
                              <button class='btn btn-sm btn-danger'>Delete</button>
                              <button class='btn btn-sm btn-success'>Show</button>
                            </td>
                          </tr>";
                    $i++;
                }
            } else {
                echo "<tr><td colspan='5'>No users found</td></tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>

  </section>
</div>
