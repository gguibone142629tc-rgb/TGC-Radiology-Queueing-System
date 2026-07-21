<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radiology Queue Display - Premium Theme</title>
    <!-- Use Google Fonts for premium typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --maroon: #9b1b2c;
            --green: #006828;
            --maroon-light: #fbebf0;
            --green-light: #e6f4eb;
            --text-dark: #1a1a1a;
            --text-muted: #6b7280;
        }

        body {
            font-family: 'Outfit', sans-serif;
            margin: 0;
            height: 100vh;
            /* Premium subtle mesh-like gradient background */
            background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 50%, #f4ecee 100%);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            padding: 24px;
            box-sizing: border-box;
            gap: 24px;
        }

        /* Floating Top Bar with Glassmorphism */
        .top-bar {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 12px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.8);
            z-index: 10;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        /* Pure CSS Logo Approximation */
        .css-logo {
            position: relative;
            width: 55px;
            height: 55px;
            display: flex;
            align-items: center;
            font-family: 'Arial Black', Impact, sans-serif;
        }
        .logo-a {
            color: var(--maroon);
            font-size: 55px;
            font-weight: 900;
            line-height: 1;
            position: absolute;
            left: 0;
            z-index: 1;
        }
        .logo-plus {
            color: var(--green);
            font-size: 45px;
            font-weight: 900;
            line-height: 1;
            position: absolute;
            right: -5px;
            top: 6px;
            z-index: 2;
        }

        .brand-text {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--text-dark);
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .brand-text span {
            color: var(--maroon);
        }

        .time-display {
            font-size: 1.6rem;
            font-weight: 800;
            color: var(--green);
            background: var(--green-light);
            padding: 8px 24px;
            border-radius: 14px;
            letter-spacing: 1px;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.02);
        }

        /* Main Layout */
        .content-area {
            display: flex;
            gap: 24px;
            flex: 1;
            min-height: 0; /* Important for flex children scrolling */
        }

        /* Glass Panel Base */
        .glass-panel {
            background: rgba(255, 255, 255, 0.65);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.9);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
            padding: 35px;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }

        /* Announcement Panel */
        .announcement-panel {
            flex: 1.2;
            justify-content: center;
        }

        /* Decorative blobs for announcement panel */
        .announcement-panel::before {
            content: '';
            position: absolute;
            top: -20%;
            right: -10%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(155, 27, 44, 0.06) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
        }
        
        .announcement-content {
            position: relative;
            z-index: 1;
        }

        .badge-tag {
            display: inline-block;
            background: var(--maroon-light);
            color: var(--maroon);
            padding: 8px 18px;
            border-radius: 20px;
            font-weight: 800;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 25px;
            box-shadow: 0 2px 10px rgba(155, 27, 44, 0.1);
        }

        .announcement-title {
            font-size: 4rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 20px;
            line-height: 1.1;
            letter-spacing: -1px;
        }

        .announcement-desc {
            font-size: 1.4rem;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 50px;
            max-width: 90%;
            font-weight: 400;
        }

        .carousel-dots {
            display: flex;
            gap: 10px;
        }

        .dot {
            width: 35px;
            height: 6px;
            background: rgba(0, 0, 0, 0.08);
            border-radius: 6px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .dot.active {
            background: var(--maroon);
            width: 60px;
            box-shadow: 0 2px 8px rgba(155, 27, 44, 0.3);
        }

        /* Serving Panel */
        .serving-panel {
            flex: 1;
        }

        .section-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 35px;
        }

        .section-icon {
            width: 14px;
            height: 14px;
            border-radius: 50%;
        }

        .section-icon.pulse-green {
            background: var(--green);
            box-shadow: 0 0 0 0 rgba(0, 104, 40, 0.5);
            animation: pulseG 2s infinite;
        }

        @keyframes pulseG {
            0% { box-shadow: 0 0 0 0 rgba(0, 104, 40, 0.5); }
            70% { box-shadow: 0 0 0 15px rgba(0, 104, 40, 0); }
            100% { box-shadow: 0 0 0 0 rgba(0, 104, 40, 0); }
        }

        .section-title {
            font-size: 1.2rem;
            font-weight: 800;
            color: var(--text-dark);
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        /* Adjusted Serving Columns Layout */
        .serving-columns {
            display: flex;
            flex: 1;
        }

        .serving-col {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .serving-col.ipd {
            padding-right: 30px;
            border-right: 2px dashed rgba(0,0,0,0.1);
        }

        .serving-col.opd {
            padding-left: 30px;
        }

        .patient-type-label {
            font-size: 1.6rem;
            font-weight: 800;
            letter-spacing: 1px;
            margin-bottom: 25px;
            display: inline-block;
            border-bottom: 4px solid;
            padding-bottom: 6px;
            width: max-content;
        }

        .serving-col.ipd .patient-type-label { 
            color: var(--maroon); 
            border-color: var(--maroon); 
        }
        
        .serving-col.opd .patient-type-label { 
            color: var(--green); 
            border-color: var(--green); 
        }

        .serving-info {
            font-size: 1.2rem;
            color: var(--text-muted);
            font-style: italic;
            font-weight: 400;
        }

        /* Incoming Queue */
        .queue-panel {
            height: 38%;
            padding: 30px 35px;
        }

        .queue-header-wrap {
            margin-bottom: 25px;
        }

        .queue-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            height: calc(100% - 50px);
        }

        .queue-column {
            background: rgba(255, 255, 255, 0.4);
            border-radius: 20px;
            padding: 25px;
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(255, 255, 255, 0.6);
        }

        .queue-col-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px dotted rgba(0,0,0,0.08);
        }

        .queue-col-title {
            font-weight: 800;
            font-size: 1.3rem;
            color: var(--text-dark);
            letter-spacing: 1px;
        }

        .queue-count {
            background: rgba(0,0,0,0.05);
            color: var(--text-dark);
            font-size: 0.9rem;
            font-weight: 800;
            padding: 6px 14px;
            border-radius: 12px;
        }

        .queue-list {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: stretch;
            color: var(--text-dark);
            font-style: normal;
            font-size: 0.95rem;
            overflow-y: auto;
            padding-right: 8px;
            gap: 6px;
        }

        /* Custom scrollbar */
        .queue-list::-webkit-scrollbar {
            width: 6px;
        }
        .queue-list::-webkit-scrollbar-track {
            background: rgba(0,0,0,0.02);
            border-radius: 10px;
        }
        .queue-list::-webkit-scrollbar-thumb {
            background: rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        .queue-chip {
            background: white;
            padding: 8px 12px;
            border-radius: 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
            border: 1px solid #eaeaea;
            flex-shrink: 0;
            color: var(--text-dark);
        }
        
        .queue-chip span:first-child {
            font-weight: 700;
            font-size: 0.95rem;
        }
        
        .queue-chip span:last-child {
            font-size: 0.8rem;
            font-weight: 800;
            padding: 3px 8px;
            border-radius: 4px;
        }

        .queue-chip.ipd span:last-child { 
            background-color: var(--maroon-light);
            color: var(--maroon);
        }
        .queue-chip.opd span:last-child { 
            background-color: var(--green-light);
            color: var(--green);
        }
        
        .serving-item {
            background: white;
            padding: 10px 14px;
            border-radius: 8px;
            margin-bottom: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--text-dark);
            box-shadow: 0 2px 5px rgba(0,0,0,0.03);
            border: 1px solid #eaeaea;
        }
        .serving-item span:first-child {
            font-weight: 600;
            font-size: 0.95rem;
            color: var(--text-muted);
        }
        .serving-item span:last-child {
            font-weight: 800;
            font-size: 1.15rem;
        }

    </style>
</head>
<body>

    <div class="top-bar">
        <div class="brand">
            <img src="{{ asset('images/logo.png') }}" alt="Tagum Global Medical Center Logo" style="height: 55px; object-fit: contain;">
            <div class="brand-text" style="font-size: 1.3rem;">Radiology Department</div>
        </div>
        <div class="time-display">01:46:41 PM</div>
    </div>

    <div class="content-area">
        <div class="glass-panel announcement-panel">
            <div class="announcement-content">
                <div class="badge-tag">Announcement</div>
                <div class="announcement-title">Metal objects</div>
                <div class="announcement-desc">Remove jewelry, hairpins, and metal accessories before your scan.</div>
                <div class="carousel-dots">
                    <div class="dot"></div>
                    <div class="dot active"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>
        </div>
        
        <div class="glass-panel serving-panel">
            <div class="section-header">
                <div class="section-icon pulse-green"></div>
                <div class="section-title">Serving</div>
            </div>
            
            <div class="serving-columns">
                <div class="serving-col ipd">
                    <div class="patient-type-label">IPD</div>
                    <div class="serving-item"><span>XRAY</span> <span>XR004</span></div>
                    <div class="serving-item"><span>UTZ</span> <span>UT002</span></div>
                </div>
                <div class="serving-col opd">
                    <div class="patient-type-label">OPD</div>
                    <div class="serving-item"><span>CTS</span> <span>CT001</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="glass-panel queue-panel">
        <div class="queue-header-wrap section-header" style="margin-bottom: 20px;">
            <div class="section-icon pulse-green" style="background: var(--maroon); animation: none; box-shadow: none;"></div>
            <div class="section-title">Incoming Queue</div>
        </div>
        <div class="queue-grid">
            <div class="queue-column">
                <div class="queue-col-header">
                    <div class="queue-col-title">XRAY</div>
                    <div class="queue-count">15</div>
                </div>
                <div class="queue-list">
                    <div class="queue-chip ipd"><span>XR005</span> <span>IPD</span></div>
                    <div class="queue-chip ipd"><span>XR006</span> <span>IPD</span></div>
                    <div class="queue-chip ipd"><span>XR007</span> <span>IPD</span></div>
                    <div class="queue-chip ipd"><span>XR008</span> <span>IPD</span></div>
                    <div class="queue-chip opd"><span>XR009</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>XR010</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>XR011</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>XR012</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>XR013</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>XR014</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>XR015</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>XR016</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>XR017</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>XR018</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>XR019</span> <span>OPD</span></div>
                </div>
            </div>
            <div class="queue-column">
                <div class="queue-col-header">
                    <div class="queue-col-title">UTZ</div>
                    <div class="queue-count">8</div>
                </div>
                <div class="queue-list">
                    <div class="queue-chip ipd"><span>UT003</span> <span>IPD</span></div>
                    <div class="queue-chip ipd"><span>UT004</span> <span>IPD</span></div>
                    <div class="queue-chip opd"><span>UT005</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>UT006</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>UT007</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>UT008</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>UT009</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>UT010</span> <span>OPD</span></div>
                </div>
            </div>
            <div class="queue-column">
                <div class="queue-col-header">
                    <div class="queue-col-title">CTS</div>
                    <div class="queue-count">12</div>
                </div>
                <div class="queue-list">
                    <div class="queue-chip ipd"><span>CT002</span> <span>IPD</span></div>
                    <div class="queue-chip ipd"><span>CT003</span> <span>IPD</span></div>
                    <div class="queue-chip ipd"><span>CT004</span> <span>IPD</span></div>
                    <div class="queue-chip opd"><span>CT005</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>CT006</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>CT007</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>CT008</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>CT009</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>CT010</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>CT011</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>CT012</span> <span>OPD</span></div>
                    <div class="queue-chip opd"><span>CT013</span> <span>OPD</span></div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
