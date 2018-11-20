<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bulma.css">
    <title>Are You Male or Female?</title>
</head>
<body>

    <section class="section">
        <div class="container">
            <h1 class="title">Are You Male/Female?</h1>
                <h2 class="subtitle">
                        Please Select A Gender
                </h2>
        </div>
    </section>

    <form action="/index1.php" name="Gender" method="post" id="Male">
        <div class="container is-fluid">
            <input class="button is-success is-rounded" type="submit" value="Male">
        </div>
    </form>
            <br>
    <form action="/index2.php" name="Gender" method="post" id="Female">
        <div class="container is-fluid">
            <input class="button is-warning is-rounded" type="submit" value="Female">
        </div>
    </form>
    
</body>
</html>