<?php /* Smarty version 2.6.26, created on 2010-06-16 10:17:32
         compiled from menu_princ_grade.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'menu_princ_grade.tpl', 464, false),)), $this); ?>
<script type="text/javascript" charset="ISO-8859-1">

var lastsel;

jQuery("#list_grade_1").jqGrid({
    url:'libs/lib_grade.php?reference=grade&action=grid_buscar_grade1',
    width:520,
    height:190,
    datatype: "xml",
    colNames:['Ementa', 'VerEmenta','Matéria', 'Disciplina', 'Carga Horária', 'Créditos', 'Pré-Requisito'],
    colModel:[
        {name:'act',index:'act', width:50, sortable:false},
        {name:'visualizar_ementa',index:'visualizar_ementa', width:50,align:"center", hidden:true},
        {name:'materia',index:'materia', width:200,align:"center"},
        {name:'disciplina',index:'disciplina', width:200, align:"center"},
        {name:'carhoraria',index:'carhoraria', width:85,align:"center"},
        {name:'creditos',index:'creditos', width:50, align:"center"},
        {name:'prerequisito',index:'prerequisito', width:300,align:"center"},
    ],
    rowNum:7,
    pager: jQuery('#pager_grade_1'),
    pgbuttons: false,
    pgtext: false,
    pginput:false,
    sortname: '',
    viewrecords: true,
    sortorder: "desc",
    hiddengrid: true,
    shrinkToFit:false,
    scrollOffset: true,
    imgpath: 'themes/steel/images',
    gridComplete: function(){
        var ids = $("#list_grade_1").getDataIDs();
        for(var i=0;i < ids.length;i++){
            var cl = ids[i];
            bv = "<input style='height:22px;width:32px;' type='button' id='bt_ver_ementa' value='Ver' onclick=\"$dialog.dialog('option', 'title', 'Nome da disciplina'); $dialog.dialog('open'); exibe('1'); \"  />";
            $("#list_grade_1").setRowData(ids[i],{act:bv});

         }
    },
    //editurl: 'libs/lib_grade.php?reference=grade&action=grid_buscar_grade1',
    caption: "1º Semestre"

});

jQuery("#list_grade_2").jqGrid({
    url:'libs/lib_grade.php?reference=grade&action=grid_buscar_grade2',
    width:520,
    height:190,
    datatype: "xml",
    colNames:['Ementa', 'VerEmenta','Matéria', 'Disciplina', 'Carga Horária', 'Créditos', 'Pré-Requisito'],
    colModel:[
        {name:'act',index:'act', width:50, sortable:false},
        {name:'visualizar_ementa',index:'visualizar_ementa', width:50,align:"center", hidden:true},
        {name:'materia',index:'materia', width:200,align:"center"},
        {name:'disciplina',index:'disciplina', width:200, align:"center"},
        {name:'carhoraria',index:'carhoraria', width:85,align:"center"},
        {name:'creditos',index:'creditos', width:50, align:"center"},
        {name:'prerequisito',index:'prerequisito', width:300,align:"center"},
    ],
    rowNum:7,
    pager: jQuery('#pager_grade_2'),
    pgbuttons: false,
    pgtext: false,
    pginput:false,
    sortname: '',
    viewrecords: true,
    sortorder: "desc",
    hiddengrid: true,
    shrinkToFit:false,
    scrollOffset: true,
    imgpath: 'themes/steel/images',
    gridComplete: function(){
        var ids = $("#list_grade_2").getDataIDs();
        for(var i=0;i < ids.length;i++){
            var cl = ids[i];
            bv = "<input style='height:22px;width:32px;' type='button' id='bt_ver_ementa' value='Ver' onclick=\"$dialog.dialog('option', 'title', 'Nome da disciplina'); $dialog.dialog('open'); exibe('2'); \"  />";

            $("#list_grade_2").setRowData(ids[i],{act:bv});

         }
    },
    //editurl: 'libs/lib_grade.php?reference=grade&action=grid_buscar_grade1',
    caption: "2º Semestre"

});



jQuery("#list_grade_3").jqGrid({
    url:'libs/lib_grade.php?reference=grade&action=grid_buscar_grade3',
    width:520,
    height:190,
    datatype: "xml",
    colNames:['Ementa', 'VerEmenta','Matéria', 'Disciplina', 'Carga Horária', 'Créditos', 'Pré-Requisito'],
    colModel:[
        {name:'act',index:'act', width:50, sortable:false},
        {name:'visualizar_ementa',index:'visualizar_ementa', width:50,align:"center", hidden:true},
        {name:'materia',index:'materia', width:200,align:"center"},
        {name:'disciplina',index:'disciplina', width:200, align:"center"},
        {name:'carhoraria',index:'carhoraria', width:85,align:"center"},
        {name:'creditos',index:'creditos', width:50, align:"center"},
        {name:'prerequisito',index:'prerequisito', width:300,align:"center"},
    ],
    rowNum:7,
    pager: jQuery('#pager_grade_3'),
    pgbuttons: false,
    pgtext: false,
    pginput:false,
    sortname: '',
    viewrecords: true,
    sortorder: "desc",
    hiddengrid: true,
    shrinkToFit:false,
    scrollOffset: true,
    imgpath: 'themes/steel/images',
    gridComplete: function(){
        var ids = $("#list_grade_3").getDataIDs();
        for(var i=0;i < ids.length;i++){
            var cl = ids[i];
            bv = "<input style='height:22px;width:32px;' type='button' id='bt_ver_ementa' value='Ver' onclick=\"$dialog.dialog('option', 'title', 'Nome da disciplina'); $dialog.dialog('open'); exibe('3'); \"  />";

            $("#list_grade_3").setRowData(ids[i],{act:bv});

         }
    },
    //editurl: 'libs/lib_grade.php?reference=grade&action=grid_buscar_grade1',
    caption: "3º Semestre"

});



jQuery("#list_grade_4").jqGrid({
    url:'libs/lib_grade.php?reference=grade&action=grid_buscar_grade4',
    width:520,
    height:190,
    datatype: "xml",
    colNames:['Ementa', 'VerEmenta','Matéria', 'Disciplina', 'Carga Horária', 'Créditos', 'Pré-Requisito'],
    colModel:[
        {name:'act',index:'act', width:50, sortable:false},
        {name:'visualizar_ementa',index:'visualizar_ementa', width:50,align:"center", hidden:true},
        {name:'materia',index:'materia', width:200,align:"center"},
        {name:'disciplina',index:'disciplina', width:200, align:"center"},
        {name:'carhoraria',index:'carhoraria', width:85,align:"center"},
        {name:'creditos',index:'creditos', width:50, align:"center"},
        {name:'prerequisito',index:'prerequisito', width:300,align:"center"},
    ],
    rowNum:7,
    pager: jQuery('#pager_grade_4'),
    pgbuttons: false,
    pgtext: false,
    pginput:false,
    sortname: '',
    viewrecords: true,
    sortorder: "desc",
    hiddengrid: true,
    shrinkToFit:false,
    scrollOffset: true,
    imgpath: 'themes/steel/images',
    gridComplete: function(){
        var ids = $("#list_grade_4").getDataIDs();
        for(var i=0;i < ids.length;i++){
            var cl = ids[i];
            bv = "<input style='height:22px;width:32px;' type='button' id='bt_ver_ementa' value='Ver' onclick=\"$dialog.dialog('option', 'title', 'Nome da disciplina'); $dialog.dialog('open'); exibe('4'); \"  />";

            $("#list_grade_4").setRowData(ids[i],{act:bv});

         }
    },
    //editurl: 'libs/lib_grade.php?reference=grade&action=grid_buscar_grade1',
    caption: "4º Semestre"

});



jQuery("#list_grade_5").jqGrid({
    url:'libs/lib_grade.php?reference=grade&action=grid_buscar_grade5',
    width:520,
    height:190,
    datatype: "xml",
    colNames:['Ementa', 'VerEmenta','Matéria', 'Disciplina', 'Carga Horária', 'Créditos', 'Pré-Requisito'],
    colModel:[
        {name:'act',index:'act', width:50, sortable:false},
        {name:'visualizar_ementa',index:'visualizar_ementa', width:50,align:"center", hidden:true},
        {name:'materia',index:'materia', width:200,align:"center"},
        {name:'disciplina',index:'disciplina', width:200, align:"center"},
        {name:'carhoraria',index:'carhoraria', width:85,align:"center"},
        {name:'creditos',index:'creditos', width:50, align:"center"},
        {name:'prerequisito',index:'prerequisito', width:300,align:"center"},
    ],
    rowNum:7,
    pager: jQuery('#pager_grade_5'),
    pgbuttons: false,
    pgtext: false,
    pginput:false,
    sortname: '',
    viewrecords: true,
    sortorder: "desc",
    hiddengrid: true,
    shrinkToFit:false,
    scrollOffset: true,
    imgpath: 'themes/steel/images',
    gridComplete: function(){
        var ids = $("#list_grade_5").getDataIDs();
        for(var i=0;i < ids.length;i++){
            var cl = ids[i];
            bv = "<input style='height:22px;width:32px;' type='button' id='bt_ver_ementa' value='Ver' onclick=\"$dialog.dialog('option', 'title', 'Nome da disciplina'); $dialog.dialog('open'); exibe('5'); \"  />";

            $("#list_grade_5").setRowData(ids[i],{act:bv});

         }
    },
    //editurl: 'libs/lib_grade.php?reference=grade&action=grid_buscar_grade1',
    caption: "5º Semestre"

});



jQuery("#list_grade_6").jqGrid({
    url:'libs/lib_grade.php?reference=grade&action=grid_buscar_grade6',
    width:520,
    height:190,
    datatype: "xml",
    colNames:['Ementa', 'VerEmenta','Matéria', 'Disciplina', 'Carga Horária', 'Créditos', 'Pré-Requisito'],
    colModel:[
        {name:'act',index:'act', width:50, sortable:false},
        {name:'visualizar_ementa',index:'visualizar_ementa', width:50,align:"center", hidden:true},
        {name:'materia',index:'materia', width:200,align:"center"},
        {name:'disciplina',index:'disciplina', width:200, align:"center"},
        {name:'carhoraria',index:'carhoraria', width:85,align:"center"},
        {name:'creditos',index:'creditos', width:50, align:"center"},
        {name:'prerequisito',index:'prerequisito', width:300,align:"center"},
    ],
    rowNum:7,
    pager: jQuery('#pager_grade_6'),
    pgbuttons: false,
    pgtext: false,
    pginput:false,
    sortname: '',
    viewrecords: true,
    sortorder: "desc",
    hiddengrid: true,
    shrinkToFit:false,
    scrollOffset: true,
    imgpath: 'themes/steel/images',
    gridComplete: function(){
        var ids = $("#list_grade_6").getDataIDs();
        for(var i=0;i < ids.length;i++){
            var cl = ids[i];
            bv = "<input style='height:22px;width:32px;' type='button' id='bt_ver_ementa' value='Ver' onclick=\"$dialog.dialog('option', 'title', 'Nome da disciplina'); $dialog.dialog('open'); exibe('6'); \"  />";

            $("#list_grade_6").setRowData(ids[i],{act:bv});

         }
    },
    //editurl: 'libs/lib_grade.php?reference=grade&action=grid_buscar_grade1',
    caption: "6º Semestre"

});



jQuery("#list_grade_7").jqGrid({
    url:'libs/lib_grade.php?reference=grade&action=grid_buscar_grade7',
    width:520,
    height:190,
    datatype: "xml",
    colNames:['Ementa', 'VerEmenta','Matéria', 'Disciplina', 'Carga Horária', 'Créditos', 'Pré-Requisito'],
    colModel:[
        {name:'act',index:'act', width:50, sortable:false},
        {name:'visualizar_ementa',index:'visualizar_ementa', width:50,align:"center", hidden:true},
        {name:'materia',index:'materia', width:200,align:"center"},
        {name:'disciplina',index:'disciplina', width:200, align:"center"},
        {name:'carhoraria',index:'carhoraria', width:85,align:"center"},
        {name:'creditos',index:'creditos', width:50, align:"center"},
        {name:'prerequisito',index:'prerequisito', width:300,align:"center"},
    ],
    rowNum:7,
    pager: jQuery('#pager_grade_7'),
    pgbuttons: false,
    pgtext: false,
    pginput:false,
    sortname: '',
    viewrecords: true,
    sortorder: "desc",
    hiddengrid: true,
    shrinkToFit:false,
    scrollOffset: true,
    imgpath: 'themes/steel/images',
    gridComplete: function(){
        var ids = $("#list_grade_7").getDataIDs();
        for(var i=0;i < ids.length;i++){
            var cl = ids[i];
            bv = "<input style='height:22px;width:32px;' type='button' id='bt_ver_ementa' value='Ver' onclick=\"$dialog.dialog('option', 'title', 'Nome da disciplina'); $dialog.dialog('open'); exibe('7'); \"  />";

            $("#list_grade_7").setRowData(ids[i],{act:bv});

         }
    },
    //editurl: 'libs/lib_grade.php?reference=grade&action=grid_buscar_grade1',
    caption: "7º Semestre"

});


jQuery("#list_grade_8").jqGrid({
    url:'libs/lib_grade.php?reference=grade&action=grid_buscar_grade8',
    width:520,
    height:190,
    datatype: "xml",
    colNames:['Ementa', 'VerEmenta','Matéria', 'Disciplina', 'Carga Horária', 'Créditos', 'Pré-Requisito'],
    colModel:[
        {name:'act',index:'act', width:50, sortable:false},
        {name:'visualizar_ementa',index:'visualizar_ementa', width:50,align:"center", hidden:true},
        {name:'materia',index:'materia', width:200,align:"center"},
        {name:'disciplina',index:'disciplina', width:200, align:"center"},
        {name:'carhoraria',index:'carhoraria', width:85,align:"center"},
        {name:'creditos',index:'creditos', width:50, align:"center"},
        {name:'prerequisito',index:'prerequisito', width:300,align:"center"},
    ],
    rowNum:7,
    pager: jQuery('#pager_grade_8'),
    pgbuttons: false,
    pgtext: false,
    pginput:false,
    sortname: '',
    viewrecords: true,
    sortorder: "desc",
    hiddengrid: true,
    shrinkToFit:false,
    scrollOffset: true,
    imgpath: 'themes/steel/images',
    gridComplete: function(){
        var ids = $("#list_grade_8").getDataIDs();
        for(var i=0;i < ids.length;i++){
            var cl = ids[i];
            bv = "<input style='height:22px;width:32px;' type='button' id='bt_ver_ementa' value='Ver' onclick=\"$dialog.dialog('option', 'title', 'Nome da disciplina'); $dialog.dialog('open'); exibe('8'); \"  />";

            $("#list_grade_8").setRowData(ids[i],{act:bv});

         }
    },
    //editurl: 'libs/lib_grade.php?reference=grade&action=grid_buscar_grade1',
    caption: "8º Semestre"

});

jQuery("#list_grade_optativa").jqGrid({
    url:'libs/lib_grade.php?reference=grade&action=grid_buscar_grade_optativa',
    width:520,
    height:190,
    datatype: "xml",
    colNames:['Ementa', 'VerEmenta','Matéria', 'Disciplina', 'Carga Horária', 'Créditos', 'Pré-Requisito'],
    colModel:[
        {name:'act',index:'act', width:50, sortable:false},
        {name:'visualizar_ementa',index:'visualizar_ementa', width:50,align:"center", hidden:true},
        {name:'materia',index:'materia', width:200,align:"center"},
        {name:'disciplina',index:'disciplina', width:200, align:"center"},
        {name:'carhoraria',index:'carhoraria', width:85,align:"center"},
        {name:'creditos',index:'creditos', width:50, align:"center"},
        {name:'prerequisito',index:'prerequisito', width:300,align:"center"},
    ],
    rowNum:7,
    pager: jQuery('#pager_grade_optativa'),
    pgbuttons: false,
    pgtext: false,
    pginput:false,
    sortname: '',
    viewrecords: true,
    sortorder: "desc",
    hiddengrid: true,
    shrinkToFit:false,
    scrollOffset: true,
    imgpath: 'themes/steel/images',
    gridComplete: function(){
        var ids = $("#list_grade_optativa").getDataIDs();
        for(var i=0;i < ids.length;i++){
            var cl = ids[i];
            bv = "<input style='height:22px;width:32px;' type='button' id='bt_ver_ementa' value='Ver' onclick=\"$dialog.dialog('option', 'title', 'Nome da disciplina'); $dialog.dialog('open'); exibe('optativa'); \"  />";

            $("#list_grade_optativa").setRowData(ids[i],{act:bv});

         }
    },
    //editurl: 'libs/lib_grade.php?reference=grade&action=grid_buscar_grade1',
    caption: "Disciplinas Optativas"

});


//-------------------------------------------- Ação sobre o botão OK --------------------------------------

  $('#bt_ok_busca_grade').click(function(){

            //Pega os valores do formulário
            id_grade = $("#buscar_id_grade").val();
            //alert(id_grade);

            //Armazena os valores do formulário na variável dataString
            var dataString = 'id_grade=' + id_grade;

            var opcao= 'grid_buscar_grade1';

            //Envia a variável dataString para a lib que insere no banco de dados
            $.ajax({
                    type: "GET",
                    url: "libs/lib_grade.php?reference=grade&action="+ opcao,
                    processData: false,
                    data: dataString,
                    //dataType: "html",
                    success: function(){
                     //$("#cad_adm").hide();
                        $("#list_grade_1").trigger("reloadGrid");
                    }
                });

    })


 // -------------------------------------ABRE FORMULÁRIO PARA CADASTRO E EDIÇÃO--------------------------
   var $dialog = $('#form_ver_ementa').dialog({
        width:350,
        height:260,
        modal: true,
        autoOpen: false

    });

// -------------------------------------EXIBIR A EMENTA DA DISCIPLINA--------------------------

function exibe(num_semestre)
{
    var id = $("#list_grade_"+num_semestre).getGridParam('selrow');

    if(id)
    {
            $("#bt_ver_ementa").click(function(){
                $("#list_grade_"+num_semestre).GridToForm(id,"#form_ver_ementa");
            })

    }
    else
        alert("Selecione uma linha!");


}


</script>


<p class="heading">Grade Curricular</p>


<div id="form">

     <label for="tipo">Buscar por:</label>
     <select size="1" id="buscar_id_grade" name="buscar_id_grade">
                <option selected></option>
                <?php unset($this->_sections['cont_grade']);
$this->_sections['cont_grade']['name'] = 'cont_grade';
$this->_sections['cont_grade']['loop'] = is_array($_loop=$this->_tpl_vars['grade']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cont_grade']['show'] = true;
$this->_sections['cont_grade']['max'] = $this->_sections['cont_grade']['loop'];
$this->_sections['cont_grade']['step'] = 1;
$this->_sections['cont_grade']['start'] = $this->_sections['cont_grade']['step'] > 0 ? 0 : $this->_sections['cont_grade']['loop']-1;
if ($this->_sections['cont_grade']['show']) {
    $this->_sections['cont_grade']['total'] = $this->_sections['cont_grade']['loop'];
    if ($this->_sections['cont_grade']['total'] == 0)
        $this->_sections['cont_grade']['show'] = false;
} else
    $this->_sections['cont_grade']['total'] = 0;
if ($this->_sections['cont_grade']['show']):

            for ($this->_sections['cont_grade']['index'] = $this->_sections['cont_grade']['start'], $this->_sections['cont_grade']['iteration'] = 1;
                 $this->_sections['cont_grade']['iteration'] <= $this->_sections['cont_grade']['total'];
                 $this->_sections['cont_grade']['index'] += $this->_sections['cont_grade']['step'], $this->_sections['cont_grade']['iteration']++):
$this->_sections['cont_grade']['rownum'] = $this->_sections['cont_grade']['iteration'];
$this->_sections['cont_grade']['index_prev'] = $this->_sections['cont_grade']['index'] - $this->_sections['cont_grade']['step'];
$this->_sections['cont_grade']['index_next'] = $this->_sections['cont_grade']['index'] + $this->_sections['cont_grade']['step'];
$this->_sections['cont_grade']['first']      = ($this->_sections['cont_grade']['iteration'] == 1);
$this->_sections['cont_grade']['last']       = ($this->_sections['cont_grade']['iteration'] == $this->_sections['cont_grade']['total']);
?>
                <option><?php echo ((is_array($_tmp='Grade ')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['grade'][$this->_sections['cont_grade']['index']]['id_grade']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['grade'][$this->_sections['cont_grade']['index']]['id_grade'])); ?>
</option>
           <?php endfor; endif; ?>
     </select>
     <input type="button" id="bt_ok_busca_grade" value="OK" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"/>

</div>

<div id="form">
    <table id="list_grade_1" class="scroll" cellpadding="0" cellspacing="0"> </table>
    <div id="pager_grade_1" class="scroll" style="text-align:center;"></div>
</div>

<div id="form">
    <table id="list_grade_2" class="scroll" cellpadding="0" cellspacing="0"> </table>
    <div id="pager_grade_2" class="scroll" style="text-align:center;"></div>
</div>

<div id="form">
    <table id="list_grade_3" class="scroll" cellpadding="0" cellspacing="0"> </table>
    <div id="pager_grade_3" class="scroll" style="text-align:center;"></div>
</div>

<div id="form">
    <table id="list_grade_4" class="scroll" cellpadding="0" cellspacing="0"> </table>
    <div id="pager_grade_4" class="scroll" style="text-align:center;"></div>
</div>

<div id="form">
    <table id="list_grade_5" class="scroll" cellpadding="0" cellspacing="0"> </table>
    <div id="pager_grade_5" class="scroll" style="text-align:center;"></div>
</div>

<div id="form">
    <table id="list_grade_6" class="scroll" cellpadding="0" cellspacing="0"> </table>
    <div id="pager_grade_6" class="scroll" style="text-align:center;"></div>
</div>

<div id="form">
    <table id="list_grade_7" class="scroll" cellpadding="0" cellspacing="0"> </table>
    <div id="pager_grade_7" class="scroll" style="text-align:center;"></div>
</div>

<div id="form">
    <table id="list_grade_optativa" class="scroll" cellpadding="0" cellspacing="0"> </table>
    <div id="pager_grade_optativa" class="scroll" style="text-align:center;"></div>
</div>

<!-- Formulário de cadastro e edição-->
 <form class="dialog-form" id="form_ver_ementa" style="display:none; background-color: white;">
        <textarea name="visualizar_ementa" cols="28" rows="10" class="text ui-widget-content ui-corner-all aux"></textarea>

 </form>





