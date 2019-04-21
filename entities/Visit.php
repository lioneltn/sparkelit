
<?php
class Visit
{
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

 

	function setIP($ip)
	{
		 $this->ip=$ip;
	}
    
    function setCountry($country)
	{
		 $this->country=$country;
	}
	function setYear($Year)
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