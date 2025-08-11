<!-- <div class="container-fluid">
  Event ফর্ম -->
  <div class="card mb-4">
    <div class="card-header">
      <h3 class="card-title">Add / Filter Event</h3>
    </div>
    <div class="card-body">
      <form action="/event/list" method="post">
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="eventName">Event Name</label>
            <input type="text" class="form-control" id="eventName" name="event_name" placeholder="Enter event name">
          </div>
          <div class="form-group col-md-4">
            <label for="eventCategory">Category</label>
            <input type="text" class="form-control" id="eventCategory" name="category" placeholder="Category">
          </div>
          <div class="form-group col-md-4 align-self-end">
            <button type="submit" class="btn btn-primary">Save / Filter</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Event টেবিল -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Event List</h3>
    </div>
    <div class="card-body table-responsive">
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Event Name</th>
            <th>Category</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <!-- উদাহরণস্বরূপ সারি -->
          <tr>
            <td>1</td>
            <td>Annual Meetup</td>
            <td>Conference</td>
            <td>
              <button class="btn btn-sm btn-info">Show</button>
              <button class="btn btn-sm btn-primary">Edit</button>
              <button class="btn btn-sm btn-danger">Delete</button>
            </td>
          </tr>
          <!-- অন্যান্য সারি একইভাবে থাকবে -->
        </tbody>
      </table>
    </div>
    <div class="card-footer clearfix">
      <!-- পেজিনেশন বা অন্যান্য -->
    </div>
  </div>
</div>



