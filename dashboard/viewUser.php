
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo font-italic" href="index.php">Welcome Admin</a>
          <a class="navbar-brand brand-logo-mini" href="index.php">UPF</a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name">Sudin Shrestha</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a href="../controller/logout.php" class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="orders.php">
              <i class="mdi mdi-cart menu-icon"></i>
              <span class="menu-title">View Orders <span class="badge-sm badge-pill badge-primary"><?php 
                               $dataJson = file_get_contents("http://localhost/fitness/api/orders/all");
                               $data = json_decode($dataJson, true);
                                echo count($data); ?></span></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user.php">
              <i class="mdi mdi-account-plus menu-icon"></i>
              <span class="menu-title">Add Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewUser.php">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">View Users <span class="badge-sm badge-pill badge-primary"><?php 
                               $dataJson = file_get_contents("http://localhost/fitness/api/user/view/asc");
                               $data = json_decode($dataJson, true);
                                echo count($data); ?></span></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addProduct.php">
              <i class="mdi mdi-cart-plus menu-icon"></i>
              <span class="menu-title">Add Products</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="editProduct.php">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Edit Products <span class="badge-sm badge-pill badge-primary"><?php 
                               $dataJson = file_get_contents("http://localhost/fitness/api/product/view");
                               $data = json_decode($dataJson, true);
                                echo count($data); ?></span></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">
              <i class="mdi mdi-file-document-box menu-icon"></i>
              <span class="menu-title">Blog</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="editBlog.php">
              <i class="mdi mdi-file-multiple menu-icon"></i>
              <span class="menu-title">Edit Blog <span class="badge-sm badge-pill badge-primary"><?php 
                               $dataJson = file_get_contents("http://localhost/fitness/api/blog/view");
                               $data = json_decode($dataJson, true);
                                echo count($data); ?></span></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="queries.php">
              <i class="mdi mdi-bullhorn menu-icon"></i>
              <span class="menu-title">Queries <span class="badge-sm badge-pill badge-primary"><?php 
                               $dataJson = file_get_contents("http://localhost/fitness/api/queries/all");
                               $data = json_decode($dataJson, true);
                                echo count($data); ?> </span></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="classes.php">
              <i class="mdi mdi-run menu-icon"></i>
              <span class="menu-title">Classes</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="editClass.php">
              <i class="mdi mdi-rename-box menu-icon"></i>
              <span class="menu-title">Edit classes</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="packageQuery.php">
              <i class="mdi mdi-layers menu-icon"></i>
              <span class="menu-title">Package Query</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gymDetails.php">
              <i class="mdi mdi-folder-lock-open menu-icon"></i>
              <span class="menu-title">Gym Details</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="container">
        <div class="card">
          <div class="card-header">
              <strong>User Table</strong> 
              <?php 
                        if(isset($_GET['view']) && $_GET['view']=='desc'){
                          $str_data = file_get_contents("http://localhost/fitness/api/user/view/desc");
                          echo '<a href="../dashboard/viewUser.php" class="float-right btn btn-primary">Sort by Ascending</a>';
                        }else{
                          $str_data = file_get_contents("http://localhost/fitness/api/user/view/asc");
                          echo '<a href="../dashboard/viewUser.php?view=desc" class="float-right btn btn-primary">Sort by Descending</a>';
                        }
                    ?>
          </div>
          <div class="card-body table-responsive-md">
          <?php
            $data = json_decode($str_data, true);
                    
            if(count($data) == 0){
              echo '
              <div class="container">
              <div class="row">
                <div class="col-md-5">
                  <img src="images/nocontent.png" alt="" height="400" width="400">
                </div>
                <div class="col-md-7 display-1">
                   <strong>No User found</strong> 
                </div>
              </div>
              </div>
              ';
            }else{
              echo '<input type="text" class="form-control mb-4 w-100 border border-secondary" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">';

              echo '
              <table class="table table-hover table-bordered" id="userTable">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
              
              
              ';

               foreach($data as $users){
                //  var_dump($users);
                echo '
                <tbody>
                  <tr>
                  <td>'.$users['id'].'</td>
                  <td>'.$users['firstName'].' '.$users['lastName'].'</td>
                  <td>'.$users['address'].'</td>
                  <td>'.$users['phone'].'</td>
                  <td>'.$users['email'].'</td>
                  <td>'.$users['password'].'</td>
                  <td>'.$users['validFrom'].'</td>
                  <td>'.$users['validTo'].'</td>
                  <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal'.$users['id'].'">Edit</button></td>
                  <td><button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#deleteModal'.$users['id'].'">Disable</button></td>
                  </tr>

                  <div class="modal fade" id="editModal'.$users['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <form action="../controller/editUser.php"  method="POST">
                          <p>Email: <input type="text" class="form-control" id="updatedEmail" name="updatedEmail" value="'.$users['email'].'"></p>
                          <p>Password: <input type="text" class="form-control" id="updatedPassword" name="updatedPassword" value="'.$users['password'].'"></p>
                          <p>Valid From: <input type="date" class="form-control" id="updatedValidFrom" name="updatedValidFrom" value="'.$users['validFrom'].'"></p>
                          <p>Valid To: <input type="date" class="form-control" id="updatedValidTo" name="updatedValidTo" value="'.$users['validTo'].'"></p>
                        </div>
                        <div class="modal-footer">
                  
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="hidden" name="edit_id" value="'.$users['id'].'">
                        <button type="submit" class="btn btn-primary" name="updateUser" value="save">Save changes</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                  <div class="modal fade" id="deleteModal'.$users['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Do you want to remove <span class="text-danger"> '.$users['firstName'].' </span>
                      </div>
                      <div class="modal-footer">
                      <form action="../controller/userRemove.php"  method="POST">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="hidden" name="delete_id" value="'.$users['id'].'">
                         <button type="submit" class="btn btn-danger" name="deleteUser" value="delete">Delete User</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

             
                 </tbody>
             
                  ';
                } 
              }
              echo '</table>';
              
               
          ?>
          
            
          </div>
        </div>
        </div>
      
        <!-- partial -->
        </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
  <!-- container-scroller -->

  <script>
    function myFunction() {
      var filter, table, tr, td, i, txtValue;
      filter =  document.getElementById("myInput").value.toUpperCase();

      table = document.getElementById("userTable");
      tr = table.querySelectorAll("tr");
      console.log(tr);
      for (i = 0; i < tr.length; i++) {
        td = tr[i].querySelectorAll("td")[1];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }
</script>

<script>
  $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>



  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
