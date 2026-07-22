<?php
$pageData = $pageData ?? include __DIR__ . '/../data/public-display-data.php';
?>
<div class="top-bar">
    <div class="brand">
        <img src="/images/logo.png" alt="<?= htmlspecialchars($pageData['brand']['alt'], ENT_QUOTES, 'UTF-8') ?>" class="brand-logo">
        <div class="brand-text"><?= htmlspecialchars($pageData['brand']['title'], ENT_QUOTES, 'UTF-8') ?></div>
    </div>
    <div class="time-display"><?= htmlspecialchars($pageData['time'], ENT_QUOTES, 'UTF-8') ?></div>
</div>

<div class="content-area">
    <div class="glass-panel announcement-panel">
        <div class="announcement-content">
            <div class="badge-tag"><?= htmlspecialchars($pageData['announcement']['tag'], ENT_QUOTES, 'UTF-8') ?></div>
            <div class="announcement-title"><?= htmlspecialchars($pageData['announcement']['title'], ENT_QUOTES, 'UTF-8') ?></div>
            <div class="announcement-desc"><?= htmlspecialchars($pageData['announcement']['description'], ENT_QUOTES, 'UTF-8') ?></div>
            <div class="carousel-dots">
                <?php foreach ($pageData['announcement']['dots'] as $dot): ?>
                    <div class="dot<?= $dot['active'] ? ' active' : '' ?>"></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="glass-panel serving-panel">
        <div class="section-header">
            <div class="section-icon pulse-green"></div>
            <div class="section-title"><?= htmlspecialchars($pageData['serving']['title'], ENT_QUOTES, 'UTF-8') ?></div>
        </div>

        <div class="serving-columns">
            <div class="serving-col ipd">
                <div class="patient-type-label"><?= htmlspecialchars($pageData['serving']['ipd']['label'], ENT_QUOTES, 'UTF-8') ?></div>
                <?php foreach ($pageData['serving']['ipd']['items'] as $item): ?>
                    <div class="serving-item">
                        <span><?= htmlspecialchars($item['exam'], ENT_QUOTES, 'UTF-8') ?></span>
                        <span><?= htmlspecialchars($item['code'], ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="serving-col opd">
                <div class="patient-type-label"><?= htmlspecialchars($pageData['serving']['opd']['label'], ENT_QUOTES, 'UTF-8') ?></div>
                <?php foreach ($pageData['serving']['opd']['items'] as $item): ?>
                    <div class="serving-item">
                        <span><?= htmlspecialchars($item['exam'], ENT_QUOTES, 'UTF-8') ?></span>
                        <span><?= htmlspecialchars($item['code'], ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div class="glass-panel queue-panel">
    <div class="queue-header-wrap section-header">
        <div class="section-icon pulse-green"></div>
        <div class="section-title">Incoming Queue</div>
    </div>
    <div class="queue-grid">
        <?php foreach ($pageData['queues'] as $queue): ?>
            <div class="queue-column">
                <div class="queue-col-header">
                    <div class="queue-col-title"><?= htmlspecialchars($queue['title'], ENT_QUOTES, 'UTF-8') ?></div>
                    <div class="queue-count"><?= htmlspecialchars($queue['count'], ENT_QUOTES, 'UTF-8') ?></div>
                </div>
                <div class="queue-list">
                    <?php foreach ($queue['items'] as $item): ?>
                        <div class="queue-chip <?= strtolower($item['type']) ?>">
                            <span><?= htmlspecialchars($item['id'], ENT_QUOTES, 'UTF-8') ?></span>
                            <span><?= htmlspecialchars($item['type'], ENT_QUOTES, 'UTF-8') ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
