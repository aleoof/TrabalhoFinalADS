<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Quantidade</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($products as $p): ?>
        <tr>  
        <td>
            <?= $p->id ?>
          </td>
          <td>
            <?= $product->nome?>
          </td>
          <td>
            <?= $product->descricao ?>
          </td>
          <td>
            <?= $product->quantidade ?>
          </td>
          </tr>
      <?php endforeach; ?>
  </tbody>
</table>