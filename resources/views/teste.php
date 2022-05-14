<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>Pagina Teste Cliente</title>
    <script>    
        $(document).ready(function(){
            $.ajax({
                type: "GET",
                url: "http://127.0.0.1:8000/api/questionario/f99c82d0e8f7726c3351483e518190c9/7",
                success: function(data) {
                    var json = JSON.parse(data);

                    FormBody =  
                    "<div class='container'>" +
                        "<div class='row'>" +
                            "<div class='ol-sm-3'>" +
                               "<label> Enquete</label>" +
                                    "<div class='form-group'>" +
                                        "<label for='nome'> Nome: </label>" +
                                        "<input type='text' class='form-control' id='nome' placeholder='' required>" +
                                    "</div>" +
                                    "<div class='form-group'>" +
                                        "<label for='email'> Email: </label>" +
                                        "<input type='email' class='form-control' id='email' placeholder='nome@exemplo.com' required>" +
                                    "</div>" + 
                                    "<div class='form-group'>" +
                                        "<label>"+ json.questionario['titulo'] +"</label>" +
                                        "<label>"+ json.alternativas[0]['titulo'] +"</label>" +
                                    "</div>" +
                                    "<br> <button type='button' class='btn btn-info'>Responder a enquete</button>" +
                                "</div>" +
                            "</div>" +    
                        "</div>" ;
                    document.getElementById('api-enquete').innerHTML = FormBody;
                }
            })
        })
    </script>
</head>
<body>
    <form action="" method="post" id="api-enquete"></form>
</body>
</html>