<?php include __DIR__ . '/templates/header.php'; ?>
<body>
    <?php include __DIR__ . '/templates/menu.php'; ?>

    <div class="container">
        <p class="font-weight-bold">Mais vendidos da semana</p>
        <div class="row">
            <div class="product-item col-md-6">
                <div class="product-img">
                    <img src="https://placeimg.com/570/570/tech" alt="">
                </div>
                <div class="details">
                    <p class="font-weight-bold">Novo produto 1</p>
                    <p class="text-muted">Minha descrição</p>
                    <p class="price font-weight-bold">R$ 12,99</p>
                </div>
                <div class="form-inline">
                    <input class="form-control" style="width:45px;margin-right:14px" type="number" name="quantity" value="1" />
                    <button
                        type="button"
                        class="btn btn-primary add-to-cart"
                        data-product-id="1"
                        data-product-name="Produto 1"
                        data-product-description="Descrição do produto 1"
                        data-product-price="12.99">
                        Adicionar ao carrinho
                    </button>
                </div>
            </div>
            <div class="product-item col-md-6">
                <div class="product-img">
                    <img src="https://placeimg.com/570/570/tech" alt="">
                </div>
                <div class="details">
                    <p class="font-weight-bold">Produto 2</p>
                    <p class="text-muted">Descricao do produto 2</p>
                    <p class="price font-weight-bold">R$ 59,99</p>
                </div>
                <div class="form-inline">
                    <input class="form-control" style="width:45px;margin-right:14px" type="number" name="quantity" value="1" />
                    <button
                        type="button"
                        class="btn btn-primary add-to-cart"
                        data-product-id="1"
                        data-product-name="Produto 2"
                        data-product-description="Descricao do produto 2"
                        data-product-price="59.99">
                        Adicionar ao carrinho
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product-item col-md-6">
                <div class="product-img">
                    <img src="https://placeimg.com/570/570/tech" alt="">
                </div>
                <div class="details">
                    <p class="font-weight-bold">Produto 3</p>
                    <p class="text-muted">Descrição do produto 3</p>
                    <p class="price font-weight-bold">R$ 99,99</p>
                </div>
                <div class="form-inline">
                    <input class="form-control" style="width:45px;margin-right:14px" type="number" name="quantity" value="1" />
                    <button
                        type="button"
                        class="btn btn-primary add-to-cart"
                        data-product-id="1"
                        data-product-name="Produto 3"
                        data-product-description="Descrição do produto 3"
                        data-product-price="99.99">
                        Adicionar ao carrinho
                    </button>
                </div>
            </div>
            <div class="product-item col-md-6">
                <div class="product-img">
                    <img src="https://placeimg.com/570/570/tech" alt="">
                </div>
                <div class="details">
                    <p class="font-weight-bold">Produto 4</p>
                    <p class="text-muted">Descrição do produto 4</p>
                    <p class="price font-weight-bold">R$ 14,99</p>
                </div>
                <div class="form-inline">
                    <input class="form-control" style="width:45px;margin-right:14px" type="number" name="quantity" value="1" />
                    <button
                        type="button"
                        class="btn btn-primary add-to-cart"
                        data-product-id="1"
                        data-product-name="Produto 4"
                        data-product-description="Descrição do produto 4"
                        data-product-price="14.99">
                        Adicionar ao carrinho
                    </button>
                </div>
            </div>
        </div>
    </div>
    <form id="carrinho" action="carrinho.php" method="post">
    </form>
<?php include __DIR__ . '/templates/footer.php'; ?>