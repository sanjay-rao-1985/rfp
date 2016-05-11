<?php
				$SOLR_HOME='PATH_TO_SOLR';
				$url=$SOLR_HOME.'/solr/select?q=';
				$str=$_GET['searchString'];
				$url_new=$url.$str.'&defType=edismax&sort=date desc&qf=question^2+response^2+module^3&fl=*,score&start=0&rows=10000&wt=json';
				$url_new=str_replace(' ', '%20', $url_new);
				$curl = curl_init();
				
				curl_setopt_array($curl, array(
					CURLOPT_RETURNTRANSFER => 1,
					CURLOPT_URL => $url_new,
					CURLOPT_USERAGENT => 'Codular cURL Request'
				));
				
				$resp = curl_exec($curl);
				echo $resp;
			
			
		
?>

