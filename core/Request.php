<?php
class Request
{
    private $baseUrl = null;

    function __construct()
    {
        $config = include('config/Configuration.php');
        $this->baseUrl =$config['baseUrl'];
    }

    public function run($urlParameters = array())
    {
        try
        {
            if(!empty($urlParameters)) {
                $urlQuery = http_build_query($urlParameters);
                $file = $this->baseUrl . $urlQuery;
                return json_decode(file_get_contents($file));
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
