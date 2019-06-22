<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>
        <div id="nome"></div>
        <div id="mensagem"></div>

        <script src="jquery.js"></script>
        <script>
            $.ajax({
                url:'nome.php'
            }).done(function (valor) {
                $("#nome").html(valor);
            }).fail(function() {
                $("#nome").html("Mensagem de erro");
            }).always(function() {
                $("#mensagem").html("Mensagem de alguma coisa");
            })
            

        </script>
    </body>
</html>