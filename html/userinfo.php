
<div class="user-info">
        <div class="info-container">
          <div class="name" data-toggle="dropdown">Halo, 
          <?php
          echo $_SESSION['Username'] 
          ?>
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
          <div class="btn-group user-helper-dropdown">
            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button"> keyboard_arrow_down </i>
            <ul class="dropdown-menu slideUp">
              <li>
                <a href="profile.html"><i class="material-icons">person</i>Profile</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a>
              </li>
              <li>
                <a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a>
              </li>
              <li>
                <a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="sign-in.php"><i class="material-icons">input</i>Sign Out</a>
              </li>
            </ul>
          </div>
          <div div class="email" data-toggle="dropdown"> <?php echo $_SESSION['emailll']?>
          </div>
        </div>
      </div>