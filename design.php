<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<title>Design | tell-tale MEDIA | Nashville, TN</title>
<meta name="description" content="tell-tale MEDIA Design is completely and utterly obsessed with graphic design. It is the best way to slip art into the everyday world.">
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="/_assets/js/jquery.isotope.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.fancybox').fancybox();
  });
</script>
<script src="/_assets/js/jquery.fancybox.js"></script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

				<img src="/_assets/img/quote-design.png" alt="Gestalt!">

			</div><!--crow-->

		</div><!--nav-->

	</div><!--inner-->

</header>

<section id="design">

	<div class="inner">

		<div class="container">

		    <div id="options" class="clearfix">

		        <ul id="filters" class="option-set clearfix" data-option-key="filter">
		          <li><a href="#filter" data-option-value="*" class="selected">show all</a></li>
		          <li><a href="#filter" data-option-value=".websites">websites</a></li>
		          <li><a href="#filter" data-option-value=".posters">posters</a></li>
		          <li><a href="#filter" data-option-value=".branding">branding</a></li>
		          <li><a href="#filter" data-option-value=".brochures">brochures</a></li>
		          <li><a href="#filter" data-option-value=".t-shirts">t-shirts</a></li>
		          <li><a href="#filter" data-option-value=".packaging">packaging</a></li>
		        </ul>

		    </div> <!-- #options -->

		    <div id="design-container" class="clearfix">

		      	<article class="piece websites">
		      		<a href="/_assets/img/portfolio-website-hudson.jpg" class="fancybox" rel="websites"><img src="/_assets/img/thumb-website-hudson.jpg" alt="Bill Hudson Agency website" title="Bill Hudson Agency website"></a>
		      	</article>

		      	<article class="piece posters">
		      		<a href="/_assets/img/portfolio-poster-duty.jpg" class="fancybox"><img src="/_assets/img/thumb-poster-duty.jpg" alt="Duty of the Hour poster" title="Duty of the Hour poster"></a>
		      	</article>

		      	<article class="piece branding">
		      		<a href="/_assets/img/portfolio-branding-vintage.jpg" class="fancybox"><img src="/_assets/img/thumb-branding-vintage.jpg" alt="Village Vintage and Homegoods logo" title="Village Vintage and Homegoods logo"></a>
		      	</article>

		      	<article class="piece brochures">
		      		<a href="/_assets/img/portfolio-brochure-nutcracker.jpg" class="fancybox"><img src="/_assets/img/thumb-brochure-nutcracker.jpg" alt="Mini-Nutcracker brochure" title="Mini-Nutcracker brochure"></a>
		      	</article>

		      	<article class="piece brochures">
		      		<a href="/_assets/img/portfolio-brochure-push.jpg" class="fancybox"><img src="/_assets/img/thumb-brochure-push.jpg" alt="Push Childbirth Education brochure" title="Push Childbirth Education brochure"></a>
		      	</article>

		      	<article class="piece websites">
		      		<a href="/_assets/img/portfolio-website-rosepepper.jpg" class="fancybox"><img src="/_assets/img/thumb-website-rosepepper.jpg" alt="Rosepepper Cantina website" title="Rosepepper Cantina website"></a>
		      	</article>

		      	<article class="piece branding">
		      		<a href="/_assets/img/portfolio-logo-pure.jpg" class="fancybox"><img src="/_assets/img/thumb-logo-pure.jpg" alt="Pure Body Revolution logo" title="Pure Body Revolution logo"></a>
		      	</article>

		      	<article class="piece websites">
		      		<a href="/_assets/img/portfolio-website-ceramics.jpg" class="fancybox"><img src="/_assets/img/thumb-website-ceramics.jpg" alt="Mid-South Ceramics website" title="Mid-South Ceramics website"></a>
		      	</article>

		      	<article class="piece t-shirts">
		      		<a href="/_assets/img/portfolio-shirt-travis.jpg" class="fancybox"><img src="/_assets/img/thumb-shirt-travis.jpg" alt="Travis Meadows t-shirt" title="Travis Meadows t-shirt"></a>
		      	</article>

		      	<article class="piece packaging">
		      		<a href="/_assets/img/portfolio-cd-travis.jpg" class="fancybox"><img src="/_assets/img/thumb-cd-travis.jpg" alt="Travis Meadows cd" title="Travis Meadows cd"></a>
		      	</article>

		      	<article class="piece posters">
		      		<a href="/_assets/img/portfolio-poster-country.jpg" class="fancybox"><img src="/_assets/img/thumb-poster-country.jpg" alt="Good Country People Party poster" title="Good Country People Party poster"></a>
		      	</article>

		      	<article class="piece branding">
		      		<a href="/_assets/img/portfolio-logo-hands.jpg" class="fancybox"><img src="/_assets/img/thumb-logo-hands.jpg" alt="Hands 4 NY logo" title="Hands 4 NY logo"></a>
		      	</article>

		      	<article class="piece websites posters branding brochures t-shirts packaging">
		      		<img src="/_assets/img/thumb-your-work.jpg" alt="your work here" title="your work here">
		      	</article>

		    </div><!--design-container-->
		
		</div><!--container-->

	</div><!--inner-->

</section><!--design-->

<script>

    $(function(){

      var $container = $('#design-container');

      $container.isotope({
        itemSelector : '.piece'
      });


      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');

        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }

        return false;
      });

      $( ".slider" ).slider({
        value:0,
        min: 0,
        max: 15,
        step: 1,
        slide: function( event, ui ) {
          var slideVal = ui.value;
          $('#filters li:eq('+ slideVal +') a').trigger('click');
          $('#filters li:eq('+ slideVal +') a').css('color','blue');
        }
      });


    });

</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>