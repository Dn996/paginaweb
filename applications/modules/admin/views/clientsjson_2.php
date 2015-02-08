<!DOCTYPE html>
<html>
<head>
<title>Bootstrap Table Examples</title>
<link rel="stylesheet" href="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/bootstrap-table.css">
<link rel="stylesheet" href="https://rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css">
<link rel="stylesheet" href="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/examples.css">

<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/jquery.min.js"></script>
<!--<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap/js/bootstrap.min.js"></script>-->
<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/bootstrap-table.js"></script>
<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/extensions/export/bootstrap-table-export.js"></script>
<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/extensions/export/tableExport.js"></script>
<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/extensions/export/jquery.base64.js"></script>
<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/extensions/editable/bootstrap-table-editable.js"></script>
<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/extensions/editable/bootstrap-editable.js"></script>

<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/ga.js"></script>
</head>
<body>

<div class="container">
    <table id="table"
    data-toggle="table"
    data-search="true"
    data-show-refresh="true"
    data-show-toggle="true"
    data-show-columns="true"
    data-show-export="true"
    data-show-pagination-switch="true"
    data-pagination="true"
    data-side-pagination="server"
    data-url="<?php echo base_url('admin/clients/clientsget?offset=10&limit=10') ?>">
    <thead>
<tr>
<th data-field="state" data-checkbox="true"></th>
<th data-field="id" data-sortable="true">ID</th>
<th data-field="producto_id" data-sortable="true" data-editable="true">Item Name</th>
<th data-field="kardex" data-sortable="true" data-editable="true">Item Price</th>
<th data-field="kardex_total">Item Price</th>
<th data-field="costo_prom">Item Price</th>
<th data-field="costo_ult" >Item Price</th>
<th data-field="costo_inventario" >Item Price</th>
</tr>
</thead>
</table>
</div>
</body>
</html>