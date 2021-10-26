<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/SelectedDAO.php");

    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $result = null;
            $red = null;
            $choice = null;

            if(isset($_POST["choice"])){
                $choice = $_POST["choice"];
                if($choice === "1"){
                    $daoresult = SelectedDAO::getNum();
                }
                else if($choice === "2"){
                    $daoresult = SelectedDAO::getDate();
                }
                else if($choice === "3"){
                    $red = "Non implémenté";
                }
            }
            if(!empty($daoresult)){
                foreach($daoresult as $one){
                    $result = $one;
                }
            }

            return compact("result", "red", "choice");
        }
    }