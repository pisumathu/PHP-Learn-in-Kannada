<style type="text/css">
th { background: silver;}
td { padding: 5px; border: 1px solid silver;}
</style>


<?php
require_once('config.php') ;

//echo 'hello world' ;

$stmt = $db->query("SELECT id, name, mobile FROM users") ;

?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mobile</th>
            <th></th>
        </tr>
    </thead>    

    <tbody>
    

<?php
while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    
    $id = $row['id'] ;
    $name = $row['name'] ;
    $mobile = $row['mobile'] ;

?>

        <tr>
            <td><?php echo $id ; ?></td>
            <td><?php echo $name ; ?></td>
            <td><?php echo $mobile ; ?></td>
            <td>
                <a href="mysql_update_form.php?id=<?php echo $id ; ?>&name=<?php echo $name ; ?>&mobile=<?php echo $mobile ; ?>">Edit</a>
            </td>
        </tr>

<?php

}

?>

    </tbody>
</table>
