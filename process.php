<?php
  extract($_GET);
  if(isset($id)) {
    // $id = "1VlF7GKyJRVNFl5_g38wZnBQEFafOTrOq";
    $url = "https://docs.google.com/uc?export=download&id=$id";
    $ch = curl_init($url);
    
    $options = array(
      CURLOPT_RETURNTRANSFER => 1,     // return web page
      CURLOPT_HEADER         => 1,     //return headers in addition to content
    );
  
    curl_setopt_array($ch, $options);
    $response = curl_exec($ch);
    $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $headers = substr($response, 0, $header_size);
    $body = substr($response, $header_size);
    curl_close($ch);
    $cookies = array();
    preg_match_all('/Set-Cookie:(?<cookie>\s{0,}.*)$/im', $headers, $cookies);
    $pos = stripos($cookies['cookie'][0], 'download_warning');
    $confirmToken = explode("=", $cookies['cookie'][0]);
    $confirmToken = explode(";", $confirmToken[1]);
    $confirmToken = $confirmToken[0];
    $cookie = "Cookie:";
    foreach ($cookies['cookie'] as $c) {
      $cookie .= $c . ';';
    }
  
    $redirectUrl = "https://docs.google.com/uc?export=download&id=${id}&confirm=${confirmToken}";
    $ch = curl_init($redirectUrl);
  
    $options = array(
      CURLOPT_RETURNTRANSFER => 1,     // return web page
      CURLOPT_HEADER         => 1,     //return headers in addition to content
      CURLOPT_FOLLOWLOCATION => 0,
      CURLOPT_HTTPHEADER     => array($cookie)
    );
  
    curl_setopt_array($ch, $options);
    $response = curl_exec($ch);
    // $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $finalUrl = curl_getinfo($ch, CURLINFO_REDIRECT_URL);
    header("Location: $finalUrl");
    curl_close($ch);
  }
?>
