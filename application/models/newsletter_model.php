<?php


class newsletter_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	
	public function send_sms($tlp){
		//$tlp="089651751132";
		$userkey="6zl7sq"; // userkey lihat di zenziva
		$passkey="Cilandak2016"; // set passkey di zenziva
		//$nama=strtoupper($nama);
		//$message="Nomor Verifikasi otodealers.com Anda : $kode, atau klik http://www.otodealers.com/penawaran/verified/$kode/$id";
		$message="test.. ";
		$url = "https://reguler.zenziva.net/apps/smsapi.php?";$curlHandle = curl_init();
		curl_setopt($curlHandle, CURLOPT_URL, $url);
		curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$tlp.'&pesan='.urlencode($message));
		curl_setopt($curlHandle, CURLOPT_HEADER, 0);
		curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
		curl_setopt($curlHandle, CURLOPT_POST, 1);
		$results = curl_exec($curlHandle);
		curl_close($curlHandle);
		return  $results;
	}
	
	
	
}