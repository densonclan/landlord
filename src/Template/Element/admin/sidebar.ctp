<section class="sidebar">

  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
        <img src="<?= Configure::read('FRONT_URL'); ?>/img/admin/avatar5.png" alt="<?= $current_user['name']; ?>" class="img-circle">
    </div>
    <div class="pull-left info">
      <p><?= ucfirst($current_user['name']); ?></p>
      <small><?= $current_user['email']; ?></small>
    </div>
  </div>

  
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu">
    <li class="header">Dashboard Menu</li>

    <!-- USUÁRIOS -->
    <li>
      <a href="<?= Configure::read('ADMIN_URL');?>/users"><i class="fa fa-user"></i> <span>Users</span></a>
    </li>
    <!-- PERFIL(roles) -->
    <li>
      <a href="<?= Configure::read('ADMIN_URL');?>/profile"><i class="fa fa-unlock-alt"></i> <span>Profile</span></a>
    </li>
  </ul><!-- /.sidebar-menu -->
</section><!-- /.sidebar -->