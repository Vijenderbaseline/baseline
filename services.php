<?php 
    include_once('template/layout/header.php');
?>
<main style="margin-top: -128px">
  <section class="service-hero md:min-h-screen py-8 flex items-center">
    <div class="container">
      <div
        class="glass hero-content mr-auto md:w-1/2 flex flex-col justify-center items-start rounded-3xl p-8"
      >
        <h2 class="mb-4">
          <span class="text-primary">Organise</span> Projects. Get More Done.
        </h2>
        <p class="lead1 mb-2">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. A, autem ad.
          Nostrum voluptatem doloremque cumque necessitatibus dolorum?
        </p>
        <a href="#service" class="btn btn-primary px-6 rounded-full"
          >What We Do
          <i
            class="fa-solid fa-circle-chevron-right fa-fade ml-2 text-secondary"
          ></i
        ></a>
      </div>
    </div>
  </section>
  <?php 
        include_once('template/components/services.php');
    ?>
  <section class="bfit-section py-16">
    <div class="container">
      <h2 class="mb-2">
        <span class="text-primary">Benefits</span> of working<br />
        with us
      </h2>
      <p class="lead1 mb-12">
        Working is the better way to keep you busy, challenge you, and give you
        the means to develop yourself to get an identity and personal
        achievement. It provides you with income and builds up your skills and
        knowledge.
      </p>
      <div class="grid grid-cols-12 gap-8">
        <div class="md:col-span-6 col-span-12 flex items-start">
          <div class="icon-section bg-gray-100 rounded-full p-6 mr-10">
            <img src="assets/logos/01.svg" alt="" />
          </div>
          <div class="text-section">
            <h5>Teamwork</h5>
            <p class="body1">
              Our team always works together to achieve a goal. Good teamwork is
              possible when team members work with a positive attitude.
            </p>
          </div>
        </div>
        <div class="md:col-span-6 col-span-12 flex items-start">
          <div class="icon-section bg-gray-100 rounded-full p-6 mr-10">
            <img src="assets/logos/01.svg" alt="" />
          </div>
          <div class="text-section">
            <h5>Discipline</h5>
            <p class="body1">
              We are maintaining discipline in our company for a safe and
              pleasant work environment for everyone. Business discipline is
              managing marketing, information technology, and finances.
            </p>
          </div>
        </div>
        <div class="md:col-span-6 col-span-12 flex items-start">
          <div class="icon-section bg-gray-100 rounded-full p-6 mr-10">
            <img src="assets/logos/01.svg" alt="" />
          </div>
          <div class="text-section">
            <h5>Perseverance</h5>
            <p class="body1">
              If our company faces something despite difficulties we are
              continued efforts to achieve the goal. We keep trying despite the
              challenges to show perseverance.
            </p>
          </div>
        </div>
        <div class="md:col-span-6 col-span-12 flex items-start">
          <div class="icon-section bg-gray-100 rounded-full p-6 mr-10">
            <img src="assets/logos/01.svg" alt="" />
          </div>
          <div class="text-section">
            <h5>Client focus</h5>
            <p class="body1">
              If you hire us then we focus on client requirements and get all
              details about the project. We got great reviews from previous
              clients for development and design work.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="solution-section py-16 bg-secondary">
    <div class="container">
      <div class="grid p-12 bg-accent rounded-2xl grid-cols-12">
        <div class="md:col-span-8 col-span-12">
          <h3 class="mb-8 text-white">
            The simplest solution to the most complex problem is provided by us
          </h3>
          <a
            href="contact-us.php"
            class="btn btn-default text-primary font-bold"
            >Contact Us</a
          >
        </div>
      </div>
    </div>
  </section>
</main>
<?php 
    include_once('template/layout/footer.php');
?>
