<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2/19/2017
 * Time: 10:24 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotels Deal</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link href="assets/css/styles.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="form-container">
        <h2>Hotel Deals</h2>
        <form class="navbar-form " role="search" method="post">
            <div class="col-lg-12">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Destination" name="Destination" id="Destination">
                </div><!-- /input-group -->
            </div><!-- /.col-lg-12 -->
            <div class="date-container">
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="start Date" name="startDate" id="startDate">
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="End Date" name="endDate" id="endDate">
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
            </div>
            <div class="rate-container">
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="minimum Star Rating" name="minStarRating" id="minStarRating">
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="maximum Star Rating" name="maxStarRating" id="maxStarRating">
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
            </div>
            <div class="total-rate-container">
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="minimum Total Rate" name="minTotalRate" id="minTotalRate">
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="maximum Total Rate" name="maxTotalRate" id="maxTotalRate">
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
            </div>
            <div class="guest-rate-container">
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="minimum Guest Rating" name="minGuestRating" id="minGuestRating">
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="maximum Guest Rating" name="maxGuestRating" id="maxGuestRating">
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
            </div>
            <div class="col-lg-12 submitBtn">
                <button type="submit" class="btn btn-default">Search</button>
            </div>
        </form>
    </div>
    <div class="result">
        <?php
        if (!empty($_POST)){
            $file = 'assets/package.json';
            $json_data = json_decode(file_get_contents($file))->offers->Hotel;
            $filtered_data = [];
            for($i = 0; $i < count($json_data); $i++){
                $lengthOfStay = Util::CalculateLengthOfStay($_POST['startDate'],$_POST['endDate']);
                if($json_data[$i]->hotelUrgencyInfo->numberOfRoomsLeft > 0){
                    //array_push($filtered_data,$json_data[$i]);
                    //all result are not available in all hotels
                }
                $startDate = Util::changeDateFormat($_POST['startDate']);
                $endDate = Util::changeDateFormat($_POST['endDate']);
                if($json_data[$i]->offerDateRange->lengthOfStay == $lengthOfStay &&
                    (isset($_POST['startDate']) &&!empty($_POST['startDate']) && $startDate ==  $json_data[$i]->hotelInfo->travelStartDate )&&
                    (isset($_POST['endDate']) &&!empty($_POST['endDate']) && $endDate ==  $json_data[$i]->hotelInfo->travelEndDate ) &&
                    (isset($_POST['Destination']) &&!empty($_POST['Destination']) && strpos($json_data[$i]->destination->longName ,$_POST['Destination']) != false)
                ){
                    array_push($filtered_data,$json_data[$i]);
                    //all result are not available in all hotels
                }

            }
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
</div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/customScript.js"></script>
</body>
</html>
<?php
class Util
{
    public static function CalculateLengthOfStay($startDate,$endDate){
        $StartDay = date("d", strtotime($startDate));
        $EndDay = date("d", strtotime($endDate));
        $StartMonth = date("m", strtotime($startDate));
        $EndMonth = date("m", strtotime($endDate));
        $StartYear= date("Y", strtotime($startDate));
        $EndYear = date("Y", strtotime($endDate));
        $length= ($EndYear- $StartYear) + ($EndMonth- $StartMonth) + ( $EndDay - $StartDay);
        return $length;
    }

    public static function changeDateFormat($date){
        $originalDate = $date;
        $newDate = date("m/d/Y", strtotime($originalDate));
        return $newDate;
    }



}
?>