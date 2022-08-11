<?php

function getContent($url, $data = FALSE, array $custom_headers = []) {
	$url = trim($url);

	$curl_handle = curl_init($url);

	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($curl_handle, CURLOPT_HEADER, TRUE);
	curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, TRUE); 
	curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);

	curl_setopt($curl_handle, CURLOPT_COOKIESESSION, TRUE);

	curl_setopt($curl_handle, CURLOPT_COOKIEJAR, 'session');
	curl_setopt($curl_handle, CURLOPT_COOKIEFILE, 'session');

	if (is_null($custom_headers) || array_key_exists('Referer', $custom_headers) == FALSE) {
		curl_setopt($curl_handle, CURLOPT_AUTOREFERER, TRUE);
	}

	if (isset($custom_headers['User-Agent'])) {
		curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0.1 Safari/602.2.14');

		unset($custom_headers['User-Agent']);
	}
	
	if (isset($custom_headers['Cookie'])) {
		curl_setopt($curl_handle, CURLOPT_COOKIE, $custom_headers['Cookie']);

		unset($custom_headers['Cookie']);
	}

	if ($data) {
		curl_setopt($curl_handle, CURLOPT_POST, TRUE);

		if (is_array($data)) {
			$data = http_build_query($data);
		}

		if (is_string($data) && strlen($data) > 0) {
			curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data);
		}
	}

	if (count($custom_headers) > 0) {
		$headers = [];

		foreach ($custom_headers as $key => $header) {
			$headers[] = sprintf('%s: %s', $key, $header);
		}

		curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
	}

	curl_setopt($curl_handle, CURLINFO_HEADER_OUT, TRUE);

	$response = curl_exec($curl_handle);

	$header_size = curl_getinfo($curl_handle, CURLINFO_HEADER_SIZE);
	$header = substr($response, 0, $header_size);
	$body = substr($response, $header_size);

	$request = curl_getinfo($curl_handle);
	$httpCode = curl_getinfo($curl_handle, CURLINFO_HTTP_CODE);

	curl_close($curl_handle);

	$headers = trim($header);
	$headers = explode("\r\n\r\n", $headers);

	$headerParts = [];

	foreach ($headers as $key => $headerGroup) {
		$parts = [];

		$header = explode("\r\n", $headerGroup);

		// preg_match('|HTTP/\d\.\d\s+(\d+)\s+.*|', $header[0], $match);

		// $parts['status'] = $match[1];

		array_shift($header);

		foreach ($header as $line) {
			if (strlen($line) == 0) {
				continue;
			}

			if (strpos($line, ': ') === FALSE) {
				$parts[] = $line;
			} else {
				$middle = explode(': ', $line, 2);

				$parts[trim($middle[0])] = trim($middle[1]);
			}
		}

		$headerParts[$key] = $parts;
	}

	return [
		'body' => $body,
		'http_code' => $httpCode,
		'request' => $request,
		'headers' => count($headerParts) == 1 ? $headerParts[0] : $headerParts
	];
}