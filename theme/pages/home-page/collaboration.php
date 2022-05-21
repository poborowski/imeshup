<section class="collabaoration">
    <div class="container">
        <div class="col-12">
            <h1 class="center">Collaboration with client has 
never been easier</h1>
            <p class="center">Integrate iMeshup with your existing software</p>
        </div>
        <div class="partners-logo slick-slider">
            <div class="box-partners">
                <img src="<?= IMGS ?>/bitmapd.png">
                <p class="center">Blender</p>
            </div>
            <div class="box-partners">
                <img src="<?= IMGS ?>/bitmapda.png">
                <p class="center">Cinema 4D</p>
            </div>
            <div class="box-partners">
                <img src="<?= IMGS ?>/bitmaps.png">
                <p class="center">Unity</p>
            </div>
            <div class="box-partners">
                <img src="<?= IMGS ?>/slack.png">
                <p class="center">Slack</p>
            </div>
            <div class="box-partners">
            <img src="<?= IMGS ?>/bitmaph.png">
                <p class="center">3DS Max</p>
            </div>
            <div class="box-partners">
                <img src="<?= IMGS ?>/bitmapd.png">
                <p class="center">Blender</p>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
   jQuery(document).ready(function(){

    jQuery('.slick-slider').slick({
        centerMode: true,
  centerPadding: '60px',
  slidesToShow: 5,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2000,
  dots: true,
  arrows: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
    });
  </script>
