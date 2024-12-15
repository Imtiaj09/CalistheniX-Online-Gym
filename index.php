<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalistheniX Fitness Center</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <style>
        /* benefits */
        .benefits {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3.4rem;
            align-items: center;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }

        .image-container img {
            max-width: 100%;
            border-radius: 2.5rem;
        }

        .content h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 1rem;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .stat {
            text-align: center;
        }

        .stat h3 {
            font-size: 1.5rem;
            margin: 0;
            color: teal;
        }

        .stat p {
            font-size: 1rem;
            margin: 0;
        }

        .btn {
            display: inline-block;
            padding: 10px  2.5rem;
            background-color: black;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #1abc9c;
        }

        @media (max-width: 768px) {
            .benefits {
                grid-template-columns: 1fr;
            }
        }
        /* end */
        /* Banner */
        .banner {
    background-image: url('images/cover-image.jpg'); 
    background-size: cover;
    background-position: center;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

.banner:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 128, 128, 0.6); 
    z-index: 1;
}

.banner-content {
    position: relative;
    z-index: 2;
    color: #fff;
    text-align: center;
    padding: 20px;
}

.banner-content h1 {
    font-size: 3rem;
    margin-bottom: 20px;
}

.banner-content p {
    font-size: 1.2rem;
    margin-bottom: 20px;
    line-height: 1.6;
}

.btn-content {
    display: inline-block;
            padding: 10px 2.5rem;
            background-color: black;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
            cursor: pointer;
}

.btn-content:hover {
    background-color: #1abc9c;
}
/* end */

/* Team */
.team-section {
            padding: 50px 20px;
        }
        .team-h{
           text-align: center;
        }

        .team-section h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #333;
        }

        .team-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .team-card {
            position: relative;
            width: 250px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .team-card:hover {
            transform: scale(1.05);
        }

        .team-card img {
            width: 100%;
            display: block;
        }

        .team-card .info {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            color: #fff;
            opacity: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: opacity 0.3s ease-in-out;
        }

        .team-card:hover .info {
            opacity: 1;
        }

        .team-card .info h3 {
            margin: 0;
            font-size: 1.5rem;
        }

        .team-card .info p {
            font-size: 1rem;
            margin: 10px 0;
        }

        .team-card .info .social-icons {
            display: flex;
            gap: 10px;
        }

        .team-card .info .social-icons a {
            color: #fff;
            font-size: 1.2rem;
            text-decoration: none;
        }
        /* end */

        /* Contact Us */
        .contact-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            padding: 50px;
        }

        .contact-section .image-container {
            position: relative;
        }

        .contact-section .image-container img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .contact-section .form-container {
            padding: 20px;
        }

        .form-container h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .form-container form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .form-container form input,
        .form-container form textarea,
        .form-container form select,
        .form-container form button {
            font-size: 1rem;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container form textarea {
            grid-column: span 2;
            resize: none;
            height: 100px;
        }

        .form-container form button {
            grid-column: span 2;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .form-container form button:hover {
            background-color: #555;
        }

    </style>
</head>
<body>
<header>
    <div class="logo">
        <img src="images/CalistheniX.png" alt="Fitness Center Logo" class="logo-img">
    </div>
    <nav>
        <ul>
            <li><a href="#about">Home</a></li>
            <li class="dropdown">
                <a href="#joinAs">JOIN AS</a>
                <ul class="dropdown-menu">
                    <li><a href="member_registration.php">Member</a></li>
                    <li><a href="trainer_login.php">Trainer</a></li>
                    <li><a href="nutritionist_login.php">Nutritionist</a></li>
                </ul>
            </li>
            <li><a href="authority_login.php">Admin</a></li>
        </ul>
    </nav>
</header>


<main>
    <!-- Banner -->
    <section class="banner">
        <div class="banner-content">
            <h1>BUild Your Body</h1>
            <p>
                Helping You Adopt A More Healthy And Fit Lifestyle So You Look And Feel Your Best.
            </p>
            <a href="member_registration.php" class="btn-content">REGISTER NOW</a>
        </div>
    </section>

    <!-- Discount Section -->
    <section class="discount">
        <h2>Special Offer</h2>
        <p>Join today and get <strong>10% OFF</strong> on your first month!</p>
        <a href="member_registration.php" class="btn">Claim Offer</a>
    </section>


    
    <!-- Benefits -->
    <section class="benefits">
        <div class="image-container">
            <img src="images/benefits-img.png" alt="Benefits Pose">
        </div>
        <div class="content">
            <h1>The best way to increased flexibility and improve posture</h1>
            <p>We will develop for you a unique nutrition program for weight loss and positive tone of the whole body</p>
            <div class="stats">
                <div class="stat">
                    <h3>165+</h3>
                    <p>Happy Customers</p>
                </div>
                <div class="stat">
                    <h3>98%</h3>
                    <p>Efficiency</p>
                </div>
                <div class="stat">
                    <h3>12</h3>
                    <p>Years of Experience</p>
                </div>
            </div>
            <a href="" class="btn">Get Now</a>
        </div>
    </section>
    <!-- Team -->
    <section class="team-section">
    <h2 class="team-h">Our Team</h2>
    <div class="team-container">
        <!-- Team Card 1 -->
        <div class="team-card">
            <img src="images/01.png" alt="Team 1">
            <div class="info">
                <h3>John Doe</h3>
                <p>Yoga Team</p>
                <div class="social-icons">
                    <a href="#">&#xf09a;</a>
                    <a href="#">&#xf099;</a>
                    <a href="#">&#xf0e1;</a>
                </div>
            </div>
        </div>

        <!-- Team Card 2 -->
        <section class="team-card">
            <img src="images/02.png" alt="Team 2">
            <div class="info">
                <h3>Jane Smith</h3>
                <p>Yoga Team</p>
                <div class="social-icons">
                    <a href="#">&#xf09a;</a>
                    <a href="#">&#xf099;</a>
                    <a href="#">&#xf0e1;</a>
                </div>
            </div>
        </section>

        <!-- Team Card 3 -->
        <div class="team-card">
            <img src="https://via.placeholder.com/250x300" alt="Team 3">
            <div class="info">
                <h3>Emily Brown</h3>
                <p>Yoga Team</p>
                <div class="social-icons">
                    <a href="#">&#xf09a;</a>
                    <a href="#">&#xf099;</a>
                    <a href="#">&#xf0e1;</a>
                </div>
            </div>
        </div>

        <!-- Team Card 4 -->
        <div class="team-card">
            <img src="images/03.png" alt="Team 4">
            <div class="info">
                <h3>Sophia White</h3>
                <p>Yoga Team</p>
                <div class="social-icons">
                    <a href="#">&#xf09a;</a>
                    <a href="#">&#xf099;</a>
                    <a href="#">&#xf0e1;</a>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Contact -->
    <section class="contact-section">
        <div class="image-container">
            <img src="images/contact-img.png" alt="Contact">
        </div>

        <div class="form-container">
            <h2>GET IN TOUCH WITH US FOR ANY QUERIES.</h2>
            <form>
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <input type="text" placeholder="Phone Number" required>
                <select required>
                    <option value="" disabled selected>Your Phase</option>
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                </select>
                <textarea placeholder="Message" required></textarea>
                <button type="submit">SEND MESSAGE</button>
            </form>
        </div>
    </section>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> CalistheniX Fitness Center. All rights reserved.</p>
</footer>

</body>
</html>
