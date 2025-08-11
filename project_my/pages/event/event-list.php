<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add / Filter Event</h1>
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

      <div class="card-body" style="background-color: #e7d1c2 !important;">
        <div class="card card-primary">
          <div class="card-header" style="background-color: #cb590e !important; padding:10px; color: white;">
            <h3 class="card-title">Add / Filter Event</h3>
          </div>
          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="form-group">
                <label for="eventName">Event Name</label>
                <input type="text" class="form-control" id="eventName" placeholder="Enter event name">
              </div>
              <div class="form-group">
                <label for="eventCategory">Category</label>
                <input type="text" class="form-control" id="eventCategory" placeholder="Enter category">
              </div>
              <div class="form-group">
                <label for="eventDate">Event Date</label>
                <input type="date" class="form-control" id="eventDate">
              </div>
              <div class="form-group">
                <label for="eventVenue">Venue</label>
                <input type="text" class="form-control" id="eventVenue" placeholder="Enter venue">
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
            <!-- /.card-body -->

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
