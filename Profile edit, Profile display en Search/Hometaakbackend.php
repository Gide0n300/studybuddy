<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `users` WHERE CONCAT(`user_uid`, `user_sub1`, `user_sub2`, `user_sub3`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `users`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)// reference youtube video
{
    $connect = mysqli_connect("localhost", "root", "", "loginsystem");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}



?>