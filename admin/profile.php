<?php 
    include_once('include/pages.php');
    $prof = "active";
?>
<?php include('include/mainbar.php');?>
<div class="main">
   <div class="main-content">
      <div class="container-fluid">
         <h3 class="page-title">Profile Page</h3>
         <div class="row">
               <div class="col-md-3">
                  <ul class="nav nav-pills nav-stacked admin-menu" >
                     <li class="active"><a href="" data-target-id="profile"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
                     <li><a href="" data-target-id="change-password"><i class="glyphicon glyphicon-lock"></i> Change Password</a></li>
                     <li><a href="" data-target-id="settings"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
                     <li><a href="" data-target-id="logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                  </ul>
               </div>
               <div class="col-md-9  admin-content" id="profile">
                  <div class="panel panel-info" style="margin: 1em;">
                     <div class="panel-heading">
                        <h3 class="panel-title">Name</h3>
                     </div>
                     <div class="panel-body">
                        AIFL ADMIN
                     </div>
                  </div>
                  <div class="panel panel-info" style="margin: 1em;">
                     <div class="panel-heading">
                        <h3 class="panel-title">Email</h3>
                     </div>
                     <div class="panel-body">
                        admin@aifl.com
                     </div>
                  </div>
                  <div class="panel panel-info" style="margin: 1em;">
                     <div class="panel-heading">
                        <h3 class="panel-title">Last Password Change</h3>
                     </div>
                     <div class="panel-body">
                        4 days Ago
                     </div>
                  </div>
               </div>
               <div class="col-md-9  admin-content" id="settings">
                  <div class="panel panel-info" style="margin: 1em;">
                     <div class="panel-heading">
                        <h3 class="panel-title">Notification</h3>
                     </div>
                     <div class="panel-body">
                        <div class="label label-success">allowed</div>
                     </div>
                  </div>
                  <div class="panel panel-info" style="margin: 1em;">
                     <div class="panel-heading">
                        <h3 class="panel-title">Newsletter</h3>
                     </div>
                     <div class="panel-body">
                        <div class="badge">Monthly</div>
                     </div>
                  </div>
                  <div class="panel panel-info" style="margin: 1em;">
                     <div class="panel-heading">
                        <h3 class="panel-title">Admin</h3>
                     </div>
                     <div class="panel-body">
                        <div class="label label-success">yes</div>
                     </div>
                  </div>
               </div>
               <div class="col-md-9  admin-content" id="change-password">
                  <form action="#password" method="post">
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                           <h3 class="panel-title"><label for="new_password" class="control-label panel-title">Old Password</label></h3>
                        </div>
                        <div class="panel-body">
                           <div class="form-group">
                              <div class="col-sm-10">
                                 <input type="password" class="form-control" name="password" id="new_password" >
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                           <h3 class="panel-title"><label for="new_password" class="control-label panel-title">New Password</label></h3>
                        </div>
                        <div class="panel-body">
                           <div class="form-group">
                              <div class="col-sm-10">
                                 <input type="password" class="form-control" name="password" id="new_password" >
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                           <h3 class="panel-title"><label for="confirm_password" class="control-label panel-title">Confirm password</label></h3>
                        </div>
                        <div class="panel-body">
                           <div class="form-group">
                              <div class="col-sm-10">
                                 <input type="password" class="form-control" name="password_confirmation" id="confirm_password" >
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-info border" style="margin: 1em;">
                        <div class="panel-body">
                           <div class="form-group">
                              <div class="pull-left">
                                 <input type="submit" class="form-control btn btn-primary" name="submit" id="submit">
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-9  admin-content" id="settings"></div>
               <div class="col-md-9  admin-content" id="logout">
                  <div class="panel panel-info" style="margin: 1em;">
                     <div class="panel-heading">
                        <h3 class="panel-title">Confirm Logout</h3>
                     </div>
                     <div class="panel-body">
                        Do you really want to logout ?  
                        <a  href="#" class="btn btn-danger"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        <span >   Yes   </span>
                        </a>    
                        <a href="#account" class="btn btn-success"> <span >  No   </span></a>
                     </div>
                     <form id="logout-form" action="#" method="POST" style="display: none;">
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
<?php include('include/end.php');?>
<script src="assets/gal/user.js"></script>