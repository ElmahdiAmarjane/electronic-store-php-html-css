<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">

    <style>
    .allcontactus {
        width: 100%;
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
        margin-top: 140px;
        padding: 0 10px;
        direction: rtl;
    }

    .contactus {
        width: 40%;
        max-width: 800px;
        margin: 10px;

        border: 2px solid #5223c2;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f94f;
        padding: 20px;
        height: max-content;
    }

    .contactus h1 {
        font-size: 24px;
        margin-bottom: 20px;
        text-align: center;
    }

    .cf {
        display: flex;
        flex-wrap: wrap;
        margin-top: 10px;
    }

    .cf .half {
        width: 100%;
        margin-bottom: 15px;
    }

    .cf .left,
    .cf .right {
        width: 100%;
    }

    .ourinfos h3,
    h2 {
        font-size: 20px;
        font-weight: bold;
        font-family: "Noto Kufi Arabic", sans-serif;
    }

    .ourinfos p {
        font-size: 16px;
        font-family: "Noto Kufi Arabic", sans-serif;
    }

    .ourinfos h2 {
        color: #3398E3
    }



    .boxsuccess {
        background-color: green;
        color: white;
        width: 100%;
        height: 60px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: "Noto Kufi Arabic", sans-serif;

    }
    .boxfaild{
        background-color: #d1173f;
        color: white;
        width: 100%;
        height: 60px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: "Noto Kufi Arabic", sans-serif;
    }

    input,
    textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #3398E3;
        border-radius: 4px;
        margin-bottom: 5px;
        box-sizing: border-box;
        font-family: "Noto Kufi Arabic", sans-serif;
        font-weight: 300;
        font-size: larger;
    }

    label {
        font-size: 12px;
        margin-bottom: 5px;
        display: block;
        font-family: "Noto Kufi Arabic", sans-serif;
        font-weight: bold;
    }


    .contactus input[type="submit"] {
        background: #3398E3;
        border: none;
        color: white;
        cursor: pointer;
        padding: 10px;
        font-size: 16px;
        border-radius: 8px;
    }

    .contactus input[type="submit"]:hover {
        background: #3398E4;
    }


     @media (max-width: 1200px) {
        .allcontactus {
        margin-top: 80px;
        padding: 0 0px;
        
    }
        .cf .left,
        .cf .right {
            width: 100%;
        }

        .contactus {
            width: 100%;
            max-width: 100%;
        margin: 10px 0;

        border: 0px solid #5223c2;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f94f;
        padding: 5px;
        height: max-content;
        }

        .cf {
            display: block;
            width: 100%;
        }
        .ourinfos h3,
    h2 {
        font-size: 16px;
        font-weight: bold;
        font-family: "Noto Kufi Arabic", sans-serif;
        padding-right : 10px;
    }

    .ourinfos p {
        padding-right : 10px;
        font-size: 14px;
        font-family: "Noto Kufi Arabic", sans-serif;
    }
    .boxfaild h3{
        font-size : 14px;
    }
 


    }


    </style>
</head>

<body>
    <h1><?php include '../header/header.php' ;?></h1>
    <?php include "../whatsapp.html" ;?>

    <div class="allcontactus">

        <div class="contactus">
            <form class="cf" action="../mail/sendMail.php" method="POST">
            <?php if (isset($_GET['mailsuccess'])): ?>
                <div class="boxsuccess">
                    <h3>تم إرسال البريد الإلكتروني بنجاح</h3>
                </div>

                <?php endif; ?>
                <?php if (isset($_GET['mailfaild'])): ?>
                <div class="boxfaild">
                    <h3>فشل في إرسال بريدك الإلكتروني، يرجى كتابة بريد إلكتروني صحيح</h3>
                </div>

                <?php endif; ?>

                <div class="half left cf">
                    <label for="input-email">البريد الإلكتروني</label>
                    <input type="text" id="input-email" placeholder="البريد الإلكتروني" name="email">
                </div>
                <div class="half right cf">
                    <label for="input-phone">رقم الهاتف</label>
                    <input type="text" id="input-phone" placeholder="رقم الهاتف" name="phone">
                </div>
                <div class="half cf">
                    <label for="input-subject">االموضوع</label>
                    <input type="text" id="input-subject" placeholder="الموضوع" name="subject">
                </div>
                <div class="half cf">
                    <label for="input-message">الرسالة</label>
                    <textarea rows="3" cols="33" id="input-message" placeholder="الرسالة" name="message"></textarea>
                </div>
                <input type="submit" value="أرسل طلبك الأن" id="input-submit" name="mailing">
                <!-- <?php if (isset($_GET['mailsuccess'])): ?>
                <div class="boxsuccess">
                    <h3>تم إرسال البريد الإلكتروني بنجاح</h3>
                </div>

                <?php endif; ?> -->
            </form>
        </div>
        <div class="ourinfos">
            <h3>للتواصل معنا عبر البريد الإلكتروني:</h3>
            <p> contact@mahal.ma</p>
            <h3>للتواصل معنا عبر الهاتف:</h3>
            <p> 0644332277 </p>
            <h3>العنوان :</h3>
            <p> أكادير، حي السلام كدا </p>
            <h2> سنكون سعداء بالتواصل معكم والإجابة عن أسئلتكم.</h2>
        </div>

    </div>


    <?php include '../footer/footer.html' ;?>
</body>

</html>