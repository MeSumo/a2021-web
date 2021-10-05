<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/AnswerDAO.php");

    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $answers = AnswerDAO::getAnswers();

            if(!empty($_POST["reponse"]) && !empty($_POST["author"])){
                AnswerDAO::addAnswer($_POST["author"], $_POST["reponse"]);
                header("location:index.php");
                exit;
            }
            return compact("answers");
        }
    }