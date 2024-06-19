<?php
    $url = "https://competitive-burton-accommodation-raised.trycloudflare.com/dashboard/POST.php";
    
    $options = [
        'http' => [
            'header' => "Content-Type: application/json\r\n".
                        "APIKEY: 55555\r\n",
            'method' => 'POST'
        ]
    ];

    $context = stream_context_create($options);

    $response = file_get_contents($url,false,$context);
    print_r($response);
?>





