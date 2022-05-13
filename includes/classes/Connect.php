<?php

class Connect
{
    public function getConnection():mysqli { //$link = $Connect->getConnection();
        return mysqli_connect(
            'auris.cityhost.com.ua',
            'chf040afbb',
            '3e92f52678',
            'chf040afbb_maindb'
        );
    }

    public function getThemeName():string{
        if(!$link = $this->getConnection()){
            return 'default';
        }else{
            $query = "SELECT `theme_name` FROM `settings`";
            $result = mysqli_query($link, $query);
            if($result) {
                $data = mysqli_fetch_array($result);
                return $data['theme_name'];
            }else return 'default';
       }
    }

    public function getTODOList(int $user_id):string{
        if($link = $this->getConnection()){
            $query = "SELECT * FROM `todo_list`";
            $result = mysqli_query($link, $query);
            $todoList = null;
            if($result) {
                while ($data = mysqli_fetch_array($result)) {
                    $todoList .= '<div class="card">';
                    $todoList .= '<h4>' . $data['todo_name'] . "</h4>";

                    $todo_id = $data['todo_id'];

                    for($item_id = 1; $item_id <= 5; $item_id++){
                        $todoList .= '<span ';

                        if($user_id === 1){
                            $onclick = $data['todo_item_'.$item_id][0] === '&' ? ("onclick=\"changeTick($todo_id, $item_id, 1);\"") : ("onclick=\"changeTick($todo_id, $item_id, 0);\"");
                        }

                        $todoList .= $data['todo_item_'.$item_id][0] === '&' ? ("style=\"color: rgb(0, 200, 83);cursor: pointer;\" $onclick>") : ("style=\"cursor: pointer;\" $onclick>");
                        $todoList .= $data['todo_item_'. $item_id] . '</span><br>';
                    }
                    $todoList .= '</div>';
                }
            } else return '<div class="card"><h4>No results</h4></div>'; //
        }else return '<div class="card"><h4>DB error</h4></div>'; //
        return $todoList;
    }
}