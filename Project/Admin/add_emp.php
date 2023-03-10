<?php
include_once('header.php');
?>
        <!--  page-wrapper -->
          <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Employee
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <form role="form" method="post">
                                       
                                       <div class="form-group">
                                           <label>Employee Name</label>
                                           <input type="text" name="emp_name" class="form-control" placeholder="Employee Name">
                                       </div>

                                       <div class="form-group">
                                           <label>Mobile No.</label>
                                           <input type="text" name="mob_no" class="form-control" placeholder="Mobile No">
                                       </div>

                                       <div class="form-group">
                                           <label>Email</label>
                                           <input type="email" name="email" class="form-control" placeholder="Email">
                                       </div>

                                       <div class="form-group">
                                           <label>Address</label>
                                           <textarea name="address" class="form-control" placeholder="Address"></textarea>
                                       </div>

                                       <div class="form-group">
                                           <label>User Name</label>
                                           <input type="text" name="username" class="form-control" placeholder="User Name">
                                       </div>

                                       <div class="form-group">
                                           <label>Password</label>
                                           <input type="password" name="password" class="form-control" placeholder="Password">
                                       </div>
                                       
                                       <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                      
                                   </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html>
