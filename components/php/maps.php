<!-- map sec of the page -->
<section class="map-sec">
    <div class="map" data-lat="<?php echo $ASSESP_DATA["altitude"]["lat"] ?>" data-lng="<?php echo $ASSESP_DATA["altitude"]["long"] ?>" data-zoom="8">
        <div class="map-info">
            <h2 class="text-uppercase">ASSESP</h2>
            <address><?php echo $ASSESP_DATA["location"] ?></address>
        </div>
    </div>
</section>