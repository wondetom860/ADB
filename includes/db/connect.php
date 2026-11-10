<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// error_reporting(0);

if (!(session_status() == PHP_SESSION_ACTIVE)) { //check if PHP session is active...
    session_start();
}

class connect {

    //variables farm
    var $host = '127.0.0.1';
    var $user = 'root';
    var $password = 'WT_toma';
    var $database = 'db_adb';
    var $connString = null;
    

    public function getCouseById($id){
        $query = "SELECT * FROM course WHERE id={$id}";
        $result = mysqli_query($this->connString,$query);
        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        }else{
            return NULL;
        }
    }

    public function getUserById($id){
        $query = "SELECT * FROM user WHERE id={$id}";
        $result = mysqli_query($this->connString,$query);
        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        }else{
            return NULL;
        }
    }
    public function connect_DB($report = NULL) {
        try {
            $this->connString = new MySQLi($this->host, $this->user, $this->password, $this->database);
            if (mysqli_connect_error()) {
                throw new Exception;
            }else{
                if (!is_null($report)) {
                    return "Connection to database [$this->database] succeccfull. Youn can query on the selected database openly till it is closed.";
                }
            }
        } catch (Exception $ex) {
            if (!is_null($report)) {
                    return mysqli_connect_error();
                }
            die('<pre>ERROR# Server can not be connected.</pre>');
        }
    }

    public function closeDB() {
        if (!is_null($this->connString)) {
            mysqli_close($this->connString);
            $this->connString = null;
        } else {
            die("<br><pre> Already closed DATABASE, no need.</pre>");
        }
    }

    public function dateFormat($date) {
        $dd = date_format(date_create($date), 'd-m-Y');
        return $dd;
    }
}
