<?php 
    include_once('template/layout/header.php');
?>
<main>
    <section class="service-hero py-8">
        <div class="container min-h-screen flex flex-col items-center text-center justify-center">
            <h1 class="mb-8">
                <span class="text-primary">Organise</span> Projects.<br/> 
Get More Done.
            </h1>
            <img class="laptop min-h-16" src="assets/images/MacbookPro.png" alt="">
        </div>
    </section>
    <?php 
        include_once('template/components/services.php');
    ?>
    <section class="bfit-section py-16">
        <div class="container">
            <h2 class="mb-12">
                <span class="text-primary">Benefits</span> of working<br> 
                with us
            </h2>
            <div class="grid grid-cols-12 gap-8">
                <div class="md:col-span-6 col-span-12 flex items-center">
                    <div class="icon-section bg-gray-100 rounded-full p-6 mr-10">
                        <img src="assets/logos/01.svg" alt="">
                    </div>
                    <div class="text-section">
                        <h5>Time zones ain’t no thing</h5>
                        <p class="body1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis et sed nam sem tellus erat.</p>
                    </div>
                </div>
                <div class="md:col-span-6 col-span-12 flex items-center">
                    <div class="icon-section bg-gray-100 rounded-full p-6 mr-10">
                        <img src="assets/logos/01.svg" alt="">
                    </div>
                    <div class="text-section">
                        <h5>Time zones ain’t no thing</h5>
                        <p class="body1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis et sed nam sem tellus erat.</p>
                    </div>
                </div>
                <div class="md:col-span-6 col-span-12 flex items-center">
                    <div class="icon-section bg-gray-100 rounded-full p-6 mr-10">
                        <img src="assets/logos/01.svg" alt="">
                    </div>
                    <div class="text-section">
                        <h5>Time zones ain’t no thing</h5>
                        <p class="body1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis et sed nam sem tellus erat.</p>
                    </div>
                </div>
                <div class="md:col-span-6 col-span-12 flex items-center">
                    <div class="icon-section bg-gray-100 rounded-full p-6 mr-10">
                        <img src="assets/logos/01.svg" alt="">
                    </div>
                    <div class="text-section">
                        <h5>Time zones ain’t no thing</h5>
                        <p class="body1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis et sed nam sem tellus erat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="solution-section py-16 bg-secondary">
        <div class="container">
            <div class="grid p-12 bg-accent rounded-2xl grid-cols-12">
                <div class="md:col-span-8 col-span-12">
                    <h3 class="mb-8 text-white">The simplest solution to the most complex problem is provided by us</h3>
                    <a href="contact-us.php" class="btn btn-default text-primary font-bold">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php 
    include_once('template/layout/footer.php');
?>