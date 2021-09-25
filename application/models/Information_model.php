<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // $this->load->database();
    }

    // const table_name = "INFORMATION";

    public function get_information($count = NULL) {
        $headlessCmsEndpoint = HEADLESS_CMS_ENDPOINT . '/information';
        if (!is_null($count)) {
            $headlessCmsEndpoint = $headlessCmsEndpoint . '?limit=' . $count;
        } 
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
        if (is_null($count)) {
            $this->db->get_compiled_select(self::table_name,false);
        } else {
            $this->db->limit($count)->get_compiled_select(self::table_name,false);
        }
        $this->db->order_by("publishment_date", "desc");
        $this->db->where("publishment_date <=", date("Y-m-d H:i:s"));
        return $this->db->get()->result_array();
        */
    }
    
    public function insert_information($set) {
        return $this->db->insert(self::table_name, $set);
    }

}
