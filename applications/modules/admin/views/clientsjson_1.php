<?php
$css = array(  
    base_url('resources/bootstrap-table/assets/bootstrap-table/src/bootstrap-table.css'), 
    'https://rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css',
    base_url('resources/bootstrap-table/assets/examples.css'),     
);
echo csslink($css);

$js = array(
    base_url('resources/bootstrap-table/assets/bootstrap-table/src/bootstrap-table.js'),
    base_url('resources/bootstrap-table/assets/bootstrap-table/src/extensions/export/bootstrap-table-export.js'),
    base_url('resources/bootstrap-table/assets/bootstrap-table/src/extensions/export/tableExport.js'),
    base_url('resources/bootstrap-table/assets/bootstrap-table/src/extensions/export/jquery.base64.js'),
    base_url('resources/bootstrap-table/assets/bootstrap-table/src/extensions/editable/bootstrap-table-editable.js'),
    base_url('resources/bootstrap-table/assets/bootstrap-table/src/extensions/editable/bootstrap-editable.js'),
    base_url('resources/bootstrap-table/ga.js'),    
);
echo jsload($js);
?>
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
    data-url="<?php echo base_url('resources/bootstrap-table/data.json') ?>">
    <thead>
<tr>
<th data-field="state" data-checkbox="true"></th>
<th data-field="id" data-sortable="true">ID</th>
<th data-field="name" data-sortable="true" data-editable="true">Item Name</th>
<th data-field="price" data-sortable="true" data-editable="true">Item Price</th>
</tr>
</thead>
</table>
</div>
</body>
</html>