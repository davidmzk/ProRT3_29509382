 <br><br>
        <?php if(session()->perfil_id == 1): ?> 
        <div>
            <img class="center" height="100px" width="100px" src="<?php echo base_url(' assets/img/admin.png'); ?>">
            <h1>INICIASTE SESION COMO usuario</h1>
            <img class="center" height="100px" width="100px" src="<?php echo base_url('assets/img/cliente.png'); ?>">
            <h1>INICIASTE SESION COMO ADMIN</h1>

        </div>

        <?php elseif(session()->perfil_id == 2 ):?> 

        <div>
            <img class="center" height="100px" width="100px" src="<?php echo base_url(' assets/img/cliente.png'); ?>">
            <h1>INICIASTE SESION COMO admin</h1>
            <img class="center" height="100px" width="100px" src="<?php echo base_url('assets/img/admin.jpg'); ?>">
           <h1>INICIASTE SESION COMO USUARIO</h1>
        </div>

            <?php endif; ?>