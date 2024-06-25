<?php

class Curl {

    public $call;
    public $info;
    public $header_size;
    public $header;
    public $body;
    public $status;
    public $err_no;
    public $err_msg;

    public function post($url, $body, $headers = NULL) {
        if (is_array($body)) {
            $body = http_build_query($body);
        }
        $curl_opts = array(
            CURLOPT_URL            => $url,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_SSL_VERIFYPEER => 2,
            CURLOPT_POSTFIELDS     => $body,
            CURLOPT_RETURNTRANSFER => TRUE
        );
        if ($headers) {
            $curl_opts[CURLOPT_HTTPHEADER] = $headers;
        }
        $this->call = $this->init($curl_opts);
        return $this;

    }
    public function post_auth($url, $body,$user,$pass, $headers = NULL) {
        if (is_array($body)) {
            $body = http_build_query($body);
        }
        $curl_opts = array(
            CURLOPT_URL            => $url,
            CURLOPT_POST           => TRUE,
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_SSL_VERIFYPEER => 2,
            CURLOPT_POSTFIELDS     => $body,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_USERPWD        => "$user:$pass",
            CURLOPT_HTTPAUTH       => CURLAUTH_BASIC
        );
        if ($headers) {
            $curl_opts[CURLOPT_HTTPHEADER] = $headers;
        }
        $this->call = $this->init($curl_opts);
        return $this;

    }

   

    public function get($url, $headers = NULL) {
        $curl_opts = array(
            CURLOPT_URL            => $url,
            CURLOPT_POST           => FALSE,
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_SSL_VERIFYPEER => 2,
            CURLOPT_RETURNTRANSFER => TRUE
        );
        if ($headers) {
            $curl_opts[CURLOPT_HTTPHEADER] = $headers;
        }
        $this->call = $this->init($curl_opts);
        return $this;
    }

    public function init($curl_opts) {
        if (!$curl_opts) {
            return FALSE;
        }
        $ch = curl_init();
        if (!$ch) {
            return FALSE;
        }
        curl_setopt_array($ch, $curl_opts);
        curl_setopt($ch, CURLOPT_HEADER, TRUE);
        curl_setopt($ch, CURLINFO_HEADER_OUT, TRUE);
        curl_setopt($ch, CURLOPT_VERBOSE, TRUE);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout in seconds
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            $this->err_no  = curl_errno($ch);
            $this->err_msg = curl_error($ch);
            curl_close($ch);
            unset($ch);
            return FALSE;
        }
        $this->status      = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $this->info        = curl_getinfo($ch);
        $this->header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $this->header      = substr($response, 0, $this->header_size);
        $this->body        = substr($response, $this->header_size);
        curl_close($ch);
        unset($ch);
        return TRUE;
    }

    public function result() {
        return $this->body;
    }

    public function result_text() {
        return strip_tags($this->body);
    }

    public function info() {
        return $this->info;
    }

    public function header() {
        return $this->header;
    }

    public function status() {
        return $this->status;
    }

    public function json_result() {
        return json_decode($this->result_text());
    }

	
    public function json_resultv2() {
        return json_decode($this->result_text(), true);
    }
}
