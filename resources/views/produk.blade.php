<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Review</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
        }

        nav {
            background-color: #444;
            padding: 1rem;
            text-align: center;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 1rem;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
        }

        main {
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center; /* Center align content */
        }

        section {
            margin-bottom: 2rem;
            text-align: center; /* Center text */
            width: 100%;
            max-width: 800px; /* Limit width */
        }

        section h2 {
            font-size: 2rem;
            color: #333;
        }

        section img {
            width: 100%;
            max-width: 400px;
            display: block;
            margin: 1rem auto;
            border: 5px solid #333;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        section p {
            font-size: 1.2rem;
            color: #666;
        }

        .review {
            padding: 1rem;
            margin: 1rem 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            text-align: left; /* Align review text to the left */
        }

        .review h3 {
            margin: 0;
        }

        .review p {
            margin: 0.5rem 0;
        }

        #add-review {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 800px; /* Wider input table */
        }

        form label {
            font-size: 1.2rem;
            margin: 0.5rem 0;
            width: 100%;
            max-width: 800px; /* Make labels the same width */
        }

        form input, form textarea, form select {
            width: 100%;
            max-width: 800px; /* Wider input table */
            padding: 0.5rem;
            margin: 0.5rem 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 1rem;
        }

        form button:hover {
            background-color: #555;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 0,5rem;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>INI ADALAH FERRARI</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#product-details">DETAIL PRODUK</a></li>
            <li><a href="#customer-reviews">KOMENTAR NETIZEN</a></li>
            <li><a href="#add-review">BERKOMENTAR</a></li>
        </ul>
    </nav>

    <main>
        <section id="product-details">
            <h2>MAHAL EUY</h2>
            <img src="images/ferrari.jpeg" alt="Product Image">
            <p>MENDING INI APA JADI JURAGAN TERNAK YA?.</p>
        </section>

        <section id="customer-reviews">
            <h2>KOMENTAR NETIZEN</h2>
            <?php
                $reviews = [
                    ["name" => "PAIJO SUTRESNA", "review" => "BAGUS PRODUKNYA", "rating" => 5],
                    ["name" => "GANDUL SUTEJO", "review" => "KUALITASNYA BAGUS, TAPPI MAHAL COYY.", "rating" => 4],
                    ["name" => "BUDI LAKSANA", "review" => "TIDAK TERLALU TERTARIK DENGAN PRODUK INI.", "rating" => 2]
                ];

                foreach ($reviews as $review) {
                    echo '<div class="review">';
                    echo '<h3>' . htmlspecialchars($review["name"]) . '</h3>';
                    echo '<p>' . htmlspecialchars($review["review"]) . '</p>';
                    echo '<p>Rating: ' . htmlspecialchars($review["rating"]) . '/5</p>';
                    echo '</div>';
                }
            ?>
        </section>

        <section id="add-review">
            <h2>TAMBAHKAN KOMENTARMU</h2>
            <form action="index.php" method="post">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="review">komentar:</label>
                <textarea id="review" name="review" rows="4" required></textarea>
                
                <label for="rating">Rating:</label>
                <select id="rating" name="rating" required>
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                </select>
                
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 PINTAR</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const links = document.querySelectorAll('nav a');
            
            for (const link of links) {
                link.addEventListener('click', function (event) {
                    event.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetSection = document.getElementById(targetId);
                    
                    targetSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            }
        });
    </script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $review = htmlspecialchars($_POST["review"]);
    $rating = htmlspecialchars($_POST["rating"]);

    echo "<h1>Thank you for your review, $name!</h1>";
    echo "<p>Review: $review</p>";
    echo "<p>Rating: $rating</p>";
}
?>
