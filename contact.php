<?php 
/* Template Name: Contact Us */

get_header(); 

?>


 <div class="container py-5">
        <h2 class="text-center">A+ Esthetic</h2>
        <p class="text-center">Stiftstraße 14, 60313 Frankfurt am Main</p>
        <div class="row text-center">
            <div class="col-md-4 icon-box">
                <i class="bi bi-telephone"></i>
                <p>Montag - Freitag 09:00 - 17:00<br>Tel: 0697410742</p>
            </div>
            <div class="col-md-4 icon-box">
                <i class="bi bi-envelope"></i>
                <p>Email: <a href="mailto:info@aesthetic.de">info@aesthetic.de</a></p>
            </div>
            <div class="col-md-4 icon-box">
                <i class="bi bi-geo-alt"></i>
                <p>Stiftstraße 14, 60313 Frankfurt</p>
            </div>
        </div>
        
        <div class="my-4">
            <iframe src="https://www.google.com/maps/embed?..." width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        
        <h3 class="text-center">Du hast eine Frage?</h3>
        <div class="contact-box">
            <?php echo do_shortcode('[contact-form-7 id="123" title="Kontaktformular"]'); ?>
        </div>
        
        <div class="text-center mt-5">
            <h4>Folge uns auf Instagram</h4>
            <a href="#" class="btn btn-outline-secondary"><i class="bi bi-instagram"></i></a>
        </div>
    </div>









<?php get_footer(); ?>