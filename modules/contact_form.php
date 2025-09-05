<div class="card">
  <div class="card-body">
    <h5 class="card-title">Contact Form</h5>

    <!-- Floating Labels Form -->
    <form class="row g-3">
      <div class="col-md-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="contactName" placeholder="Your Name">
          <label for="contactName">Your Name</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-floating">
          <input type="email" class="form-control" id="contactEmail" placeholder="Your Email">
          <label for="contactEmail">Your Email</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" id="contactSubject" placeholder="Subject">
          <label for="contactSubject">Subject</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <textarea class="form-control" placeholder="Message" id="contactMessage" style="height: 120px;"></textarea>
          <label for="contactMessage">Message</label>
        </div>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Send Message</button>
        <button type="reset" class="btn btn-secondary">Clear</button>
      </div>
    </form>
    <!-- End floating Labels Form -->

  </div>
</div>
