</div>
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
    <script src="../controller/result.js"></script>
</div>
</body>
</html>