

<?php session_start(); ?>
<div class="body content">
    <div class="welcome">
        <div class="alert alert-success"><?= $_SESSION['message'] ?></div>
        
        <?php
        $mysqli = new mysqli("localhost", "root", "", "digital");
        //Select queries return a resultset
        $sql = "SELECT name  FROM users";
        $result = $mysqli->query($sql); //$result = mysqli_result object
        //var_dump($result);
        ?>
        <div id='registered'>
        <span>All Subscribed Users:</span>
        <?php
        while($row = $result->fetch_assoc()){ //returns associative array of fetched row
            //echo '<pre>';
            //print_r($row);
            //echo '</pre>';
            echo "<div class='userlist'><span>$row[name]</span><br />";
            
        }
        ?>  
        </div>
    </div>
</div>
