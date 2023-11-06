<?php 
    include_once('template/layout/header.php');
?>
<main style="margin-top: -128px">
  <section class="career-hero md:min-h-screen py-8 flex items-center">
    <div class="container">
      <div
        class="glass hero-content mr-auto md:w-1/2 flex flex-col justify-center items-start rounded-3xl p-8"
      >
        <h2 class="mb-4">
          Join
          <span class="text-primary">Us</span>
        </h2>
        <p class="lead1 mb-2">
          Baseline IT Development has a team of professionals with one mission
          of empowering lives through intense solutions of technology. We invite
          clients, partners, and employees to join us for business development
          as well as career development.
        </p>
        <a href="#openings" class="btn btn-primary px-6 rounded-full"
          >View Openings
          <i
            class="fa-solid fa-circle-chevron-right fa-fade ml-2 text-secondary"
          ></i
        ></a>
      </div>
    </div>
  </section>
  <section id="openings" class="bg-secondary py-20">
    <div class="services-section container text-center">
      <h2 class="mb-4">Our <span class="text-primary">Openings</span></h2>
      <p class="lead1 mb-12">
        Baseline IT Development offers a great working environment with the best
        resources in IT industry. We need people with great motivation, good
        communication skills, and result oriented approach.
      </p>
      <div class="grid grid-cols-3 gap-8">
        <div
          class="bg-white gap-8 py-10 px-8 text-left rounded-3xl col-span-3 md:col-span-1"
        >
          <i class="fa-solid fa-object-group"></i>
          <h5 class="mb-3">Web designer</h5>
          <p class="body1 mb-10">
            We need a Web designer who can design, develop and maintain
            designing-based projects. JavaScript knowledge would be an asset.
          </p>
          <a
            onclick="crmodal_2.showModal()"
            class="link link-primary label-sm text-primary"
            >Apply Now</a
          >
        </div>
        <div
          class="bg-white gap-8 py-10 px-8 text-left rounded-3xl col-span-3 md:col-span-1"
        >
          <i class="fa-solid fa-code"></i>
          <h5 class="mb-3">Front End Developer</h5>
          <p class="body1 mb-10">
            We are #hiring for positions of #frontendevelopers for a leading
            Software Company, a very prestigious client.
          </p>
          <a
            onclick="crmodal_3.showModal()"
            class="link link-primary label-sm text-primary"
            >Apply Now</a
          >
        </div>
        <div
          class="bg-white gap-8 py-10 px-8 text-left rounded-3xl col-span-3 md:col-span-1"
        >
          <i class="fa-brands fa-react"></i>
          <h5 class="mb-3">Wordpress Developer</h5>
          <p class="body1 mb-10">
            You're great at handling both the technical and aesthetic
            complexities of programming? Our WordPress developers are looking
            for people like you!
          </p>
          <a
            onclick="crmodal_4.showModal()"
            class="link link-primary label-sm text-primary"
            >Apply Now</a
          >
        </div>
        <div
          class="bg-white gap-8 py-10 px-8 text-left rounded-3xl col-span-3 md:col-span-1"
        >
          <i class="fa-solid fa-cart-shopping"></i>
          <h5 class="mb-3">Shopify</h5>
          <p class="body1 mb-10">
            We are looking for an experienced Shopify developer who can develop
            and customize Shopify websites. The ideal candidate will be able to
            work with a variety of teams to design, develop and maintain Shopify
            sites.
          </p>
          <a
            onclick="crmodal_5.showModal()"
            class="link link-primary label-sm text-primary"
            >Apply Now</a
          >
        </div>
        <div
          class="bg-white gap-8 py-10 px-8 text-left rounded-3xl col-span-3 md:col-span-1"
        >
          <i class="fa-brands fa-php"></i>
          <h5 class="mb-3">Php developer</h5>
          <p class="body1 mb-10">
            We are looking for PHP Developer with the skill of fundamental
            knowledge of front-end frameworks like CSS3, JavaScript, and HTML5,
            sound knowledge of PHP synchronous behavior, and an understanding of
            the patterns of MVC design.
          </p>
          <a
            onclick="crmodal_1.showModal()"
            class="link link-primary label-sm text-primary"
            >Apply Now</a
          >
        </div>
        <div
          class="bg-white gap-8 py-10 px-8 text-left rounded-3xl col-span-3 md:col-span-1"
        >
          <i class="fa-solid fa-swatchbook"></i>
          <h5 class="mb-3">Graphic designer</h5>
          <p class="body1 mb-10">
            A creative Graphic Designer with expertise in Adobe Photoshop, and
            Illustrator is needed to interpret our client's needs and design
            solutions with high visual impact.
          </p>
          <a
            onclick="crmodal_6.showModal()"
            class="link link-primary label-sm text-primary"
            >Apply Now</a
          >
        </div>
      </div>
    </div>
    <dialog id="crmodal_1" class="modal modal-bottom sm:modal-middle">
      <div class="modal-box">
        <h5 class="mb-4">Please submit your details</h5>
        <form class="grid grid-cols-12 gap-6" action="">
          <div class="form-control col-span-6">
            <label class="label">
              <span class="label-text">First Name</span>
            </label>
            <input
              type="text"
              placeholder="Enter Your First Name"
              class="input input-bordered w-full"
            />
          </div>
          <div class="form-control col-span-6">
            <label class="label">
              <span class="label-text">Last Name</span>
            </label>
            <input
              type="text"
              placeholder="Enter Your Last Name"
              class="input input-bordered w-full"
            />
          </div>
          <div class="form-control col-span-12">
            <label class="label">
              <span class="label-text">Email</span>
            </label>
            <input
              type="email"
              placeholder="Enter Your Email"
              class="input input-bordered w-full"
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
              class="input input-bordered w-full"
            />
          </div>
          <div class="form-control col-span-12">
            <label class="label">
              <span class="label-text">Upload Your CV</span>
            </label>
            <input type="file" class="file-input file-input-bordered" />
          </div>
          <div class="col-span-12 flex justify-end">
            <button
              class="col-span-3 btn btn-primary"
              type="submit"
              name="submit"
              value="Submit"
            >
              Submit
            </button>
          </div>
        </form>
      </div>
      <form method="dialog" class="modal-backdrop">
        <button>close</button>
      </form>
    </dialog>
    <dialog id="crmodal_2" class="modal modal-bottom sm:modal-middle">
      <div class="modal-box">
        <h5 class="mb-4">Please submit your details</h5>
        <form class="grid grid-cols-12 gap-6" action="">
          <div class="form-control col-span-6">
            <label class="label">
              <span class="label-text">First Name</span>
            </label>
            <input
              type="text"
              placeholder="Enter Your First Name"
              class="input input-bordered w-full"
            />
          </div>
          <div class="form-control col-span-6">
            <label class="label">
              <span class="label-text">Last Name</span>
            </label>
            <input
              type="text"
              placeholder="Enter Your Last Name"
              class="input input-bordered w-full"
            />
          </div>
          <div class="form-control col-span-12">
            <label class="label">
              <span class="label-text">Email</span>
            </label>
            <input
              type="email"
              placeholder="Enter Your Email"
              class="input input-bordered w-full"
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
              class="input input-bordered w-full"
            />
          </div>
          <div class="form-control col-span-12">
            <label class="label">
              <span class="label-text">Upload Your CV</span>
            </label>
            <input type="file" class="file-input file-input-bordered" />
          </div>
          <div class="col-span-12 flex justify-end">
            <button
              class="col-span-3 btn btn-primary"
              type="submit"
              name="submit"
              value="Submit"
            >
              Submit
            </button>
          </div>
        </form>
      </div>
      <form method="dialog" class="modal-backdrop">
        <button>close</button>
      </form>
    </dialog>
    <dialog id="crmodal_3" class="modal modal-bottom sm:modal-middle">
      <div class="modal-box">
        <h5 class="mb-4">Please submit your details</h5>
        <form class="grid grid-cols-12 gap-6" action="">
          <div class="form-control col-span-6">
            <label class="label">
              <span class="label-text">First Name</span>
            </label>
            <input
              type="text"
              placeholder="Enter Your First Name"
              class="input input-bordered w-full"
            />
          </div>
          <div class="form-control col-span-6">
            <label class="label">
              <span class="label-text">Last Name</span>
            </label>
            <input
              type="text"
              placeholder="Enter Your Last Name"
              class="input input-bordered w-full"
            />
          </div>
          <div class="form-control col-span-12">
            <label class="label">
              <span class="label-text">Email</span>
            </label>
            <input
              type="email"
              placeholder="Enter Your Email"
              class="input input-bordered w-full"
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
              class="input input-bordered w-full"
            />
          </div>
          <div class="form-control col-span-12">
            <label class="label">
              <span class="label-text">Upload Your CV</span>
            </label>
            <input type="file" class="file-input file-input-bordered" />
          </div>
          <div class="col-span-12 flex justify-end">
            <button
              class="col-span-3 btn btn-primary"
              type="submit"
              name="submit"
              value="Submit"
            >
              Submit
            </button>
          </div>
        </form>
      </div>
      <form method="dialog" class="modal-backdrop">
        <button>close</button>
      </form>
    </dialog>
    <dialog id="crmodal_4" class="modal modal-bottom sm:modal-middle">
      <div class="modal-box">
        <h5 class="mb-4">Please submit your details</h5>
        <form class="grid grid-cols-12 gap-6" action="">
          <div class="form-control col-span-6">
            <label class="label">
              <span class="label-text">First Name</span>
            </label>
            <input
              type="text"
              placeholder="Enter Your First Name"
              class="input input-bordered w-full"
            />
          </div>
          <div class="form-control col-span-6">
            <label class="label">
              <span class="label-text">Last Name</span>
            </label>
            <input
              type="text"
              placeholder="Enter Your Last Name"
              class="input input-bordered w-full"
            />
          </div>
          <div class="form-control col-span-12">
            <label class="label">
              <span class="label-text">Email</span>
            </label>
            <input
              type="email"
              placeholder="Enter Your Email"
              class="input input-bordered w-full"
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
              class="input input-bordered w-full"
            />
          </div>
          <div class="form-control col-span-12">
            <label class="label">
              <span class="label-text">Upload Your CV</span>
            </label>
            <input type="file" class="file-input file-input-bordered" />
          </div>
          <div class="col-span-12 flex justify-end">
            <button
              class="col-span-3 btn btn-primary"
              type="submit"
              name="submit"
              value="Submit"
            >
              Submit
            </button>
          </div>
        </form>
      </div>
      <form method="dialog" class="modal-backdrop">
        <button>close</button>
      </form>
    </dialog>
    <dialog id="crmodal_5" class="modal modal-bottom sm:modal-middle">
      <div class="modal-box">
        <h5 class="mb-4">Please submit your details</h5>
        <form class="grid grid-cols-12 gap-6" action="">
          <div class="form-control col-span-6">
            <label class="label">
              <span class="label-text">First Name</span>
            </label>
            <input
              type="text"
              placeholder="Enter Your First Name"
              class="input input-bordered w-full"
            />
          </div>
          <div class="form-control col-span-6">
            <label class="label">
              <span class="label-text">Last Name</span>
            </label>
            <input
              type="text"
              placeholder="Enter Your Last Name"
              class="input input-bordered w-full"
            />
          </div>
          <div class="form-control col-span-12">
            <label class="label">
              <span class="label-text">Email</span>
            </label>
            <input
              type="email"
              placeholder="Enter Your Email"
              class="input input-bordered w-full"
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
              class="input input-bordered w-full"
            />
          </div>
          <div class="form-control col-span-12">
            <label class="label">
              <span class="label-text">Upload Your CV</span>
            </label>
            <input type="file" class="file-input file-input-bordered" />
          </div>
          <div class="col-span-12 flex justify-end">
            <button
              class="col-span-3 btn btn-primary"
              type="submit"
              name="submit"
              value="Submit"
            >
              Submit
            </button>
          </div>
        </form>
      </div>
      <form method="dialog" class="modal-backdrop">
        <button>close</button>
      </form>
    </dialog>
    <dialog id="crmodal_6" class="modal modal-bottom sm:modal-middle">
      <div class="modal-box">
        <h5 class="mb-4">Please submit your details</h5>
        <form class="grid grid-cols-12 gap-6" action="">
          <div class="form-control col-span-6">
            <label class="label">
              <span class="label-text">First Name</span>
            </label>
            <input
              type="text"
              placeholder="Enter Your First Name"
              class="input input-bordered w-full"
            />
          </div>
          <div class="form-control col-span-6">
            <label class="label">
              <span class="label-text">Last Name</span>
            </label>
            <input
              type="text"
              placeholder="Enter Your Last Name"
              class="input input-bordered w-full"
            />
          </div>
          <div class="form-control col-span-12">
            <label class="label">
              <span class="label-text">Email</span>
            </label>
            <input
              type="email"
              placeholder="Enter Your Email"
              class="input input-bordered w-full"
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
              class="input input-bordered w-full"
            />
          </div>
          <div class="form-control col-span-12">
            <label class="label">
              <span class="label-text">Upload Your CV</span>
            </label>
            <input type="file" class="file-input file-input-bordered" />
          </div>
          <div class="col-span-12 flex justify-end">
            <button
              class="col-span-3 btn btn-primary"
              type="submit"
              name="submit"
              value="Submit"
            >
              Submit
            </button>
          </div>
        </form>
      </div>
      <form method="dialog" class="modal-backdrop">
        <button>close</button>
      </form>
    </dialog>
  </section>
</main>
<?php 
    include_once('template/layout/footer.php');
?>
