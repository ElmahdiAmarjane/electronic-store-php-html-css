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
            margin-top: 80px;
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

        .cf .left, .cf .right {
            width: 100%;
        }

        .ourinfos h3 , h2{
            font-size : 25px;
            font-weight : bold ; 
            font-family: "Noto Kufi Arabic", sans-serif;
        }
        .ourinfos p{
            font-size : 20px;
            font-family: "Noto Kufi Arabic", sans-serif;
        }
        .ourinfos h2{
            color : #5223c2
        }
        @media (max-width: 1200px) {
            .cf .left, .cf .right {
                width: 100%;
            }

            .contactus {
            width: 90%;
        }
        .cf  {
                display: block;
                width: 100%;
            }
        }

        input,textarea {
            width: 100%;
            padding: 20px;
            border: 2px solid #5223c2;;
            border-radius: 4px;
            margin-bottom: 10px;
            box-sizing: border-box;
            font-family: "Noto Kufi Arabic", sans-serif;
            font-weight: bold;
            font-size: larger;
        }

        label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
            font-family: "Noto Kufi Arabic", sans-serif;
            font-weight: bold;
        }


        .contactus input[type="submit"] {
            background: #5e12d8;
            border: none;
            color: white;
            cursor: pointer;
            padding: 15px;
            font-size: 18px;
            border-radius: 8px;
        }
        .contactus input[type="submit"]:hover {
            background: #9571eb;
        }
       

        .submitOrder input[type="submit"]:hover {
            background: #4a0da1;
        }
        
        
        

       
       

       
    </style>
</head>
<body>
    <h1><?php include '../header/header.php' ;?></h1>

    <div class="allcontactus">
    
        <div class="contactus">
            <form class="cf" action="../mail/sendMail.php" method="POST">
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
                    <textarea  rows="5" cols="33" id="input-message" placeholder="الرسالة" name="message"></textarea>
                </div>
                <input  type="submit" value="أرسل طلبك الأن" id="input-submit" name="submit">
            </form>
        </div>
        <div class="ourinfos">
              <h3>للتواصل معنا عبر البريد الإلكتروني:</h3> <p> contact@mahal.ma</p>
              <h3>للتواصل معنا عبر الهاتف:</h3> <p> 0644332277 </p>
              <h3>العنوان :</h3> <p> أكادير، حي السلام كدا </p>
              <h2> سنكون سعداء بالتواصل معكم والإجابة عن أسئلتكم.</h2>
        </div>
       
    </div>

    
    <?php include '../footer/footer.html' ;?>
</body>
</html>
