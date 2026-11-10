<?php

if (isset($_POST['p']) && !empty($_POST['p'])) {
	$genApk = new genAK();
	$genApk->setIdentityKey(true);

	echo $genApk->getIdentityKey();
}
/**
 * genAK -- wondetom@gmail.om
 */
class genAK
{

	private $_identity_key;
	private $table = null;
	private $pocket_take = null;
	private $pocket_put = null;

	private $filenameP = '../web/js/ALTE.json';
	private $filenameE = '../web/js/$ALTE.inc';

	private $key = NULL;
	private $iv = NULL;
	
	// function __construct(argument)
	// {
		
	// }
	public function getIdentityKey(){
		return file_get_contents($this->filenameE);
	}

	private function getInstAccr($id,$conString){
		$query = "SELECT * FROM aka WHERE id = {$id}";

	    $result = mysqli_query($conString,$query);
	    $akaObj = mysqli_fetch_assoc($result);
	    return $akaObj['aka_RISAcronyme'];
	}

	public function sign($licId,$conString){
		$query = "SELECT * FROM licences WHERE id = $licId";
        $result = mysqli_query($conString,$query);

        $c = mysqli_num_rows($result);

        if ($c > 0) {
        	$licObj = mysqli_fetch_assoc($result);

        	$instAccr = $this->getInstAccr($licObj['lic_aka_relId'],$conString);
        	// read profile data from the path: 
        	if (!file_exists("../web/js/{$instAccr}-{$licObj['lic_version']}.prof.json")) {
        		return "Profile data not found.";
        	}
        	$licText = file_get_contents("../web/js/{$instAccr}-{$licObj['lic_version']}.prof.json");
        	if (empty($licText)) {
        		return "Profile data not found.";
        	}

        	if (1 || (empty($licObj['lic_signature']) || is_null($licObj['lic_signature'])) && !empty($licText)) {
        		// sign using ECDSA_AES_128: 
        		$signChain = $this->ECDSA_SIGN($licText,"{$instAccr}-{$licObj['lic_version']}");

        		$queryUpdate = "UPDATE `licences` SET `lic_signature` = '{$signChain[2]}',`lic_pk` = '{$signChain[1]}',`lic_sk` = '{$signChain[0]}' WHERE (`id` = {$licObj["id"]});";

        			// UPDATE `wonde_csse`.`licences` SET `lic_signature` = '4', `lic_sk` = '4', `lic_pk` = '5' WHERE (`id` = '1');

        		$result = mysqli_query($conString,$queryUpdate);

        		if (mysqli_affected_rows($conString) > 0) {
        			return mysqli_fetch_assoc(mysqli_query($conString,"SELECT * FROM licences where id = $licId"));
        		}
        	}
        	
        }else{
        	var_dump("No license, Please register one");
        	die();
        }
	}

	private function ECDSA_VERIFY($data,$signature,$public_key_pem){
		$r = openssl_verify($data, $signature, $public_key_pem, "sha256WithRSAEncryption");
		var_dump($r);
	}

	private function ECDSA_SIGN($data,$signature_file){
		$priv_file = file_get_contents('../key.pem');
		$pub_file = file_get_contents('../public.pem');

		$pkeyid = openssl_pkey_get_private($priv_file);
		$public_key_pem = openssl_pkey_get_public($pub_file);

		if (!$pkeyid) {
			return;
		}

		//create signature
		openssl_sign($data, $signature, $pkeyid, OPENSSL_ALGO_SHA256);

		$signature = base64_encode(''.$signature);
		$file_handle = fopen("../web/lics/{$signature_file}.sign",'wb');
		fwrite($file_handle,$signature);
		fclose($file_handle);

		return [$priv_file,$pub_file,$signature];

		
	}

	public function setIdentityKey($key)
	{
		if (is_string($key) && strlen($key) > 0) {
			$this->_identity_key = $key;
		}else{
			if(file_exists($this->filenameP)){

				// $passphrase = md5('23-04-1993');
				$passphrase = substr(md5('23-04-1993'), -16);
				try{
					$file = fopen($this->filenameP, 'rb');
					$fileData = fread($file, filesize($this->filenameP));
					fclose($file);

					$iv = substr(md5("\x1B\x3C\x58".$passphrase,true), 0 , 16);
					$key = substr(md5("\x2D\xFC\xD8".$passphrase,true).md5("\x2D\xFC\xD9".$passphrase,true), 0,24);

					$encryptedData = openssl_encrypt($fileData, 'AES-256-CBC', $key , 0 , $iv).$passphrase;

					$fp = fopen($this->filenameE, 'wb');
					fwrite($fp,$encryptedData);
					fclose($fp);

				}catch(Exception $e){ 
					echo "Errro";
				}
			}else{
				echo "Errro";
			}
		}
	}
}
?>