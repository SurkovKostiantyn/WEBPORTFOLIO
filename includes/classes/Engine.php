<?php
class Engine
{
    private string $_page_file;
    private $_error = null;

    public function __construct() {
        if (isset($_GET["page"])) {
            $searchArr = array(".","/","");
            $this->_page_file = str_replace($searchArr, null, $_GET["page"]);

            if (!file_exists("templates/default/pages/" . $this->_page_file . ".php")) {
                $this->_setError(); //Ошибку на экран
                $this->_page_file = "main"; //Открываем главную страницу
            }
        }
        //Если в GET запросе нет переменной page, то открываем главную
        else $this->_page_file = "main";
    }

    public function heading(): void{
        $pageName = null;
        $pageName .= '<span class="spanHead"><</span>Web Portfolio<span class="spanHead">></span><span class="spanHead2"><br>$';
        $pageName .= isset($_GET["page"]) ? '' . $_GET["page"] . ' page</span>' : 'main page</span>';
        echo $pageName;
    }

    private function _setError(){
        $this->_error = "Страница не найдена";
    }

    public function getError() {
        return $this->_error;
    }

    public function getContentPage(): string{
        return  "templates/default/pages/$this->_page_file.php";
    }

    public function getTitle(): string{
        return match ($this->_page_file) {
            'main' => 'WP Main',
            $this->_page_file => 'WP ' . strtoupper($this->_page_file),
            default => 'WP',
        };
    }
}