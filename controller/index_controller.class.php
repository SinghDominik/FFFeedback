<?php
    class index_controller{
        private $vars = array();

        private $db_object = null;
    
        //--------
        //Settings
        //-------
        private $need_loggedin = false;
        private $needed_rank = 0;
        //-------

        public function __construct($db_object){
            $this->db_object = $db_object;
        }

        public function IsLoginNeeded(){
            return $this->need_loggedin;
        }

        public function IsRankNeeded(){
            return $this->needed_rank;
        }

        public function process(){
            if(isset($_POST["feedback"])){
                if($_POST["feedback"] != ""){
                    if(isset($_POST["name"])){
                        $name = $_POST["name"];
                    }else{
                        $name = "";
                    }


                    $result = $this->db_object->query("INSERT INTO `feedback`(`name`, `ip`, `text`) VALUES (?,?,?)", array($name, $_SERVER['REMOTE_ADDR'], $_POST["feedback"]));
                    if($result){
                        $this->vars["message"] = "<div class='message'>Du hast das Feedback erfolgreich abgegeben. Vielen Dank!</div>";
                    }
                }else{
                    $this->vars["error"] = "<div class='error'>Du musst mindestens das Feedback angeben.</div>";
                }
            }
            return $this->vars;
        }
    }