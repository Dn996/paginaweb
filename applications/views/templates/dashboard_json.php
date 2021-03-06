<?php
/* main_path que se obtiene desde javascript */
echo input(array('type'=>'hidden','id'=>'main_path','value'=>  base_url()));

$css = array(
    base_url('resources/bootstrap-3.2.0/css/bootstrap.min.css'),
    base_url('resources/sb_admin/css/plugins/metisMenu/metisMenu.min.css'),
    base_url('resources/sb_admin/css/sb-admin-2.css'),
    base_url('resources/sb_admin/font-awesome-4.1.0/css/font-awesome.min.css'),    
    base_url('resources/bootstrap-3.2.0/css/bootstrap-theme.css'),
    base_url('resources/js/libs/combobox/css/bootstrap-combobox.css'),    
    base_url('resources/css/datepicker.css'),    
    base_url('resources/js/libs/sco.js/css/sco.message.css'),
    base_url('resources/js/libs/jsPanel-bootstrap/source/jsPanel.css'),
    base_url('resources/js/libs/autosuggest/css/style.css'),
    base_url('resources/css/style.css'),     
);
echo csslink($css);

?>
<link rel="stylesheet" href="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/bootstrap-table.css">
<link rel="stylesheet" href="https://rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css">
<link rel="stylesheet" href="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/examples.css">

<?php
$js = array(
    base_url('resources/bootstrap-table/assets/jquery.min.js'),
    base_url('resources/bootstrap-table/assets/bootstrap/js/bootstrap.min.js'),
    base_url('resources/js/comunes/printThis.js'),
    base_url('resources/js/libs/sco.js/js/sco.valid.js'),
    base_url('resources/js/libs/sco.js/js/sco.modal.js'),
    base_url('resources/js/libs/sco.js/js/sco.message.js'),
    base_url('resources/js/libs/sco.js/js/sco.ajax.js'),
    base_url('resources/js/libs/jform/jquery.form.js'),
    base_url('resources/js/bootstrap-datepicker.js'),
    base_url('resources/js/bootstrap-datepicker.es.js'),
    base_url('resources/js/libs/autosuggest/bootstrap-typeahead.js'),
    base_url('resources/js/libs/autosuggest/hogan-2.0.0.js'),
    base_url('resources/js/libs/jsPanel/source/AC_RunActiveContent.js'),
    base_url('resources/js/libs/jsPanel-bootstrap/source/jquery.jspanel.bs-1.4.0.min.js'),              
    base_url('resources/js/libs/combobox/js/bootstrap-combobox.js'),
    base_url('resources/js/libs/numeric/jquery.numeric.js'),
    base_url('resources/js/libs/combobox/js/bootstrap-combobox.js'),    
    base_url('resources/js/comunes/jquery.blockUI.js'),     
    base_url('resources/js/modules/comunes.js'),
//    base_url('resources/js/modules/ajuste_entrada.js'),
    base_url('resources/sb_admin/js/plugins/metisMenu/metisMenu.min.js'),
    base_url('resources/sb_admin/js/sb-admin-2.js')
);
echo jsload($js);
?>

<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/bootstrap-table.js"></script>
<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/extensions/export/bootstrap-table-export.js"></script>
<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/extensions/export/tableExport.js"></script>
<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/extensions/export/jquery.base64.js"></script>
<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/extensions/editable/bootstrap-table-editable.js"></script>
<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/assets/bootstrap-table/src/extensions/editable/bootstrap-editable.js"></script>

<script src="http://localhost/billingsofv1.01_dev/resources/bootstrap-table/ga.js"></script>

<?php
$res['module_title'] = 'Ventas';
$this->load->view('templates/navigation.php',$res);    

$page_class = '';
if(!empty($slidebar)){
    $page_class = 'page-wrapper';
}

echo Open('body',array('style'=>'padding-top:60px'));    
    echo Open('div', array('id'=>$page_class));
    echo input(array('type'=>'hidden','id'=>'main_path','value'=>  base_url()));
        if(!empty($title_page)){
            echo Open('div', array('class'=>'row'));
                echo tagcontent('div', tagcontent('strong', $title_page, array('class'=>'page-header')), array('class'=>'col-md-12','style'=>'font-size:18px; margin-bottom:25px'));
            echo Close('div'); //cierra div .row
        }

        echo Open('div', array('class'=>'row','id'=>'container-fluid'));
                echo $view;   
        echo Close('div'); //cierra div .row
    echo Close('div'); //cierra page-wrapper
echo Close('div');
?>
<script> 
//     $.load_datepicker();
//     var optprint1 = { debug: false, importCSS: true, printContainer: true, removeInline: false };     
//     var optprint1 = { debug: false, importCSS: true, printContainer: true, loadCSS: main_path+"/css/allstyles.css", removeInline: false };
</script>