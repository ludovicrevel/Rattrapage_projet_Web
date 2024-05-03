  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="dropdown">
   	<a class="brand-link">
      <h3 class="text-center p-0 m-0"><b>Project Time</b></h3>
    </a>
      
    </div>
    <div class="sidebar pb-4 mb-4">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item dropdown">
            <a href="./" class="nav-link nav-home">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="./index.php?page=login" class="nav-link nav-messagerie">
            <i class="nav-icon fas fa-solid fa-comment"></i>
              <p>
                Messagerie
              </p>
            </a>
          </li>  
          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_project nav-view_project">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
                Projets
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_project" class="nav-link nav-new_project tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Ajouter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=project_list" class="nav-link nav-project_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Liste</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link nav-bell">
              <i class="nav-icon fas fa-solid fa-bell"></i>
              <p>
                Notifications
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  <script>
  	$(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
  		var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      if(s!='')
        page = page+'_'+s;
  		if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
  			if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
  				$('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
  			}
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }
  		}
      $('.nav-link').not('.nav-messagerie').on('click', function() {
          $('.nav-link.nav-messagerie').removeClass('active');
          $('.nav-item.dropdown.menu-open').removeClass('menu-open');
          localStorage.removeItem('activePage');
      });
      $('.nav-link.nav-messagerie').on('click', function() {
          var isActive = $(this).hasClass('active');
          $('.nav-link').removeClass('active');
          $('.nav-item.dropdown').removeClass('menu-open');
          if (!isActive) {
              $(this).addClass('active').closest('.nav-item.dropdown').addClass('menu-open');
              localStorage.setItem('activePage', 'messagerie');
          }
      });
      if (localStorage.getItem('activePage') === 'messagerie') {
          $('.nav-link.nav-messagerie').addClass('active').closest('.nav-item.dropdown').addClass('menu-open');
      } 
  	})
    var notifications = [
        "Aucune nouvelle notification",
        "Aucune nouvelle notification",
        "Nouveau message reçu",
        "Nouvelles actions dans des projets"
    ];
    var notificationIndex = 0;

    function showNextNotification() {
        if (notificationIndex < notifications.length) {
            var notification = notifications[notificationIndex];
            alert(notification);
            notificationIndex++;
        }
    }

    $('.nav-link.nav-bell').on('click', function() {
        showNextNotification();
    });
  </script>