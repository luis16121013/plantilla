<?php
echo 'hola administrador';
require_once('controllers/controllerAdministrador.php');
$rs=new controllerAdministrador();
?>
<table>
    <thead>
        <tr>
        <td>dni</td>
        <td>active</td>
        <td>user</td>

        </tr>
    </thead>
    <tbody>
        <?php
        $rs=$rs->listarUsuarios();
        foreach($rs as $obj):
        ?>
           <tr>
                <td><?php echo $obj->dni; ?></td>
                <td><?php echo $obj->is_active; ?></td>
                <td><?php echo $obj->is_user; ?></td>
           </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>