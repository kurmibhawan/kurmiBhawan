<!DOCTYPE html>
<html lang="hi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>अध्यक्ष परिषद — सदस्य सूची</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <style>
        :root {
            --bg-primary: #ffffff;
            --bg-secondary: #f5f5f5;
            --text-primary: #1a1a1a;
            --text-secondary: #666666;
            --border: rgba(0, 0, 0, 0.12);
            --border-hover: rgba(0, 0, 0, 0.25);
            --radius-md: 8px;
            --radius-lg: 12px;
        }

        @media (prefers-color-scheme: dark) {
            :root {
                --bg-primary: #1e1e1e;
                --bg-secondary: #2a2a2a;
                --text-primary: #f0f0f0;
                --text-secondary: #aaaaaa;
                --border: rgba(255, 255, 255, 0.12);
                --border-hover: rgba(255, 255, 255, 0.25);
            }
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: system-ui, -apple-system, sans-serif;
            background: var(--bg-secondary);
            color: var(--text-primary);
            min-height: 100vh;
        }

        .page {
            max-width: 860px;
            margin: 0 auto;
            padding: 2.5rem 1.5rem 4rem;
        }

        /* HEADER */
        .header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .header h1 {
            font-size: 26px;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 6px;
        }

        .header p {
            font-size: 14px;
            color: var(--text-secondary);
        }

        .accent-bar {
            width: 60px;
            height: 3px;
            background: #534AB7;
            border-radius: 2px;
            margin: 12px auto;
        }

        /* GRID */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(175px, 1fr));
            gap: 16px;
        }

        /* CARD */
        .card {
            background: var(--bg-primary);
            border: 0.5px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 1.4rem 1rem 1rem;
            text-align: center;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            opacity: 0;
            transition: border-color 0.2s, transform 0.2s;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--card-accent, #534AB7);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }

        .card:hover::before {
            transform: scaleX(1);
        }

        .card:hover {
            border-color: var(--border-hover);
            transform: translateY(-6px);
        }

        .card:active {
            transform: translateY(-2px) scale(0.98);
        }

        .avatar {
            width: 66px;
            height: 66px;
            border-radius: 50%;
            margin: 0 auto 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            font-weight: 600;
            position: relative;
        }

        .avatar::after {
            content: '';
            position: absolute;
            inset: -3px;
            border-radius: 50%;
            border: 2px solid var(--card-accent, #534AB7);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .card:hover .avatar::after {
            opacity: 1;
        }

        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(83, 74, 183, 0.15);
            transform: scale(0);
            animation: rippleAnim 0.6s linear;
            pointer-events: none;
        }

        @keyframes rippleAnim {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }

        .badge {
            display: inline-block;
            font-size: 11px;
            padding: 2px 10px;
            border-radius: 99px;
            margin-bottom: 8px;
        }

        .badge.cur {
            background: #E1F5EE;
            color: #085041;
        }

        .badge.past {
            background: #EEEDFE;
            color: #3C3489;
        }

        .card-sn {
            font-size: 11px;
            color: var(--text-secondary);
            margin-bottom: 4px;
            font-weight: 500;
        }

        .card-name {
            font-size: 12px;
            font-weight: 600;
            color: var(--text-primary);
            line-height: 1.4;
            margin-bottom: 4px;
        }

        .card-period {
            font-size: 11px;
            color: var(--text-secondary);
        }

        .pulse-ring {
            animation: pulseRing 2s infinite;
        }

        @keyframes pulseRing {

            0%,
            100% {
                box-shadow: 0 0 0 0 rgba(29, 158, 117, 0.4);
            }

            60% {
                box-shadow: 0 0 0 9px rgba(29, 158, 117, 0);
            }
        }

        /* OVERLAY */
        .overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            z-index: 999;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.25s ease;
        }

        .overlay.open {
            opacity: 1;
            pointer-events: all;
        }

        /* POPUP */
        .popup {
            background: var(--bg-primary);
            border: 0.5px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 1.75rem;
            width: 100%;
            max-width: 440px;
            position: relative;
            transform: scale(0.85) translateY(-20px);
            transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), opacity 0.25s ease;
            opacity: 0;
            max-height: 90vh;
            overflow-y: auto;
        }

        .overlay.open .popup {
            transform: scale(1) translateY(0);
            opacity: 1;
        }

        .popup-accent {
            height: 4px;
            border-radius: 2px;
            margin-bottom: 1.25rem;
        }

        .popup-top {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            margin-bottom: 1.25rem;
        }

        .popup-avatar {
            width: 76px;
            height: 76px;
            border-radius: 50%;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 600;
        }

        .popup-title {
            flex: 1;
        }

        .popup-title h2 {
            font-size: 17px;
            font-weight: 600;
            color: var(--text-primary);
            line-height: 1.4;
            margin-bottom: 3px;
        }

        .popup-title .sn {
            font-size: 12px;
            color: var(--text-secondary);
        }

        .popup-divider {
            height: 0.5px;
            background: var(--border);
            margin: 0 0 1rem;
        }

        .popup-rows {
            display: grid;
            gap: 11px;
            margin-bottom: 1.25rem;
        }

        .popup-row {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            font-size: 13px;
        }

        .popup-row .lbl {
            color: var(--text-secondary);
            min-width: 110px;
            font-size: 12px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .popup-row .val {
            color: var(--text-primary);
            font-weight: 500;
        }

        .val.green {
            color: #085041;
            background: #E1F5EE;
            padding: 2px 8px;
            border-radius: 99px;
            font-size: 12px;
        }

        .val.note {
            font-weight: 400;
            font-size: 12px;
            line-height: 1.6;
            color: var(--text-secondary);
        }

        .popup-tl {
            background: var(--bg-secondary);
            border-radius: var(--radius-md);
            padding: 12px 14px;
            margin-bottom: 1rem;
        }

        .popup-tl-label {
            font-size: 11px;
            color: var(--text-secondary);
            margin-bottom: 8px;
            font-weight: 500;
            letter-spacing: 0.04em;
        }

        .tl-bar-wrap {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .tl-bar-bg {
            flex: 1;
            height: 6px;
            background: var(--border);
            border-radius: 3px;
            overflow: hidden;
        }

        .tl-bar-fill {
            height: 100%;
            border-radius: 3px;
            transition: width 0.9s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .tl-pct {
            font-size: 11px;
            font-weight: 500;
            color: var(--text-secondary);
            min-width: 32px;
            text-align: right;
        }

        .close-btn {
            position: absolute;
            top: 14px;
            right: 14px;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: var(--bg-secondary);
            border: 0.5px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 15px;
            color: var(--text-secondary);
            transition: background 0.15s;
        }

        .close-btn:hover {
            background: var(--bg-primary);
        }

        /* TIMELINE */
        .tl-section {
            margin-top: 2.5rem;
            padding-top: 1.75rem;
            border-top: 0.5px solid var(--border);
        }

        .tl-section h3 {
            font-size: 13px;
            font-weight: 500;
            color: var(--text-secondary);
            margin-bottom: 16px;
            letter-spacing: 0.03em;
        }

        .tl-dots {
            display: flex;
            align-items: center;
            overflow-x: auto;
            padding-bottom: 8px;
        }

        .tl-node {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 80px;
            cursor: pointer;
        }

        .tl-dot {
            width: 13px;
            height: 13px;
            border-radius: 50%;
            border: 2px solid #534AB7;
            background: var(--bg-primary);
            transition: transform 0.2s, background 0.2s;
        }

        .tl-node:hover .tl-dot,
        .tl-node.hl .tl-dot {
            background: #534AB7;
            transform: scale(1.35);
        }

        .tl-connector {
            height: 2px;
            flex: 1;
            background: #EEEDFE;
            min-width: 30px;
            margin-top: 5.5px;
        }

        .tl-yr {
            font-size: 10px;
            color: var(--text-secondary);
            margin-top: 5px;
            text-align: center;
        }

        .tl-node.hl .tl-yr {
            color: #534AB7;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div class="page">
        <div class="header">
            <h1>अध्यक्ष परिषद — सदस्य सूची</h1>
            <div class="accent-bar"></div>
            <p>किसी भी कार्ड पर क्लिक करें — विस्तृत जानकारी देखें</p>
        </div>
        <div class="grid" id="grid"></div>
        <div class="tl-section">
            <h3>कार्यकाल समयरेखा</h3>
            <div class="tl-dots" id="tlDots"></div>
        </div>
    </div>

    <!-- POPUP OVERLAY -->
    <div class="overlay" id="overlay" role="dialog" aria-modal="true">
        <div class="popup animate__animated" id="popup">
            <div class="close-btn" id="closeBtn" aria-label="बंद करें"><i class="ti ti-x"></i></div>
            <div id="popupContent"></div>
        </div>
    </div>

    <script>
        const members = [
            { sn: "01", name: "डॉ. आर.डी. कटियार", from: "10.10.1983", to: "31.01.1993", yr: [1983, 1993], dur: "~9 वर्ष", pct: 50, initials: "आक", bg: "#EEEDFE", txt: "#3C3489", accent: "#534AB7", current: false },
            { sn: "02", name: "श्री राम नारायण चौधरी", from: "01.02.1993", to: "25.05.2002", yr: [1993, 2002], dur: "~9 वर्ष", pct: 50, initials: "रच", bg: "#E6F1FB", txt: "#0C447C", accent: "#185FA5", current: false },
            { sn: "03", name: "डॉ. राम किशोर कटियार", from: "26.05.2002", to: "12.09.2004", yr: [2002, 2004], dur: "~2 वर्ष", pct: 11, initials: "रक", bg: "#E1F5EE", txt: "#085041", accent: "#1D9E75", current: false },
            { sn: "04", name: "श्री अच्छे लाल वर्मा", from: "13.09.2004", to: "06.02.2005", yr: [2004, 2005], dur: "~5 माह", pct: 3, initials: "अव", bg: "#FAEEDA", txt: "#633806", accent: "#BA7517", current: false },
            { sn: "05", name: "श्री जे.पी.एन. सिंह कटियार", from: "07.02.2005", to: "15.10.2006", yr: [2005, 2006], dur: "~1.5 वर्ष", pct: 9, initials: "जक", bg: "#FAECE7", txt: "#712B13", accent: "#D85A30", current: false },
            {
                sn: "06", name: "श्री डी.एम. कटियार", from: "16.10.2006", to: "वर्तमान", yr: [2006, 2026], dur: "~18+ वर्ष", pct: 100, initials: "डक", bg: "#EAF3DE", txt: "#27500A", accent: "#3B6D11", current: true,
                note: "23.01.2021 तक प्रथम कार्यकाल। 24.01.2021 को पुनः निर्वाचित, कार्यकाल जारी।"
            },
        ];

        function addRipple(e, el) {
            const r = document.createElement('span');
            r.className = 'ripple';
            const rect = el.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            r.style.cssText = `width:${size}px;height:${size}px;left:${e.clientX - rect.left - size / 2}px;top:${e.clientY - rect.top - size / 2}px`;
            el.appendChild(r);
            setTimeout(() => r.remove(), 700);
        }

        function renderGrid() {
            const g = document.getElementById('grid');
            members.forEach((m, i) => {
                const c = document.createElement('div');
                c.className = 'card' + (m.current ? ' pulse-ring' : '');
                c.style.setProperty('--card-accent', m.accent);
                c.innerHTML = `
        <div class="avatar" style="background:${m.bg}">
          <span style="color:${m.txt}">${m.initials}</span>
        </div>
        <div class="card-sn">क्र. ${m.sn}</div>
        <div class="card-name">${m.name}</div>
        <div class="card-period">${m.from}</div>
        <div class="card-period">— ${m.to}</div>
        <br>
        <span class="badge ${m.current ? 'cur' : 'past'}">${m.current ? 'वर्तमान' : 'पूर्व'}</span>
      `;
                c.addEventListener('click', e => { addRipple(e, c); openPopup(i); });
                g.appendChild(c);
                gsap.fromTo(c, { opacity: 0, y: 40 }, { opacity: 1, y: 0, duration: 0.5, delay: i * 0.1, ease: 'back.out(1.4)' });
            });
        }

        function renderTimeline() {
            const t = document.getElementById('tlDots');
            members.forEach((m, i) => {
                const w = document.createElement('div');
                w.style.cssText = 'display:flex;align-items:center;';
                const node = document.createElement('div');
                node.className = 'tl-node'; node.id = 'tln' + i;
                node.innerHTML = `<div class="tl-dot"></div><div class="tl-yr">${m.yr[0]}</div>`;
                node.onclick = () => openPopup(i);
                w.appendChild(node);
                if (i < members.length - 1) {
                    const ln = document.createElement('div');
                    ln.className = 'tl-connector';
                    w.appendChild(ln);
                }
                t.appendChild(w);
            });
        }

        function openPopup(i) {
            const m = members[i];
            document.querySelectorAll('.tl-node').forEach(n => n.classList.remove('hl'));
            document.getElementById('tln' + i)?.classList.add('hl');
            const pc = document.getElementById('popupContent');
            pc.innerHTML = `
      <div class="popup-accent" style="background:${m.accent}"></div>
      <div class="popup-top">
        <div class="popup-avatar" style="background:${m.bg}">
          <span style="color:${m.txt}">${m.initials}</span>
        </div>
        <div class="popup-title">
          <h2>${m.name}</h2>
          <div class="sn">क्रमांक ${m.sn} · अध्यक्ष</div>
          <br>
          <span class="badge ${m.current ? 'cur' : 'past'}">${m.current ? 'वर्तमान अध्यक्ष' : 'पूर्व अध्यक्ष'}</span>
        </div>
      </div>
      <div class="popup-divider"></div>
      <div class="popup-rows">
        <div class="popup-row">
          <span class="lbl"><i class="ti ti-calendar"></i> कार्यकाल आरंभ</span>
          <span class="val">${m.from}</span>
        </div>
        <div class="popup-row">
          <span class="lbl"><i class="ti ti-calendar-off"></i> कार्यकाल अंत</span>
          <span class="val ${m.current ? 'green' : ''}">${m.to}</span>
        </div>
        <div class="popup-row">
          <span class="lbl"><i class="ti ti-clock"></i> कुल अवधि</span>
          <span class="val">${m.dur}</span>
        </div>
        ${m.note ? `<div class="popup-row">
          <span class="lbl"><i class="ti ti-info-circle"></i> टिप्पणी</span>
          <span class="val note">${m.note}</span>
        </div>` : ''}
      </div>
      <div class="popup-tl">
        <div class="popup-tl-label">कार्यकाल अवधि (सापेक्ष)</div>
        <div class="tl-bar-wrap">
          <div class="tl-bar-bg">
            <div class="tl-bar-fill" id="barFill" style="width:0%;background:${m.accent}"></div>
          </div>
          <div class="tl-pct" id="barPct">0%</div>
        </div>
      </div>
    `;
            const ov = document.getElementById('overlay');
            const pp = document.getElementById('popup');
            pp.classList.remove('animate__bounceIn', 'animate__zoomIn', 'animate__zoomOut');
            ov.classList.add('open');
            void pp.offsetWidth;
            pp.classList.add('animate__zoomIn');
            pp.style.setProperty('--animate-duration', '0.35s');
            setTimeout(() => {
                const fill = document.getElementById('barFill');
                const pct = document.getElementById('barPct');
                if (fill) {
                    gsap.to(fill, {
                        width: m.pct + '%', duration: 0.9, ease: 'power2.out',
                        onUpdate: function () {
                            pct.textContent = Math.round(gsap.getProperty(fill, 'width') / fill.parentElement.offsetWidth * 100) + '%';
                        }
                    });
                }
            }, 200);
        }

        function closePopup() {
            const ov = document.getElementById('overlay');
            const pp = document.getElementById('popup');
            pp.classList.remove('animate__zoomIn');
            pp.classList.add('animate__zoomOut');
            pp.style.setProperty('--animate-duration', '0.2s');
            setTimeout(() => { ov.classList.remove('open'); pp.classList.remove('animate__zoomOut'); }, 200);
            document.querySelectorAll('.tl-node').forEach(n => n.classList.remove('hl'));
        }

        document.getElementById('closeBtn').onclick = closePopup;
        document.getElementById('overlay').addEventListener('click', e => {
            if (e.target === document.getElementById('overlay')) closePopup();
        });
        document.addEventListener('keydown', e => { if (e.key === 'Escape') closePopup(); });

        renderGrid();
        renderTimeline();
    </script>
</body>

</html>