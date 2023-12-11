<?php




function connect(){
    return new mysqli("localhost","root","","web");
}
/*
create
*/
function create($sql){
    connect()->query($sql);
}
function update($sql){
    return connect()->query($sql);
}
?>