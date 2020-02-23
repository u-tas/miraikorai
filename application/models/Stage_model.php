<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stage_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_stage(int $id = NULL) {
        if (is_null($id) === false) {
            $sql = "SELECT * FROM STAGE INNER JOIN STAGE_PLACE ON STAGE.place = STAGE_PLACE.id LEFT OUTER JOIN STAGE_IMAGE ON STAGE.id = STAGE_IMAGE.stage_id WHERE STAGE.id = ?";
            $query = $this->db->query($sql, array($id));
        } else {
            $sql = "SELECT * FROM STAGE INNER JOIN STAGE_PLACE ON STAGE.place = STAGE_PLACE.id LEFT OUTER JOIN STAGE_IMAGE ON STAGE.id = STAGE_IMAGE.stage_id ORDER BY STAGE.open_date desc LIMIT 1";
            $query = $this->db->query($sql);
        }
        return $query->custom_result_object("StageResult");
    }
    
    public function get_stage_list(int $limit = NULL ,int $offset = NULL) {
        if (is_null($limit)) {
            $limit = 4;
        }
        if (is_null($offset)) {
            $offset = 0;
        }

        $param = array($limit, $offset);
        
        $sql = "SELECT STAGE.id, STAGE.title, STAGE.open_date, STAGE_IMAGE.image_url FROM STAGE LEFT OUTER JOIN STAGE_IMAGE ON STAGE.id = STAGE_IMAGE.stage_id ORDER BY STAGE.open_date desc LIMIT ? OFFSET ?";
        $query = $this->db->query($sql, $param);

        return $query->result_array();
    }
    
    public function get_stages(StageResult $stageResult) {
        $sql = "SELECT * FROM STAGE_STAGES WHERE stage_id = ?";
        $query = $this->db->query($sql, array($stageResult->__get("id")));
        $stageResult->__set("array_stages", $query->custom_result_object("StagesResult"));
        return $stageResult;
    }
    
    public function get_song(StagesResult $stagesResult) {
        $sql = "SELECT * FROM STAGE_STAGES_SONGS INNER JOIN STAGE_SONG ON STAGE_STAGES_SONGS.song_id = STAGE_SONG.id WHERE stages_id = ?";
        $query = $this->db->query($sql, array($stagesResult->__get("id")));
        $stagesResult->__set("array_song", $query->custom_result_object("SongResult"));
        return $stagesResult;
    }
}

class StageResult {

    private $id;
    private $title;
    private $detail;
    private $image_url;
    private $publishment_date;
    private $open_date;
    private $start_date;
    private $place;
    private $presented_by;
    private $ticket_detail;
    private $book_url;
    private $timestamp_created;
    private $timestamp_updated;
    private $name;
    private $access;
    private $attention;
    private $official_url;
    private $array_stages;

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $param) {
        $this->$name = $param;
    }

}

class StagesResult {

    private $id;
    private $stage_id;
    private $order_no;
    private $title;
    private $detail;
    private $conductor_name;
    private $pianist_name;
    private $timestamp_created;
    private $timestamp_updated;
    private $array_song;

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $param) {
        $this->$name = $param;
    }

}

class SongResult {

    private $id;
    private $title;
    private $suite;
    private $lyric_by;
    private $song_by;
    private $arranged_by;
    private $timestamp_created;
    private $timestamp_updated;

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $param) {
        $this->$name = $param;
    }

}
