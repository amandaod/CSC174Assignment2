<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>Lab 3 | Team Boston</title>
</head>

<body>

    <header>
        <h1>Lab Three</h1>
        <h5>The Good, the Bad, and the Adorable<h5>
    </header>

    <main>

        <div>
            <a href="amanda.php">
                <h2>Sustenance</h2>
            </a>
            <p>While watermelons, tea and chocolate are all very different, they have in common the fact that they can
                be eaten or drunk for nourishment. Therefore, the domain is Sustenance. Things that fall under the
                category of sustenance have a number of different things in common.</p>
        </div>

        <div>
            <a href="joseph.php">
                <h2>Enemies of Rome</h2>
            </a>
            <p>Across the centuries of its existence, the Roman Empire fought against many foes:</p>
            <ul>
                <li>Hannibal Barca was a Carthaginian general and statesmen who led a famed invasion of Italy.</li>
                <li>The Gauls were a group of Celtic peoples living mostly in what is now France, who were conquered by
                    Julius Caesar.</li>
                <li>Parthia was an Eastern Empire, and one of the few foreign powers that could rival Rome's power.</li>
            </ul>
        </div>

        <div>
            <a href="jacob.php">
                <h2>Cat Breeds</h2>
            </a>
            <p>Cats have been domesticated and bred for thousands of years. Breeds' exact date of origin are usually a
                mystery as there is always numerous conflicting data whether from the Roman times or the Aztecs.
                Regardless, cats have been an integral part of human society since ancient times. Although there aren't
                many cat breeds like those of dogs, there are still distinct personality traits as well as physical
                distinctions between each cat breed. We will explore some of the most popular breeds (as well as those I
                like the most) and what makes them distinct but similar with one another.</p>
        </div>

    </main>

    <nav class="menu">
        <ul>
            <li><a href="index.php" class="is-current">Home</a></li>
            <li><a href="amanda.php">Sustenance</a></li>
            <li><a href="jacob.php">Cat Breeds</a></li>
            <li><a href="joseph.php">Enemies of Rome</a></li>
        </ul>
    </nav>

    <?php include 'inc/footer.inc';?>
</body>

</html>