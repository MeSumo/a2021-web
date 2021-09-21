<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/StatsDAO.php");

    class StatsAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $result = StatsDAO::count();
            $result2 = [];
            if(empty($result)){
                $result = 0;
                $result2[] = 0;
                $result2[] = 0;
                $result2[] = 0;
            }
            else{
                $result2 = StatsDAO::countPerRoomType();
            }
            return compact("result", "result2");
        }
    }