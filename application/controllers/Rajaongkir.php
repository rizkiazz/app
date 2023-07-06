<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rajaongkir extends CI_Controller
{

    private $api_key = '8208fcc79dd5d0ba4e748390f254d295';
    // private $api_key = '510731e7635c49bcdbc4f15659944450';

    public function provinsi()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: $this->api_key"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
            $array_response = json_decode($response, true);
            echo "<option hidden>Pilih Provinsi</option>";
            $data_provinsi = $array_response['rajaongkir']['results'];
            foreach ($data_provinsi as $key => $value) {
                echo "<option value='" . $value['province_id'] . "' id_provinsi='" . $value['province_id'] . "'>" . $value['province'] . "</option>";
            }
        }
    }

    public function kota()
    {
        $provinsi_set = $this->input->post('id_provinsi');

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=" . $provinsi_set,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: $this->api_key"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $array_response = json_decode($response, true);
            echo "<option hidden>Pilih Kota</option>";
            $data_kota = $array_response['rajaongkir']['results'];
            foreach ($data_kota as $key => $value) {
                echo "<option value='" . $value['city_name'] . "'>" . $value['city_name'] . "</option>";
            }
        }
    }
    public function ekspedisi()
    {
        // echo "<option hidden>Pilih Tempat</option>";
        // echo "<option value='Bank Sampah Kencana'>Bank Sampah Kencana</option>";
        // echo "<option value='Bank Sampah Polar'>Bank Sampah Polar</option>";
        // echo "<option value='Bank Sampah Sejati'>Bank Sampah Sejati</option>";
        // echo "<option value='Bank Sampah Juara'>Bank Sampah Juara</option>";
        // echo "<option value='Bank Sampah Bersama'>Bank Sampah Bersama</option>";
        // echo "<option value='Bank Sampah Kita'>Bank Sampah Kita</option>";
        
        echo "<option hidden>Pilih Tujuan</option>";
        echo "<option value='Jalan Merpati 14 - 1234'>Jalan Merpati 14 - 1234</option>";
        echo "<option value='Jalan Kencana 15 - 2345'>Jalan Kencana 15 - 2345</option>";
        echo "<option value='Jalan Peri 1 - 3456'>Jalan Peri 16 - 3456</option>";
        echo "<option value='Jalan Koala 17 - 4567'>Jalan Koala 17 - 4567</option>";
        echo "<option value='Jalan Musu 18 -  5678'>Jalan Musu 18 -  5678</option>";
        echo "<option value='Jalan Perintis 19 - 6789'>Jalan Perintis 19 - 6789</option>";
    }
}