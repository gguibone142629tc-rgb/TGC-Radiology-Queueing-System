<div class="top-bar">
    <div class="brand">
        <img src="{{ asset($pageData['brand']['logo']) }}" alt="{{ $pageData['brand']['alt'] }}" class="brand-logo">
        <div class="brand-text">{{ $pageData['brand']['title'] }}</div>
    </div>
    <div class="time-display">{{ $pageData['time'] }}</div>
</div>

<div class="content-area">
    <div class="glass-panel announcement-panel">
        <div class="announcement-content">
            <div class="badge-tag">{{ $pageData['announcement']['tag'] }}</div>
            <div class="announcement-title">{{ $pageData['announcement']['title'] }}</div>
            <div class="announcement-desc">{{ $pageData['announcement']['description'] }}</div>
            <div class="carousel-dots">
                @foreach ($pageData['announcement']['dots'] as $dot)
                    <div class="dot{{ $dot['active'] ? ' active' : '' }}"></div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="glass-panel serving-panel">
        <div class="section-header">
            <div class="section-icon pulse-green"></div>
            <div class="section-title">{{ $pageData['serving']['title'] }}</div>
        </div>

        <div class="serving-columns">
            <div class="serving-col ipd">
                <div class="patient-type-label">{{ $pageData['serving']['ipd']['label'] }}</div>
                @foreach ($pageData['serving']['ipd']['items'] as $item)
                    <div class="serving-item">
                        <span>{{ $item['exam'] }}</span>
                        <span>{{ $item['code'] }}</span>
                    </div>
                @endforeach
            </div>
            <div class="serving-col opd">
                <div class="patient-type-label">{{ $pageData['serving']['opd']['label'] }}</div>
                @foreach ($pageData['serving']['opd']['items'] as $item)
                    <div class="serving-item">
                        <span>{{ $item['exam'] }}</span>
                        <span>{{ $item['code'] }}</span>
                    </div>
                @endforeach
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
        @foreach ($pageData['queues'] as $queue)
            <div class="queue-column">
                <div class="queue-col-header">
                    <div class="queue-col-title">{{ $queue['title'] }}</div>
                    <div class="queue-count">{{ $queue['count'] }}</div>
                </div>
                <div class="queue-list">
                    @foreach ($queue['items'] as $item)
                        <div class="queue-chip {{ strtolower($item['type']) }}">
                            <span>{{ $item['id'] }}</span>
                            <span>{{ $item['type'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
