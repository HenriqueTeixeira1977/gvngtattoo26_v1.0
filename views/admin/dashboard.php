<h1>Dashboard GVNG Tattoo</h1>
<p>Total de Leads: <?= $data['leads_total'] ?></p>
<!-- Gráfico com Chart.js -->
<canvas id="leadsChart"></canvas>
<script>
    const ctx = document.getElementById('leadsChart').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [/* Datas dos leads */],
            datasets: [{ label: 'Leads por Dia', data: [/* Counts */] }]
        },
        options: { /* ... */ }
    });
</script>
<!-- Lista de métricas por status -->
<ul>
    <?php foreach ($data['leads_by_status'] as $status): ?>
        <li><?= $status['status'] ?>: <?= $status['count'] ?></li>
    <?php endforeach; ?>
</ul>