<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>
        <div id="listagem"></div>
        
        <script src="jquery.js"></script>
        <script>
            $.ajax(
                {url:"_xml/produtos.xml"}
            ).then(sucesso, falha);

            function sucesso(valor) {
                var elemento = "<ul>";
                $(valor).find('produto').each(function () {
                    var nome = $(this).find('nomeproduto').text();
                    var preco = $(this).find('precounitario').text();

                    elemento += "<li>"+ nome +" - R$ "+ preco +"</li>";
                })
                
                elemento +="</ul>";

                $("#listagem").html(elemento);
                
            }

            function falha() {
                $('#listagem').html("Falha no carregamento")
            }

        </script>
    </body>
</html>