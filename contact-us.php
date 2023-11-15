<?php 
    include_once('template/layout/header.php');
?>
<main style="margin-top: -128px">
  <section
    class="contact-hero py-10 md:py-0 md:min-h-screen flex justify-center items-center"
  >
    <div class="container">
      <div
        class="glass hero-content mr-auto md:w-1/2 flex flex-col justify-center items-start rounded-3xl p-8"
      >
        <h2 class="mb-4">
          Work better <span class="text-primary">together</span>
        </h2>
        <p class="lead1">
          To help our company win, we work together across boundaries to meet
          the needs of our customers. We value our people, encourage their
          development, and reward their success. Communication is part of
          working together so, you have good communication with your team for
          better work. Our better working process is all about our teamwork
          together. To establish a process and work better together, people may
          propose many different paths, strategies, and agendas, so a
          preliminary discussion is necessary.
        </p>
      </div>
    </div>
  </section>
  <section class="contact-form py-20">
    <div class="container grid items-center gap-8 grid-cols-12">
      <div class="form-div col-span-12 md:col-span-6">
        <form class="grid grid-cols-12 gap-6" action="">
          <div class="form-control col-span-6">
            <label class="label">
              <span class="label-text">First Name</span>
            </label>
            <input
              type="text"
              placeholder="Enter Your First Name"
              class="input input-bordered input-secondary w-full"
            />
          </div>
          <div class="form-control col-span-6">
            <label class="label">
              <span class="label-text">Last Name</span>
            </label>
            <input
              type="text"
              placeholder="Enter Your Last Name"
              class="input input-bordered input-secondary w-full"
            />
          </div>
          <div class="form-control col-span-12">
            <label class="label">
              <span class="label-text">Email</span>
            </label>
            <input
              type="email"
              placeholder="Enter Your Email"
              class="input input-bordered input-secondary w-full"
            />
          </div>
          <div class="form-control col-span-12">
            <label class="label">
              <span class="label-text">Phone Number</span>
            </label>
            <input
              pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
              type="tel"
              placeholder="Enter Your Phone Number"
              class="input input-bordered input-secondary w-full"
            />
          </div>
          <div class="form-control col-span-12">
            <label class="label">
              <span class="label-text">Services</span>
            </label>
            <select class="select select-secondary select-bordered">
              <option disabled selected>Please choose a service</option>
              <option>Star Wars</option>
              <option>Harry Potter</option>
              <option>Lord of the Rings</option>
              <option>Planet of the Apes</option>
              <option>Star Trek</option>
            </select>
          </div>
          <div class="form-control col-span-12">
            <div id="html_element"></div>
          </div>
          <div class="form-control col-span-12 md:col-span-2">
            <input class="btn btn-primary" type="submit" value="Send" />
          </div>
        </form>
      </div>
      <div class="img-div col-span-12 md:col-span-6">
        <img src="/assets/images/contact_image.png" alt="" />
      </div>
    </div>
  </section>
  <section class="address-section pb-36">
    <div class="container">
      <h2>Contact Details</h2>
      <p class="lead1 mt-4">
        1st FLOOR, F33<br />
        Phase-8, Industrial Area, Sector 73<br />
        Sahibzada Ajit Singh Nagar, Punjab 160071<br />
        E-Mail: <a class="text-primary" href="mailto:hr@baselineitdevelopment.com">hr@baselineitdevelopment.com</a><br />
        E-Mail: <a class="text-primary" href="mailto:sales@baselineitdevelopment.com">sales@baselineitdevelopment.com</a>
      </p>

      <div class="map-div mt-6 overflow-hidden rounded-3xl shadow-xl border-primary border-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.2541470297783!2d76.70341921539709!3d30.71125489371788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fee9fe6a743ff%3A0x384c4fd813517643!2sBaseline%20IT%20Development%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1661328908112!5m2!1sen!2sin" width="100%" height="610" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
</main>
<?php 
    include_once('template/layout/footer.php');
?>
