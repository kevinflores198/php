<main>
    <section>
        <img src="<?= $poster_url ?>" alt="Poste de <?= $title ?>">
    </section>
    <hgroup>
        <h2>
            <?= $title; ?> <br> SOLO FALTAN <?= $days_until; ?> DIAS
        </h2>
        <p>
            Fecha de estreno: <?= $release_date; ?>
        </p>

        <p>
            La proxima pelicula sera: <?= $following_production["title"]; ?>
        </p>
    </hgroup>
</main>