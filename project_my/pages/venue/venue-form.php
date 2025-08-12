<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>venue</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
            <li class="breadcrumb-item active">Event</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card" style="max-width: 700px;">
      <div class="card-header">
        <h3 class="card-title">Event Form</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>

      <div class="card-body" style="background-color: #917a88ff !important;">
        <div class="card card-primary">
          <div class="card-header" style="background-color: #dc1b92ff !important; padding:10px; color: white;">
            <h3 class="card-title"> Details of Venue </h3>
          </div>
          <!-- form start -->
         <form>
  <div class="card-body">
    <div class="form-group">
      <label for="eventName">Name</label>
      <input type="text" class="form-control" id="eventName" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="eventLocation">Location</label>
      <input type="text" class="form-control" id="eventLocation" placeholder="Enter location">
    </div>
    <div class="form-group">
      <label for="eventCapacity">Capacity</label>
      <input type="number" class="form-control" id="eventCapacity" placeholder="Enter capacity"
             min="1" step="1">
    </div>
    <div class="form-group">
      <label for="eventFeatures">Availability / Special Features</label>
      <input type="text" class="form-control" id="eventFeatures" placeholder="Enter features or availability">
    </div>
    <div class="form-group">
      <label for="eventImage">Event Image</label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="eventImage">
          <label class="custom-file-label" for="eventImage">Choose file</label>
        </div>
        <div class="input-group-append">
          <span class="input-group-text">Upload</span>
        </div>
      </div>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="publishEvent">
      <label class="form-check-label" for="publishEvent">Publish immediately</label>
    </div>
  </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary" style="background-color: #cb590e !important;">
      Submit
    </button>
  </div>
</form>

        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
