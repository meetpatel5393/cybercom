<h2>Unique Hit Counter</h2>
<?php 

	function unique_hit_counter() {
		$user_ip = $_SERVER['REMOTE_ADDR'];
		$file_name = 'ip.txt';
		$ip_array = file($file_name);
		$found = false;
		
		$file_handle = fopen('counter.txt', 'r');
		$data = fread($file_handle, filesize('counter.txt'));
		fclose($file_handle);
		echo $data;

		foreach ($ip_array as $ip) {
			if(trim($ip) == trim($user_ip)) {
				$found = true;
				break;
			} else {
				$fonud = false;
			}
		}

		if($found != true) {
			$file_handle = fopen($file_name, 'a');
			fwrite($file_handle, $user_ip."\n");
			fclose($file_handle);

			$new_counter = $data + 1;
			$file_handle = fopen('counter.txt', 'w');
			fwrite($file_handle, $new_counter);
			fclose($file_handle);
		}
	}
	unique_hit_counter();

?>