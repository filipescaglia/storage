<div class="container-fluid page-content">
    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Ano</th>
                <th>Cidade</th>
                <th>Editora</th>
                <th>Editor</th>
                <th>Volume</th>
                <th>Edição</th>
                <th>Citação</th>
                <th>Postado por</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $u = new User();
            foreach($data as $l):
            $n = $u->getUsername($l['user_id']);
            ?>
            <tr>
                <td><?php echo $l['title']; ?></td>
                <td><?php echo $l['author']; ?></td>
                <td><?php echo $l['year']; ?></td>
                <td><?php echo $l['city']; ?></td>
                <td><?php echo $l['publisher']; ?></td>
                <td><?php echo $l['editor']; ?></td>
                <td><?php echo $l['volume']; ?></td>
                <td><?php echo $l['edition']; ?></td>
                <td>link</td>
                <td><?php echo $n['username']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>