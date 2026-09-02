<footer class="site-footer">
    <div class="site-footer__inner">

        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-footer__logo" aria-label="<?php bloginfo( 'name' ); ?>">
            <img
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-footer.svg' ); ?>"
                alt="<?php bloginfo( 'name' ); ?>"
                width="140"
                height="38"
            >
        </a>

        <!-- Links -->
        <nav class="site-footer__links" aria-label="<?php esc_attr_e( 'Links do rodapé', 'celeste' ); ?>">
            <a href="#empreendimentos">Empreendimentos</a>
            <a href="#conheca-a-celeste">Conheça a Celeste</a>
            <a href="#fale-conosco">Fale Conosco</a>
            <a href="#politica-de-privacidade">Política de Privacidade</a>
        </nav>

        <!-- Contato + Localização -->
        <div class="site-footer__info">
            <div class="site-footer__contato">
                <p class="site-footer__info-title">Contato</p>
                <p class="site-footer__info-text">
                    <strong>Josiene Campos</strong> - Gerente Comercial
                </p>
                <p class="site-footer__info-text">(34) 99796-1391</p>
                <p class="site-footer__info-text">comercial@celesteempreendimentos.com</p>
            </div>

            <div class="site-footer__localizacao">
                <p class="site-footer__info-title">Localização</p>
                <p class="site-footer__info-text">
                    Av. Athaídes de Deus Vieira, 530<br>
                    Tibery - Uberlândia - MG<br>
                    38405-150
                </p>
            </div>
        </div>

        <!-- Redes Sociais -->
        <div class="site-footer__social">
            <p class="site-footer__social-label">Veja mais Celeste Empreendimentos</p>
            <img
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/social-icons.svg' ); ?>"
                alt="LinkedIn, YouTube, Facebook, Instagram"
                width="132"
                height="24"
            >
        </div>

    </div>
</footer>

<?php get_template_part( 'template-parts/home/copyright' ); ?>

<?php wp_footer(); ?>
</body>
</html>
