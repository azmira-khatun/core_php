<form action="/venues/create" method="POST">
  <label for="name">Venue Name:</label>
  <input type="text" id="name" name="name" required>

  <label for="location">Location:</label>
  <input type="text" id="location" name="location" required>

  <label for="capacity">Capacity (number of guests):</label>
  <input type="number" id="capacity" name="capacity" required>

  <label for="area_size">Area Size (m²):</label>
  <input type="number" step="0.01" id="area_size" name="area_size">

  <label for="facilities">Facilities (comma-separated):</label>
  <input type="text" id="facilities" name="facilities">

  <label for="floor_plan">Floor Plan Link or Description:</label>
  <input type="text" id="floor_plan" name="floor_plan">

  <label for="rental_cost">Rental Cost:</label>
  <input type="number" step="0.01" id="rental_cost" name="rental_cost">

  <label for="deposit_required">Deposit Required:</label>
  <input type="number" step="0.01" id="deposit_required" name="deposit_required">

  <label for="availability">Availability (dates or times):</label>
  <input type="text" id="availability" name="availability">

  <label for="contact_person">Contact Person:</label>
  <input type="text" id="contact_person" name="contact_person">

  <label for="contact_phone">Contact Phone:</label>
  <input type="text" id="contact_phone" name="contact_phone">

  <label for="contact_email">Contact Email:</label>
  <input type="email" id="contact_email" name="contact_email">

  <label for="description">Description:</label>
  <textarea id="description" name="description"></textarea>

  <button type="submit">Add Venue</button>
</form>
