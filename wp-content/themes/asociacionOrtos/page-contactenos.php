<?php get_header(); ?>

<section class="contact darken">
    <div class="wrapcont">
        
    

    <?php while (have_posts()) : the_post();/* Start loop */ ?>
            <?php the_content(); ?>
    <?php endwhile; /* End loop */ ?>

    

    <section class="content">
        <h2>Contactenos</h2>
        <h3>Conozca como participar en nuestra Asociación</h3>
        <ul>
            <li><strong>Teléfono: </strong> +57(1) 235 86 45</li>
            <li><strong>Móvil: </strong> +57(1) 235 86 45</li>
            <li><strong>Telefax: </strong> +57(1) 235 86 45</li>
            <li><strong>Correo: </strong> +57(1) 235 86 45</li>
                <br>
                <br>
            <li><strong>Dirección: </strong>
                <br>
                Calle 65 # 10 - 49 <br>
                Consultorio 104 <br>
                Bogotá D.C <br>
                Colombia <br>
                <script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
                <div id="SkypeButton_Call_ORTOS_1">
                  <script type="text/javascript">
                    Skype.ui({
                      "name": "chat",
                      "element": "SkypeButton_Call_ORTOS_1",
                      "participants": ["ORTOS"],
                      "imageColor": "white",
                      "imageSize": 32
                    });
                  </script>
                </div>
             </li>
        </ul>
    </section>

    </div>
</section>

<?php get_footer(); ?>