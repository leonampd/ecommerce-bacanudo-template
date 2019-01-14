<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/ecommerce.css">
    <title>Meu E-commerce Bacanudo</title>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Meu ecommerce bacanudo</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#">Lorem</a>
            <a class="p-2 text-dark" href="#">Ipsum</a>
            <a class="p-2 text-dark" href="#">Dolor</a>
            <a id="place-order" class="p-2 text-dark" href="#">Ver carrinho</a>
        </nav>
    </div>
    
    <div class="container">
        <h2>Carrinho</h2>

        <div class="row">
            <div class="col-md-8">  
                <ul class="list-group">
                    <?php for($i = 0; $i < 4; $i++) : ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">{{ Nome 1 }}</h6>
                                <p><small class="text-muted">{{ Descricao do produto }}</small></p>
                                <p><small>Quantidade: {{ quantidade do produto }}</small></p>
                            </div>
                            <span class="text-muted">R$ {{valor do produto}}</span>
                        </li>
                    <?php endfor; ?>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="list-group">
                    <h5>Resumo</h5>
                    <div class="list-group-item d-flex">
                        <strong>TOTAL:</strong> {{ TOTAL }}
                    </div>
                    <div class="list-group-item d-flex">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-success">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>
</html>