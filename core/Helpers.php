<?php
include_once 'Request.php';
class Helpers
{
    public static function search($postParams = array())
    {
        $defaultParams = array(
            'scenario'=>'deal-finder',
            'page'=>'foo',
            'uid'=>'foo',
            'productType'=>'Hotel'
        );
        try
        {
            if(!empty($postParams))
            {
                $request = new Request();
                $urlParameters = array();
                foreach ($postParams as $key => $value)
                {
                    if(!empty($value))
                        $urlParameters[$key] = $value;
                }

                $finalParams = array_merge($urlParameters,$defaultParams);
                $result = $request->run($finalParams);
                // Data exist
                if($result != null && isset($result->offers) && isset($result->offers->Hotel) && !empty($result->offers->Hotel))
                {
                    return $result->offers->Hotel;
                }
                else
                {
                    return null;
                }
            }
            else
            {
                return null;
            }

        }
        catch (Exception $ex)
        {
            return null;
        }
    }
}