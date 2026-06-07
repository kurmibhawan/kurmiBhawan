<?php

$json = file_get_contents("./pradesh_yuwa_committee.json");
$allData = json_decode($json, true) ?? [];

/* ── Read GET params ── */
$search = $_GET['search'] ?? '';
$designation = $_GET['designation'] ?? '';

/* If 'jila' key is not in GET at all (first page load), default to लखनऊ.
   If it IS in GET but empty string, user chose "सभी जिले". */
$jila = array_key_exists('jila', $_GET) ? $_GET['jila'] : 'लखनऊ';

/* ── Build filter lists from full data ── */
$allJilas = array_unique(array_column($allData, 'jila'));
sort($allJilas);

$allDesignations = array_unique(array_column($allData, 'padnaam'));
sort($allDesignations);

/* ── Apply filters ── */
$members = $allData;

if ($jila !== '') {
    $members = array_filter($members, fn($r) => ($r['jila'] ?? '') === $jila);
}

if (!empty($search)) {
    $members = array_filter($members, function ($r) use ($search) {
        return stripos($r['naam'] ?? '', $search) !== false
            || stripos($r['pata'] ?? '', $search) !== false
            || stripos($r['mobile'] ?? '', $search) !== false;
    });
}

if (!empty($designation)) {
    $members = array_filter($members, fn($r) => ($r['padnaam'] ?? '') === $designation);
}

$members = array_values($members);

/* ── Pagination ── */
$perPage = 10;
$page = max(1, (int) ($_GET['page'] ?? 1));
$totalRows = count($members);
$totalPages = (int) ceil($totalRows / $perPage);
$start = ($page - 1) * $perPage;
$records = array_slice($members, $start, $perPage);

?>
<!DOCTYPE html>
<html lang="hi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>प्रदेश युवा कार्यकारिणी सूची 2025-26</title>
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script defer src="../assets/js/navbar-breadcrumb.js"></script>

    <style>
        /* ── Full-width layout ── */
        .container {
            max-width: 100% !important;
            width: 100% !important;
            padding: 0 16px;
            box-sizing: border-box;
        }

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
            left: 25%;
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


        .card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .08);
            width: 100%;
            box-sizing: border-box;
        }

        /* ── Filter bar ── */
        .filter-box {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 20px;
            align-items: center;
        }

        .filter-box select,
        .filter-box input[type="text"] {
            flex: 1 1 180px;
            padding: 11px 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-family: inherit;
            font-size: 14px;
        }

        .search-btn {
            background: var(--themecolor, #e07b00);
            color: #fff;
            border: none;
            padding: 11px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            white-space: nowrap;
        }

        .search-btn:hover {
            opacity: .88;
        }

        /* ── Table ── */
        .table-responsive {
            overflow-x: auto;
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
        }

        thead {
            background: var(--themecolor, #e07b00);
            color: #fff;
        }

        th,
        td {
            padding: 11px 13px;
            border: 1px solid #e0e0e0;
            text-align: left;
            vertical-align: top;
        }

        th {
            white-space: nowrap;
        }

        tbody tr:nth-child(even) {
            background: #f9f9f9;
        }

        tbody tr:hover {
            background: #fff7e6;
        }

        .mobile-link {
            color: var(--themecolor, #e07b00);
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
        }

        .mobile-link:hover {
            text-decoration: underline;
        }

        .no-mobile {
            color: #bbb;
            font-style: italic;
        }

        /* ── Pagination ── */
        .pagination {
            margin-top: 22px;
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
        }

        .pagination a {
            display: inline-block;
            padding: 7px 13px;
            background: var(--themecolor, #e07b00);
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 13px;
        }

        .pagination a.active {
            background: #333;
        }

        .total-count {
            margin-bottom: 14px;
            font-weight: 600;
            color: var(--themecolor, #e07b00);
            font-size: 14px;
        }

        @media (max-width: 600px) {

            th,
            td {
                font-size: 12px;
                padding: 8px;
            }

            .filter-box select,
            .filter-box input[type="text"] {
                min-width: 100%;
            }
        }
    </style>
</head>

<body>
    <?php include('../includes/header.php'); ?>
    <?php include('../components/navbar.php'); ?>

    <div class="container">
        <div class="hero-banner">
            <h1>प्रदेश युवा कार्यकारिणी सूची – 2026-27</h1>
            <div class="breadcrumb">
                होम <span>›</span> मैनेजमेंट बॉडी <span>›</span> प्रदेश युवा कार्यकारिणी सूची – 2026-27
            </div>
        </div>
        <div class="accent-bar"></div>


        <div class="card">

            <form method="GET" action="">
                <div class="filter-box">

                    <!-- District dropdown — default Lucknow on first load -->
                    <select name="jila">
                        <option value="">— सभी जिले —</option>
                        <?php foreach ($allJilas as $j): ?>
                            <option value="<?= htmlspecialchars($j) ?>" <?= ($jila === $j) ? 'selected' : '' ?>>
                                <?= htmlspecialchars($j) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <!-- Designation dropdown -->
                    <select name="designation">
                        <option value="">— सभी पद —</option>
                        <?php foreach ($allDesignations as $post): ?>
                            <option value="<?= htmlspecialchars($post) ?>" <?= ($designation === $post) ? 'selected' : '' ?>>
                                <?= htmlspecialchars($post) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <!-- Text search -->
                    <input type="text" name="search" placeholder="नाम, पता, मोबाइल खोजें…"
                        value="<?= htmlspecialchars($search) ?>">

                    <button type="submit" class="search-btn">
                        <i class="fa fa-search"></i> खोजें
                    </button>

                </div>
            </form>

            <div class="total-count">कुल सदस्य : <?= $totalRows ?></div>

            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>क्र0</th>
                            <th>जिला</th>
                            <th>शाखा</th>
                            <th>नाम</th>
                            <th>पदनाम</th>
                            <th>पता</th>
                            <th>मोबाइल</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($records) > 0): ?>
                            <?php foreach ($records as $member): ?>
                                <tr>
                                    <td><?= (int) $member['id'] ?></td>
                                    <td><?= htmlspecialchars($member['jila'] ?? '') ?></td>
                                    <td><?= htmlspecialchars($member['shakha'] ?? '') ?></td>
                                    <td><?= htmlspecialchars($member['naam'] ?? '') ?></td>
                                    <td><?= htmlspecialchars($member['padnaam'] ?? '') ?></td>
                                    <td><?= htmlspecialchars($member['pata'] ?? '') ?></td>
                                    <td>
                                        <?php
                                        $mobile = trim($member['mobile'] ?? '');
                                        if ($mobile):
                                            foreach (array_filter(array_map('trim', explode('/', $mobile))) as $num):
                                                ?>
                                                <a class="mobile-link" href="tel:<?= preg_replace('/[^0-9]/', '', $num) ?>">
                                                    <i class="fa fa-phone" style="font-size:10px"></i>
                                                    <?= htmlspecialchars($num) ?>
                                                </a><br>
                                                <?php
                                            endforeach;
                                        else: ?>
                                            <span class="no-mobile">—</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" style="text-align:center;color:#999;padding:24px">
                                    कोई रिकॉर्ड नहीं मिला
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <?php if ($totalPages > 1): ?>
                <div class="pagination">
                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <a href="?page=<?= $i ?>&jila=<?= urlencode($jila) ?>&search=<?= urlencode($search) ?>&designation=<?= urlencode($designation) ?>"
                            class="<?= ($page === $i) ? 'active' : '' ?>">
                            <?= $i ?>
                        </a>
                    <?php endfor; ?>
                </div>
            <?php endif; ?>

        </div><!-- /.card -->

    </div><!-- /.container -->
</body>

</html>