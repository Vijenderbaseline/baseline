<?php 
    include_once('template/layout/header.php');
  ?>
<main style="margin-top: -128px">
  <section id="particles-js" class="">
    <div class="container hero min-h-screen">
      <div
        class="hero-content grid grid-cols-12 gap-8 lg:flex-row-reverse relative z-10"
      >
        <div class="lg:col-span-6 col-span-12">
          <h1><span class="text-primary">Team</span> Of Professionals</h1>
          <p class="py-6 lead1">
            Baseline IT Development has a team of professionals with one mission
            of empowering the lives through intense solutions of technology. We
            invite clients, partners, and employees to join us for business
            development as well as career development. Our experts provide
            top-tier services in web development, Designing, maintenance,
            support, testing, and Optimization.
          </p>
          <button class="btn btn-primary px-6 rounded-full mr-3">
            Get Started
          </button>
          <button  onclick="my_modal_2.showModal()" class="btn btn-secondary px-6 rounded-full">
            Watch Video
            <i class="fa-solid fa-circle-play fa-fade text-primary"></i>
          </button>
          <dialog id="my_modal_2" class="modal">
            <div class="modal-box">
              <h3 class="font-bold text-lg">Hello!</h3>
              <p class="py-4"><span class="text-primary">A Video will be added here</span><br> Press ESC key or click outside to close</p>
            </div>
            <form method="dialog" class="modal-backdrop">
              <button>close</button>
            </form>
          </dialog>
        </div>
        <div class="lg:col-span-6 col-span-12">
          <dotlottie-player
            class="dotlottie"
            src="https://lottie.host/34d9f2c7-4dfd-411f-bf8b-e76498aab755/zHNeWsODFy.json"
            background="transparent"
            speed="1"
            style="
              width: 600px;
              height: 600px;
              position: relative;
              z-index: 1;
              margin-left: 100px;
            "
            loop
            autoplay
          ></dotlottie-player>
          <div
            class="hidden bg-secondary rounded-full circle-hero absolute -top-2/3 z-0"
          ></div>
        </div>
      </div>
    </div>
  </section>
 
  <?php 
    include_once('template/components/tech.php');
  ?>
  <?php 
    include_once('template/components/services.php');
  ?>
  <section class="py-20 stats-section">
    <div class="container">
      <div
        class="grid md:grid-cols-4 grid-cols-2 py-8 shadow-lg rounded-lg gap-8"
      >
        <div class="text-center">
          <img class="mx-auto mb-4" src="assets/logos/01.svg" alt="" />
          <h2 class="text-primary">2000+</h2>
          <p class="lead1">Clients Worldwide</p>
        </div>
        <div class="text-center">
          <img class="mx-auto mb-4" src="assets/logos/01.svg" alt="" />
          <h2 class="text-primary">5000+</h2>
          <p class="lead1">Projects Completed</p>
        </div>
        <div class="text-center">
          <img class="mx-auto mb-4" src="assets/logos/01.svg" alt="" />
          <h2 class="text-primary">150+</h2>
          <p class="lead1">Employees</p>
        </div>
        <div class="text-center">
          <img class="mx-auto mb-4" src="assets/logos/01.svg" alt="" />
          <h2 class="text-primary">10+</h2>
          <p class="lead1">Years In Business</p>
        </div>
      </div>
    </div>
  </section>
  <section class="img-section py-16">
    <div class="container">
      <div class="head-text grid grid-cols-12 gap-8">
        <h3 class="col-span-12 md:col-span-6">
          <span class="text-primary">Get a beautiful</span> website that
          converts visitors into customers
        </h3>
        <p class="lead1 col-span-12 md:col-span-6">
          Elaborate your business with trusted websites. We have a creative team
          of designers and developers who build your website that your customer
          will love. On all devices, your website looks great with a fast
          loading speed. Our team always believes in word challenging and
          teamwork.
        </p>
      </div>
      <img class="mt-12 w-full" src="assets/images/CoverImage.png" alt="" />
    </div>
  </section>
  <section class="testimonial py-20 bg-secondary overflow-hidden">
    <div class="container">
      <h2 class="mb-8">
        <span class="text-primary">Our </span>Clients Speak to us
      </h2>
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="testimonials rounded-lg bg-white p-8">
              <p class="body2">
                The team of Baseline IT development is efficiently and quickly
                completed my Shopify website, Perfect day to launch the website
                and the team suggested all the things according to my store
                requirement. All the candidates are very helpful, and they
                instant replies to every query and things are under budget. I
                think the entire team for their good efforts. Thanks!
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonials rounded-lg bg-white p-8">
              <p class="body2">
                The staff is really appreciated for what has the creativity in
                their service coming back to me. I visited into the company
                (Baseline IT Development), there is a great environment, and
                everyone is busy with their work in a peaceful manner. I saw the
                actual work environment, that I saw before. The sales team is
                very talented in communication and coordination with all the
                staff as well as clients. I talked with seniors and Team leads,
                everyone has experts in their work. I got the best service. I am
                very happy, about I have a good partner to take care of my
                online business. I really appreciate for amazing staff in
                Baseline IT Development!! Amazing service!!!
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonials rounded-lg bg-white p-8">
              <p class="body2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime,
                explicabo ab. Ipsum inventore nam sit magni voluptatum ratione,
                amet perspiciatis pariatur illum rem consequatur quo, explicabo
                adipisci fugiat placeat eius nostrum. Magnam animi et
                voluptates, ex distinctio fuga, eius beatae commodi asperiores
                nobis velit consequatur id non, nihil iste atque dolores dolore
                quasi esse? Ipsum facilis, quis deserunt ad illo doloremque at
                cupiditate dolor!
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonials rounded-lg bg-white p-8">
              <p class="body2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Accusantium quibusdam saepe nisi minus dolorum ratione
                exercitationem iste adipisci sequi voluptatibus? Odio magni amet
                et unde aliquid velit fuga. Temporibus tempore aliquid cum
                debitis, natus recusandae, vitae aliquam adipisci quo, atque rem
                maiores tempora itaque. Eius aspernatur, asperiores consequatur
                quidem voluptates natus modi dignissimos, libero reprehenderit,
                nemo autem.
              </p>
            </div>
          </div>
        </div>
        <div class="pagination-wrap flex justify-center mt-7">
          <div class="swiper-pagination-custom !w-fit"></div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php 
    include_once('template/layout/footer.php');
?>
