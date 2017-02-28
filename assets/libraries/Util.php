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
            $startDate = Util::changeDateFormat($_POST['startDate']);
            $endDate = Util::changeDateFormat($_POST['endDate']);
            if($json_data[$i]->offerDateRange->lengthOfStay == $lengthOfStay &&
                Util::checkStartDate($startDate,$json_data[$i]) &&
                Util::checkEndDate($endDate,$json_data[$i]) &&
                Util::checkDestination($json_data[$i])
            ){
                array_push($filtered_data,$json_data[$i]);
            }elseif ($json_data[$i]->offerDateRange->lengthOfStay == $lengthOfStay ||
                Util::checkStartDate($startDate,$json_data[$i]) ||
                Util::checkEndDate($endDate,$json_data[$i]) ||
                Util::checkDestination($json_data[$i])
            ){
                array_push($filtered_data,$json_data[$i]);
            }

        }
        return $filtered_data;
    }
    public static function checkStartDate($startDate,$object){
      if((isset($_POST['startDate']) &&!empty($_POST['startDate']) && $startDate ==  $object->hotelInfo->travelStartDate )){
          return true;
      }
      return false;
    }
    public static function checkEndDate($endDate,$object){
        if(isset($_POST['endDate']) &&!empty($_POST['endDate']) && $endDate ==  $object->hotelInfo->travelEndDate ){
            return true;
        }
        return false;
    }
    public static function checkDestination($object){
        //var_dump(strpos(strtolower($object->destination->longName) ,strtolower($_POST['Destination'])) !== false);die();
        if(isset($_POST['Destination']) && !empty($_POST['Destination']) && strpos(strtolower($object->destination->longName) ,strtolower($_POST['Destination'])) !== false){
            return true;
        }
        return false;
    }
}
?>