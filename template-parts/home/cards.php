<?php $uri = get_template_directory_uri(); ?>
<section class="home-cards">
    <div class="home-cards__inner">
        <h2 class="home-cards__title">Últimos Empreendimentos</h2>
        <div class="home-cards__grid">

            <article class="emp-card">
                <div class="emp-card__media">
                    <img src="<?php echo esc_url( $uri . '/assets/images/aquarema-academia.png' ); ?>" alt="Aquarema">
                </div>
                <div class="emp-card__body">
                    <h3 class="emp-card__name">Aquarema</h3>
                    <p class="emp-card__desc">Conforto, segurança e lazer em um projeto residencial em meio à natureza</p>
                </div>
                <a href="#aquarema" class="emp-card__btn">Saiba Mais</a>
            </article>

            <article class="emp-card">
                <div class="emp-card__media">
                    <img src="<?php echo esc_url( $uri . '/assets/images/aquarema-academia.png' ); ?>" alt="Bellacqua">
                </div>
                <div class="emp-card__body">
                    <h3 class="emp-card__name">Bellacqua</h3>
                    <p class="emp-card__desc">Um pedaço da praia do Nordeste agora no Triângulo Mineiro</p>
                </div>
                <a href="#bellacqua" class="emp-card__btn">Saiba Mais</a>
            </article>

            <article class="emp-card">
                <div class="emp-card__media">
                    <img src="<?php echo esc_url( $uri . '/assets/images/sobre-photo.png' ); ?>" alt="Projeto Diamante">
                </div>
                <div class="emp-card__body">
                    <h3 class="emp-card__name">Projeto Diamante</h3>
                    <p class="emp-card__desc">O seu novo lar te espera no Bairro Mansour em Uberlândia</p>
                </div>
                <a href="#diamante" class="emp-card__btn">Saiba Mais</a>
            </article>

        </div>
    </div>
</section>
