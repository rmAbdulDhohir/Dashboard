<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" style="font-size:30px" href="index.html">
    <div class="sidebar-brand-text " >H</div>
    <i class="fab fa-contao fa-md "></i>
    <div class="sidebar-brand-text " >G</div>
    <div class="sidebar-brand-text " >A</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider">
<!-- query menu -->
<?php
$role_id = $this->session->userdata['role_id'];
$queryMenu = "  SELECT `user_menu`.`id`,`menu`
                FROM `user_menu` JOIN `user_access_menu`
                ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                WHERE `user_access_menu`.`role_id` = $role_id
                ORDER BY `user_access_menu`.`menu_id` ASC
             ";

             $menu = $this->db->query($queryMenu)->result_array();
             
?>


<!-- looping -->
<?php foreach($menu as $m) ; { ?>
<div class="sidebar-heading">
    <?= $m['menu']; ?>
</div>

<?php 
$menuID = $m['id'];
$querySubMenu = "   SELECT * 
                    FROM `user_sub_menu` 
                    WHERE `menu_id` = $menuId 
                    AND `is_active` = 1
                ";
$subMenu = $this->db->query($querySubMenu)->result_array();
?>

(25:09)

<?php } ?>



<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    User
</div>

<li class="nav-item">
    <a class="nav-link" href="charts.html">
    <i class="fas fa-fw fa-users-cog"></i>
        <span>My Profile</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->