    <script src="<?= base_url() ?>assets/universitas/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/universitas/js/plugins.js"></script>
    <script src="<?= base_url() ?>assets/universitas/js/main.js"></script>


    <script src="<?= base_url() ?>assets/universitas/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="<?= base_url() ?>assets/universitas/js/dashboard.js"></script>
    <script src="<?= base_url() ?>assets/universitas/js/widgets.js"></script>
    <script src="<?= base_url() ?>assets/universitas/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="<?= base_url() ?>assets/universitas/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>assets/universitas/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="<?= base_url() ?>assets/universitas/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );

        $(document).ready(function() {
            $(window).scroll(function(){
                if($(this).scrollTop() >= 20) {
                    $('.scrollToTop').fadeIn(200);
                } else {
                    $('.scrollToTop').fadeOut(200);
                }
            })
        });

        $('.scrollToTop').click(function() {      // When arrow is clicked
            $('body,html').animate({
                scrollTop : 0                       // Scroll to top of body
            }, 500);
        });
    </script>

</body>
</html>