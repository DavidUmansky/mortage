<?php
        $message_sent = false;

        if (isset($_POST['phone']) && $_POST['phone'] != '') {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $userName = $_POST['name'];
                $userEmail = $_POST['email'];
                $userPhone = $_POST['phone'];
                $message = $_POST['message'];
                $messageSubject = "new-client";
        
                $to = "davidu7777@gmail.com";
                $body = "";
        
                $body .= "From: " . $userName . "\r\n";
                $body .= "Phone: " . $userPhone . "\r\n";
                $body .= "Message: " . $message . "\r\n";
        
                mail($to,$messageSubject,$body);

                $message_sent = true;
            }
        }
?>

<!DOCTYPE html>
<html lang="he" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="img/interest-rate.png">
    <!-- <meta name="description"
        content="סדנת ציור מנדלות בירושלים ובכל הארץ. סדנת ציור מנדלה. סדנת מנדלות בירושלים. שיעור ציור מנדלה. חוג ציור לילדים. סדנת ציור לילדים.">
    <meta name="keywords"
        content="סדנת ציור מנדלות, חוג ציור, סדנת ציור מנדלה, סדנת מנדלות בירושלים, שיעור ציור מנדלה, חוג ציור לילדים, טיפול באומנות, סדנת ציור לדתיים, סדנת ציור נפרדת, סדנת ציור ירושלים"> -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <title>סדנת מנדלות בירושלים ובכל הארץ|ציור מנדלות|חוג ציור|סדנת ציור לילדים|</title> -->
    <title>יהודה טנג'י - יועץ משכנתאות בכיר</title>
</head>

<body style="overflow: hidden;">

    <header>
        <div class="navbar">
            <div id="logo">
                <img id="slide-photo" src="img/nav-logo.jpg" alt="הלוגו של יהודה טנגי - יועץ משכנתאות">
                <div id="logo-text">
                    <span>יהודה טנג'י</span>
                    <h1>יועץ משכנתאות</h1>
                </div>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="index.html">
                            בית
                        </a>
                    </li>
                    <li>
                        <a href="about.html">
                            אודות
                        </a>
                    </li>
                    <li>
                        <a href="services.html">
                            שירותים
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            המלצות
                        </a>
                    </li>
                    <li>
                        <a href="#" class="current">
                            יצירת קשר
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <?php
    if($message_sent):
    ?>
     
     <div id="text2">
        <h2 id="ban-title">הפנייה נקלטה בהצלחה</h2>
        <p>
            הפרטים נשמרו, אחזור אליכם בהקדם &#128515;
        </p>
        <div>
            <img src="img/306159472_104538199078960_4718250514849944119_n.jpg" alt="">
            <a href="index.html">
                <button id="details" class="button-55 call-free" role="button"> 
                        חזרה לאתר
                 </button>
            </a>
        </div>
    </div>


    <?php
    else:
    ?>    


    <main>
        <section class="flex-columns">
            <div class="row3">
                <div class="column">
                    <div class="column-1">
                        <img src="img/gal12.jpg" alt="">
                    </div>
                </div>
                <div class="column">
                    <div class="column-2 bg-light">
                        <h2>ייעוץ ללא עלות</h2>
                        <form action="#" method="POST" class="callback-form">
                            <div class="form-control">
                                <label for="name"></label>
                                <input type="text" name="name" id="name" placeholder="שם פרטי ומשפחה" tabindex="1"
                                    required>
                            </div>
                            <div class="form-control">
                                <label for="email"></label>
                                <input type="email" name="email" id="email" placeholder="כתובת מייל" tabindex="2"
                                    required>
                            </div>
                            <div class="form-control">
                                <label for="phone"></label>
                                <input type="phone" name="phone" id="phone" placeholder="מספר טלפון" tabindex="3"
                                    required>
                            </div>
                            <div style="height: initial;" class="form-control">
                                <label for="message"></label>
                                <textarea name="message" id="message" placeholder="תוכן הודעה" tabindex="4"></textarea>
                            </div>
                            <div id="send">
                                <button type="submit" id="details" class="button-55 delete-some" role="button"
                                    style="display: block;"><img src="img/notepad.png" alt="">
                                    סיום ושליחה
                                </button>
                            </div>
                        </form>

                        <h2>כתובת</h2>
                        <p>מושב ניר עקיבא</p>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13611.832698625636!2d34.64111818305912!3d31.47033670217714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x150287ab9b5f9c39%3A0x9a1c1a874d3c2e9f!2sNir%20Akiva!5e0!3m2!1sen!2sil!4v1686778097835!5m2!1sen!2sil"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="script.js"></script>

    <?php
    endif;
    ?>
</body>

</html>