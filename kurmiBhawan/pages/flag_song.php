<!DOCTYPE html>
<html lang="hi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>जागो क़ुर्मी क्षत्रिय महान</title>
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Noto+Sans+Devanagari:wght@400;600;700&display=swap"
        rel="stylesheet">

    <style>
        .container {
            box-sizing: border-box;
            background-image: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)),
                url('https://images.unsplash.com/photo-1506744038136-46273834b3fb');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            backdrop-filter: blur(10px);

            border: 1px solid rgba(255, 255, 255, .14);
            padding: clamp(14px, 3vh, 36px);
            box-shadow: 0 12px 34px rgba(0, 0, 0, .4);
            color: white;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: clamp(12px, 2vh, 32px);
            padding-bottom: clamp(12px, 2vh, 32px);
            flex-direction: column;
            gap: 12px;
        }

        .title {
            /* responsive and smaller caps to fit on one screen */
            font-size: clamp(28px, 4vw, 42px);
            font-weight: 700;
            color: #FFD700;
            margin-bottom: 6px;
        }

        .subtitle {
            font-size: clamp(12px, 1.2vw, 16px);
            color: #ddd;
            margin-bottom: 18px;
            letter-spacing: 1.2px;
        }

        .line {
            width: 100px;
            height: 3px;
            background: #FFD700;
            margin: auto;
            margin-bottom: 20px;
            border-radius: 50px;
        }

        .poem {
            /* reduce font-size and line-height so stanzas fit vertically */
            font-size: clamp(12px, 1.6vw, 20px);
            line-height: 1.45;
            font-weight: 400;
            max-width: 980px;
        }

        .highlight {
            color: #FFD700;
            font-weight: 700;
            font-size: clamp(16px, 2.2vw, 26px);
        }

        .stanza {
            margin-bottom: 18px;
            padding-bottom: 12px;
            border-bottom: 1px solid rgba(255, 255, 255, .12);
        }

        .footer {
            margin-top: 8px;
            font-size: clamp(12px, 1vw, 14px);
            color: #ccc;
            letter-spacing: 1.2px;
        }

        @media(max-width:768px) {

            .container {
                padding: 18px;
                border-radius: 12px;
            }

            .title {
                font-size: 28px;
            }

            .poem {
                font-size: 14px;
                line-height: 1.45;
            }

            .highlight {
                font-size: 18px;
            }

        }
    </style>
</head>

<body>
    <?php include('../includes/header.php'); ?>
    <?php include('../components/navbar.php') ?>

    <div class="container">

        <h1 class="title">
            जागो क़ुर्मी क्षत्रिय महान
        </h1>

        <p class="subtitle">
            शौर्य • कर्म • इतिहास • नवजागरण
        </p>

        <div class="line"></div>

        <div class="poem">

            <div class="stanza">
                हे कूर्मि क्षत्रिय जाति महान,
                हे राष्ट्रधर्म धरती की शान<br>

                हे शौर्य शक्ति के महामान,
                हे कर्म धरती के किसान<br><br>

                <span class="highlight">
                    जागो कूर्मि क्षत्रिय महान...
                </span>
            </div>


            <div class="stanza">

                रघुवंश सूर्य के ज्योतिपुंज,
                तुम रणभेरी की महागूंज<br>

                हे वीर शिवा के महावंश,
                हे लौहपुरुष के लौह अंश<br>

                हे इतिहासों के महासपूत,
                हे देश धरा के क्रांतिदूत<br>

                अपनी गौरव-गरिमा को जान<br><br>

                <span class="highlight">
                    जागो कूर्मि क्षत्रिय महान...
                </span>

            </div>


            <div class="stanza">

                हे शास्त्र तुम्हारा सहज धर्म,
                हल थाम किया है कृषि कर्म<br>

                युग-युग तक देश की शक्ति बन,
                तुमने ही दिया जीवन का मर्म<br>

                हे वसुंधरा के महाछत्र,
                हे इतिहासों के स्वर्ण-पत्र<br>

                तुम देश धारा के महाप्राण<br><br>

                <span class="highlight">
                    जागो कूर्मि क्षत्रिय महान...
                </span>

            </div>


            <div class="stanza">

                अब जागो हमें करना विकास,
                त्यागो रूढ़ि व अंधविश्वास<br>

                नवजागृति की अब ले मशाल,
                जागो-जागो हे नौनीहाल<br>

                हमको करना स्वजातीय विकास,
                नव जागृति की अब ले मशाल<br>

                आगे बढ़ना है सीना तान<br><br>

                <span class="highlight">
                    जागो कूर्मि क्षत्रिय महान...
                </span>

            </div>

        </div>


        <div class="footer">
            कर्म • साहस • संगठन • स्वाभिमान
        </div>

    </div>

</body>

</html>