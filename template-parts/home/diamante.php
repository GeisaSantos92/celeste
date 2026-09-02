<?php $uri = get_template_directory_uri(); ?>

<section class="emp-banner emp-banner--diamante">
    <div class="emp-banner__content">
        <h2 class="emp-banner__title emp-banner__title--montserrat">O seu novo lar te espera no <span class="emp-banner__title-white">Bairro Mansour</span> em Uberlândia</h2>
        <p class="emp-banner__text">Venha conhecer o Projeto Diamante, um empreendimento pensado para quem busca conforto, qualidade e excelente localização!</p>
        <a href="#diamante" class="btn btn--diamante-gold">Saiba Mais</a>
    </div>
    <div class="emp-banner__photo">
        <img src="<?php echo esc_url( $uri . '/assets/images/sobre-photo.png' ); ?>" alt="Projeto Diamante">
    </div>
</section>

<section class="emp-gallery emp-gallery--diamante">
    <div class="emp-gallery__photo">
        <img src="<?php echo esc_url( $uri . '/assets/images/diamante-photo.png' ); ?>" alt="Projeto Diamante">
    </div>
    <div class="emp-gallery__panel emp-gallery__panel--diamante">
        <h2 class="emp-gallery__title emp-gallery__title--montserrat">Seu sonho de casa própria começa aqui!</h2>
        <p class="emp-gallery__lead">Casas de 91m² em lotes individuais, projetadas para o seu bem-estar:</p>
        <ul class="emp-gallery__list">
            <li>
                <img src="<?php echo esc_url( $uri . '/assets/images/icon-diamante3.svg' ); ?>" alt="" width="22" height="22">
                <span>Sala e copa conjugadas com cozinha americana</span>
            </li>
            <li>
                <img src="<?php echo esc_url( $uri . '/assets/images/icon-diamante2.svg' ); ?>" alt="" width="22" height="22">
                <span>Toda murada com portão social e de garagem</span>
            </li>
            <li>
                <img src="<?php echo esc_url( $uri . '/assets/images/icon-diamante1.svg' ); ?>" alt="" width="22" height="22">
                <span>Construção moderna e resistente</span>
            </li>
        </ul>
        <a href="#diamante" class="btn btn--diamante-gold">Saiba Mais</a>
    </div>
</section>
