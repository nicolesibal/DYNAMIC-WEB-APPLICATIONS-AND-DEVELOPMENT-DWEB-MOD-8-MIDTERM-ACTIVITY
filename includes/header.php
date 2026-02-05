<header class="page-header system-header">
    <h1>Flight Schedule System</h1>
    <p id="currentDateTime"></p>
</header>

<script>
function updateDateTime() {
    const now = new Date();
    const options = { 
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: true,
        timeZone: 'Asia/Manila'
    };

    document.getElementById('currentDateTime').textContent =
        now.toLocaleString('en-PH', options);
}


updateDateTime();


setInterval(updateDateTime, 1000);
</script>
