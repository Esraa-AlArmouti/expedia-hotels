<?php
class Util
{
    public static function getJsonData(){
        //$file = 'assets/package.json';
        $file = 'https://offersvc.expedia.com/offers/v2/getOffers?scenario=deal-finder&page=foo&uid=foo&productType=Hotel';
        return json_decode(file_get_contents($file))->offers->Hotel;
    }
    public static function CalculateLengthOfStay($startDate,$endDate){
        $startDate = date_create($startDate);
        $endDate = date_create($endDate);
        $length = date_diff($startDate,$endDate,true)->days;
        return $length;
    }

    public static function changeDateFormat($date){
        $originalDate = $date;
        $newDate = date("m/d/Y", strtotime($originalDate));
        return $newDate;
    }

    public static function findMatches(){
        $json_data = Util::getJsonData();
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
                (isset($_POST['endDate']) &&!empty($_POST['endDate']) && $endDate ==  $json_data[$i]->hotelInfo->travelEndDate ) //&&
                //(isset($_POST['Destination']) &&!empty($_POST['Destination']) && strpos($json_data[$i]->destination->longName ,$_POST['Destination']) != false)
            ){
                array_push($filtered_data,$json_data[$i]);
                //all result are not available in all hotels
            }

        }
        return $filtered_data;
    }

}
?>