<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <script language="javascript">
        function verificaNumero(){
            document.getElementById("resposta").innetHTML = document.getElementById("entrada").value;
        }
    </script>
</head>
<body>

    <div>Testando PHP</div>

    <div>Primeira página de teste PHP</div>

    <label>Digite um número:</label>
    <input id="entrada" type="text" />
    <br><br>
    <input type="button" value="teste" onlick="verificaNumero();"/>

    <div id="resposta"></div>

</body>
</html>