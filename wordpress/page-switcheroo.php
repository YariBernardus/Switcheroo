<?php
/**
 * The template for displaying the switcheroo.
 *
 * @package switcheroo
    Template name: Switcheroo
 */

get_header('switcheroo'); ?>

<!-- Products List -->
<section class="switcher-body">

	<a href="#" title="Prev" class="icon-chevron-left products-prev"></a>

	<div class="products-wrapper">
		<div class="products-list clearfix">

		</div>
	</div>

	<a href="#" title="Next" class="icon-chevron-right products-next"></a>

</section>


<!-- Product iframe -->
<iframe class="product-iframe" frameborder="0" border="0"></iframe>

<!-- Preloader -->
<div class="preloader"></div>
<div class="preloading-icon"><i class="icon-bolt"></i></div>

<!-- Javascript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<?php wp_footer(); ?>

</body>

</html>