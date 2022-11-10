<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Hps VR</title>
 <?php include 'include/links.php';?>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
     <?php include 'include/header.php';?>
      <?php include 'include/sidebar.php';?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
      
          <div class="row">
            <div class="col-12">
              <div class="card2">
               
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                      <thead>
                      <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        
                      </tr>
                      </thead>
                          <tbody>

                      <tr>
                       <td>1</td>
                       
                        <td class="text-truncate">
                        
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-8.png" alt="user" data-toggle="tooltip" title=""
                                data-original-title="Wildan Ahdian"></li>
                           
                           User 1
                        </td>
                        <td class="align-middle">
                          User1@gmail.com
                        </td>
                        <td>03451234567</td>
                        <td>Address 1</td>
                       
                       
                      </tr>
                      <tr>
                       <td>2</td>
                       
                        <td class="text-truncate">
                        
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-8.png" alt="user" data-toggle="tooltip" title=""
                                data-original-title="Wildan Ahdian"></li>
                           
                           User 2
                        </td>
                        <td class="align-middle">
                          User2@gmail.com
                        </td>
                        <td>03451234567</td>
                        <td>Address 2</td>
                       
                       
                      </tr>
                     <tr>
                       <td>3</td>
                       
                         <td class="text-truncate">
                        
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-8.png" alt="user" data-toggle="tooltip" title=""
                                data-original-title="Wildan Ahdian"></li>
                           
                           User 3
                        </td>
                        <td class="align-middle">
                          User3@gmail.com
                        </td>
                        <td>03451234567</td>
                        <td>Address 3</td>
                       
                       
                      </tr>
                      <tr>
                       <td>4</td>
                       
                         <td class="text-truncate">
                        
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-8.png" alt="user" data-toggle="tooltip" title=""
                                data-original-title="Wildan Ahdian"></li>
                           
                           User 4
                        </td>
                        <td class="align-middle">
                          User4@gmail.com
                        </td>
                        <td>03451234567</td>
                        <td>Address 4</td>
                       
                       
                      </tr>
                     <tr>
                       <td>5</td>
                       
                         <td class="text-truncate">
                        
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-8.png" alt="user" data-toggle="tooltip" title=""
                                data-original-title="Wildan Ahdian"></li>
                           
                           User 5
                        </td>
                        <td class="align-middle">
                          User5@gmail.com
                        </td>
                        <td>03451234567</td>
                        <td>Address 5</td>
                       
                        
                      </tr>
                      <tr>
                       <td>6</td>
                       
                          <td class="text-truncate">
                        
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-8.png" alt="user" data-toggle="tooltip" title=""
                                data-original-title="Wildan Ahdian"></li>
                           
                           User 6
                        </td>
                        <td class="align-middle">
                          User6@gmail.com
                        </td>
                        <td>03451234567</td>
                        <td>Address 6</td>
                       
                      </tr>
                          </tbody>

                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">Templateshub</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
   <?php include 'include/scripts.php';?>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>