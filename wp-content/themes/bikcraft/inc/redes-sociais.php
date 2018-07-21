<?php $contato = get_page_by_title('contato'); ?>

<h3>Redes Sociais</h3>
<ul>
    <?php if(have_rows('redes_sociais', $contato)): while(have_rows('redes_sociais', $contato)) : the_row(); ?>
        <li><a href="<?php the_sub_field('url', $contato); ?>" target="_blank"><img src="<?php the_sub_field('imagem', $contato); ?>" alt="<?php the_sub_field('descricao', $contato); ?>"></a></li>
    <?php endwhile; else : endif; ?>
</ul>