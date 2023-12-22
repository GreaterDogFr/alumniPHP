<?php include 'assets/data/data.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <!-- Navvbar -->
    <?php include 'components/navbar.php'?>

    <!--HTML -->
    <div class="parallax" alt="Deux développeurs"></div>
    <div class="formation">
        <h2 class="text-center">Formez-vous à l'AFPA</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa fuga explicabo optio accusantium nobis rem assumenda. Totam ab tempora quasi impedit necessitatibus nostrum ducimus repellendus laborum molestiae placeat, deleniti quidem.</p>
    </div>
    <div class="promo d-flex flex-row flex-wrap">
        <?php foreach ($data as $index => $profiles) {?>
            <div class="card border border-5 col-5 mt-5 mx-auto bg-transparent shadow p-3" style="width: 19rem">

                <img class="card-img-top" src="assets/img/portrait-<?=$index + 1?>.jpg">
                <p class="card-title text-center"><?="$profiles[name] "?></p>
                <p class="card-title text-center"><?="$profiles[phone] "?></p>
                <p class="card-title text-center"><?="$profiles[email] "?></p>
                <p class="card-title text-center"><?="$profiles[region] "?></p>

            </div>
        <?php }?>
    </div>

    <!-- Footer -->
    <?php include 'components/footer.php'?>

    <!-- script -->
    <script src="./assets/script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>