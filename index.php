<?php
        $message_sent = false;

        if (isset($_POST['phone']) && $_POST['phone'] != '') {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $userName = $_POST['name'];
                $userEmail = $_POST['email'];
                $userPhone = $_POST['phone'];
                $message = $_POST['message'];
                $messageSubject = "new-client";
        
                $to = "davidum77@yahoo.com";
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
                        <a class="current" href="index.html">
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
                        <a href="#">
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

    <main class="hero">
        <div id="iconics">
            <a href="https://www.facebook.com/profile.php?id=100085683403251" target="_blank"><img
                    src="img/facebook (1).png" alt=""></a>
            <a href="https://wa.me/+972528089417?text=היי+יהודה,+ אשמח+שתחזור+אלי"><img src="img/text-message.png"
                    alt=""></a>
            <a href="mailto: Uditangi@gmail.com"><img src="img/message.png" alt=""></a>
        </div>

        <a href="tel:0528089417">
            <button id="details" class="button-55 call-free" role="button"><img src="img/call.png" alt=""> 
                0528089417
             </button>
        </a>

        <div id="overlay">
            <div id="text">
                <img id="close-button" src="img/failed.png" alt="">
                <h2 id="ban-title">השארת פרטים לחזרה</h2>
                <p>השאירו פרטים ופנייה ואחזור אליכם בהקדם. ניתן לקבל ייעוץ ראשוני טלפוני ולקבוע פגישה ללא תשלום.</p>
                <form action="#" method="POST" class="callback-form">
                    <div class="form-control">
                        <label for="name"></label>
                        <input type="text" name="name" id="name" placeholder="שם פרטי ומשפחה" tabindex="1" required>
                    </div>
                    <div class="form-control">
                        <label for="email"></label>
                        <input type="email" name="email" id="email" placeholder="כתובת מייל" tabindex="2" required>
                    </div>
                    <div class="form-control">
                        <label for="phone"></label>
                        <input type="phone" name="phone" id="phone" placeholder="מספר טלפון" tabindex="3" required>
                    </div>
                    <div style="height: initial;" class="form-control">
                        <label for="message"></label>
                        <textarea name="message" id="message" placeholder="תוכן הודעה" tabindex="4"></textarea>
                    </div>
                    <!-- <input type="submit" value="Send" id="submit" class="btn"> -->
                    <div id="send">
                        <button type="submit" id="details" class="button-55 delete-some" role="button" style="display: block;"><img src="img/notepad.png" alt="">
                            סיום ושליחה
                        </button>
                    </div>
                </form>
                <!-- <button class="button-55 delete-some" role="button" style="display: block;"><img src="img/call.png" alt="">
                    0528089417
                </button> -->
            </div>
        </div>

        <img id="slide-photo" src="img/My project (2).webp" alt="תמונה של יועץ משכנתאות יהודה טנג'י">
        <!-- <p>
           <span>ליווי אישי לאורך כל הדרך</span> <br> החיסכון הטוב ביותר בשבילכם
        </p> -->
        <div id="intro-text">
            <h1> יהודה טנג'י יועץ משכנתאות <br> דואג לשקט הכלכלי של הבית שלכם</h1>
            <p>
                ליווי אישי לאורך כל הדרך - החיסכון הטוב ביותר בשבילכם
            </p>
            <div style="display: none;" id="home-links-div">
                <a class="btn" href="#">למידע נוסף לחצו</a>
            </div>
        </div>
    </main>

    <footer>
        <div id="logo-and-text">
            <img src="img/union.webp" alt="">
            <p>חבר בהתאחדות יועצי המשכנתאות</p>
        </div>
    </footer>



    <script src="script.js"></script>

    <?php
    endif;
    ?>
</body>

</html>