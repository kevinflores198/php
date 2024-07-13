<main>
    <section>
        <img src="<?= $data["poster_url"] ?>" alt="Poste de <?= $data["title"] ?>">
    </section>
    <hgroup>
        <h2>
            <?= $data["title"]; ?> <br> SOLO FALTAN <?= $data["days_until"]; ?> DIAS
        </h2>
        <p>
            Fecha de estreno: <?= $data["release_date"]; ?>
        </p>

        <p>
            La proxima pelicula sera: <?= $data["following_production"]["title"]; ?>
        </p>
    </hgroup>
</main>