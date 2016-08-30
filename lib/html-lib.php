<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function menuButton(){
    echo "<div id='menu-button-0' class='close-menu-button' onclick='close_menu()'><</div>
<div id='menu-button-1' class='open-menu-button' onclick='open_menu()'>></div>";
}

function divOpen($id="fill with id or fill it blank",$class="fill with id or fill it blank", $style="fill with css style or leave it blank"){
   if(empty($id)){
       $id="";
   }else{
       $id="id=\"".$id."\"";
   }
   
   if(empty($class)){
       $class="";
   }else{
       $class="class=\"".$class."\"";
   }
   
   if(empty($style)){
       $style="";
   }else{
       $style="style=\"".$style."\"";
   }
   
   $div = "<div ".$id." ".$class." ".$style.">";

   echo $div;
}

function divClose(){
    echo "</div>";
}
