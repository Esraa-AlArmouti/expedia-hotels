<div class="result">
    <?php
    if (!empty($_POST)){
        $filtered_data = Util::findMatches();
    }
    ?>
    <?php if(!empty($filtered_data)):?>
        <?php for($i = 0; $i < count($filtered_data); $i++){?>
            <div class="hotel-list">
                <a class="hotel-url" href="<?php echo $filtered_data[$i]->hotelUrls->hotelInfositeUrl; ?>">
                    <div class="col-lg-3">
                        <img src="<?php echo $filtered_data[$i]->hotelInfo->hotelImageUrl; ?>"/>
                    </div>
                    <div class="col-lg-9">
                        <h3>Hotel: <?php echo $filtered_data[$i]->hotelInfo->hotelName; ?></h3>
                        <p class="address">Address:<?php echo $filtered_data[$i]->hotelInfo->hotelStreetAddress; ?></p>
                        <p class="language">language:<?php echo $filtered_data[$i]->hotelInfo->language; ?></p>
                        <p class="description">description:<?php echo $filtered_data[$i]->hotelInfo->description; ?></p>
                    </div>
                    <div class="clear"></div>
                </a>
            </div>
        <?php }?>
    <?php elseif (!empty($_POST)):?>
        <p class="no-result">No hotel deals available</p>
    <?php endif;?>
</div>