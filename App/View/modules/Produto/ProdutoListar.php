<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Produtos</title>
</head>
<body>

    <table>
        <tr>
            <th></th>
            <th>Id</th>
            <th>Codigo</th>
            <th>Descricao</th>
            <th>Estoque Minimo</th>
            <th>Estoque Maximo</th>
            <th>Vencimento</th>
            <th>Categoria</th>

        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/produto/delete?id=<?= $item->id ?>">X</a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/produto/form?id=<?= $item->id ?>"><?= $item->codigo ?></a>
            </td>

            <td><?= $item->descricao ?></td>
            <td><?= $item->estoque_min ?></td>
            <td><?= $item->estoque_max ?></td>
            <td><?= $item->vencimento ?></td>
            <td><?= $item->id_categoria ?></td>
        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
    
</body>
</html>