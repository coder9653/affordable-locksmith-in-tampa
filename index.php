<? php


<head>
    <title>Affordable Locksmith Tampa | Top Locksmith Services in Tampa, FL</title>
    <link rel="icon" type="favicon"
        href="https://lh3.googleusercontent.com/p/AF1QipMSclbfIu0j8BxfDXLTCSRV6vXQxGngmvrNYFLG=s3072-w3072-h1390-rw">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta name="description" content="Welcome to Affordable Locksmith Tampa, the premier locksmith service provider in Tampa, FL. Our licensed professionals offer top-tier locksmith services.">


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Header Styles */
        header {
            background-color: rgba(51, 51, 51, 0.966);
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
            transition: background-color 0.3s ease, color 0.3s ease, padding 0.3s ease;
        }

        header.scrolled {
            background-color: #333;
            color: #ccc;
            padding: 10px 20px;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo img {
            max-height: 40px;
            margin-right: 10px;
        }

        .website-name {
            font-size: 24px;
            font-weight: bold;
        }

        nav a {
            color: inherit;
            text-decoration: none;
            margin-left: 20px;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #fff;
        }

        /* Hero Section Styles */
        .hero {
            position: relative;
            background-image: url('https://lh3.googleusercontent.com/p/AF1QipOGHu32xg_hDa4P4MTu8HUnOShipbfX46Zr14YJ=s3072-w3072-h1390-rw');
            background-size: cover;
            background-position: center top;
            height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
            padding: 0 20px;
            margin-top: 70px;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .hero h1,
        .hero button {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px 24px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Main Content Styles */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .section {
            margin-bottom: 40px;
        }

        .section h2 {
            color: #333;
        }

        .section h3 {
            color: #333;
        }

        .image-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }

        /* Footer Styles */
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .social-links a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .social-links a:hover {
            color: #ccc;
        }

        .section {
            margin-bottom: 40px;
            font-family: Arial, sans-serif;
            text-align: justify;
            /* Add text alignment */
        }

        .section p {
            line-height: 1.6;
        }

        .line {
            width: 100%;
            height: 1px;
            background-color: #ccc;
            margin: 20px 0;
        }

        .section {
            margin-bottom: 40px;
        }

        .content-wrapper {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .content {
            flex: 0 0 65%;
        }

        .image-container {
            flex: 0 0 30%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }

        .youtube-link {
            margin-top: 20px;
        }

        .youtube-link textarea {
            width: 100%;
            resize: vertical;
            align-items: center;
        }

        .section .google-form {
            margin-top: 40px;
        }

        .section .google-form iframe {
            width: 100%;
            height: 2230px;
            border: none;
        }

        .contact-list {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .contact-list li {
            flex: 0 0 30%;
            /* Adjust width as needed */
            margin-bottom: 20px;
            /* Add some space between list items */
        }

        .contact-list h3,
        .contact-list h4 {
            margin-top: 0;
            /* Remove default top margin for consistency */
        }

        .contact-list p {
            margin-bottom: 5px;
            /* Add space between paragraphs */
        }

        .google-maps,
        .google-my-maps {
            width: 100%;
            max-width: 400px;
            height: 300px;
            margin: 0 auto;
        }

        .google-maps-container,
        .google-my-maps-container {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }


        .fa {
            padding: 10px;
            font-size: 30px;
            width: 30px;
            text-align: center;
            text-decoration: none;
            border-radius: 50%;
            margin: 0 10px;
        }

        html,
        body {
            background-color: #F2F7FD;
            transition: all 0.3s;
            height: 100%;
        }



        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        footer {
            background-color: #111;
        }

        .footerContainer {
            width: 100%;
            padding: 70px 30px 20px;
        }

        .socialIcons {
            display: flex;
            justify-content: center;
        }

        .socialIcons a {
            text-decoration: none;
            padding: 10px;
            background-color: white;
            margin: 10px;
            border-radius: 50%;
        }

        .socialIcons a i {
            font-size: 2em;
            color: black;
            opacity: 0, 9;
        }

        /* Hover affect on social media icon */
        .socialIcons a:hover {
            background-color: rgba(51, 51, 51, 0.966);
            transition: 0.5s;
        }

        .socialIcons a:hover i {
            color: white;
            transition: 0.5s;
        }

        .footerNav {
            margin: 30px 0;
        }

        .footerNav ul {
            display: flex;
            justify-content: center;
            list-style-type: none;
        }

        .footerNav ul li a {
            color: white;
            margin: 20px;
            text-decoration: none;
            font-size: 1.3em;
            opacity: 0.7;
            transition: 0.5s;

        }

        .footerNav ul li a:hover {
            opacity: 1;
        }

        .footerBottom {
            background-color: #000;
            padding: 20px;
            text-align: center;
        }

        .footerBottom p {
            color: white;
        }

        @media (max-width: 700px) {
            .footerNav ul {
                flex-direction: column;
            }

            .footerNav ul li {
                width: 100%;
                text-align: center;
                margin: 10px;
            }

            .socialIcons a {
                padding: 8px;
                margin: 4px;
            }
        }
    </style>
</head>

<body>
    <header id="header">
        <div class="logo-container">
            <div class="logo">
                <img src="https://lh3.googleusercontent.com/p/AF1QipMSclbfIu0j8BxfDXLTCSRV6vXQxGngmvrNYFLG=s3072-w3072-h1390-rw"
                    alt="Affordable Locksmith Tampa">
            </div>
            <div class="website-name">Affordable Locksmith Tampa</div>
        </div>
        <nav>
            <a href="index.php">Home</a>
            <a href="About.php">About Us</a>
            <a href="contact.php">Contact Us</a>
        </nav>
    </header>

    <div class="hero">
        <h1>Affordable Locksmith Tampa</h1>
        <a href="tel:+18136257979"><button>Call Now</button></a>
    </div>

    <div class="container">
        <div class="section">
            <h2 style="text-align: center; color: #226E93; font-size: 30px;">Best Locksmith in Tampa, FL</h2>
            <p>Affordable Locksmith Tampa is the top locksmith service provider in Tampa, FL. With a dedication to
                professionalism, skill, and trustworthiness, we ensure every client receives top-tier assistance. Our
                team comprises licensed professionals committed to delivering reliable solutions tailored to individual
                needs. Whether it's handling emergency lockouts, repairing locks, crafting key replacements, or
                implementing advanced security systems, we excel in every aspect. Renowned for our affordability without
                compromising quality, we prioritize customer satisfaction above all else. Choose Affordable Locksmith
                Tampa for unparalleled locksmith services in Tampa, FL.</p>
            <div class="line"></div>
        </div>


        <div class="section">
            <div class="content-wrapper">
                <div class="content">
                    <h2 style="color: #226E93; font-size: 30px;">Cheap Locksmith Tampa</h2>
                    <p>Looking for affordable locksmith services in Tampa, FL? Look no further than Affordable Locksmith
                        Tampa. We are a trusted locksmith business that offers residential, commercial, and automotive
                        locksmith services at budget-friendly prices. Our team consists of professional and skilled
                        locksmiths who are licensed and reliable. Whether you need help with home, office, or car locks,
                        we've got you covered. From emergency lockouts to key replacements, we provide efficient
                        solutions tailored to your needs. Count on us for affordable and dependable locksmith services
                        in Tampa, FL. Choose Affordable Locksmith Tampa for quality service without breaking the bank.
                    </p>
                </div>
                <div class="image-container">
                    <img src="https://lh3.googleusercontent.com/p/AF1QipPvRIeAksaYVJytmNYxI6ecDJThV2FN5ziQizEP=s3072-w3072-h1390-rw"
                        alt="Locksmith Services">
                </div>
            </div>

            <div class="youtube-link">
                <iframe width="500" height="360" src="https://www.youtube.com/embed/GipEhE5g9kc"
                    title="Affordable Locksmith Tampa | Locksmith Tampa | +1 (813) 625-7979" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <div class="line"></div>
            </div>
        </div>

        <div class="section">
            <h2 style="color: #226E93; font-size: 30px;">Our Locksmith Services in Tampa, FL</h2>

            <div class="section">
                <h3>Residential Locksmith Tampa</h3>
                <div class="content-wrapper">
                    <div class="content">
                        <p>When it comes to home locksmith services in Tampa, FL, look no further than Affordable
                            Locksmith Tampa. Our trusted locksmith business specializes in providing a range of
                            residential services to ensure the safety and security of your home. From home lock
                            installation to efficient repairs and replacements, we have the expertise to handle it all.
                            If you find yourself locked out of your home, our reliable team is just a call away to
                            assist you. We also offer smart locks, single cylinder locks, deadbolt locks, electronic
                            locks, and high-security locks for enhanced protection. Choose Affordable Locksmith Tampa
                            for professional and affordable home locksmith services in Tampa, FL.</p>
                    </div>
                    <div class="image-container">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipNuJve3n7iYN_nWyKPk52vhIqpcalUx_lYqZxDb=s3072-w3072-h1390-rw"
                            alt="Residential Locksmith Services">
                    </div>
                </div>
            </div>

            <div class="section">
                <h3>Commercial Locksmith Tampa</h3>
                <div class="content-wrapper">
                    <div class="content">
                        <p>When it comes to reliable locksmith services for your business in Tampa, FL, Affordable
                            Locksmith Tampa is the name you can trust. As a professional and skilled locksmith business,
                            we offer a comprehensive range of commercial locksmith services to meet your needs. From
                            commercial lock installation to efficient office lock repairs and replacements, we have you
                            covered. If you find yourself locked out of your office, our prompt and dependable team is
                            ready to assist you. We also specialize in file cabinet locks, safe opening, master key
                            systems, keyless entry, and resolving business lockouts. Count on Affordable Locksmith Tampa
                            for trusted and affordable business locksmith services in Tampa, FL.</p>
                    </div>
                    <div class="image-container">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipPGdS38RKaGkb4MRNoHP4EPn-cH7CtM9womU2uR=s3072-w3072-h1390-rw"
                            alt="Commercial Locksmith Services">
                    </div>
                </div>
            </div>
            <div class="section">
                <h2>Get in Touch</h2>
                <div class="google-form">
                    <iframe
                        src="https://docs.google.com/forms/d/e/1FAIpQLSfYpNqDZHpxW-MUArZUphuYTgiW7MNuQkebpfL8G8zZZrFjTA/viewform?embedded=true"
                        width="100%" height="2230" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                </div>
            </div>
            <div class="section">
                <h3>Auto Locksmith Tampa</h3>
                <div class="content-wrapper">
                    <div class="content">
                        <p>If you're in need of reliable automotive locksmith services in Tampa, FL, Affordable
                            Locksmith Tampa is here to help. As a trusted and affordable locksmith business, we
                            specialize in providing a wide range of auto locksmith services. If you find yourself locked
                            out of your car, our professional team can swiftly assist you. We also offer automotive key
                            repairs and replacements, key fob replacement, broken car key repairs, ignition repairs and
                            replacements, remote key programming, high-security key creation, and key extractions. Count
                            on Affordable Locksmith Tampa for skilled and licensed automotive locksmith services in
                            Tampa, FL. We're here to get you back on the road quickly and affordably.</p>
                    </div>
                    <div class="image-container">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipNANJub0L7IldjvB2BH5dFIxkypvHYincsME28z=s3072-w3072-h1390-rw"
                            alt="Auto Locksmith Services">
                    </div>
                </div>
            </div>
        </div>
        <!-- section 6 -->
        <div class="line"></div>
        <div class="section">
            <div class="section">
                <h3>Google Slides</h3>
                <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vTLWDOxTQuDUE5U0tWIzPXivpRpgTJavBAcq_sIw1CldptPgDbq72Cyg3wPsLtrrsNaTtqPYu7PlAiQ/embed?start=true&loop=true&delayms=3000"
                    frameborder="0" width="700" height="400" ></iframe>
            </div>

            <div class="section">
                <h3>Google Drawings</h3>
                <iframe src="https://docs.google.com/drawings/d/1GOw0JhiS2nb468O7UQirfRqv808WJmUWJaShfD4kXUs/edit?usp=sharing"
                    alt="Google Drawing" style="height: 400px; width: 800px;"> </iframe>
            </div>

            <div class="section">
                <h3>Google Calendar</h3>
                <iframe
                    src="https://calendar.google.com/calendar/embed?src=tonyberger534%40gmail.com&ctz=America%2FNew_York"
                    style="border: 0" width="700" height="400" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>

        <div class="section">
            <h2>Why Choose Affordable Locksmith Tampa?</h2>
            <div class="content-wrapper">
                <div class="content">
                    <p>When it comes to locksmith services in Tampa, FL, Affordable Locksmith Tampa stands out as the
                        top choice. Here's why you should choose us:</p>
                    <ul>
                        <li>Professionalism: Our team of locksmiths is highly professional, ensuring that we deliver
                            top-quality service with a courteous and customer-focused approach.</li>
                        <li>Skill and Expertise: With years of experience in the locksmith industry, our skilled
                            technicians have the knowledge and expertise to handle a wide range of locksmith needs, from
                            residential to commercial and automotive.</li>
                        <li>Licensing: We are a licensed locksmith business, which means we meet the legal requirements
                            and standards set by the industry. You can trust us to provide reliable and trustworthy
                            services.</li>
                        <li>Trusted Reputation: We have built a solid reputation in Tampa, FL, based on our commitment
                            to customer satisfaction and delivering excellent results. Our many satisfied customers can
                            attest to our reliable service.</li>
                        <li>Affordability: As our name suggests, we believe in providing affordable locksmith services
                            without compromising on quality. We offer competitive prices that fit within your budget.
                        </li>
                    </ul>
                    <p>Choose Affordable Locksmith Tampa for professional, skilled, licensed, trusted, and affordable
                        locksmith services in Tampa, FL. We are here to meet all your locksmith needs with excellence
                        and affordability.</p>
                </div>
                <div class="image-container">
                    <img src="https://lh3.googleusercontent.com/p/AF1QipNkHZ_wUdLgoyLf-cJtr_6IR_onmzDb78NABmPQ=s3072-w3072-h1390-rw"
                        alt="Affordable Locksmith Tampa">
                </div>
            </div>
        </div>

        <div class="section">
            <h2>Google Docs</h2>
            <iframe
                src="https://docs.google.com/document/d/e/2PACX-1vQQpZ4myyGhmLeCxdtWd_Dn8LwZ_11hdJ5OwSNZE8M1GsVSKIRZkkWHR8zPi1j42X8Wi9MSY8JwOxth/pub?embedded=true"
                style="height: 400px; width: 800px;"></iframe>
        </div>
        <div class="line"></div>

        <div class="section">
            <h2>Contact Us</h2>
            <br>
            <ul class="contact-list">
                <li>
                    <h4>Affordable Locksmith Tampa</h4>
                    <br>
                    <p>Tampa, FL 33611, USA</p>
                    <p>+1 (813) 625-7979</p>
                </li>
                <li>
                    <h4>Business Hours:</h4>
                    <br>
                    <p>Sun 7:00 AM - 11:00 PM</p>
                    <p>Mon 7:00 AM - 11:00 PM</p>
                    <p>Tue 7:00 AM - 11:00 PM</p>
                    <p>Wed 7:00 AM - 11:00 PM</p>
                    <p>Thu 7:00 AM - 11:00 PM</p>
                    <p>Fri 7:00 AM - 11:00 PM</p>
                    <p>Sat 7:00 AM - 11:00 PM</p>

                    <p>
                        <a href="tel:+18136257979"><button style=" background-color: #007bff;
                        color: #fff;
                        border: none;
                        padding: 12px 24px;
                        font-size: 18px;
                        border-radius: 5px;
                        cursor: pointer;">Call Now</button></a>
                    </p>

                </li>
                <li>
                    <h4>Service Areas:</h4>
                    <br>
                    <p>Tampa</p>
                    <p>Tampa Bay Area</p>
                    <p>Hillsborough County</p>
                    <p>Pinellas County</p>
                    <p>Pasco County</p>
                    <p>Tampa-St. Petersburg Area</p>
                </li>
            </ul>
        </div>


    </div>
    
    
    <div class="section">
        <h2 style="text-align: center;"> Find Us on Google</h2><br>
        <div class="container">
            <div class="google-maps-container">
                <div class="google-maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1801634.0299040005!2d-82.48146!3d28.121623!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eab2afab36e1f9f%3A0x39f056da6577fd19!2sAffordable%20Locksmith%20Tampa!5e0!3m2!1sen!2sin!4v1712339901660!5m2!1sen!2sin"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="google-my-maps">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1MEErQv7PYoiJp00pBWl0_A2WCHnY4Zg&ehbc=2E312F"
                        width="100%" height="100%"></iframe>
                </div>
            </div>
        </div>
        <!-- <div class="section"> -->


        <body>
            <footer>
                <div class="footerContainer">
                    <div class="socialIcons">

                        <a href="https://www.facebook.com/affordablelocksmithtampa 
                        "><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/affordablelocksmithtampafl/"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="https://twitter.com/locksmith_33611/"><i class="fa-brands fa-twitter"></i></a>
                        <a
                            href="https://www.google.com/maps/d/viewer?mid=1MEErQv7PYoiJp00pBWl0_A2WCHnY4Zg&ll=27.889701602299915%2C-82.52839030000001&z=17  "><i
                                class="fa-brands fa-google-plus"></i></a>
                        <a href="https://www.linkedin.com/company/affordable-locksmith-tampa/"><i
                                class="fa-brands fa-linkedin"></i></a>
                    </div>

                </div>
                <p>Copyright &copy;2024 | Affordable Locksmith Tampa</p>
    </div>
    </footer>

    <script>
        window.addEventListener('scroll', function () {
            var header = document.getElementById('header');
            header.classList.toggle('scrolled', window.pageYOffset > 0);
        });
    </script>
</body>

</html>

?>
