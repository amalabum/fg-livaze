
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile border-bottom">
          <a href="#" class="nav-link flex-column">
            <div class="nav-profile-image">
              <img src="Views/admin/mydash/logo/writer.png" alt="profile" />
              <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
              <span class="font-weight-semibold mb-1 mt-2 text-center">Admin</span>
              <span class="text-secondary icon-sm text-center"></span>
            </div>
          </a>
        </li>
        <li class="nav-item pt-3">
          <a class="nav-link d-block" href="dash_index" style="text-align:center;">
            <img src="Views/admin/mydash/logo/lms.png" alt="profile" width="90px" />        

          </a>
          <!-- <form class="d-flex align-items-center" action="#">
            <div class="input-group">
              <div class="input-group-prepend">
                <i class="input-group-text border-0 mdi mdi-magnify"></i>
              </div>
              <input type="text" class="form-control border-0" placeholder="Search" />
            </div>
          </form> -->
        </li>
        <li class="pt-2 pb-1">

        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard">
            <i class="mdi mdi-compass-outline menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            <span class="menu-title">Bibliotheque</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="new-lib">Ajouter un livre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin-librairie">tous les livres</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="categories">categories</a>
              </li>

            </ul>
          </div>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="abonements">
            <i class="mdi mdi-account-circle menu-icon"></i>
            <span class="menu-title">Tous Nos abonn??s</span>
          </a>
        </li>
        <li class="nav-item">
          
          <a class="nav-link" href="">
            <i class="mdi mdi-lock menu-icon"></i>
            <form action="" method="post">
            <button name="deconnexion" class="menu-title btn col-12 text-left" style="padding-left:0;">Deconnexion</button>
            </form>
          </a>
        </li>


      </ul>
    </nav>