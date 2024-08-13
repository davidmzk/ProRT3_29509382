<section class="bg-primary-subtle">

<div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-lg" style="max-width: 400px; border-radius: 15px;">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Iniciar Sesion</h2>

                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg')?>
                    </div>
                <?php endif;?>

                <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" >Correo Electrónico</label>
                        <input name="email" type="email" class="form-control border-1 shadow-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text" style="color: #ff69b4;">Nunca compartiremos su correo electrónico con nadie más.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input name="pass" type="password" class="form-control border-1 shadow-sm" id="exampleInputPassword1">
                    </div>
                    
                    <button type="submit" value="Ingresar" id="boton_login" class="btn btn-primary w-100 shadow-sm"  style="background-color: #ff69b4; border-color: #ff69b4;">Ingresar</button>


<a href="<?php echo base_url('login');?>" class="btn btn-danger">Cancelar</a>
<br><span>¿Aùn no se registro? <a href="<?php echo base_url('/registro');?>">
    Registrese Aquì</a></span>
    

                </form>
            </div>
        </div>
    </div>
    </section>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>