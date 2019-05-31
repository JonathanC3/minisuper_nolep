<?php
    include_once 'public/header.php';
?>

<table>
    <tr>
        <th>ID</th>
        <th>Item</th>
    </tr>
    
    <?php
        foreach ($vars['listado'] as $item){
    ?>
    <tr>
        <center>
            <td><?php echo $item[0] ?></td>
            <td><?php echo $item[1] ?></td>
        </center>   
    </tr>
    <?php
        }
    ?>
</table>

<?php
    include_once 'public/footer.php';
?>