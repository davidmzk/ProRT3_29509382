</tr>
            </thead>
        <tbody>
            
        <?php if(!empty($usuarios)): ?>
            <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo $usuario['perfil_id'] ?></td>
@@ -28,13 +28,18 @@
                    <td><?php echo $usuario['apellido'] ?></td>
                    <td>
                     <a href="<?= base_url('usuario/edit/'.$usuario['id_usuario']); ?>" class="btn btn-warning btn-sm">Editar</a>
                     <a href="<?= base_url('usuario/delete/'.$usuario['id_usuario']); ?>" class="btn btn-danger btn-sm">Borrar</a>
                     <a href="<?= base_url('panel/eliminar/'.$usuario['id_usuario']); ?>" class="btn btn-danger btn-sm">Borrar</a>
                    </td>



                </tr>
            <?php endforeach; ?>
            <?php else: ?>
            <tr>
                <td colspan="5">No hay usuarios logueados.</td>
</tr>
        <?php endif; ?>

        </tbody>
        </table>