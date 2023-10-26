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
</main>
<?php 
    include_once('template/layout/footer.php');
?>