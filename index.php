<?php get_header(); ?>

<section id="hero" class="w-full h-auto bg-primary md:py-8">
    <div class="md:grid md:grid-cols-8 md:grid-flow-row lg:container lg:mx-auto">
        <div class="bg-miraflores bg-cover bg-center bg-no-repeat w-full h-screen md:h-full md:col-start-1 md:col-end-5 lg:col-start-1 lg:col-end-6 p-5 lg:p-4 flex flex-col justify-between text-secondary text-center">
            <h1 class="w-80 text-4xl md:text-5xl font-bold tracking-wide md:w-96 bg-primary mx-auto p-5 rounded-[16px]">Recuperemos Miraflores</h1>
            <h3 class="text-xl font-semibold bg-primary mx-auto py-2 px-4 rounded-full">"Portal vecinal hecho por miraflorinos para miraflorinos"</h3>
        </div>
        <div class="bg-primary w-full h-auto lg:col-start-6 md:col-start-5 md:col-end-9 lg:col-end-9 text-secondary text-center">
            <div class="bg-ultradark p-6">
                <h3 class="text-2xl font-semibold py-4">Estimados vecinos miraflorinos:</h3>
                <p class="text-2xl font-normal my-4">En este portal pueden enviar sus pedidos, quejas, denuncias o propuestas que consideren aportarán a mejorar nuestro distrito, pueden enviar fotos, videos o audios que sustenten su reporte, nosotros nos encargaremos como plataforma vecinal de hacerlas llegar a las autoridades respectivas, además contamos con nuestra fan page con más de 24 mil seguidores donde difundiremos los temas de relevancia.</p>
            </div>
            <div class="p-6">
                <h2 class="text-3xl">Vecino reporta</h2>
                <a href="#reporta" class="block mx-auto bg-ligth text-xl text-primary mt-2 mb-4 p-3 w-64" href="#formulario-reporte">Enviar reporte</a>
                <div class="flex justify-between items-center w-60 mt-5 mx-auto">
                    <a class="block" href="https://www.facebook.com/recuperemosmiraflores"><img class="w-12 h-12 fill-ultradark" src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="Facebook icon"></a>
                    <a class="block" href="https://wa.me/51963109596"><img class="w-12 h-12 fill-ultradark" src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.svg" alt="Whatsapp icon"></a>
                    <a class="block" href="mailto:reportes@recuperemosmiraflores.com"><img class="w-12 h-12 fill-ultradark" src="<?php echo get_template_directory_uri(); ?>/assets/img/envelope-solid.svg" alt="Email icon"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full h-auto two-colors-div md:py-8">
    <div class="md:flex md:items-center lg:container lg:mx-auto">
        <div class="bg-ligth w-full h-full p-6 flex flex-col text-primary md:w-2/4">
            <h2 class="text-5xl tracking-wide leading-tight mb-4">Juntos convertiremos el malestar por progreso</h2>
            <div class="underline w-3/4"></div>
            <p class="text-lg my-6">Ayudemos a nuestras autoridades a identificar problemàticas que consideramos deben ser atendidas y solucionadas con celeridad</p>
            <h4 class="text-center text-2xl font-semibold">Vecino reporta</h4>
            <a href="#reporta" class="block bg-primary text-xl text-secondary mt-2 mb-4 p-3 w-64 mx-auto text-center" href="#formulario-reporte">Enviar reporte</a>
        </div>
        <div class="bg-primary w-full h-full p-6 flex flex-col text-secondary md:w-2/4">
            <div class="border-2 border-secondary rounded p-3 my-4">
                <div class="w-full h-44 lg:h-72 bg-truck bg-cover"></div>
            </div>
            <div class="border-2 border-secondary rounded p-3 my-4">
                <div class="w-full h-44 lg:h-72 bg-worker bg-cover"></div>
            </div>
        </div>
    </div>
</section>

<section class="w-full h-auto bg-secondary md:py-8">
    <div class="md:flex md:items-center lg:container lg:mx-auto">
        <div class="w-full h-full flex flex-col text-primary p-6 md:w-2/4">
            <h2 class="text-5xl font-semibold leading-tight mb-4">Reportes Vecinales</h2>
            <div class="underline w-2/4"></div>
            <p class="text-lg my-6">Estimados vecinos, ser escuchados y participar sin buscar protagonismo es una premisa muy valiosa para nosotros para apoyar a la sociedad, por ello queremos ayudar en que los pedidos, quejas, denuncias o propuestas que consideres aportarán a mejorar nuestro distrito sean atendidas por las autoridades respectivas.</p>
            <h2 class="text-3xl text-center">Vecino reporta</h2>
            <a href="#reporta" class="block text-center bg-ligth text-xl text-primary mt-2 mb-3 p-3 w-64 mx-auto" href="#formulario-reporte">Enviar reporte</a>
        </div>

        <div class="w-full h-full flex flex-col p-6 md:w-2/4 md:items-stretch">
            <div class="border-2 border-primary rounded p-3 my-4 mx-auto w-80 h-80 lg:w-96 lg:h-96">
                <div class="w-full h-full bg-keyboard bg-cover"></div>
            </div>
        </div>
    </div>
</section>

<section class="w-full h-auto bg-secondary md:py-8">
    <div class="md:flex md:items-center lg:container lg:mx-auto">
        <div class="w-full h-full flex flex-col text-primary p-6 md:w-2/4">
            <h2 class="text-5xl tracking-wide leading-tight mb-4">Sustenta tu información</h2>
            <div class="underline w-3/5"></div>
            <p class="text-lg my-6">Estimados vecinos, puedes enviarnos tus pedidos, quejas, renuncias o propuestas que consideres aportarán a mejorar nuestro distrito, con sustento veraz adjuntando información que sea evidencia del reporte.</p>
        </div>
        <div class="w-full h-full flex flex-col justify-center text-primary p-6 md:w-2/4">
            <button class="bg-ligth text-xl text-primary mt-2 mb-3 p-3 w-64 mx-auto rounded-full" href="#formulario-reporte">fotos</button>
            <p class="text-center mb-6">En el formulario adjunta información real</p>
            <button class="bg-ligth text-xl text-primary mt-2 mb-3 p-3 w-64 mx-auto rounded-full" href="#formulario-reporte">videos</button>
            <p class="text-center mb-6">En el formulario adjunta información real</p>
            <button class="bg-ligth text-xl text-primary mt-2 mb-3 p-3 w-64 mx-auto rounded-full" href="#formulario-reporte">audios</button>
            <p class="text-center mb-6">En el formulario adjunta información real</p>
        </div>
    </div>
</section>
    
<section id="reporta" class="w-full h-auto bg-ligth md:py-8 text-primary">
    <div class="p-6 md:flex md:flex-col md:items-center lg:container lg:mx-auto">
        <h2 class="text-5xl tracking-wide leading-tight mb-4">Reporta</h2>
        <?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form 1"]', false ); ?>
    </div>
</section>

<?php get_footer(); ?>