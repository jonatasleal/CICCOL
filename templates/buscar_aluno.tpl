<script type="text/javascript">
    $(document).ready(function() {
        $("#bt_salvar_editar_senha").click(function() {
           alert("Ainda nao foi implementado!")
        });
    });

</script>

<head>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/jquery.jqGrid.js" type="text/javascript"></script>
    <script src="js/jqModal.js" type="text/javascript"></script>
    <script src="js/jqDnR.js" type="text/javascript"></script>
    <script src="js/ui.datepicker.js" type="text/javascript"></script> 
    <link rel="stylesheet" type="text/css" media="screen" href="themes/ui.datepicker.css" />
</head>

<p class="heading">Buscar Aluno</p>

<div id="form">

    <form >

            <label for="tipo">Buscar por:</label>
            <select size="1">
                <option selected></option>
                <option>Matricula</option>
                <option>Nome</option>
                <option>Disciplina</option>
            </select>
            <input type="button" value="OK"/>


    </form>
</div>





