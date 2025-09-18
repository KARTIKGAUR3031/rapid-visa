
document.addEventListener('DOMContentLoaded', function () {
    // Chart.js for stats
    if (document.getElementById('applicationStatsChart')) {
        const ctx = document.getElementById('applicationStatsChart').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Approved', 'Pending', 'Rejected'],
                datasets: [{
                    label: 'Application Stats',
                    data: [2, 1, 1],
                    backgroundColor: [
                        'rgba(40, 167, 69, 0.8)',
                        'rgba(255, 193, 7, 0.8)',
                        'rgba(220, 53, 69, 0.8)'
                    ],
                    borderColor: [
                        '#28a745',
                        '#ffc107',
                        '#dc3545'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });
    }

    // Sidebar toggle for mobile
    const sidebar = document.querySelector('.sidebar');
    const sidebarToggle = document.createElement('button');
    sidebarToggle.innerHTML = '<i class="fas fa-bars"></i>';
    sidebarToggle.classList.add('sidebar-toggle');
    document.body.appendChild(sidebarToggle);

    sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('open');
    });
});