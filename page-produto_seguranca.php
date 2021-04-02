<?php 
	//Template Name: Seguranca
?>
<?php get_header(); ?>
	<section class="titulo_pagina_produtos">
		<h2>Segurança</h2>
	</section>
	<section class="produtos_informatica">
		<?php if(have_rows('categoria-produtos')): while(have_rows('categoria-produtos')) : the_row(); ?>
			<div class="card_produtos_informatica">
				<h3><?php the_sub_field('titulo_produto'); ?></h3>
				<img src="<?php the_sub_field('imagem_produto'); ?>">
				<p>R$ <?php the_sub_field('preco_produto'); ?></p>
				<div class="button_geral botao_produtos">
					<a href="#whatsapp" target="_blank">Comprar</a>
				</div>
			</div>
		<?php endwhile; else : endif; ?>
	</section>

<?php get_footer(); ?>
