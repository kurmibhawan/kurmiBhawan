<?php

$json = file_get_contents("./yua_committee.json");
$members = json_decode($json, true) ?? [];

$search = $_GET['search'] ?? '';
$designation = $_GET['designation'] ?? '';

if (!empty($search)) {
    $members = array_filter($members, function ($row) use ($search) {
        return (
            stripos($row['naam'] ?? '', $search) !== false ||
            stripos($row['pata'] ?? '', $search) !== false ||
            stripos($row['mobile'] ?? '', $search) !== false
        );
    });
}

if (!empty($designation)) {
    $members = array_filter($members, function ($row) use ($designation) {
        return ($row['padnaam'] ?? '') === $designation;
    });
}

$members = array_values($members);

/* All designations for filter dropdown (from full data) */
$allData = json_decode(file_get_contents("./yua_committee.json"), true) ?? [];
$allDesignations = array_unique(array_column($allData, 'padnaam'));
sort($allDesignations);

/* Pagination */
$perPage = 10;
$page = isset($_GET['page']) ? max(1, (int) $_GET['page']) : 1;
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
    <title>राष्ट्रीय युवा कार्यकारिणी सूची 2025</title>
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script defer src="../assets/js/navbar-breadcrumb.js"></script>

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
            max-width: none;
            width: 100%;
            box-sizing: border-box;
        }

        .filter-box {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .filter-box input,
        .filter-box select {
            flex: 1;
            min-width: 220px;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-family: inherit;
        }

        .search-btn {
            background: var(--themecolor);
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            cursor: pointer;
        }

        .search-btn:hover {
            background: var(--themecolor1);
        }

        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: var(--themecolor);
            color: #fff;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        tbody tr:nth-child(even) {
            background: #f8f8f8;
        }

        tbody tr:hover {
            background: #fff7e7;
        }

        .mobile-link {
            color: var(--themecolor);
            text-decoration: none;
            font-weight: 600;
        }

        .mobile-link:hover {
            color: var(--themecolor1);
        }

        .no-mobile {
            color: #bbb;
            font-style: italic;
        }

        .pagination {
            margin-top: 25px;
            text-align: center;
        }

        .pagination a {
            display: inline-block;
            margin: 3px;
            padding: 8px 14px;
            background: var(--themecolor);
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        .pagination a.active {
            background: var(--themecolor2);
            color: #000;
        }

        .total-count {
            margin-bottom: 15px;
            font-weight: 600;
            color: var(--themecolor);
        }

        @media (max-width: 768px) {

            th,
            td {
                font-size: 13px;
            }
        }
    </style>
</head>

<body>
    <?php include('../includes/header.php'); ?>
    <?php include('../components/navbar.php'); ?>

    <div class="container">
        <div class="hero-banner">
            <h1> राष्ट्रीय युवा कार्यकारिणी सूची – 2026-27</h1>
            <div class="breadcrumb">
                होम <span>›</span> मैनेजमेंट बॉडी <span>›</span> राष्ट्रीय युवा कार्यकारिणी सूची – 2026-27
            </div>
        </div>
        <div class="accent-bar"></div>

        <div class="card">

            <form method="GET">
                <div class="filter-box">

                    <input type="text" name="search" placeholder="नाम, पता, मोबाइल खोजें"
                        value="<?= htmlspecialchars($search) ?>">

                    <select name="designation">
                        <option value="">सभी पद</option>
                        <?php foreach ($allDesignations as $post): ?>
                            <option value="<?= htmlspecialchars($post) ?>" <?= ($designation === $post) ? 'selected' : '' ?>>
                                <?= htmlspecialchars($post) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <button type="submit" class="search-btn">
                        <i class="fa fa-search"></i> खोजें
                    </button>

                </div>
            </form>

            <div class="total-count">
                कुल सदस्य : <?= $totalRows ?>
            </div>

            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>क्र0</th>
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
                                    <td><?= htmlspecialchars($member['naam'] ?? '') ?></td>
                                    <td><?= htmlspecialchars($member['padnaam'] ?? '') ?></td>
                                    <td><?= htmlspecialchars($member['pata'] ?? '') ?></td>
                                    <td>
                                        <?php
                                        $mobile = trim($member['mobile'] ?? '');
                                        if ($mobile):
                                            // Support multiple numbers separated by /
                                            $nums = array_filter(array_map('trim', explode('/', $mobile)));
                                            foreach ($nums as $num):
                                                ?>
                                                <a class="mobile-link" href="tel:<?= preg_replace('/[^0-9]/', '', $num) ?>">
                                                    <i class="fa fa-phone" style="font-size:11px;"></i>
                                                    <?= htmlspecialchars($num) ?>
                                                </a><br>
                                                <?php
                                            endforeach;
                                        else:
                                            ?>
                                            <span class="no-mobile">—</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" style="text-align:center; color:#999;">
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
                        <a href="?page=<?= $i ?>&search=<?= urlencode($search) ?>&designation=<?= urlencode($designation) ?>"
                            class="<?= ($page === $i) ? 'active' : '' ?>">
                            <?= $i ?>
                        </a>
                    <?php endfor; ?>
                </div>
            <?php endif; ?>

        </div>

    </div>
</body>

</html>