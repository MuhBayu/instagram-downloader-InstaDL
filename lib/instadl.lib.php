<?php

/**
* 
*/
class InstaDL
{
	const _host = 'https://api.bayyu.net/instadl/';
	protected $api_key;
	protected $result;
    protected $ig_url;
	function __construct()
	{
		# code...
	}
	public function setApiKey($key) {
		$this->api_key = $key;
        return $this;
	}
	public function cURL($url){
        $url = urldecode($url);
        $param = http_build_query(['apikey' => $this->api_key, 'url' => $url]);
        $get = Self::_host . '?' . $param;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $get);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
    public function download($url) {
    	$this->result = $this->cURL($url);
    	return $this;
    }
    public function get() {
    	return $this->result;
    }
    public function getArray() {
    	return json_decode($this->result, true);
    }
}