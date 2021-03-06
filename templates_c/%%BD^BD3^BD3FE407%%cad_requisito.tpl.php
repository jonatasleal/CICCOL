<?php /* Smarty version 2.6.26, created on 2010-06-03 18:00:09
         compiled from cad_requisito.tpl */ ?>
<script type="text/javascript" charset="ISO-8859-1">
//----------------------------------Grid Requisito---------------------

var lastsel;
jQuery("#list_requisito").jqGrid({
    url: "libs/lib_cad_requisito.php?reference=requisito&action=grid_buscar_requisito",
    width: 530,
    datatype: "xml",
    colNames:['Disciplina', 'Requisito'],
    colModel:[
        {name:'cad_requisito_disciplina',index:'cad_requisito_disciplina', width:160,sortable:false,align:"center"},
        {name:'cad_requisito_requisito',index:'cad_requisito_requisito', width:160,sortable:false,align:"center"},
    ],
    rowNum:10,
    rowList:[10,20,30],
    pager: '#pager_requisito',
    sortname: 'id',
    viewrecords: true,
    sortorder: "desc",
    imgpath: 'themes/steel/images',
    onSelectRow: function(id){
        if(id && id!=lastsel){
            $('#list_requisito').restoreRow(lastsel);
            lastsel=id;
        }
    },
    editurl: "local",
    caption: "Alocar Professor"
});

//-----------------------------------Ação sobre o botão Novo ----------------------------

    $('#bt_add_requisito').click(function(){

       //Reseta o formulário
       $('#form_requisito').each(function(){
	        this.reset();
       });

       //Abre formulário
       $("#cad_adm").show();
    });

//--------------------------------------Ação sobre o botão Editar ----------------------------

    $('#bt_editar_requisito').click(function(){


       //Reseta o formulário
       $('#form_requisito').each(function(){
	        this.reset();
       });

       //Pega o id e armazena em gsr
       var gsr = $("#list_requisito").getGridParam('selrow');
       $("#cad_requisito_id").val(gsr);
       
       if(gsr){

           //Abre formulário
            $("#cad_adm").show();

           //Pega os valores da grid e coloca no formuário
           $("#list_requisito").GridToForm(gsr,"#form_requisito");

       }else{
           alert("Selecione uma linha!");
       }
    });


// ----------------------------------------Ação sobre o botão Apagar----------------------------------------

    $('#bt_apagar_requisito').click(function(){

        //Esconde formulário
        $("#cad_adm").hide();

        //Pega o id e armazena em gsr
        var gsr = $("#list_requisito").getGridParam('selrow');
        var dataString = 'cad_id='+ gsr;
      
        //Envia o id correspondente a linha que será apagada no banco
        if(gsr){
            $.ajax({
                type: "GET",
                url: "libs/lib_cad_requisito.php?reference=requisito&action=apagar_requisito",
                processData: false,
                data: dataString,
                success: function(){

                    $("#list_requisito").trigger("reloadGrid");
               }
            });
        }else{
            alert("Selecione uma linha!");
            }
    });

//-------------------------------------------- Ação sobre o botão OK --------------------------------------
  
           
  $('#bt_ok_requisito').click(function(){

            //Pega os valores do formulário
            var disciplina = $("#cad_requisito_disciplina").val();
            var id_cad = $("#cad_requisito_id").val();

            var requisito = [];

            //Função para pegar os valores do segundo select
            $("#select2 option:selected").each(function() {
                requisito.push($(this).val());
            });


           //Armazena os valores do formulário na variável dataString
            var dataString = 'disciplina=' + disciplina + '&requisito=' + requisito + '&cad_id=' + id_cad ;
         
            //Defique qual action será passada na url
            if (id_cad=="")
                var opcao= 'inserir_requisito';
            else
                var opcao='update_requisito';

            //Envia a variável dataString para a lib que insere no banco de dados
            $.ajax({
                    type: "GET",
                    url: "libs/lib_cad_requisito.php?reference=requisito&action="+ opcao,
                    processData: false,
                    data: dataString,
                    //dataType: "html",
                    success: function(){
                        //alert(msg);
                     $("#cad_adm").hide();
                     $("#list_requisito").trigger("reloadGrid");

                     }
                });

    })

//------------------------------------ Ação sobre o botão Cancelar ----------------------

$('#bt_cancelar_requisito').click(function(){
    //Esconde formulário
    $("#cad_adm").hide();

})


// --------------------------------- Mostra a quantidade de turmas de acordo com a disciplina selecionada

$("#cad_requisito_disciplina").blur(function(){

    //Pega os valores do formulário
    var disciplina = $("#cad_requisito_disciplina").val();


    //Armazena os valores do formulário na variável dataString
    var dataString = 'disciplina=' + disciplina;
            
    $.ajax({
        type: "GET",
        url: "libs/lib_cad_requisito.php?reference=requisito&action=buscar_turma",
        processData: false,
        data: dataString,
        success: function(msg){
            if(msg == 3)
                $("#cad_requisito_turma").html("<option value=3>Turma Única</option>");
            else
                $("#cad_requisito_turma").html("<option value=\"1\">Turma A</option><option value=\"2\">Turma B</option>");
        }
    });
});



$('#add').click(function() {
      return !$('#select1 option:selected').remove().appendTo('#select2');

});

$('#remove').click(function() {
      return !$('#select2 option:selected').remove().appendTo('#select1');
});


</script>


<p class="heading">Requisitos</p>



<!-- Botões-->
<div id="button">
        <ul class="icons ui-widget">

            <!-- Botão Adicionar -->
            <li id="bt_add_requisito"onClick="" class="ui-state-default ui-corner-all" title="Novo">
                <span class="ui-icon ui-icon-plusthick"></span>
                <span>Novo</span>
	    </li>

            <!-- Botão Editar -->
	    <li id="bt_editar_requisito" onClick="" class="ui-state-default ui-corner-all" title="Editar">
	        <span class="ui-icon ui-icon-pencil"></span>
	        <span class="sell_control_name">Editar</span>
	    </li>

            <!-- Botão Apagar -->
	    <li id="bt_apagar_requisito" onClick="" class="ui-state-default ui-corner-all" title="Editar">
	        <span class="ui-icon ui-icon-trash"></span>
	        <span class="sell_control_name">Apagar</span>
	    </li>
	</ul>
</div>

<!-- Formulário para seleção-->
<div id="cad_adm" style="display:none;">
    <form class="dialog-form" id="form_requisito" >
        <fieldset class="ui-widget ui-widget-content ui-corner-all">
		<legend class="ui-widget ui-widget-header ui-corner-all">Cadastrar Requisitos</legend>

                    <label>Disciplina:</label>
                    <select id="cad_requisito_disciplina" name="cad_requisito_disciplina">
                        <option>Selecione</option>
                        <?php unset($this->_sections['cont_disciplina']);
$this->_sections['cont_disciplina']['name'] = 'cont_disciplina';
$this->_sections['cont_disciplina']['loop'] = is_array($_loop=$this->_tpl_vars['disc']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cont_disciplina']['show'] = true;
$this->_sections['cont_disciplina']['max'] = $this->_sections['cont_disciplina']['loop'];
$this->_sections['cont_disciplina']['step'] = 1;
$this->_sections['cont_disciplina']['start'] = $this->_sections['cont_disciplina']['step'] > 0 ? 0 : $this->_sections['cont_disciplina']['loop']-1;
if ($this->_sections['cont_disciplina']['show']) {
    $this->_sections['cont_disciplina']['total'] = $this->_sections['cont_disciplina']['loop'];
    if ($this->_sections['cont_disciplina']['total'] == 0)
        $this->_sections['cont_disciplina']['show'] = false;
} else
    $this->_sections['cont_disciplina']['total'] = 0;
if ($this->_sections['cont_disciplina']['show']):

            for ($this->_sections['cont_disciplina']['index'] = $this->_sections['cont_disciplina']['start'], $this->_sections['cont_disciplina']['iteration'] = 1;
                 $this->_sections['cont_disciplina']['iteration'] <= $this->_sections['cont_disciplina']['total'];
                 $this->_sections['cont_disciplina']['index'] += $this->_sections['cont_disciplina']['step'], $this->_sections['cont_disciplina']['iteration']++):
$this->_sections['cont_disciplina']['rownum'] = $this->_sections['cont_disciplina']['iteration'];
$this->_sections['cont_disciplina']['index_prev'] = $this->_sections['cont_disciplina']['index'] - $this->_sections['cont_disciplina']['step'];
$this->_sections['cont_disciplina']['index_next'] = $this->_sections['cont_disciplina']['index'] + $this->_sections['cont_disciplina']['step'];
$this->_sections['cont_disciplina']['first']      = ($this->_sections['cont_disciplina']['iteration'] == 1);
$this->_sections['cont_disciplina']['last']       = ($this->_sections['cont_disciplina']['iteration'] == $this->_sections['cont_disciplina']['total']);
?>
                        <option><?php echo $this->_tpl_vars['disc'][$this->_sections['cont_disciplina']['index']]['disciplina']; ?>
</option>
                        <?php endfor; endif; ?>
                    </select><br/><br/><br/>

                   
                    <label>Requisito:</label><br/><br/>
                    <center><table width="60%" cellspacing="12">
                        <tr>
                            <td align="center">
                                <select multiple="multiple" id="select1" size="5" name="select1">
                                <?php unset($this->_sections['cont_disciplina']);
$this->_sections['cont_disciplina']['name'] = 'cont_disciplina';
$this->_sections['cont_disciplina']['loop'] = is_array($_loop=$this->_tpl_vars['disc']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cont_disciplina']['show'] = true;
$this->_sections['cont_disciplina']['max'] = $this->_sections['cont_disciplina']['loop'];
$this->_sections['cont_disciplina']['step'] = 1;
$this->_sections['cont_disciplina']['start'] = $this->_sections['cont_disciplina']['step'] > 0 ? 0 : $this->_sections['cont_disciplina']['loop']-1;
if ($this->_sections['cont_disciplina']['show']) {
    $this->_sections['cont_disciplina']['total'] = $this->_sections['cont_disciplina']['loop'];
    if ($this->_sections['cont_disciplina']['total'] == 0)
        $this->_sections['cont_disciplina']['show'] = false;
} else
    $this->_sections['cont_disciplina']['total'] = 0;
if ($this->_sections['cont_disciplina']['show']):

            for ($this->_sections['cont_disciplina']['index'] = $this->_sections['cont_disciplina']['start'], $this->_sections['cont_disciplina']['iteration'] = 1;
                 $this->_sections['cont_disciplina']['iteration'] <= $this->_sections['cont_disciplina']['total'];
                 $this->_sections['cont_disciplina']['index'] += $this->_sections['cont_disciplina']['step'], $this->_sections['cont_disciplina']['iteration']++):
$this->_sections['cont_disciplina']['rownum'] = $this->_sections['cont_disciplina']['iteration'];
$this->_sections['cont_disciplina']['index_prev'] = $this->_sections['cont_disciplina']['index'] - $this->_sections['cont_disciplina']['step'];
$this->_sections['cont_disciplina']['index_next'] = $this->_sections['cont_disciplina']['index'] + $this->_sections['cont_disciplina']['step'];
$this->_sections['cont_disciplina']['first']      = ($this->_sections['cont_disciplina']['iteration'] == 1);
$this->_sections['cont_disciplina']['last']       = ($this->_sections['cont_disciplina']['iteration'] == $this->_sections['cont_disciplina']['total']);
?>
                                <option><?php echo $this->_tpl_vars['disc'][$this->_sections['cont_disciplina']['index']]['disciplina']; ?>
</option>
                                <?php endfor; endif; ?>
                            </select>
                            </td>
                            <td align="center">
                                <select multiple="multiple" id="select2" name="select2" size="5"></select></td>

                        </tr>
                        <tr><td align="center"><a href="#" id="add"><input type="button" value="ADD &gt;&gt;" id="add" title="OK" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"></a></td>

                            <td align="center"><a href="#" id="remove"><input type="button" value="&lt;&lt; SUB" id="remove" title="OK" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"></a></td>
                        </tr>

                    </table></center> 
                    

                    <br/><br/>

                    <input type="text" id="cad_requisito_id" name="cad_requisito_id" style="display:none;">

                    <div id="dialog-form_button"
                        <input type="button" value="OK" id="bt_ok_requisito" title="OK" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
                        <input type="button" value="Cancelar" id="bt_cancelar_requisito" title="Cancelar" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
                    </div>
        </fieldset>
    </form>
  </div>

<!--Exibe a Grid-->
<div id="form"> 
    <table id="list_requisito" class="scroll" cellpadding="0" cellspacing="0"> </table>
    <div id="pager_requisito" class="scroll" style="text-align:center;"></div>
</div>
