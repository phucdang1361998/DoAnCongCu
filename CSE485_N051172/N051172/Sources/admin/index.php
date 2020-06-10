<?php
// core configuration
include_once "../config/core.php";
 
// check if logged in as admin
include_once "login_checker.php";
 
// set page title
$page_title="Hệ thống quản lý thi trắc nghiệm";
 
// include page header HTML
include 'layout_head.php';
 
?>
<div ng-app="testApp" ng-controller="resultCtl">
    <div class="col-md-12">
    <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" id="mydivheader">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"> <b>Quản lý điểm thi </b> </h4>
                    </div>
                 </div>
            </div>
    </div>
    </div>
    <table bs-table-control="bsTableResultControl"></table>
    <script src="../admin/result/controller/result.js"></script>
</div>
                    


 <?php

 
include 'layout_foot.php';


?>


