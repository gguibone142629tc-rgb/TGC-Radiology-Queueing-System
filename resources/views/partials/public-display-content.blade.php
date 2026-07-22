<div class="main-container">
    <div class="left-column">
        <div class="ad-wrapper">
            <div class="slideshow-container">
                @foreach ($pageData['announcement']['slides'] as $index => $slide)
                    <img src="{{ $slide }}" class="slide {{ $index === 0 ? 'active' : '' }}">
                @endforeach
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        let slides = document.querySelectorAll('.slideshow-container .slide');
                        let currentSlide = 0;
                        if(slides.length > 1) {
                            setInterval(() => {
                                slides[currentSlide].classList.remove('active');
                                currentSlide = (currentSlide + 1) % slides.length;
                                slides[currentSlide].classList.add('active');
                            }, 5000);
                        }
                    });
                </script>
            </div>
        </div>

        <div class="incoming-section">
            <div class="incoming-main-header">
                <span class="pulse-dot green"></span>
                INCOMING
            </div>
            <div class="incoming-boxes-wrapper">
                @foreach ($pageData['queues'] as $queue)
                    <div class="incoming-box">
                        <div class="incoming-box-title queue-{{ strtolower($queue['title']) }}">
                            {{ $queue['title'] }}
                        </div>
                        <div class="incoming-box-body">
                            @for ($i = 0; $i < 5; $i++)
                                <div class="incoming-box-row">
                                    <span class="incoming-code">{{ isset($queue['items'][$i]) ? $queue['items'][$i]['id'] : '' }}</span>
                                </div>
                            @endfor
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="right-column">
        <div class="header-row">
            <img src="{{ asset($pageData['brand']['logo']) }}" alt="{{ $pageData['brand']['alt'] }}" class="sidebar-logo">
            <div class="header-text">
                <div class="header-title">RADIOLOGY</div>
                <div class="header-date" id="live-date"></div>
                <div class="header-time" id="live-clock"></div>
            </div>
        </div>
        <script>
            function updateClock() {
                var now = new Date();
                var h = now.getHours();
                var m = now.getMinutes();
                var s = now.getSeconds();
                var ampm = h >= 12 ? 'PM' : 'AM';
                h = h % 12; h = h ? h : 12;
                m = m < 10 ? '0' + m : m;
                s = s < 10 ? '0' + s : s;
                document.getElementById('live-clock').textContent = h + ':' + m + ':' + s + ' ' + ampm;
                var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
                var months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
                document.getElementById('live-date').textContent = days[now.getDay()] + ', ' + months[now.getMonth()] + ' ' + now.getDate() + ', ' + now.getFullYear();
            }
            updateClock();
            setInterval(updateClock, 1000);
        </script>

        <div class="serving-section">
            <div class="serving-main-header">
                <span class="pulse-dot red"></span>
                NOW SERVING
            </div>
            <div class="serving-columns">
                <div class="serving-col">
                    <div class="serving-col-header ipd-header">IPD</div>
                    <div class="serving-col-body">
                        @foreach ($pageData['serving']['items'] as $item)
                            @if ($item['patient_type'] === 'IPD')
                                <div class="serving-col-row">
                                    <span class="serving-code proc-{{ substr($item['code'], 0, 2) }}">{{ $item['code'] }}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="serving-col">
                    <div class="serving-col-header opd-header">OPD</div>
                    <div class="serving-col-body">
                        @foreach ($pageData['serving']['items'] as $item)
                            @if ($item['patient_type'] === 'OPD')
                                <div class="serving-col-row">
                                    <span class="serving-code proc-{{ substr($item['code'], 0, 2) }}">{{ $item['code'] }}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
