<!DOCTYPE html>
<html>
<head>
    <title>Load pagination data</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/bootstrap-table.css">
    <link rel="stylesheet" href="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/examples.css">
    
<!--    <script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/jquery.min.js"></script>
    <script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/bootstrap-table.js"></script>
    <script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/ga.js"></script>-->
    
<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/jquery.min.js"></script>
<!--<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap/js/bootstrap.min.js"></script>-->
<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/bootstrap-table.js"></script>
<!--<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/extensions/export/bootstrap-table-export.js"></script>
<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/extensions/export/tableExport.js"></script>
<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/extensions/export/jquery.base64.js"></script>
<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/extensions/editable/bootstrap-table-editable.js"></script>
<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/extensions/editable/bootstrap-editable.js"></script>-->
<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/ga.js"></script>
</head>
<body>
    <div class="container">
        <div class="ribbon">
            <a href="https://github.com/wenzhixin/bootstrap-table-examples/blob/master/431.html" target="_blank">View Source on GitHub</a>
        </div>
        <h1>Load pagination data(<a href="https://github.com/wenzhixin/bootstrap-table/issues/431" target="_blank">#431</a>).</h1>
        <table id="table"
               data-toggle="table"
               data-pagination="true"
               data-side-pagination="server">
            <thead>
            <tr>
                <th data-field="id">ID</th>
                <th data-field="producto_id">Item Name</th>
                <th data-field="kardex">Item Price</th>
            </tr>
            </thead>
        </table>
    </div>
<script>
    var $table = $('#table');
    $(function () {
        $table.on('page-change.bs.table', function (e, number, size) {
            getData(number, size);
        });
        var options = $table.bootstrapTable('getOptions');
        getData(options.pageNumber, options.pageSize);
    });
    function getData(number, size) {
        $.get('http://localhost/billingsofv1.01_dev/admin/clients/clientsget', {
            offset: (number - 1) * size,
            limit: size
        }, function (res) {
            $table.bootstrapTable('load', res);
        });
    }
</script>
</body>
</html>
