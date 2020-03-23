<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('assets/img/trapo.jpeg');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo($this->session->userdata('usuario')) ?></p>
          <a href="<?= base_url();?>"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- Formulario Buscar -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.Formulario Buscar -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegación Principal</li>
          <li class="active"><a href="<?= base_url('index.php/C_Principal');?>"><i class="fas fa-home"></i> <span>Principal</span></a></li>
          <!-- Promociones -->
            <li><a href="<?= base_url('index.php/C_Promociones/');?>"><i class="fas fa-home"></i> <span>Promociones</span></a></li>
          <!-- Aqui termina promociones -->
          <!-- Gastos -->
            <li><a href="<?= base_url('index.php/C_Gastos/');?>"><i class="fas fa-home"></i> <span>Gastos</span></a></li>
          <!-- Aqui termina Gastos -->
          <!-- Mesas -->
            <li><a href="<?= base_url('index.php/C_Mesas/');?>"><i class="fas fa-home"></i> <span>Mesas</span></a></li>
          <!-- Aqui termina Mesas -->

            <li><a href="<?= base_url('index.php/C_Pagos/');?>"><i class="fas fa-home"></i> <span>Pagos</span></a></li>
          <!-- Entradas -->
            <li><a href="<?= base_url('index.php/C_Entradas/');?>"><i class="fas fa-home"></i> <span>Entradas</span></a></li>
          <!-- Aqui termina Entradas -->
          <!-- Productos -->
            <li><a href="<?= base_url('index.php/C_Productos/');?>"><i class="fas fa-home"></i> <span>Productos</span></a></li>
          <!-- Aqui termina Productos -->
          <li><a href="<?= base_url('index.php/C_ReportesCuentas/');?>"><i class="fas fa-home"></i> <span>Reporte de Cuentas</span></a></li>

            <!--<li class="header">Etiquetas</li>
            <li><a href="<?php // base_url();?>"><i class="fa fa-circle-o text-red"></i> <span>Importante</span></a></li>
            <li><a href="<?php // base_url();?>"><i class="fa fa-circle-o text-yellow"></i> <span>Precaución</span></a></li>
            <li><a href="<?php // base_url();?>"><i class="fa fa-circle-o text-aqua"></i> <span>Información</span></a></li>-->

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
