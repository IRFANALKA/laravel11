<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALKA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            position: fixed;
            width: 100%;
            background-color: #333;
            padding: 1.5rem 0; /* Increased padding */
            text-align: center;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
        }

        .menu-button {
            font-size: 1.5rem;
            color: white;
            cursor: pointer;
            margin-left: 1rem; /* Moved slightly to the left */
        }

        nav ul {
            list-style: none;
            margin: 8px;
            padding: 8px;
            display: flex;
        }

        nav ul li {
            margin: 0 1rem;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
        }

        .side-nav {
            position: fixed;
            width: 250px;
            height: 100%;
            background-color: #444;
            top: 0;
            left: -250px;
            transition: left 0.3s;
            padding-top: 60px;
            z-index: 1100;
        }

        .side-nav a {
            display: block;
            color: white;
            padding: 1rem;
            text-decoration: none;
            font-size: 1.2rem;
        }

        .side-nav a:hover {
            background-color: #555;
        }

        section {
            padding: 100px 20px;
            height: 80vh;
            background-color: white;
            border-bottom: 1px solid white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        section:nth-child(even) {
            background-color: white;
        }

        section h1 {
            margin: 0 0 20px 0;
            font-size: 2.5rem;
            color: #333;
        }

        section p {
            font-size: 1.2rem;
            color: #666;
            padding: 15px; /* Padding inside the border */
            background-color: #f9f9f9; /* Light background color for the paragraph */
            border: 2px solid transparent; /* Initial border */
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); /* Added shadow for the border */
            position: relative; /* For pseudo-elements */
        }

        section p::before, section p::after {
            content: '';
            position: absolute;
            border: 2px solid #333; 
            border-radius: 15px; 
            width: calc(100% + 10px); 
            height: calc(100% + 10px); 
            top: -5px; 
            left: -5px; 
        }

        section p::after {
            top: auto; 
            left: auto; 
            bottom: -5px; 
            right: -5px; 
        }

        #section1 img {
            width: 200px; /* Fixed width */
            height: 250px; /* Fixed height */
            margin-top: 25px;
            transition: transform 0.3s;
            border: 5px solid #333; /* Added border for the frame */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Added shadow for the frame */
        }

        #section1 img:hover {
            transform: scale(1.1);
        }

        section img {
            width: 300px; /* Fixed width */
            height: 300px; /* Fixed height */
            margin-top: 25px;
            transition: transform 0.3s;
            border: 5px solid #333; /* Added border for the frame */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Added shadow for the frame */
        }

        section img:hover {
            transform: scale(1.1);
        }

        .feedback-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 80%;
            max-width: 600px;
            margin-top: 25px;
        }

        .feedback-form input, .feedback-form textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .feedback-form button {
            padding: 10px 20px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            background-color: green;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .feedback-form button:hover {
            background-color: green;
        }

        .notification {
            display: none; /* Hidden by default */
            padding: 10px 20px;
            background-color: #4CAF50; /* Green */
            color: white;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <nav>
        <div class="menu-button">&#9776;</div>
        <ul>
            <li><a href="#section1">Profile</a></li>
            <li><a href="#section2">Hobby</a></li>
            <li><a href="#section3">kesanpesan</a></li>
        </ul>
    </nav>

    <div class="side-nav" id="sideNav">
        <a href="/produk">PRODUK</a>
        <a href="blade2.php">MASIH KOSONG</a>
        <a href="blade3.php">MASIH KOSONG</a>
    </div>

    <section id="section1">
        <h1>Halo !</h1>
        Kenalin :
        <br>
        <p>Muhammad Irfan Al-Kautsar, panggil aja alka yaaa </p>
        <img src="images/alkaa.jpeg" alt="Image for Section 1">
    </section>
    
    <section id="section2">
        <h1>My Hobby</h1>
        <p>Mencintai Barca sepenuh hati dan bakul setiap hari</p>
        <img src="images/barca.png" alt="Image for Section 2">
    </section>
    
    <section id="section3">
        <h1>kesan dan pesan</h1>
        <img src="images/champions.jpg" alt="Image for Section 3">
        <form class="feedback-form">
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea placeholder="Your Message" rows="4" required></textarea>
            <button type="submit">Send</button>
        </form>
        <div class="notification" id="notification">Thank you for your feedback!</div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const links = document.querySelectorAll('nav a');
            const menuButton = document.querySelector('.menu-button');
            const sideNav = document.getElementById('sideNav');
            const body = document.querySelector('body');
            const form = document.querySelector('.feedback-form');
            const notification = document.getElementById('notification');

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

            menuButton.addEventListener('click', function () {
                if (sideNav.style.left === '-250px') {
                    sideNav.style.left = '0';
                } else {
                    sideNav.style.left = '-250px';
                }
            });

            body.addEventListener('click', function (event) {
                if (!sideNav.contains(event.target) && event.target !== menuButton) {
                    sideNav.style.left = '-250px';
                }
            });

            sideNav.addEventListener('click', function (event) {
                event.stopPropagation();
            });

            form.addEventListener('submit', function (event) {
                event.preventDefault();
                notification.style.display = 'block';
                setTimeout(() => {
                    notification.style.display = 'none';
                }, 3000); // Hide after 3 seconds
                form.reset();
            });
        });
    </script>
</body>
</html>
