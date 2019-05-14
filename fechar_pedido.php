<?php

include 'classes/Produto.php';
include 'classes/Ebook.php';
include 'classes/LivroFisico.php';
include 'classes/ItemCarrinho.php';

$ebook = new Ebook(10.90, 'PHP OO', 'Livro mto bom', 'http://xxx');
$livroFisico = new LivroFisico(12.90, 'PHP OO', 'Livro mto bom', 300);

$itemCarrinho = new ItemCarrinho(10, $ebook);

?>

<?php include __DIR__ . '/templates/header.php'; ?>
<body>
    <?php include __DIR__ . '/templates/menu.php'; ?>
    <div class="container">
        <div class="alert alert-warning" role="alert">
            <h1>Obrigado!</h1>

            <p>Seu pedido <strong>123456</strong> foi registrado no nosso sistema e em breve você receberá um e-mail com maiores detalhes.</p>
        </div>
    </div>
<?php include __DIR__ . '/templates/footer.php'; ?>