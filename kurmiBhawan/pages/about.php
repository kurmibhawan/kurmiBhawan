<!doctype html>
<html lang="hi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/logo23.png">
    <title>कूर्मि क्षत्रिय सभा, लखनऊ - आधिकारिक वेबसाइट</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        :root {
            --primary-color: #1a5276;
            --secondary-color: #2e86c1;
            --accent-color: #f39c12;
            --light-bg: #f8f9fa;
            --dark-text: #2c3e50;
            --border-color: #d6dbdf;
        }

        body {
            font-family: "Poppins", sans-serif;
            color: var(--dark-text);
            background-color: var(--light-bg);
            line-height: 1.6;
        }

        /* ── Reset / base ── */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        /* ── Container ── */
        .container {
            width: 100%;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 15px;
            padding-right: 15px;
        }

        .my-4 {
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .mb-5 {
            margin-bottom: 3rem;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        .mb-1 {
            margin-bottom: 0.25rem;
        }

        .mb-0 {
            margin-bottom: 0;
        }

        .mt-4 {
            margin-top: 1.5rem;
        }

        .me-2 {
            margin-right: 0.5rem;
        }

        /* ── Row / Col grid ── */
        .row {
            display: flex;
            /* flex-wrap: wrap; */
            margin-left: -12px;
            margin-right: -12px;
        }

        .row>* {
            padding-left: 12px;
            padding-right: 12px;
        }

        .g-4 {
            gap: 1.5rem;
        }

        .g-4>* {
            padding-left: 0;
            padding-right: 0;
        }

        .col-12 {
            width: 100%;
        }

        .col-md-4 {
            width: 100%;
        }

        .col-md-6 {
            width: 100%;
        }

        .col-md-8 {
            width: 100%;
        }

        @media (min-width: 768px) {
            .col-md-4 {
                width: 33.3333%;
            }

            .col-md-6 {
                width: 50%;
            }

            .col-md-8 {
                width: 66.6667%;
            }
        }

        /* align-items-center on .row */
        .align-items-center {
            align-items: center;
        }

        /* ── Typography helpers ── */
        .fw-bold {
            font-weight: 700;
        }

        .small {
            font-size: 0.875em;
        }

        .text-justify {
            text-align: justify !important;
        }

        /* ── Image ── */
        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .w-100 {
            width: 100%;
        }

        .shadow {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        /* ── List group ── */
        .list-group {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .list-group-flush .list-group-item {
            border-left: none;
            border-right: none;
            border-radius: 0;
        }

        .list-group-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 1rem;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-top: none;
        }

        .list-group-item:first-child {
            border-top: 1px solid rgba(0, 0, 0, 0.125);
        }

        /* ── Badge ── */
        .badge {
            display: inline-block;
            padding: 0.35em 0.65em;
            font-size: 0.75em;
            font-weight: 700;
            color: #fff;
            white-space: nowrap;
        }

        .bg-primary {
            background-color: var(--primary-color, #0d6efd);
        }

        .rounded-pill {
            border-radius: 50rem;
        }

        /* ── d-flex helpers ── */
        .d-flex {
            display: flex;
        }

        .justify-content-between {
            justify-content: space-between;
        }

        /* ── Page / section titles ── */
        .page-title {
            color: var(--primary-color);
            font-weight: 700;
            border-bottom: 2px solid var(--accent-color);
            padding-bottom: 10px;
            margin-bottom: 25px;
        }

        .section-title {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 20px;
            position: relative;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: var(--accent-color);
        }

        /* ── Card ── */
        .card {
            border: 1px solid var(--border-color);
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
            margin-bottom: 20px;
        }

        .card:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: var(--primary-color);
            color: white;
            font-weight: 600;
            border-bottom: 1px solid var(--border-color);
            padding: 0.75rem 1rem;
        }

        .card-body {
            padding: 1rem;
        }

        /* ── Info box ── */
        .info-box {
            background: white;
            border-left: 4px solid var(--secondary-color);
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        /* ── Timeline ── */
        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: var(--secondary-color);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: white;
            border: 4px solid var(--secondary-color);
            border-radius: 50%;
            top: 15px;
            right: -13px;
            z-index: 1;
        }

        .left {
            left: 0;
        }

        .right {
            left: 50%;
        }

        .right::after {
            left: -13px;
        }

        .timeline-content {
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* ── Back to top ── */
        #backToTopBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: var(--primary-color);
            color: white;
            cursor: pointer;
            padding: 12px 15px;
            border-radius: 50%;
            font-size: 18px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            transition: all 0.3s;
        }

        #backToTopBtn:hover {
            background-color: var(--secondary-color);
        }
    </style>
</head>

<body>
    <?php include('../components/navbar.php') ?>
    <div class="container my-4">
        <h2 class="page-title">हमारे बारे में</h2>

        <!-- About Section -->
        <section id="about" class="mb-5">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500">
                    <img src="/Content/images/Slider.jpg" alt="कूर्मि क्षत्रिय सभा भवन" class="img-fluid shadow w-100"
                        style="border:2px dotted orangered; padding:10px; border-radius:0px;">
                </div>
                <div class="col-md-6" data-aos="fade-down" data-aos-duration="1500">
                    <h3 class="section-title fw-bold">हमारा इतिहास</h3>
                    <p class="text-justify"
                        style="line-height: 32px; text-align: justify !important; color:black !important;">
                        कूर्मि क्षत्रिय सभा, लखनऊ एक ऐसा संगठन है जिसने समाज सेवा और अपने समुदाय के
                        उत्थान के लिए अटूट समर्पण दिखाया है। वर्ष 1983 में गठित और 7 जुलाई 1984 को
                        पंजीकरण संख्या 771/1984 के तहत विधिवत पंजीकृत, इस सभा की स्थापना उस समय हुई जब
                        अखिल भारतीय कूर्मि क्षत्रिय महासभा उत्तर प्रदेश में निष्क्रिय थी।
                    </p>
                    <p class="text-justify"
                        style="line-height: 32px; text-align: justify !important; color: black !important;">
                        दूरदर्शी डॉ. आर.डी. कटियार के नेतृत्व और श्री राम नारायण चौधरी, डॉ. सत्यवान,
                        प्रो. रामकिशोर, डॉ. रामसरन कटियार, श्री अशोक कटियार, श्री जे.एन. सचान, श्री
                        श्याम मनोहर सिंह, श्री हरीश वर्मा, श्री ओमप्रकाश वर्मा, उपनिदेशक कृषि एवं
                        पशुपालन श्री देशराज गंगवार (मैलानी खीरी) जैसे समर्पित व्यक्तियों के सहयोग से इस
                        संस्था ने जन्म लिया।
                    </p>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <p class="text-justify"
                        style="line-height: 32px; text-align: justify !important; color: black !important;">
                        इस सभा के स्थापना के समय, श्री महेंद्र सिंह गंगवार, जो अखिल भारतीय कूर्मि
                        क्षत्रिय महासभा के सेवानिवृत्त डी.जी.पी. थे, ने अध्यक्ष के रूप में मार्गदर्शन
                        प्रदान किया। प्रारंभ में, सभा का कार्यक्षेत्र केवल लखनऊ जिले तक सीमित था, लेकिन
                        इसके बढ़ते प्रभाव और समुदाय की जरूरतों को देखते हुए, इसे उत्तर प्रदेश तक
                        विस्तारित किया गया। यह संस्था की प्रगति और समर्पण का प्रमाण है कि वर्ष 2019 में
                        इसे राष्ट्रीय स्तर का दर्जा प्राप्त हुआ। इसी वर्ष (2019-20) में, आयकर विभाग ने
                        कूर्मि क्षत्रिय सभा को धारा 80G और धारा 12A के तहत आयकर से छूट प्रदान की, जो
                        इसकी पारदर्शिता और सामाजिक कार्यों के प्रति प्रतिबद्धता को दर्शाता है।
                    </p>
                    <p class="text-justify"
                        style="line-height: 32px; text-align: justify !important; color: black !important;">
                        सभा का मुख्यालय लखनऊ के फरीदी नगर में पिकनिक स्पॉट रोड पर स्थित कूर्मि क्षत्रिय
                        भवन में संचालित है। और इस भवन का क्षेत्रफल 7315 वर्गफुट है। इस भवन की आधारशिला 8
                        नवंबर 1992 को तत्कालीन विधानसभा उपाध्यक्ष श्री राम आसरे वर्मा के कर-कमलों द्वारा
                        रखी गई थी। इसके बाद, पटेल कल्याण प्रतिष्ठान भवन (कूर्मि भवन) का आंशिक निर्माण
                        पूरा होने पर 1 जून 1997 को तत्कालीन मुख्यमंत्री श्री कल्याण सिंह ने इसका
                        लोकार्पण किया। मुख्यमंत्री कल्याण सिंह द्वारा प्रदत्त ₹500000 (पांच लाख रूपये
                        मात्र) की सहायता राशि से भूतल पर छत्रपति शिवाजी हाल और उससे संलग्न कक्ष,
                        बाउंड्री वॉल का निर्माण और भूखंड की कीमत का भुगतान संभव हो सका।
                    </p>
                    <p class="text-justify"
                        style="line-height: 32px; text-align: justify !important; color: black !important;">
                        भवन के विकास में कई व्यक्तियों और समुदायों ने महत्वपूर्ण योगदान दिया है। भूतल पर
                        वर्ष 1996 में प्रथम अध्यक्ष डॉ. आर.डी. कटियार द्वारा गोपीनाथ चौधरी स्मृति कक्ष
                        और पूर्व मंत्री श्री संग्राम सिंह द्वारा ज्ञान प्रकाश कटियार स्मृति कक्ष निर्मित
                        कराए गए। भूतल पर ही कक्ष संख्या 5 का निर्माण मुख्यमंत्री सहायता कोष से हुआ, जबकि
                        डेंटल क्लीनिक कक्ष, जिसे अशोक कटियार स्मृति कक्ष के रूप में जाना जाता है, का
                        निर्माण फर्रूखाबाद के लोगों के उदार अंशदान से संभव हो पाया। भूतल पर स्थित शिवाजी
                        हाल की आधारशिला सहकारिता मंत्री श्री रामआसरे वर्मा और राज्य मंत्री श्री संग्राम
                        सिंह ने संयुक्त रूप से रखी थी, और इसका लोकार्पण सिंचाई मंत्री श्री ओम प्रकाश
                        सिंह द्वारा किया गया। भूतल पर स्थित क्लीनिक कक्ष का निर्माण 2007 में पूर्व
                        अध्यक्ष श्री राम नारायण चौधरी द्वारा कराया गया और इसका लोकार्पण 30 मार्च 2008 को
                        सेवानिवृत्त आई.ए.एस. श्री बी.डी. सिंह ने किया। अध्यक्ष कक्ष, जो भूतल पर ही स्थित
                        है, का निर्माण विधान परिषद सदस्य श्री एस.पी. सिंह द्वारा 2004 में कराया गया और 2
                        अप्रैल 2005 को उन्हीं के द्वारा लोकार्पित किया गया। भूतल के आंगन हाल का निर्माण
                        तत्कालीन परिवहन मंत्री और प्रदेश अध्यक्ष श्री स्वतंत्र देव सिंह द्वारा 2019-20
                        में विधायक निधि से कराया गया, और 4 अप्रैल 2021 को मंत्री श्री स्वतंत्र देव सिंह,
                        मंत्री श्री मुकुट बिहारी वर्मा, सांसद श्रीमती रेखा वर्मा और सांसद श्री आर.के.
                        पटेल के कर-कमलों से इसका लोकार्पण हुआ।
                    </p>
                    <p class="text-justify"
                        style="line-height: 32px; text-align: justify !important; color: black !important;">
                        प्रथम तल पर डॉ. आर.डी. कटियार मेमोरियल हॉल का निर्माण संस्था के स्वयं के कोष से
                        किया गया। इसकी आधारशिला 27 जून 2009 को श्री बेनी प्रसाद वर्मा, श्री राकेश सचान,
                        श्री बालकुमार पटेल, सांसद श्री आर.के. पटेल और विधायक श्री मदन गोपाल वर्मा द्वारा
                        रखी गई, और इसका लोकार्पण 27 मार्च 2011 को प्रोफेसर कृपा शंकर, कुलपति द्वारा किया
                        गया। इस हॉल के निर्माण में एल.पी.एस. स्कूल के श्री लोकेश सिंह ने (1 लाख रूपये)
                        अध्यक्ष श्री डी.एम. कटियार ने (1 लाख रूपये) श्रीमती कांति सिंह ने (50 हजार
                        रूपये) और इं0 सुशील वर्मा ने (50 हजार रूपये) का उदारता पूर्वक सहयोग प्रदान किया।
                        प्रथम तल पर स्थित हॉल नंबर 02, साहू जी महाराज हाल, का निर्माण उप मुख्यमंत्री
                        श्री केशव प्रसाद मौर्य द्वारा कराया गया, और 4 अप्रैल 2021 को मंत्री श्री मुकुट
                        बिहारी वर्मा, मंत्री श्री स्वतंत्र देव सिंह, सांसद श्रीमती रेखा वर्मा, राज्य
                        मंत्री श्री रमाशंकर पटेल और सांसद श्री आर.के. सिंह पटेल के कर-कमलों से इसका
                        लोकार्पण हुआ।
                    </p>
                    <p class="text-justify"
                        style="line-height: 32px; text-align: justify !important; color: black !important;">
                        प्रथम तल पर डॉ. आर.डी. कटियार कक्ष का निर्माण भी संस्था के कोष से कराया गया और
                        15 अक्टूबर 2006 को श्री राम नारायण चौधरी ने इसका लोकार्पण किया। इस कक्ष का
                        सुंदरीकरण 2017 में श्री दाम जी पटेल (आनंद टाइल्स) और श्री लाल जी कटियार
                        (प्रबंधक, बी.डी. कान्वेंट स्कूल, कल्याणपुर, लखनऊ) द्वारा कराया गया। प्रथम तल पर
                        ही चंद्रमुखी कक्षा का निर्माण चौधरी स्वामी दयाल कटियार द्वारा कराया गया, जिसका
                        लोकार्पण श्रीमती चंद्रमुखी कटियार और आई.ए.एस. श्री बी.डी. सिंह ने किया।
                        कॉन्फ्रेंस हॉल, जिसे कैबिनेट कक्ष भी कहा जाता है, का निर्माण प्रथम तल पर मंत्री
                        श्री आशुतोष टंडन और विधान परिषद सदस्य श्रीमती कांति सिंह द्वारा कराया गया, और
                        2020 में उन्हीं के द्वारा इसका लोकार्पण भी किया गया। प्रथम तल पर स्थित फोटो
                        गैलरी कक्ष, (रोशन लाल गंगवार स्मृति कक्ष) का निर्माण 2016-17 में विधान परिषद
                        सदस्य श्रीमती कांति सिंह द्वारा कराया गया, जिसमें पुस्तकालय और फोटो गैलरी की
                        शुरुआत 2019 में हुई। वर्तमान कुर्मी भवन के मुख्य प्रवेश द्वार का पुनर्निर्माण
                        नोएडा के बिल्डर श्री नेपाल सिंह कसाना द्वारा कराया गया, जिसका शुभारंभ 20 जनवरी
                        2019 को गुर्जर महासभा के अध्यक्ष श्री नेपाल सिंह कसाना, मंत्री श्री स्वतंत्र देव
                        सिंह, मंत्री श्री जयकुमार सिंह जैकी, विधायक श्री करण सिंह, विधायक श्री विनोद
                        कटियार और श्री संजय गंगवार के कर-कमलों द्वारा किया गया। कुर्मी भवन के बगल में
                        10000 वर्ग फुट की भूमि पर न्यू ब्लॉक चैरिटी हॉस्पिटल की आधारशिला 4 अप्रैल 2021
                        को मंत्री श्री स्वतंत्र देव सिंह, श्री मुकुट बिहारी वर्मा, सांसद श्रीमती रेखा
                        वर्मा, सांसद श्री आर.के. सिंह पटेल और राज्य मंत्री श्री रमाशंकर पटेल द्वारा रखी
                        गई।
                    </p>
                    <p class="text-justify"
                        style="line-height: 32px; text-align: justify !important; color: black !important;">
                        प्रथम तल पर मुख्य प्रवेश द्वार पर सरदार वल्लभभाई पटेल की प्रतिमा की स्थापना 12
                        सितंबर 2004 को विधान परिषद सदस्य श्री एस.पी. सिंह द्वारा कराई गई थी, और 2024 में
                        उन्होंने ही इसकी पुनर्स्थापना भी कराई। भूतल पर शिवाजी हाल में छत्रपति शिवाजी
                        महाराज की प्रतिमा भी श्री एस.पी. सिंह द्वारा स्थापित कराई गई थी, जिसका अनावरण
                        सिंचाई मंत्री श्री ओम प्रकाश सिंह ने किया। प्रथम तल पर डॉ. आर.डी. कटियार, श्री
                        राम कुमार वर्मा और श्रीमती चंद्रमुखी कटियार की प्रतिमाएं संस्था के कोष से
                        स्थापित की गईं, जिनका अनावरण जस्टिस पी.सी. वर्मा, उप मुख्यमंत्री श्री केशव
                        प्रसाद मौर्य और उप मुख्यमंत्री श्री दिनेश शर्मा के कर-कमलों द्वारा किया गया।
                        छत्रपति शाहूजी महाराज की प्रतिमा की स्थापना विधान परिषद सदस्य इं0 अवनीश सिंह
                        द्वारा कराई गई, और इसका अनावरण श्री स्वतंत्र देव सिंह और उप मुख्यमंत्री श्री
                        बृजेश पाठक ने संयुक्त रूप से किया। क्रांतिकारी डॉ0 गया प्रसाद कटियार की प्रतिमा
                        उप मुख्यमंत्री श्री बृजेश पाठक द्वारा स्थापित कराई गई और 19 जनवरी 2025 को उन्हीं
                        के द्वारा इसका अनावरण किया गया। इसी क्रम में, स्वतंत्रता सेनानी ऋषि लाल कटियार
                        की प्रतिमा उनके पैतृक गांव हलपुरा, अरौल तहसील, बिल्हौर में स्थापित की गई। इस
                        प्रतिमा का अनावरण सभा के अध्यक्ष श्री डी.एम. कटियार ने 23 दिसंबर 2009 को किया।
                        और क्रांतिकारी डॉ. गया प्रसाद कटियार की प्रतिमा उनके गांव खजुरी, तहसील बिल्हौर,
                        कानपुर नगर में 15 अगस्त 2015 को स्थापित की गई। इस अवसर पर आयोजित अनावरण समारोह
                        में अध्यक्ष डी.एम. कटियार के साथ अन्य गणमान्य व्यक्ति भी उपस्थित थे। इसके
                        अतिरिक्त, अमर शहीद राजा जयलाल सिंह की प्रतिमा, जो हज़रतगंज में तुसली सिनेमा के
                        सामने स्थित पार्क में स्थापित है, सभा के प्रयासों से डॉ. अखिलेश दास गुप्ता
                        द्वारा स्थापित कराई गई, जिसका अनावरण 1 मार्च 2009 को किया गया।
                    </p>
                    <p class="text-justify"
                        style="line-height: 32px; text-align: justify !important; color: black !important;">
                        वर्तमान में, संस्था के भवन में पुस्तकालय, छात्रावास और चैरिटी क्लीनिक जैसी
                        सुविधाएं संचालित हैं। भवन को सामाजिक कार्यों के लिए भी उपलब्ध कराया जाता है।
                        इसमें दो अतिथि कक्ष हैं, जिनमें भवन पर आने वाले समाज के लोग ठहरते हैं। सभा के
                        वर्तमान अध्यक्ष श्री डी.एम. कटियार हैं, राष्ट्रीय महासचिव श्री हरीश वर्मा,
                        राष्ट्रीय कोषाध्यक्ष वीरेंद्र सिंह, राष्ट्रीय युवा अध्यक्ष डॉ. दीपक सिंह
                        (मुंबई), राष्ट्रीय युवा महासचिव राम सिंह (जबलपुर), राष्ट्रीय महिला अध्यक्ष कांति
                        सिंह और महिला महासचिव डॉ. मंजू वर्मा हैं। विधायक प्रेम सागर पटेल और विधायक शशांक
                        वर्मा राष्ट्रीय उपाध्यक्ष हैं। प्रदेश अध्यक्ष डॉ. कुलदीप गंगवार और प्रदेश
                        महासचिव लाला भाई पटेल उर्फ़ मायाकांत कटियार (कन्नौज) से हैं। प्रदेश महिला
                        अध्यक्ष शोभा पटेल, महिला प्रदेश महासचिव अनीता सचान, युवा अध्यक्ष डॉ. दीपक गंगवार
                        और युवा महासचिव नवरत्न पटेल हैं।

                        संस्था के मेडिकल प्रकोष्ठ के राष्ट्रीय अध्यक्ष डॉ. गजेंद्र सिंह ने सभा के लिए एक
                        छात्रावास निर्माण के लिए अपनी सोसाइटी, शिवाजीपुरम, लखनऊ में स्थित एक भूखंड
                        निःशुल्क प्रदान करने की घोषणा की है। साथ ही, प्रमुख अभियंता श्री अखिलेश सचान ने
                        भवन के खुले स्थान (ओपन स्पेस) को आधुनिक तकनीक द्वारा ट्रांसपेरेंट शेड से
                        आच्छादित (कवर्ड) करने के कार्य की घोषणा की है, जिस पर कार्यवाही प्रगति पर है।
                    </p>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="mb-5">
            <h3 class="section-title">हमारी सुविधाएं</h3>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">भवन की सुविधाएं</div>
                        <div class="card-body">
                            <p>कुर्मी भवन में भूतल पर <strong>"छत्रपति शिवाजी हाल"</strong> तथा प्रथम तल
                                पर <strong>"डॉ. आर.डी. कटियार हाल"</strong> स्थित है। यह भवन समाज के
                                सदस्यों को विवाह, पार्टी एवं अन्य सामाजिक आयोजनों के लिए उपलब्ध कराया
                                जाता है।</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">पुस्तकालय सुविधा</div>
                        <div class="card-body">
                            <p>छात्र-छात्राओं एवं सामाजिक विषयों पर शोध करने वाले व्यक्तियों के लिए
                                <strong>"पुस्तकालय"</strong> की सुविधा उपलब्ध है।
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">हॉस्टल सुविधा</div>
                        <div class="card-body">
                            <p>मेधावी छात्र-छात्राओं के लिए <strong>"छात्रावास"</strong> (हॉस्टल) की
                                सुविधा प्रदान की जाती है।</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">चिकित्सा सेवाएं</div>
                        <div class="card-body">
                            <p>सभी वर्गों के लोगों के लिए <strong>"निःशुल्क पटेल चिकित्सा
                                    केंद्र"</strong> का संचालन किया जा रहा है।</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vision & Mission Section -->
        <section id="vision-mission" class="mb-5">
            <h3 class="section-title">हमारी दृष्टि और मिशन</h3>
            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1200">
                    <div class="info-box">
                        <h4 class="mb-3" style="color: var(--primary-color);">हमारी दृष्टि</h4>
                        <p class="mb-0">
                            एक ऐसा सशक्त कुर्मी समाज बनाना जो शिक्षा, नेतृत्व और सांस्कृतिक मूल्यों में
                            अग्रणी हो और सामाजिक समरसता का प्रतीक बने।
                        </p>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1400">
                    <div class="info-box">
                        <h4 class="mb-3" style="color: var(--primary-color);">हमारा मिशन</h4>
                        <p class="mb-0">
                            शिक्षा, सामाजिक एकता और आर्थिक सशक्तिकरण के कार्यक्रमों के माध्यम से
                            प्रत्येक कुर्मी सदस्य को सशक्त बनाना और उनके अधिकारों की रक्षा करना।
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Membership Section -->
        <section id="membership" class="mb-5">
            <h3 class="section-title">सदस्यता विवरण</h3>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">सदस्यता प्रकार</div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    आजीवन सदस्यता शुल्क
                                    <span class="badge bg-primary rounded-pill">₹501</span>
                                </li>
                                <li class="list-group-item">
                                    विशिष्ट सदस्यता शुल्क
                                    <span class="badge bg-primary rounded-pill">₹1001</span>
                                </li>
                                <li class="list-group-item">
                                    संरक्षक सदस्यता शुल्क
                                    <span class="badge bg-primary rounded-pill">₹1500</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">बैंक विवरण</div>
                        <div class="card-body">
                            <p class="mb-1"><strong>बैंक:</strong> यूको बैंक</p>
                            <p class="mb-1"><strong>शाखा:</strong> एल0डी0ए0 गोमती नगर, लखनऊ</p>
                            <p class="mb-1"><strong>IFSC कोड:</strong> UCBA0001946</p>
                            <p class="mb-0"><strong>खाता संख्या:</strong> 19460110020081</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="mb-5">
            <h3 class="section-title">संपर्क करें</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">संपर्क जानकारी</div>
                        <div class="card-body">
                            <p><i class="fas fa-map-marker-alt me-2"></i> कूर्मि क्षत्रिय भवन, फरीदी
                                नगर, पिकनिक स्पॉट रोड, लखनऊ - 226015</p>
                            <p><i class="fas fa-envelope me-2"></i> <a href="/cdn-cgi/l/email-protection"
                                    class="__cf_email__"
                                    data-cfemail="87ecf2f5eaeee5efe6f0e6e9c7e0eae6eeeba9e4e8ea">kurmibhawan@gmail.com</a>
                            </p>
                            <p><i class="fas fa-phone me-2"></i> 9450101328, 9450178565</p>
                            <p><i class="fas fa-globe me-2"></i> <a href="https://kurmibhawan.com"
                                    target="_blank">kurmibhawan.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">कैसे पहुंचे</div>
                        <div class="card-body">
                            <h6>रेल मार्ग से:</h6>
                            <p class="small">चारबाग रेलवे स्टेशन/बस स्टॉप से मेट्रो या टैक्सी द्वारा
                                मुंशी पुलिया, इंदिरा नगर पहुंचें। वहाँ से लगभग आधा किलोमीटर दूरी पर
                                कुकरैल पिकनिक स्पॉट रोड होते हुए फरीदी नगर की ओर जाएं।</p>
                            <h6>हवाई मार्ग से:</h6>
                            <p class="small">अमौसी एयरपोर्ट से शहीद पथ, पॉलिटेक्निक, और मुंशी पुलिया
                                मेट्रो स्टेशन होते हुए फरीदी नगर की ओर जाएं।</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <button id="backToTopBtn" title="Go to top">↑</button>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
        // Preloader
        window.addEventListener('load', () => {
            document.body.classList.add('loaded');
        });

        // Back to top button
        const backToTopButton = document.getElementById("backToTopBtn");

        window.onscroll = function () {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                backToTopButton.style.display = "block";
            } else {
                backToTopButton.style.display = "none";
            }
        };

        backToTopButton.addEventListener("click", function () {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516"
        integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg=="
        data-cf-beacon='{"version":"2024.11.0","token":"b3f6d77df4814e52b728cb4b3d85945b","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>

</html>