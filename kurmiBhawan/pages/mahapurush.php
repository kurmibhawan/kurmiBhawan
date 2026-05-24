<!DOCTYPE html>
<html lang="hi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>महामंत्रियों का कार्यकाल</title>
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script defer src="../assets/js/navbar-breadcrumb.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <style>
        .hero-banner {
            background: var(--themecolor1);
            padding: clamp(1.2rem, 4vw, 2.2rem) clamp(1rem, 5vw, 2.8rem) clamp(1rem, 3vw, 2rem);
            position: relative;
            overflow: hidden;
        }

        .hero-banner::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(255, 171, 23, 0.12);
            pointer-events: none;
        }

        .hero-banner::after {
            content: '';
            position: absolute;
            bottom: -70px;
            left: 20%;
            width: 260px;
            height: 260px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.04);
            pointer-events: none;
        }

        .hero-banner h1 {
            color: var(--themewhite);
            font-size: clamp(1.25rem, 5vw, 2rem);
            font-weight: 800;
            letter-spacing: 0.01em;
            margin-bottom: 0.35rem;
            position: relative;
            z-index: 1;
        }

        .breadcrumb {
            color: rgba(255, 255, 255, 0.72);
            font-size: clamp(0.72rem, 2.5vw, 0.82rem);
            font-weight: 400;
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            gap: 6px;
            flex-wrap: wrap;
        }

        .breadcrumb span {
            color: var(--themecolor2);
        }

        /* ── Accent Bar ── */
        .accent-bar {
            height: 5px;
            background: var(--themecolor2);
        }

        /* ── Page Body ── */
        .page-body {
            background: #f4f6fb;
            min-height: calc(100vh - 120px);
            padding: clamp(1.2rem, 4vw, 2.5rem) clamp(0.75rem, 4vw, 2rem) clamp(2rem, 5vw, 4rem);
        }

        /* ── Section Header ── */
        .section-header {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 1.5rem;
            animation: fadeDown 0.5s ease both;
        }

        .section-header .icon-box {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: var(--themecolor1);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .section-header .icon-box svg {
            width: 22px;
            height: 22px;
            fill: none;
            stroke: var(--themecolor2);
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .section-header h2 {
            font-size: clamp(0.95rem, 3vw, 1.15rem);
            font-weight: 700;
            color: var(--themecolor);
        }

        .section-header p {
            font-size: clamp(0.72rem, 2vw, 0.8rem);
            color: #888;
            font-weight: 400;
        }

        /* ── Table Card ── */
        .table-card {
            background: var(--themewhite);
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 6px 32px rgba(5, 52, 109, 0.10), 0 1px 4px rgba(5, 52, 109, 0.06);
            animation: cardSlide 0.6s cubic-bezier(0.22, 1, 0.36, 1) both;
            animation-delay: 0.1s;
            border: 1.5px solid rgba(5, 52, 109, 0.07);
        }

        /* ── Table Scroll Wrapper ── */
        .table-scroll {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-scroll::-webkit-scrollbar {
            height: 5px;
        }

        .table-scroll::-webkit-scrollbar-track {
            background: #f0f2f8;
        }

        .table-scroll::-webkit-scrollbar-thumb {
            background: var(--themecolor);
            border-radius: 10px;
        }

        /* ── Keyframes ── */
        @keyframes cardSlide {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeDown {
            from {
                opacity: 0;
                transform: translateY(-16px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes rowReveal {
            from {
                opacity: 0;
                transform: translateX(-22px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes cardReveal {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes glowPulse {

            0%,
            100% {
                box-shadow: 0 0 0 0 rgba(255, 171, 23, 0.55);
            }

            50% {
                box-shadow: 0 0 0 8px rgba(255, 171, 23, 0);
            }
        }

        @keyframes dotBlink {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.45;
                transform: scale(0.7);
            }
        }

        /* ════════════════════
       DESKTOP TABLE
     ════════════════════ */
        .data-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 580px;
        }

        .data-table thead tr {
            background: var(--themecolor);
        }

        .data-table thead th {
            color: var(--themewhite);
            font-size: 0.78rem;
            font-weight: 600;
            padding: 1rem 1.1rem;
            text-align: center;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            white-space: nowrap;
            position: relative;
        }

        .data-table thead th:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 0;
            top: 25%;
            bottom: 25%;
            width: 1px;
            background: rgba(255, 255, 255, 0.15);
        }

        .data-table thead th:nth-child(2) {
            text-align: left;
        }

        .data-table tbody tr {
            border-bottom: 1px solid #eef0f7;
            transition: background 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
            position: relative;
            animation: rowReveal 0.45s cubic-bezier(0.22, 1, 0.36, 1) both;
        }

        .data-table tbody tr:last-child {
            border-bottom: none;
        }

        .data-table tbody tr:hover {
            background: rgba(5, 52, 109, 0.04);
            transform: scale(1.005);
            box-shadow: 0 2px 16px rgba(5, 52, 109, 0.08);
            z-index: 2;
        }

        /* stagger delays for 10 rows */
        .data-table tbody tr:nth-child(1) {
            animation-delay: 0.12s;
        }

        .data-table tbody tr:nth-child(2) {
            animation-delay: 0.18s;
        }

        .data-table tbody tr:nth-child(3) {
            animation-delay: 0.24s;
        }

        .data-table tbody tr:nth-child(4) {
            animation-delay: 0.30s;
        }

        .data-table tbody tr:nth-child(5) {
            animation-delay: 0.36s;
        }

        .data-table tbody tr:nth-child(6) {
            animation-delay: 0.42s;
        }

        .data-table tbody tr:nth-child(7) {
            animation-delay: 0.48s;
        }

        .data-table tbody tr:nth-child(8) {
            animation-delay: 0.54s;
        }

        .data-table tbody tr:nth-child(9) {
            animation-delay: 0.60s;
        }

        .data-table tbody tr:nth-child(10) {
            animation-delay: 0.66s;
        }

        .data-table tbody td {
            padding: 0.85rem 1.1rem;
            text-align: center;
            font-size: 0.87rem;
            color: #363636;
            vertical-align: middle;
        }

        /* Serial Badge */
        .serial-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--themecolor);
            color: var(--themewhite);
            font-weight: 700;
            font-size: 0.8rem;
            border: 2.5px solid var(--themecolor2);
            transition: transform 0.2s, background 0.2s;
        }

        tr:hover .serial-badge {
            transform: scale(1.12) rotate(5deg);
            background: var(--themecolor1);
        }

        /* Name Cell */
        td.name-td {
            text-align: left;
        }

        .name-cell {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .avatar {
            width: 38px;
            height: 38px;
            border-radius: 9px;
            background: var(--themecolor);
            color: var(--themewhite);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.6rem;
            font-weight: 700;
            flex-shrink: 0;
            border: 2px solid rgba(5, 52, 109, 0.15);
            transition: background 0.2s, transform 0.2s;
            letter-spacing: 0.01em;
        }

        tr:hover .avatar {
            background: var(--themecolor1);
            transform: scale(1.08);
        }

        .name-text {
            font-weight: 600;
            color: var(--themecolor);
            font-size: 0.88rem;
            line-height: 1.35;
        }

        /* Date Chip */
        .date-chip {
            display: inline-block;
            background: rgba(5, 52, 109, 0.07);
            color: var(--themecolor);
            border-radius: 30px;
            padding: 4px 14px;
            font-size: 0.8rem;
            font-weight: 500;
            border: 1px solid rgba(5, 52, 109, 0.12);
            transition: background 0.22s, color 0.22s, border-color 0.22s, transform 0.22s;
            white-space: nowrap;
        }

        tr:hover .date-chip {
            background: var(--themecolor1);
            color: var(--themewhite);
            border-color: var(--themecolor1);
            transform: scale(1.05);
        }

        /* Current / Active Row */
        .current-row {
            border-left: 4px solid var(--themecolor2);
            background: rgba(255, 171, 23, 0.04);
        }

        .current-row:hover {
            background: rgba(255, 171, 23, 0.09) !important;
        }

        .current-row .avatar {
            background: var(--themecolor1);
            border-color: var(--themecolor2);
        }

        .current-row:hover .avatar {
            background: var(--themecolor2);
            color: var(--themecolor1);
        }

        .current-row:hover .serial-badge {
            background: var(--themecolor2);
            color: var(--themecolor1);
            border-color: var(--themecolor1);
        }

        /* Jaari Badge */
        .jaari-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--themecolor2);
            color: var(--themecolor1);
            font-size: 0.72rem;
            font-weight: 700;
            padding: 5px 14px;
            border-radius: 20px;
            letter-spacing: 0.05em;
            animation: glowPulse 2.2s ease-in-out infinite;
            white-space: nowrap;
        }

        .jaari-badge .pulse-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--themecolor1);
            animation: dotBlink 1.2s ease-in-out infinite;
            flex-shrink: 0;
        }

        /* Table Footer */
        .table-footer {
            background: rgba(5, 52, 109, 0.03);
            border-top: 1px solid #eef0f7;
            padding: 0.8rem 1.2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 8px;
        }

        .count-info {
            font-size: 0.78rem;
            color: #888;
            font-weight: 400;
        }

        .count-info strong {
            color: var(--themecolor);
            font-weight: 700;
        }

        .current-indicator {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 0.76rem;
            color: var(--themecolor1);
            font-weight: 500;
        }

        .current-indicator .dot {
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background: var(--themecolor2);
            animation: dotBlink 1.4s ease-in-out infinite;
            flex-shrink: 0;
        }

        /* ════════════════════
       MOBILE CARDS
     ════════════════════ */
        .mobile-cards {
            display: none;
        }

        .member-card {
            background: var(--themewhite);
            border-radius: 14px;
            border: 1.5px solid rgba(5, 52, 109, 0.08);
            overflow: hidden;
            box-shadow: 0 2px 12px rgba(5, 52, 109, 0.07);
            animation: cardReveal 0.45s cubic-bezier(0.22, 1, 0.36, 1) both;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .member-card:active {
            transform: scale(0.98);
        }

        /* stagger delays for mobile cards */
        .member-card:nth-child(1) {
            animation-delay: 0.08s;
        }

        .member-card:nth-child(2) {
            animation-delay: 0.14s;
        }

        .member-card:nth-child(3) {
            animation-delay: 0.20s;
        }

        .member-card:nth-child(4) {
            animation-delay: 0.26s;
        }

        .member-card:nth-child(5) {
            animation-delay: 0.32s;
        }

        .member-card:nth-child(6) {
            animation-delay: 0.38s;
        }

        .member-card:nth-child(7) {
            animation-delay: 0.44s;
        }

        .member-card:nth-child(8) {
            animation-delay: 0.50s;
        }

        .member-card:nth-child(9) {
            animation-delay: 0.56s;
        }

        .member-card:nth-child(10) {
            animation-delay: 0.62s;
        }

        .member-card.is-current {
            border-color: var(--themecolor2);
            border-width: 2px;
        }

        .card-header {
            background: var(--themecolor);
            padding: 0.85rem 1rem;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .is-current .card-header {
            background: var(--themecolor1);
        }

        .card-avatar {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.15);
            color: var(--themewhite);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.6rem;
            font-weight: 700;
            flex-shrink: 0;
            border: 2px solid rgba(255, 171, 23, 0.5);
            letter-spacing: 0.01em;
        }

        .card-header-info {
            flex: 1;
            min-width: 0;
        }

        .card-name {
            color: var(--themewhite);
            font-weight: 700;
            font-size: 0.88rem;
            line-height: 1.3;
        }

        .card-serial {
            font-size: 0.68rem;
            color: var(--themecolor2);
            font-weight: 500;
            margin-top: 2px;
        }

        .card-body {
            padding: 0.85rem 1rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.7rem;
        }

        .card-field label {
            display: block;
            font-size: 0.63rem;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: #999;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .field-value {
            display: inline-block;
            background: rgba(5, 52, 109, 0.07);
            color: var(--themecolor);
            border-radius: 20px;
            padding: 4px 12px;
            font-size: 0.79rem;
            font-weight: 600;
            border: 1px solid rgba(5, 52, 109, 0.12);
        }

        .card-jaari {
            grid-column: 1 / -1;
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            padding-top: 0.2rem;
        }

        /* ════════════════════
       BREAKPOINTS
     ════════════════════ */
        @media (max-width: 860px) {

            .data-table thead th,
            .data-table tbody td {
                padding: 0.78rem 0.8rem;
                font-size: 0.81rem;
            }

            .avatar {
                width: 33px;
                height: 33px;
                font-size: 0.58rem;
            }

            .serial-badge {
                width: 32px;
                height: 32px;
                font-size: 0.74rem;
            }

            .name-text {
                font-size: 0.83rem;
            }

            .date-chip {
                padding: 4px 10px;
                font-size: 0.76rem;
            }
        }

        @media (max-width: 599px) {
            .table-card {
                border-radius: 14px;
            }

            .table-scroll {
                display: none;
            }

            .mobile-cards {
                display: flex;
                flex-direction: column;
                gap: 0.8rem;
                padding: 0.9rem;
            }

            .table-footer {
                padding: 0.72rem 1rem;
            }
        }

        @media (max-width: 360px) {
            .card-body {
                grid-template-columns: 1fr;
            }

            .card-jaari {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>

<body>
    <?php include('../includes/header.php'); ?>
    <?php include('../components/navbar.php') ?>

    <!-- Hero Banner -->
    <div class="hero-banner">
        <h1>महामंत्रियों का कार्यकाल</h1>
        <div class="breadcrumb">
            होम <span>›</span> महामंत्रियों का कार्यकाल
        </div>
    </div>
    <div class="accent-bar"></div>

    <!-- Page Body -->
    <div class="page-body">

        <!-- Section Header -->
        <div class="section-header">
            <div class="icon-box">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <rect x="3" y="4" width="18" height="18" rx="2" />
                    <line x1="16" y1="2" x2="16" y2="6" />
                    <line x1="8" y1="2" x2="8" y2="6" />
                    <line x1="3" y1="10" x2="21" y2="10" />
                </svg>
            </div>
            <div>
                <h2>महामंत्रियों की सूची</h2>
                <p>सभी महामंत्रियों का कार्यकाल विवरण</p>
            </div>
        </div>

        <!-- Table Card -->
        <div class="table-card">

            <!-- DESKTOP / TABLET TABLE -->
            <div class="table-scroll">
                <table class="data-table" aria-label="महामंत्रियों का कार्यकाल तालिका">
                    <thead>
                        <tr>
                            <th>क्रम संख्या</th>
                            <th>नाम एवं पता</th>
                            <th>कार्यकाल कब से</th>
                            <th>कार्यकाल कब तक</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="serial-badge">01</span></td>
                            <td class="name-td">
                                <div class="name-cell">
                                    <div class="avatar">श्या.म</div>
                                    <span class="name-text">श्री श्याम मनोहर सिंह</span>
                                </div>
                            </td>
                            <td><span class="date-chip">10.10.1983</span></td>
                            <td><span class="date-chip">25.03.1984</span></td>
                        </tr>
                        <tr>
                            <td><span class="serial-badge">02</span></td>
                            <td class="name-td">
                                <div class="name-cell">
                                    <div class="avatar">ह.चं</div>
                                    <span class="name-text">श्री हरीश चंद्र</span>
                                </div>
                            </td>
                            <td><span class="date-chip">26.03.1984</span></td>
                            <td><span class="date-chip">02.04.1986</span></td>
                        </tr>
                        <tr>
                            <td><span class="serial-badge">03</span></td>
                            <td class="name-td">
                                <div class="name-cell">
                                    <div class="avatar">वि.सिं</div>
                                    <span class="name-text">श्री विजय सिंह</span>
                                </div>
                            </td>
                            <td><span class="date-chip">03.04.1986</span></td>
                            <td><span class="date-chip">25.12.1990</span></td>
                        </tr>
                        <tr>
                            <td><span class="serial-badge">04</span></td>
                            <td class="name-td">
                                <div class="name-cell">
                                    <div class="avatar">ओ.प्र</div>
                                    <span class="name-text">श्री ओम प्रकाश वर्मा</span>
                                </div>
                            </td>
                            <td><span class="date-chip">26.12.1990</span></td>
                            <td><span class="date-chip">25.03.1992</span></td>
                        </tr>
                        <tr>
                            <td><span class="serial-badge">05</span></td>
                            <td class="name-td">
                                <div class="name-cell">
                                    <div class="avatar">दे.सिं</div>
                                    <span class="name-text">श्री देशराज सिंह गंगवार</span>
                                </div>
                            </td>
                            <td><span class="date-chip">26.03.1992</span></td>
                            <td><span class="date-chip">31.01.1993</span></td>
                        </tr>
                        <tr>
                            <td><span class="serial-badge">06</span></td>
                            <td class="name-td">
                                <div class="name-cell">
                                    <div class="avatar">स.सिं</div>
                                    <span class="name-text">श्री सत्येंद्र सिंह गंगवार</span>
                                </div>
                            </td>
                            <td><span class="date-chip">01.02.1993</span></td>
                            <td><span class="date-chip">12.11.1995</span></td>
                        </tr>
                        <tr>
                            <td><span class="serial-badge">07</span></td>
                            <td class="name-td">
                                <div class="name-cell">
                                    <div class="avatar">अ.कु</div>
                                    <span class="name-text">श्री अशोक कुमार कटियार</span>
                                </div>
                            </td>
                            <td><span class="date-chip">13.11.1995</span></td>
                            <td><span class="date-chip">12.09.2004</span></td>
                        </tr>
                        <tr>
                            <td><span class="serial-badge">08</span></td>
                            <td class="name-td">
                                <div class="name-cell">
                                    <div class="avatar">प.का</div>
                                    <span class="name-text">श्री पटनायक कामता प्रसाद वर्मा</span>
                                </div>
                            </td>
                            <td><span class="date-chip">13.09.2004</span></td>
                            <td><span class="date-chip">20.01.2012</span></td>
                        </tr>
                        <tr>
                            <td><span class="serial-badge">09</span></td>
                            <td class="name-td">
                                <div class="name-cell">
                                    <div class="avatar">र.च</div>
                                    <span class="name-text">श्री रमेश चंद्र पटेल</span>
                                </div>
                            </td>
                            <td><span class="date-chip">21.01.2012</span></td>
                            <td><span class="date-chip">23.01.2021</span></td>
                        </tr>
                        <tr class="current-row">
                            <td><span class="serial-badge">10</span></td>
                            <td class="name-td">
                                <div class="name-cell">
                                    <div class="avatar">ह.व</div>
                                    <span class="name-text">श्री हरीश वर्मा (मुख्य)</span>
                                </div>
                            </td>
                            <td><span class="date-chip">24.01.2021</span></td>
                            <td>
                                <span class="jaari-badge">
                                    <span class="pulse-dot"></span>
                                    कार्यकाल जारी
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- MOBILE CARDS -->
            <div class="mobile-cards" aria-label="महामंत्रियों का कार्यकाल">

                <div class="member-card">
                    <div class="card-header">
                        <div class="card-avatar">श्या.म</div>
                        <div class="card-header-info">
                            <div class="card-name">श्री श्याम मनोहर सिंह</div>
                            <div class="card-serial">क्रम संख्या — 01</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-field">
                            <label>कार्यकाल कब से</label>
                            <span class="field-value">10.10.1983</span>
                        </div>
                        <div class="card-field">
                            <label>कार्यकाल कब तक</label>
                            <span class="field-value">25.03.1984</span>
                        </div>
                    </div>
                </div>

                <div class="member-card">
                    <div class="card-header">
                        <div class="card-avatar">ह.चं</div>
                        <div class="card-header-info">
                            <div class="card-name">श्री हरीश चंद्र</div>
                            <div class="card-serial">क्रम संख्या — 02</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-field">
                            <label>कार्यकाल कब से</label>
                            <span class="field-value">26.03.1984</span>
                        </div>
                        <div class="card-field">
                            <label>कार्यकाल कब तक</label>
                            <span class="field-value">02.04.1986</span>
                        </div>
                    </div>
                </div>

                <div class="member-card">
                    <div class="card-header">
                        <div class="card-avatar">वि.सिं</div>
                        <div class="card-header-info">
                            <div class="card-name">श्री विजय सिंह</div>
                            <div class="card-serial">क्रम संख्या — 03</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-field">
                            <label>कार्यकाल कब से</label>
                            <span class="field-value">03.04.1986</span>
                        </div>
                        <div class="card-field">
                            <label>कार्यकाल कब तक</label>
                            <span class="field-value">25.12.1990</span>
                        </div>
                    </div>
                </div>

                <div class="member-card">
                    <div class="card-header">
                        <div class="card-avatar">ओ.प्र</div>
                        <div class="card-header-info">
                            <div class="card-name">श्री ओम प्रकाश वर्मा</div>
                            <div class="card-serial">क्रम संख्या — 04</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-field">
                            <label>कार्यकाल कब से</label>
                            <span class="field-value">26.12.1990</span>
                        </div>
                        <div class="card-field">
                            <label>कार्यकाल कब तक</label>
                            <span class="field-value">25.03.1992</span>
                        </div>
                    </div>
                </div>

                <div class="member-card">
                    <div class="card-header">
                        <div class="card-avatar">दे.सिं</div>
                        <div class="card-header-info">
                            <div class="card-name">श्री देशराज सिंह गंगवार</div>
                            <div class="card-serial">क्रम संख्या — 05</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-field">
                            <label>कार्यकाल कब से</label>
                            <span class="field-value">26.03.1992</span>
                        </div>
                        <div class="card-field">
                            <label>कार्यकाल कब तक</label>
                            <span class="field-value">31.01.1993</span>
                        </div>
                    </div>
                </div>

                <div class="member-card">
                    <div class="card-header">
                        <div class="card-avatar">स.सिं</div>
                        <div class="card-header-info">
                            <div class="card-name">श्री सत्येंद्र सिंह गंगवार</div>
                            <div class="card-serial">क्रम संख्या — 06</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-field">
                            <label>कार्यकाल कब से</label>
                            <span class="field-value">01.02.1993</span>
                        </div>
                        <div class="card-field">
                            <label>कार्यकाल कब तक</label>
                            <span class="field-value">12.11.1995</span>
                        </div>
                    </div>
                </div>

                <div class="member-card">
                    <div class="card-header">
                        <div class="card-avatar">अ.कु</div>
                        <div class="card-header-info">
                            <div class="card-name">श्री अशोक कुमार कटियार</div>
                            <div class="card-serial">क्रम संख्या — 07</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-field">
                            <label>कार्यकाल कब से</label>
                            <span class="field-value">13.11.1995</span>
                        </div>
                        <div class="card-field">
                            <label>कार्यकाल कब तक</label>
                            <span class="field-value">12.09.2004</span>
                        </div>
                    </div>
                </div>

                <div class="member-card">
                    <div class="card-header">
                        <div class="card-avatar">प.का</div>
                        <div class="card-header-info">
                            <div class="card-name">श्री पटनायक कामता प्रसाद वर्मा</div>
                            <div class="card-serial">क्रम संख्या — 08</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-field">
                            <label>कार्यकाल कब से</label>
                            <span class="field-value">13.09.2004</span>
                        </div>
                        <div class="card-field">
                            <label>कार्यकाल कब तक</label>
                            <span class="field-value">20.01.2012</span>
                        </div>
                    </div>
                </div>

                <div class="member-card">
                    <div class="card-header">
                        <div class="card-avatar">र.च</div>
                        <div class="card-header-info">
                            <div class="card-name">श्री रमेश चंद्र पटेल</div>
                            <div class="card-serial">क्रम संख्या — 09</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-field">
                            <label>कार्यकाल कब से</label>
                            <span class="field-value">21.01.2012</span>
                        </div>
                        <div class="card-field">
                            <label>कार्यकाल कब तक</label>
                            <span class="field-value">23.01.2021</span>
                        </div>
                    </div>
                </div>

                <div class="member-card is-current">
                    <div class="card-header">
                        <div class="card-avatar">ह.व</div>
                        <div class="card-header-info">
                            <div class="card-name">श्री हरीश वर्मा (मुख्य)</div>
                            <div class="card-serial">क्रम संख्या — 10</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-field">
                            <label>कार्यकाल कब से</label>
                            <span class="field-value">24.01.2021</span>
                        </div>
                        <div class="card-field">
                            <label>कार्यकाल कब तक</label>
                            <span class="field-value" style="background:rgba(255,171,23,0.15);color:var(--themecolor1);border-color:rgba(255,171,23,0.4);">जारी</span>
                        </div>
                        <div class="card-jaari">
                            <span class="jaari-badge"><span class="pulse-dot"></span>कार्यकाल जारी</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Table Footer -->
            <div class="table-footer">
                <div class="count-info">कुल महामंत्री: <strong>10</strong></div>
                <div class="current-indicator">
                    <span class="dot"></span>
                    वर्तमान कार्यकाल जारी है
                </div>
            </div>
        </div>

    </div>

    <script>
        const animatedEls = document.querySelectorAll('.data-table tbody tr, .member-card');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.08
        });

        animatedEls.forEach(el => {
            el.style.animationPlayState = 'paused';
            observer.observe(el);
        });
    </script>
</body>

</html>