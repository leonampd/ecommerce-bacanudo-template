<?php
// carrega as classes do pagar.me
include __DIR__ . '/vendor/autoload.php';

//carrega as classes do que criamos
include 'classes/Produto.php';
include 'classes/Ebook.php';
include 'classes/LivroFisico.php';
include 'classes/ItemCarrinho.php';
include 'classes/Carrinho.php';

$ebook = new Ebook(10.90, 'PHP OO', 'Livro mto bom', 'http://xxx');
$livroFisico = new LivroFisico(12.90, 'PHP OO', 'Livro mto bom', 300);

// instancia os itens do carrinho
$itemCarrinho1 = new ItemCarrinho(10, $ebook);
$itemCarrinho2 = new ItemCarrinho(3, $livroFisico);

// instancia o carrinho e adiciona os itens
$carrinho = new Carrinho();
$carrinho->adicionarItem($itemCarrinho1);
$carrinho->adicionarItem($itemCarrinho2);

$totalTransacao = $carrinho->total() * 100;

$pagarme = new PagarMe\Client('SUA_API_AQUI');
$transaction = $pagarme->transactions()->create([
    'amount' => (string) $totalTransacao,
    'payment_method' => 'credit_card',
    'card_holder_name' => 'Anakin Skywalker',
    'card_cvv' => '123',
    'card_number' => '4242424242424242',
    'card_expiration_date' => '1220',
    'customer' => [
        'external_id' => '1',
        'name' => 'Nome do cliente',
        'type' => 'individual',
        'country' => 'br',
        'documents' => [
          [
            'type' => 'cpf',
            'number' => '00000000000'
          ]
        ],
        'phone_numbers' => [ '+551199999999' ],
        'email' => 'cliente@email.com'
    ],
    'billing' => [
        'name' => 'Nome do pagador',
        'address' => [
          'country' => 'br',
          'street' => 'Avenida Brigadeiro Faria Lima',
          'street_number' => '1811',
          'state' => 'sp',
          'city' => 'Sao Paulo',
          'neighborhood' => 'Jardim Paulistano',
          'zipcode' => '01451001'
        ]
    ],
    'shipping' => [
        'name' => 'Nome de quem receberá o produto',
        'fee' => 1020,
        'delivery_date' => '2018-09-22',
        'expedited' => false,
        'address' => [
          'country' => 'br',
          'street' => 'Avenida Brigadeiro Faria Lima',
          'street_number' => '1811',
          'state' => 'sp',
          'city' => 'Sao Paulo',
          'neighborhood' => 'Jardim Paulistano',
          'zipcode' => '01451001'
        ]
    ],
    'items' => [
        [
          'id' => '1',
          'title' => 'R2D2',
          'unit_price' => 300,
          'quantity' => 1,
          'tangible' => true
        ],
        [
          'id' => '2',
          'title' => 'C-3PO',
          'unit_price' => 700,
          'quantity' => 1,
          'tangible' => true
        ]
    ]
]);

echo $transaction->status;

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