<?php
echo 'hola administrador';
require_once('controllers/controllerAdministrador.php');
$rs=new controllerAdministrador();
?>
<table>
    <thead>
        <tr>
        <td>id</td>
        <td>cargo</td>
        <td>pass</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $rs=$rs->listarUsuarios();
        foreach($rs as $obj):
        ?>
           <tr>
                <td><?php echo $obj->idUser; ?></td>
                <td><?php echo $obj->cargo; ?></td>
                <td><?php echo $obj->pass; ?></td>
           </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>