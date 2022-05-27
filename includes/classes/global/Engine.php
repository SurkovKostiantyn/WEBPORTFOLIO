<?php
class Engine{
    private string $_page_file;
    private string $title = "WP ";
    private const PAGES_MENU = 'includes/pages/';
    private const PAGES_INDEX = 'includes/index/';
    private $_error = null;

    public function __construct() {
        if (isset($_GET["page"])) {
            $searchArr = array(".","/","");
            $pageName = str_replace($searchArr, null, $_GET["page"]); // получаем, например, CSS HTML PHP

            if (file_exists(self::PAGES_MENU.$pageName.".php")) {  // сначала с папки includes/pages
                $this->_page_file = self::PAGES_MENU.$pageName.".php";
                $this->title .= strtoupper($pageName);
            }
            else if(file_exists(self::PAGES_INDEX.$pageName.".php")){ // потом другие странички с папки includes/index
                $this->_page_file = self::PAGES_INDEX.$pageName.".php";
                $this->title .= strtoupper($pageName);
            }
            else{//если такой странички не существует, то
                $this->_setError(); //Ошибку на экран
                $this->title .= "ERROR";
            }
        }
        //Если в GET запросе нет переменной page, то открываем главную
        else $this->_page_file = "includes/index/main.php";
    }

    private function _setError(): void {
        $this->_error = "Страница не найдена";
    }

    public function getError() {
        return $this->_error;
    }

    public function getContentPage(): string{
        return $this->_page_file;
    }

    public function getTitle(): string{
        return "<title>$this->title</title>";
    }

    public function getMenuList(): string  {
        $files = scandir(self::PAGES_MENU);

        for($i = 0; $i < sizeof($files); $i++) {
            if (str_contains($files[$i], '.php')) {
                $name = str_replace(".php", null, $files[$i]);
                $url = str_replace(".php", null, $_SERVER['REQUEST_URI']);
                $class = 'class="HideAble';
                if(str_contains($url, $name)){
                    $class .= ' active';
                }
                $nav .= '<a ' . $class . '" href="/?page=' . $name . '">' . strtoupper($name) . '</a>';
            }
        }
        return $nav;
    }
}