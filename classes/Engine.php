<?php
$engine = new Engine();

class Engine
{
    private $_page_file = null;
    private $_error = null;

    public function __construct() {
        if (isset($_GET["page"])) { //Если открыта какая-нибудь страница
            //Записываем в переменную имя открытого файла (из GET запроса)
            $this->_page_file = $_GET["page"];
            //Небольшая защита
            $this->_page_file = str_replace(".", null, $_GET["page"]);
            $this->_page_file = str_replace("/", null, $_GET["page"]);
            $this->_page_file = str_replace("", null, $_GET["page"]);

            if (!file_exists("templates/default/pages/" . $this->_page_file . ".php")) {
                $this->_setError("Страница не найдена"); //Ошибку на экран
                $this->_page_file = "main"; //Открываем главную страницу
            }
        }
        //Если в GET запросе нет переменной page, то открываем главную
        else $this->_page_file = "main";
    }

    public function heading(){
        $pageName = null;
        $pageName .= '<span class="spanHead"><</span>Web Portfolio<span class="spanHead">></span>';
        $pageName .= '<br>';
        $pageName .= '<span class="spanHead2">$';
        if (isset($_GET["page"])){
            $pageName .= '' . $_GET["page"] . ' page</span>';
        }else{
            $pageName .= 'main page</span>';
        }
        echo $pageName;
    }

    private function _setError($error) {
        $this->_error = $error;
    }

    public function getError() {
        return $this->_error;
    }

    public function getContentPage() {
        return  "templates/default/pages/$this->_page_file.php";
    }

    public function getTitle() {
        switch ($this->_page_file) {
            case "main":
                return "WP main";
                break;
            default:
                return "WP";
                break;
        }
    }
}

?>