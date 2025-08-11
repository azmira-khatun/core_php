<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Create Event</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Create Event</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
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
      <div class="card-body">

        <form action="/event/create" method="post" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="eventName">Event Name</label>
              <input type="text" class="form-control" id="eventName" name="event_name" placeholder="Enter event name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="eventCategory">Category</label>
              <select id="eventCategory" name="category" class="form-control" required>
                <option value="" selected>Choose...</option>
                <option value="Conference">Conference</option>
                <option value="Workshop">Workshop</option>
                <option value="Concert">Concert</option>
                <option value="Seminar">Seminar</option>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="eventDate">Event Date</label>
              <input type="date" class="form-control" id="eventDate" name="event_date" required>
            </div>
            <div class="form-group col-md-4">
              <label for="startTime">Start Time</label>
              <input type="time" class="form-control" id="startTime" name="start_time" required>
            </div>
            <div class="form-group col-md-4">
              <label for="endTime">End Time</label>
              <input type="time" class="form-control" id="endTime" name="end_time" required>
            </div>
          </div>

          <div class="form-group">
            <label for="venue">Venue</label>
            <input type="text" class="form-control" id="venue" name="venue" placeholder="Enter venue" required>
          </div>

          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Write event description"></textarea>
          </div>

          <div class="form-group">
            <label for="ticketPrice">Ticket Price</label>
            <input type="number" class="form-control" id="ticketPrice" name="ticket_price" placeholder="Enter ticket price">
          </div>

          <div class="form-group">
            <label for="maxAttendees">Max Attendees</label>
            <input type="number" class="form-control" id="maxAttendees" name="max_attendees" placeholder="Enter max attendees">
          </div>

          <div class="form-group">
            <label for="eventImage">Event Image</label>
            <input type="file" class="form-control-file" id="eventImage" name="event_image">
          </div>

          <button type="submit" class="btn btn-primary">Create Event</button>
        </form>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
