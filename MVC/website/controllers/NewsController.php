<?php
include_once  ROOT.'models/News.php';
class NewsController{
    
    public function actionIndex(){
        // echo 'List news today';
        return true;
        
    }
    public function actionView($category,$id){
        // echo 'Detail new';
        echo '<h3>'.$category.'</h3>';
        echo '<h3>'.$id.'</h3>';

        return true;
    }
}