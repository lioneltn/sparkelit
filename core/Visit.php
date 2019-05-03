
<?php
class Visit
{	
	private $id;
	private $ip;
	private $country;
	private $year;
	private $month;
	private $day;
	private $device;
	private $browser;
	
	function __construct($ip,$country,$year,$month,$day,$device,$browser)
	{
		$this->setIP($ip);
		$this->setCountry($country);
		$this->setYear($year);
		$this->setMonth($month);
		$this->setDay($day);
		$this->setDevice($device);
		$this->setBrowser($browser);

	}

	 public static function systemInfo()
 {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $os_platform    = "Unknown OS Platform";
    $os_array       = array('/windows phone 8/i'    =>  'Windows Phone 8',
                            '/windows phone os 7/i' =>  'Windows Phone 7',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile');
    $found = false;
    
    $device = '';
    foreach ($os_array as $regex => $value) 
    { 
        if($found)
         break;
        else if (preg_match($regex, $user_agent)) 
        {
            $os_platform    =   $value;
            $device = !preg_match('/(windows|mac|linux|ubuntu)/i',$os_platform)
                      ?'MOBILE':(preg_match('/phone/i', $os_platform)?'MOBILE':'SYSTEM');
        }
    }
    $device = !$device? 'SYSTEM':$device;
    return array('os'=>$os_platform,'device'=>$device);
 }


  public static function browser() 
 {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    $browser        =   "Unknown Browser";

    $browser_array  = array('/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
                            '/mobile/i'     =>  'Handheld Browser');
    $found = false;

    foreach ($browser_array as $regex => $value) 
    { 
        if($found)
         break;
        else if (preg_match($regex, $user_agent,$result)) 
        {
            $browser    =   $value;
        }
    }
    return $browser;
 }


// Function to get the user IP address
function getUserIP() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

	public function detect_visit(){
		$this->setID(rand(10,100));
		$this->setIP($this->getUserIP());
		 

		$ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));    
    	if($ip_data && $ip_data->geoplugin_countryName != null){
    		$this->setCountry($ip_data->geoplugin_countryCode);
        	

    	}

    	$this->setYear(date('Y'));
    	$this->setMonth(date('M'));
    	$this->setDay(date('D'));

	

		$detect = $this->systemInfo();

		$this->setDevice($detect['device']);

		$this->setBrowser($this->browser());
		

	}




	function getID()
	{
		return $this->id;
	}

	function getIP()
	{
		return $this->ip;
	}
    
    function getCountry()
	{
		return $this->country;
	}
	function getYear()
	{
		return $this->year;
	}

	function getMonth()
	{
		return $this->month;
	}
    function getDay()
	{
		return $this->day;
	}

	function getDevice()
	{
		return $this->device;
	}

	function getBrowser()
	{
		return $this->browser;
	}

 	function setID($id)
	{
		 $this->id=$id;
	}

	function setIP($ip)
	{
		 $this->ip=$ip;
	}
    
    function setCountry($country)
	{
		 $this->country=$country;
	}
	function setYear($year)
	{
		 $this->year=$year;
	}

	function setMonth($month)
	{
		 $this->month=$month;
	}
    function setDay($day)
	{
		 $this->day=$day;
	}

	function setDevice($device)
	{
		 $this->device=$device;
	}

	function setBrowser($browser)
	{
		 $this->browser=$browser;
	}


}


  ?>