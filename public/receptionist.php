<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reception | Radiology QMS</title>
    <link rel="stylesheet" href="/css/receptionist.css">
</head>
<body>
    <div class="rqs-shell">
        <aside class="rqs-sidebar" aria-label="Reception navigation">
            <div class="rqs-brand">
                <img class="rqs-logo" src="/images/logo.png" alt="Tagum Global Medical Center Logo">
            </div>

            <nav class="rqs-nav" aria-label="Main">
                <button class="rqs-nav-item active nav-item" data-view="dashboard" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="nav-icon"><rect width="7" height="9" x="3" y="3" rx="1"/><rect width="7" height="5" x="14" y="3" rx="1"/><rect width="7" height="9" x="14" y="12" rx="1"/><rect width="7" height="5" x="3" y="16" rx="1"/></svg> Dashboard
                </button>
                <button class="rqs-nav-item nav-item" data-view="reception" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="nav-icon"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="M12 11h4"/><path d="M12 16h4"/><path d="M8 11h.01"/><path d="M8 16h.01"/></svg> Reception
                </button>
                <button class="rqs-nav-item nav-item" data-view="manage" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="nav-icon"><line x1="10" x2="21" y1="6" y2="6"/><line x1="10" x2="21" y1="12" y2="12"/><line x1="10" x2="21" y1="18" y2="18"/><path d="M4 6h1v4"/><path d="M4 10h2"/><path d="M6 18H4c0-1 2-2 2-3s-1-1.5-2-1"/></svg> Manage queue
                </button>
                <button class="rqs-nav-item nav-item" data-view="account" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="nav-icon"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="10" r="3"/><path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"/></svg> Account
                </button>
            </nav>

            <div class="rqs-sidebar-foot">
                <a class="rqs-mode-btn display-link" href="/public-display.php" target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="nav-icon"><rect width="20" height="14" x="2" y="3" rx="2"/><line x1="8" x2="16" y1="21" y2="21"/><line x1="12" x2="12" y1="17" y2="21"/></svg> Open public display
                </a>
            </div>
        </aside>

        <main class="workspace">
            <header class="page-header">
                <p>RADIOLOGY QUEUE MANAGEMENT SYSTEM</p>
                <h1 id="pageTitle">Dashboard</h1>
            </header>

            <section class="view active" id="dashboardView" aria-labelledby="dashboardTitle">
                <h2 id="dashboardTitle" class="sr-only">Dashboard</h2>
                <div class="analytics-dashboard">
                    <div class="analytics-toolbar">
                        <label class="filter-control">
                            <span>Month</span>
                            <select id="monthFilter">
                                <option value="all">All months</option>
                                <option value="0">January</option>
                                <option value="1">February</option>
                                <option value="2">March</option>
                                <option value="3">April</option>
                                <option value="4">May</option>
                                <option value="5">June</option>
                                <option value="6">July</option>
                                <option value="7">August</option>
                                <option value="8">September</option>
                                <option value="9">October</option>
                                <option value="10">November</option>
                                <option value="11">December</option>
                            </select>
                        </label>
                        <label class="filter-control">
                            <span>Category</span>
                            <select id="categoryFilter">
                                <option value="all">All categories</option>
                                <option value="xray">X-Ray</option>
                                <option value="ultrasound">Ultrasound</option>
                                <option value="ctscan">CT Scan</option>
                            </select>
                        </label>
                    </div>

                    <div class="metric-grid">
                        <section class="panel metric-card">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="metric-icon" style="color: var(--green)"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                <p>Total tickets</p>
                            </div>
                            <strong id="totalTicketsMetric">0</strong>
                        </section>
                        <section class="panel metric-card">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="metric-icon" style="color: var(--green)"><path d="M3 3v18h18"/><path d="M7 13h3v5H7z"/><path d="M14 8h3v10h-3z"/></svg>
                                <p>Busiest category</p>
                            </div>
                            <strong id="busiestCategoryMetric">None</strong>
                        </section>
                        <section class="panel metric-card">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="metric-icon" style="color: var(--green)"><path d="M3 3v18h18"/><path d="M18 17V9"/><path d="M13 17V5"/><path d="M8 17v-3"/></svg>
                                <p>Avg per category</p>
                            </div>
                            <strong id="averageCategoryMetric">0</strong>
                        </section>
                    </div>

                    <div class="analytics-grid">
                        <section class="panel chart-card wide">
                            <div class="section-heading simple">
                                <h3>Queue Analytics</h3>
                            </div>
                            <div class="bar-chart" id="procedureBarChart"></div>
                        </section>

                        <section class="panel chart-card">
                            <div class="section-heading simple">
                                <h3>Served Patient Category</h3>
                            </div>
                            <div class="pie-wrap">
                                <div class="pie-chart" id="patientPieChart"></div>
                                <div class="pie-legend" id="patientPieLegend"></div>
                            </div>
                        </section>

                        <section class="panel chart-card">
                            <div class="section-heading simple">
                                <h3>Completed Tickets</h3>
                            </div>
                            <div class="analytics-table" id="analyticsTable">
                                <p>No tickets found.</p>
                            </div>
                        </section>
                    </div>
                </div>
            </section>

            <section class="view" id="receptionView" aria-labelledby="receptionTitle">
                <h2 id="receptionTitle" class="sr-only">Reception</h2>
                    <div class="reception-layout">
                        <div class="register-layout-group">
                            <section class="panel register-card" style="margin-bottom: 24px;">
                                <div class="section-heading simple">
                                    <h3 class="dark-title">Register Patient Queue</h3>
                                </div>

                                <div class="field-group">
                                    <p class="light-label">Procedure Category</p>
                                    <div class="choice-row">
                                        <button class="choice-btn" data-procedure="xray" type="button">X-Ray</button>
                                        <button class="choice-btn" data-procedure="ultrasound" type="button">Ultrasound</button>
                                        <button class="choice-btn" data-procedure="ctscan" type="button">CT Scan</button>
                                    </div>
                                </div>

                                <div class="field-group">
                                    <p class="light-label">Patient Category</p>
                                    <div class="choice-row">
                                        <button class="choice-btn" data-patient="IPD" type="button">In-patient <span>(IPD)</span></button>
                                        <button class="choice-btn" data-patient="OPD" type="button">Out-patient <span>(OPD)</span></button>
                                    </div>
                                </div>
                            </section>

                            <div class="register-action-area">
                                <button class="primary-action" id="generateTicket" type="button" disabled>
                                    Generate queue number
                                </button>
                                <p class="form-note" id="formNote">Select a procedure and patient category to continue.</p>
                            </div>
                        </div>

                    <aside class="panel latest-card">
                        <div class="section-heading simple">
                            <h3>Latest Ticket</h3>
                        </div>
                        <div class="ticket-preview" id="latestTicket">
                            <p>No ticket generated yet this session.</p>
                        </div>
                    </aside>
                </div>
            </section>

            <section class="view" id="manageView" aria-labelledby="manageTitle">
                <h2 id="manageTitle" class="sr-only">Manage queue</h2>
                <div class="manage-grid" id="manageGrid"></div>
            </section>

            <section class="view" id="accountView" aria-labelledby="accountTitle">
                <h2 id="accountTitle" class="sr-only">Account</h2>
                <section class="panel account-card">
                    <div>
                        <p class="account-label">Signed in as</p>
                        <h3>Reception Desk</h3>
                    </div>
                    <span>Radiology Queue Management System</span>
                </section>
            </section>
        </main>
    </div>

    <script>
        const procedures = {
            xray: { name: 'X-Ray', shortName: 'X-RAY', chartLabel: 'Xray', prefix: 'XR' },
            ultrasound: { name: 'Ultrasound', shortName: 'UTZ', chartLabel: 'Utz', prefix: 'UT' },
            ctscan: { name: 'CT Scan', shortName: 'CTS', chartLabel: 'CTS', prefix: 'CT' }
        };

        const state = {
            selectedProcedure: '',
            selectedPatient: '',
            latestTicket: null,
            completed: [],
            generatedTickets: [],
            queues: {
                xray: [],
                ultrasound: [],
                ctscan: []
            },
            serving: {
                xray: null,
                ultrasound: null,
                ctscan: null
            },
            counters: {
                xray: 0,
                ultrasound: 0,
                ctscan: 0
            }
        };

        const navItems = document.querySelectorAll('.nav-item');
        const views = document.querySelectorAll('.view');
        const pageTitle = document.getElementById('pageTitle');
        const generateButton = document.getElementById('generateTicket');
        const formNote = document.getElementById('formNote');

        navItems.forEach((item) => {
            item.addEventListener('click', () => {
                navItems.forEach((nav) => nav.classList.remove('active'));
                views.forEach((view) => view.classList.remove('active'));
                item.classList.add('active');
                document.getElementById(`${item.dataset.view}View`).classList.add('active');
                pageTitle.textContent = item.textContent.trim();
            });
        });

        document.querySelectorAll('[data-procedure]').forEach((button) => {
            button.addEventListener('click', () => {
                state.selectedProcedure = button.dataset.procedure;
                document.querySelectorAll('[data-procedure]').forEach((item) => item.classList.remove('selected'));
                button.classList.add('selected');
                updateGenerateState();
            });
        });

        document.querySelectorAll('[data-patient]').forEach((button) => {
            button.addEventListener('click', () => {
                state.selectedPatient = button.dataset.patient;
                document.querySelectorAll('[data-patient]').forEach((item) => item.classList.remove('selected'));
                button.classList.add('selected');
                updateGenerateState();
            });
        });

        generateButton.addEventListener('click', () => {
            if (!state.selectedProcedure || !state.selectedPatient) return;

            const key = state.selectedProcedure;
            state.counters[key] += 1;
            const ticket = {
                id: `${procedures[key].prefix}${String(state.counters[key]).padStart(3, '0')}`,
                procedureKey: key,
                procedure: procedures[key].name,
                displayProcedure: procedures[key].shortName,
                patientType: state.selectedPatient,
                createdAt: new Date()
            };

            state.queues[key].push(ticket);
            state.generatedTickets.push(ticket);
            state.latestTicket = ticket;
            formNote.textContent = `${ticket.id} added to ${ticket.procedure}.`;
            render();
        });

        function updateGenerateState() {
            const ready = state.selectedProcedure && state.selectedPatient;
            generateButton.disabled = !ready;
            formNote.textContent = ready
                ? 'Ready to generate queue number.'
                : 'Select a procedure and patient category to continue.';
        }

        function callNext(key) {
            if (state.serving[key] || state.queues[key].length === 0) return;
            state.serving[key] = state.queues[key].shift();
            render();
        }

        function completePatient(key) {
            if (!state.serving[key]) return;
            state.completed.push({
                ...state.serving[key],
                completedAt: new Date()
            });
            state.serving[key] = null;
            render();
        }

        function renderTicket(ticket, compact = false) {
            return `
                <div class="${compact ? 'queue-pill' : 'ticket-row'}">
                    <strong>${ticket.id}</strong>
                    <span>${ticket.patientType}</span>
                </div>
            `;
        }

        function render() {
            renderLatestTicket();
            renderManageQueue();
            renderDashboard();
        }

        function renderLatestTicket() {
            const latestTicket = document.getElementById('latestTicket');
            if (!state.latestTicket) {
                latestTicket.innerHTML = '<p>No ticket generated yet this session.</p>';
                return;
            }

            latestTicket.innerHTML = `
                <div class="ticket-fade">
                    <span class="ticket-procedure">${state.latestTicket.procedure.toUpperCase()}</span>
                    <strong>${state.latestTicket.id}</strong>
                    <small>${state.latestTicket.patientType}</small>
                    <p>Now waiting · hand this number<br>to the patient</p>
                </div>
            `;
        }

        function renderManageQueue() {
            const manageGrid = document.getElementById('manageGrid');
            manageGrid.innerHTML = Object.entries(procedures).map(([key, procedure]) => {
                const serving = state.serving[key];
                const waiting = state.queues[key];

                return `
                    <section class="panel rqs-exam-col manage-card" style="padding: 18px;">
                        <div class="rqs-exam-header">
                            <h3>${procedure.name}</h3>
                            <span class="rqs-count-chip">${waiting.length} waiting</span>
                        </div>

                        ${serving ? `
                            <div class="rqs-serving-hero">
                                <div class="label">Now serving</div>
                                <div class="num rqs-num">${serving.id}</div>
                                <span class="category-badge">${serving.patientType}</span>
                            </div>
                        ` : `
                            <div class="rqs-serving-hero">
                                <div class="none">No patient being served</div>
                            </div>
                        `}

                        <div class="rqs-action-row">
                            <button class="secondary-action" type="button" style="flex: 1; justify-content: center;" ${serving ? '' : 'disabled'} onclick="completePatient('${key}')">
                                <span class="check-icon"></span> Complete
                            </button>
                            <button class="primary-action small" type="button" style="flex: 1; justify-content: center;" ${serving || waiting.length === 0 ? 'disabled' : ''} onclick="callNext('${key}')">
                                <span class="call-icon"></span> Call next
                            </button>
                        </div>

                        <div>
                            <p class="rqs-group-label" style="margin-bottom: 8px; font-size: 12px; font-weight: 800; color: #59645e; text-transform: uppercase;">Waiting list</p>
                            ${waiting.length === 0 ? `
                                <div class="rqs-empty-mini">Queue is empty</div>
                            ` : `
                                <div class="rqs-waiting-list">
                                    ${waiting.map((ticket, index) => `
                                        <div class="rqs-waiting-row">
                                            <span class="pos">${index + 1}</span>
                                            <span class="num rqs-num">${ticket.id}</span>
                                            <span class="category-badge">${ticket.patientType}</span>
                                        </div>
                                    `).join('')}
                                </div>
                            `}
                        </div>
                    </section>
                `;
            }).join('');
        }

        function renderDashboard() {
            const monthValue = document.getElementById('monthFilter').value;
            const categoryValue = document.getElementById('categoryFilter').value;
            const filteredGeneratedTickets = filterAnalyticsTickets(state.generatedTickets, monthValue, categoryValue, 'createdAt');
            const filteredCompletedTickets = filterAnalyticsTickets(state.completed, monthValue, categoryValue, 'completedAt');
            const generatedCounts = getProcedureCounts(filteredGeneratedTickets);
            const busiestCategory = Object.entries(generatedCounts)
                .sort((a, b) => b[1] - a[1])
                .find((item) => item[1] > 0);
            const activeCategoryCount = Object.values(generatedCounts).filter((count) => count > 0).length || 3;
            const averagePerCategory = filteredGeneratedTickets.length / activeCategoryCount;

            document.getElementById('totalTicketsMetric').textContent = filteredGeneratedTickets.length;
            document.getElementById('busiestCategoryMetric').textContent = busiestCategory
                ? procedures[busiestCategory[0]].chartLabel
                : 'None';
            document.getElementById('averageCategoryMetric').textContent = formatAverage(averagePerCategory);

            renderProcedureChart(filteredGeneratedTickets);
            renderPatientPie(filteredCompletedTickets);
            renderAnalyticsTable(filteredCompletedTickets);
        }

        function filterAnalyticsTickets(tickets, monthValue, categoryValue, dateKey) {
            return tickets.filter((ticket) => {
                const ticketDate = ticket[dateKey] || ticket.createdAt;
                const monthMatches = monthValue === 'all' || ticketDate.getMonth().toString() === monthValue;
                const categoryMatches = categoryValue === 'all'
                    || ticket.procedureKey === categoryValue
                    || ticket.patientType === categoryValue;

                return monthMatches && categoryMatches;
            });
        }

        function getProcedureCounts(tickets) {
            return Object.keys(procedures).reduce((counts, key) => {
                counts[key] = tickets.filter((ticket) => ticket.procedureKey === key).length;
                return counts;
            }, {});
        }

        function getDailyAverage(tickets, dateKey) {
            return formatAverage(getDailyAverageNumber(tickets, dateKey));
        }

        function getDailyAverageNumber(tickets, dateKey) {
            if (!tickets.length) return 0;

            const dates = new Set(tickets.map((ticket) => (ticket[dateKey] || ticket.createdAt).toDateString()));
            return tickets.length / dates.size;
        }

        function formatAverage(value) {
            return Number(value).toFixed(1).replace('.0', '');
        }

        function renderProcedureChart(tickets) {
            const chart = document.getElementById('procedureBarChart');
            const counts = Object.entries(procedures).map(([key, procedure]) => ({
                key,
                label: procedure.chartLabel,
                count: tickets.filter((ticket) => ticket.procedureKey === key).length
            }));
            const maxCount = Math.max(4, Math.ceil(Math.max(...counts.map((item) => item.count)) / 10) * 10);

            chart.innerHTML = `
                <div class="chart-legend">
                    ${counts.map((item) => `<span><i class="${item.key}"></i>${item.label}</span>`).join('')}
                </div>
                <div class="chart-scale">
                    ${[4, 3, 2, 1, 0].map((value) => `<span>${Math.round((maxCount / 4) * value)}</span>`).join('')}
                </div>
                <div class="chart-plot">
                    ${[4, 3, 2, 1].map(() => '<span class="grid-line"></span>').join('')}
                    <div class="bar-row">
                        ${counts.map((item) => `
                            <div class="bar-item">
                                <div class="bar-track">
                                    <span class="${item.key}" style="--bar-height: ${maxCount ? (item.count / maxCount) * 100 : 0}%"></span>
                                </div>
                                <strong>${item.label}</strong>
                            </div>
                        `).join('')}
                    </div>
                </div>
            `;
        }

        function renderPatientPie(tickets) {
            const pie = document.getElementById('patientPieChart');
            const legend = document.getElementById('patientPieLegend');
            const ipd = tickets.filter((ticket) => ticket.patientType === 'IPD').length;
            const opd = tickets.filter((ticket) => ticket.patientType === 'OPD').length;
            const total = ipd + opd;
            const ipdPercent = total ? Math.round((ipd / total) * 100) : 0;

            pie.style.background = total
                ? `conic-gradient(#921d31 0 ${ipdPercent}%, #9fc4b0 ${ipdPercent}% 100%)`
                : 'conic-gradient(#eee8df 0 100%)';
            pie.innerHTML = `<span>${total}</span>`;
            legend.innerHTML = `
                <div><span class="legend-dot maroon"></span>IPD <strong>${ipd}</strong></div>
                <div><span class="legend-dot green"></span>OPD <strong>${opd}</strong></div>
            `;
        }

        function renderAnalyticsTable(tickets) {
            const table = document.getElementById('analyticsTable');
            const visibleTickets = [...tickets].reverse().slice(0, 6);

            table.innerHTML = visibleTickets.length
                ? visibleTickets.map((ticket) => `
                    <div class="analytics-row">
                        <strong>${ticket.id}</strong>
                        <span>${ticket.procedure}</span>
                        <small>${ticket.patientType}</small>
                    </div>
                `).join('')
                : '<p>No completed tickets found.</p>';
        }

        document.getElementById('monthFilter').addEventListener('change', renderDashboard);
        document.getElementById('categoryFilter').addEventListener('change', renderDashboard);
        render();
    </script>
</body>
</html>
