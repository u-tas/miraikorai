<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History_model extends CI_Model {

    public function __construct() {
        // $this->load->database();
    }

    // const table_name = "HISTORY";

    public function get_history() {
        $headlessCmsEndpoint = HEADLESS_CMS_ENDPOINT . '/history';
        $headers = ['X-API-KEY:'.API_KEY];
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $headlessCmsEndpoint);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt ($curl, CURLOPT_RETURNTRANSFER, true );
        $response = curl_exec($curl);
        $result = json_decode($response, true);
        curl_close($curl);

        for ($i = 0; $i < count($result['contents']); ++$i) {
            $time = new DateTime($result['contents'][$i]['publishment_date']);
            $time->setTimezone(new DateTimeZone('Asia/Tokyo'));
            $result['contents'][$i]['publishment_date'] = $time->format('c');
        }

        return $result['contents'];

        /*
        $this->db->get_compiled_select(self::table_name,false);
        $this->db->order_by("publishment_date", "desc");
        $this->db->where("publishment_date <=", date("Y-m-d H:i:s"));
        return $this->db->get()->result_array();
        */   
    }

}
