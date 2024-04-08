<?php
echo <!DOCTYPE html>
<html>

<head>
    <title>Affordable Locksmith Tampa | Top Locksmith Services in Tampa, FL</title>
    <link rel="icon" type="favicon"
        href="https://lh3.googleusercontent.com/p/AF1QipMSclbfIu0j8BxfDXLTCSRV6vXQxGngmvrNYFLG=s3072-w3072-h1390-rw">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="description"
        content="Welcome to Affordable Locksmith Tampa, the premier locksmith service provider in Tampa, FL. Our licensed professionals offer top-tier locksmith services.">


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

        .center-content {
            text-align: justify;
    margin-left: 20px; /* Adjust the left margin as needed */
  
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
        <h1>About US</h1>
        <a href="tel:+18136257979"><button>Call Now</button></a>
    </div>
<br>
<br>
    <p style="font-family: Arial, Helvetica, sans-serif;  margin-left: 20px; text-align: justify;
    margin: 0 auto;
    padding: 20px; ">
        Welcome to Affordable Locksmith Tampa! We are a professional locksmith service based in Tampa, Florida,
        dedicated to providing our clients with the highest quality services at competitive prices. With a team of
        experienced and certified locksmiths, we handle a wide range of lock and security issues, offering residential,
        commercial, automotive, and emergency locksmith services. Our commitment is to ensure prompt and reliable
        assistance tailored to your needs, whether you require lock replacement, combination changes, or lock repairs.
        At Affordable Locksmith Tampa, customer satisfaction is our top priority, and we strive to deliver the best
        possible experience with every service. Trust our skilled locksmiths to provide you with superior locksmith
        solutions. We look forward to the opportunity to serve you and exceed your expectations.
    </p>
    <br>
    <h2 style="color: #007bff; margin-left: 20px;">Find US Online at:</h2>
    <br>
<div id="links-container"></div>

<br>
<br>
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
        window.addEventListener('DOMContentLoaded', (event) => {
  // Array containing your links
  const links = [
    "https://www.facebook.com/affordablelocksmithtampa",
    "https://www.manta.com/c/m1rdbmc/affordable-locksmith-tampa",
    "https://porch.com/tampa-fl/locksmiths/affordable-locksmith-tampa/pp",
    "https://nextdoor.com/pages/affordable-locksmith-tampa-tampa-fl/",
    "https://www.merchantcircle.com/affordable-locksmith-tampa-tampa-fl",
    "https://ezlocal.com/fl/tampa/locksmith/0917501519",
    "https://www.brownbook.net/business/51111234/affordable-locksmith-tampa",
    "https://www.ailoq.com/affordable-locksmith-tampa",
    "https://www.storeboard.com/affordablelocksmithtampa",
    "https://ebusinesspages.com/Affordable-Locksmith-Tampa_einub.co",
    "https://www.techdirectory.io/professional-services/affordable-locksmith-tampa",
    "https://www.tuugo.us/Companies/affordable-locksmith-tampa/0310006918867",
    "https://www.startus.cc/company/affordable-locksmith-tampa",
    "https://sites.bubblelife.com/community/affordable_locksmith_tampa",
    "https://www.callupcontact.com/b/businessprofile/Affordable_Locksmith_Tampa/8245910",
    "https://us.enrollbusiness.com/BusinessProfile/6037053/Affordable-Locksmith-Tampa-Tampa-FL-33611/Home",
    "https://www.n49.com/biz/5143212/affordable-locksmith-tampa/",
    "http://www.askmap.net/location/6364387/usa/affordable-locksmith-tampa",
    "https://www.2findlocal.com/b/14570994/affordable-locksmith-tampa-tampa-florida",
    "https://www.whodoyou.com/biz/2116559/affordable-locksmith-tampa-fl-us",
    "https://www.cityfos.com/company/Affordable-Locksmith-in-Tampa-FL-22866429.htm",
    "https://www.cityof.com/fl/tampa/affordable-locksmith-tampa-5600481",
    "https://globalcatalog.com/affordablelocksmithtampa.us",
    "https://www.cylex.us.com/company/affordable-locksmith-tampa-36638472.html",
    "https://www.a-zbusinessfinder.com/business-directory/Affordable-Locksmith-Tampa-Tampa-Florida-USA/33697247/",
    "https://www.find-us-here.com/businesses/Affordable-Locksmith-Tampa-Tampa-Florida-USA/33697247/",
    "https://www.golocal247.com/biz/affordable-locksmith-tampa/tampa-fl/1299298",
    "https://www.townplanner.com/directory/184687/",
    "https://www.fyple.com/company/affordable-locksmith-tampa-ipk7ter/",
    "https://businesslistingplus.com/business-listings/affordable-locksmith-tampa.html",
    "https://justpaste.it/a0jro",
    "https://pingdirapp58.directoryup.com/florida/tampa/top-level-category/affordable-locksmith-tampa",
    "https://www.insertbiz.com/listing/tampa-affordable-locksmith-tampa/",
    "https://en.gravatar.com/locksmithtampa09",
    "https://www.boombusinessdirectory.com.au/florida/tampa/professional-business-services/affordable-locksmith-tampa",
    "http://www.ehubdirectory.com/tampa-fl-33611/business/affordable-locksmith-tampa",
    "https://www.getyourpros.com/united-states/tampa/home-builders/affordable-locksmith-tampa/33611/fl",
    "https://mapfling.com/q26hir7",
    "https://www.myafricadirectory.com/tampa-fl-33611/home-services/affordable-locksmith-tampa",
    "https://pastelink.net/2z6huc1q",
    "https://penzu.com/public/3a806b1d",
    "https://pingdirapp57.directoryup.com/florida/tampa/top-level-category/affordable-locksmith-tampa",
    "https://sublimedir.net/listing/affordable-locksmith-tampa-458172",
    "https://target-directory.com/listing/affordable-locksmith-tampa-526122",
    "http://www.vetbizlive.com/tampa-fl-33611/business-services/affordable-locksmith-tampa",
    "http://communitiezz.com/directory/listingdisplay.aspx?lid=42756",
    "http://localbrowsed.com/directory/listingdisplay.aspx?lid=41387",
    "https://www.n2local.com/us/fl/tampa/services+wanted/business/20230328030802m04K7C7qwsD",
    "https://issuu.com/locksmithtampa09",
    "https://www.anibookmark.com/business/affordable-locksmith-tampa-bs113900.html",
    "http://www.lacartes.com/business/Affordable-Locksmith-Tampa/2260269",
    "https://www.facebook.com/people/Affordable-Locksmith-Tampa/100083623486863/",
    "http://www.southeastvalley.com/tampa-fl/home-helpers/affordable-locksmith-tampa",
    "https://justpaste.it/affordablelocksmithfl",
    "https://www.freeads24.com/index.php?option=com_marketplace&page=show_ad&catid=0&adid=599812&Itemid=26",
    "https://www.webwiki.com/affordablelocksmithfl.com",
    "https://batchgeo.com/map/0d6f4c99acf8a98a60a2130e68c6798c",
    "http://www.greenvillecityguide.com/tampa-fl/local-services/affordable-locksmith-tampa",
    "https://118free.net/listings/tampa-fl-affordable-locksmith-tampa/",
    "https://upsdirectory.com/listing/affordable-locksmith-tampa-551856",
    "http://localadvertised.com/directory/listingdisplay.aspx?lid=43461",
    "http://localbundled.com/directory/listingdisplay.aspx?lid=40682",
    "https://unix.stackexchange.com/users/568094/affordable-locksmith-tampa?tab=profile",
    "https://english.stackexchange.com/users/477780/affordable-locksmith-tampa?tab=profile",
    "https://exampledir.com/listing/affordable-locksmith-tampa-51333",
    "http://www.4mark.net/story/9181767/affordable-locksmith-tampa",
    "https://www.scribblemaps.com/maps/view/Affordable-Locksmith-Tampa/nX3CAjemsX",
    "https://www.b2bmit.com/showroom-11078708/2.htm",
    "http://flokii.com/businesses/view/100880/affordable-locksmith-tampa",
    "https://gaming.stackexchange.com/users/301689/affordable-locksmith-tampa?tab=profile",
    "http://listingzz.com/directory/listingdisplay.aspx?lid=51544",
    "http://listizze.com/directory/listingdisplay.aspx?lid=33845",
    "https://apple.stackexchange.com/users/492916/affordable-locksmith-tampa?tab=profile",
    "https://flipboard.com/@affordablel4it6/affordable-locksmith-tampa-bcau7kqvy",
    "https://populardirectory.biz/listing/affordable-locksmith-tampa-401346",
    "https://huludirectory.com/listing/affordable-locksmith-tampa-487435",
    "https://www.mapcustomizer.com/map/affordablelocksmithfl",
    "https://uebermaps.com/maps/94285-affordable-locksmith-tampa",
    "https://dreevoo.com/profile_info.php?pid=549322",
    "https://padzee.com/affordablelocksmithfl",
    "https://www.eliteservicesnetwork.com/tampa-fl/home-services/affordable-locksmith-tampa",
    "https://maphub.net/LocksmithTampa09/map",
    "https://a2place.com/listing/affordable-locksmith-tampa-522137",
    "https://directory6.org/listing/affordable-locksmith-tampa-504159",
    "https://writexo.com/share/5h75pp27",
    "http://greentornado.com/directory/listingdisplay.aspx?lid=35793",
    "http://homerepairzz.com/directory/listingdisplay.aspx?lid=38849",
    "https://rentry.co/sbabz",
    "http://www.axethrowingbars.com/tampa-fl/top-level-category/affordable-locksmith-tampa",
    "http://www.ttbizonline.com/florida/tampa/home-and-business-services/affordable-locksmith-tampa",
    "https://telegra.ph/Affordable-Locksmith-Tampa-04-06",
    "https://letterboxd.com/locksmitht21/",
    "https://domainnamesseo.com/listing/affordable-locksmith-tampa-460939",
    "https://411freedirectory.com/listing/affordable-locksmith-tampa-484622",
    "http://dailycategories.com/directory/listingdisplay.aspx?lid=32416",
    "http://www.digitalizze.com/directory/listingdisplay.aspx?lid=39632#.ZC7b1XZBzIU",
    "https://tex.stackexchange.com/users/294513/affordable-locksmith-tampa?tab=profile",
    "https://justpaste.me/kNS41",
    "http://hillsboroughcounty.bizlistusa.com/business/5355804.htm?guid=B8FCA951-CA8B-4822-8245-5D0B1644AB20",
    "http://hillsboroughcountyfl.businesslistus.com/business/5355804.htm?guid=B8FCA951-CA8B-4822-8245-5D0B1644AB20",
    "https://aweblist.org/listing/affordable-locksmith-tampa-666189",
    "http://businesseshq.com/directory/listingdisplay.aspx?lid=48089",
    "http://businessezz.com/directory/listingdisplay.aspx?lid=56150",
    "https://hotdirectory.net/listing/affordable-locksmith-tampa-442608",
    "http://tampa.bizlistusa.com/business/5355804.htm?guid=B8FCA951-CA8B-4822-8245-5D0B1644AB20",
    "http://tampa.businesslistus.com/business/5355804.htm?guid=B8FCA951-CA8B-4822-8245-5D0B1644AB20",
    "https://www.cityyap.com/tampa-fl/local-home-services/affordable-locksmith-tampa",
    "https://paste2.org/eFBxeE34",
    "https://dyrectory.com/listings/affordable-locksmith-tampa",
    "https://www.nemovingandstorage.com/tampa-fl/movers/affordable-locksmith-tampa",
    "https://www.4shared.com/u/ke20jA5l/affordablelocksmithfl.html",
    "https://anotepad.com/notes/982h2j89",
    "https://posteezy.com/affordable-locksmith-tampa",
    "https://www.qdexx.com/US/FL/Tampa/Business%20Services/US-FL-Tampa-Business-Services-Affordable-Locksmith-Tampa-Affordable-Locksmith-Tampa",
    "http://www.getjob.us/usa-jobs-view/job-posting-840460-Affordable-Locksmith-Tampa.html",
    "http://ratefame.com/profile/6088700",
    "https://advertisingflux.com/business-directory-2/affordable-locksmith-tampa/",
    "https://pastebin.com/arLk1Nrn",
    "https://www.cybo.com/US-biz/affordable-locksmith-tampa_10",
    "https://www.whofish.org/business/Tampa/FL/Affordable_Locksmith_Tampa/250339.aspx",
    "https://fl-tampa.cataloxy.us/firms/affordablelocksmithfl.com.htm",
    "https://pr.business/affordable-locksmith-tampa-tampa-florida",
    "https://florida.bizhwy.com/affordable-locksmith-tampa-id73369.php",
    "https://us.centralindex.com/search/33611/affordable-locksmith-tampa",
    "https://www.bizoforce.com/business-directory/affordable-locksmith-tampa/",
    "https://freebusinessdirectory.com/search_res_show.php?co=511261",
    "https://www.dealerbaba.com/suppliers/security-systems-services/electronic-locks-latches/affordable-locksmith-tampa.html",
    "https://www.breken.com/ylm/ylm_comp_detail.aspx?comp_id=650244&name=Affordable+Locksmith+Tampa&f=Hillsborough_FL",
    "https://www.freelistingusa.com/listings/affordable-locksmith-tampa",
    "https://www.addonbiz.com/listing/tampa-affordable-locksmith-tampa/",
    "https://www.bunity.com/affordable-locksmith-tampa",
    "https://www.b2bco.com/affordablelocksmithfl/",
    "https://trueen.com/business/listing/affordable-locksmith-tampa/303104",
    "https://c.opporty.com/company/fl/tampa/affordable-locksmith-tampa-18599772",
    "https://securecc.smartinsight.co/profile/13411139/AffordableLocksmithTampa",
    "https://www.localstar.org/affordable-locksmith-tampa",
    "http://www.where2go.com/binn/b_search.w2g?function=detail&type=quick&listing_no=2072153&_UserReference=7F0000014653F000883C5C2D24F064157ADD",
    "http://connect.releasewire.com/company/affordable-locksmith-tampa-296111.htm",
    "https://www.beqbe.com/p/affordable-locksmith-tampa",
    "http://www.gbguides.com/affordable-locksmith-tampa.html",
    "https://nearfinderus.com/en/business/fl/tampa/security-locks/affordable-locksmith-tampa_21873863+8.html",
    "https://www.iformative.com/product/affordable-locksmith-tampa-p2236405.html",
    "https://youbiz.com/listing/affordable-locksmith-tampa.html",
    "https://www.florida-businessdirectory.com/add.php",
    "https://affordable-locksmith-tampa.hub.biz/",
    "http://www.gobestnow.com/directory/listingdisplay.aspx?lid=3215043",
    "https://www.semfirms.com/profile/affordable-locksmith-tampa/",
    "https://www.topgoogle.com/listing/affordable-locksmith-tampa/",
    "https://www.linkcentre.com/profile/affordablelocksmithfl/",
    "https://www.gbibp.com/company/affordable-locksmith-tampa",
    "https://www.todaysdirectory.com/listing/affordable-locksmith-tampa/",
    "http://www.fidofindit.com/business/security/affordable-locksmith-tampa-l52528.html",
    "http://businesses.avidlocals.com/listing/affordable-locksmith-tampa.html",
    "https://bizidex.com/en/affordable-locksmith-tampa-locksmith-396214",
    "https://www.kpfinder.com/products/locksmith-affordable-locksmith-tampa",
    "https://fireflylisting.com/listings/affordable-locksmith-tampa",
    "https://companylistingnyc.com/listings/affordable-locksmith-tampa/",
    "https://www.alladdress.us/company-address-phone-email-USA-online/locks-locksmiths/4012701/affordable-locksmith-tampa-florida-tampa-813-625-7979",
    "https://www.acompio.us/Affordable-Locksmith-Tampa-36759882.html",
    "https://www.usbusinessdirectorylistings.com/listing/affordable-locksmith-tampa/",
    "http://www.add-page.com/details/page_582614.php",
    "https://clickfirst.com/places/united-states/florida/tampa/security-systems/affordable-locksmith-tampa/",
    "http://businesses.prospotlight.com/listing/affordable-locksmith-tampa.html",
    "https://www.addadeal.com/florida/tampa/home-improvement-products/affordable-locksmith-tampa",
    "http://hillsboroughcounty.bizlistusa.com/business/5341705.htm"
  ];

  // Reference to the container where you want to insert the links
  const container = document.getElementById('links-container');
  container.classList.add('center-content');


  // Loop through each link and generate the HTML dynamically
  links.forEach(link => {
    const linkElement = document.createElement('a');
    linkElement.setAttribute('href', link);
    linkElement.setAttribute('target', '_blank');
    linkElement.style.color = '#226e93'; // Set link color
    linkElement.style.textDecoration = 'none'; // Remove underline
    linkElement.textContent = link; // You can set the link text as needed
    container.appendChild(linkElement);
    container.appendChild(document.createElement('br')); // Optional: Add line breaks between links
    container.appendChild(document.createElement('br')); // Increase line break space after each link
  });
});

    </script>
</body>

</html>
?>
