<?php include 'partials/header.view.php'; ?>
<body>
    <?php include 'partials/nav.view.php'; ?>
    <div class="container">
        <div class="form">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="nume">Nume</label>
                    <input type="text" name="nume" id="nume">
                </div>
                <div class="mb-3">
                    <label for="faptas">Faptas</label>
                    <input type="text" name="faptas" id="faptas">
                </div>
                <button type="submit" class="btn-save">Save</button>
            </form>
        </div>
        <div class="faptasi">
            <h4>Lista amenzilor</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nume</th>
                        <th>Faptas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($query as $faptas): ?>
                        <tr>
                            <td><?= $faptas->id; ?></td>
                            <td><?= $faptas->nume; ?></td>
                            <td><?= $faptas->faptas; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>