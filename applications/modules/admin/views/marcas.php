<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo Open('form', array('action'=>  base_url('admin/marca/get_crud'),'method'=>'post','class'=>''));                    
//    echo Open('div',array('class'=>'col-md-2'));
        $text_inputs = array(
            '0' => array('type'=>'text','name'=>'marca_name','class'=>'form-control','placeholder'=>'Nombre de la Marca')
        );
        echo get_field_group('Marca:', $text_inputs, $class = 'col-md-4 form-group');
        echo tagcontent('button', 'Buscar', array('type'=>'submit','id'=>'ajaxformbtn','data-target'=>'search_out','class'=>'btn btn-primary'));
//    echo Close('div');    
echo Close('form');

echo tagcontent('div', '', array('id'=>'search_out','class'=>'col-md-12'));