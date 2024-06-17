<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Quiz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .progress-bar {
            background-color: rgb(39,162,212);
            color: white;
        }
        .progress-bar {
            transition: width 0.5s ease-in-out;
        }
    </style>
</head>
<body>
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3 class="text-center mb-4"><strong>Dashboard Quiz</strong></h3>
            <div class="row">
                <!-- Card for Percentage Score -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Scores des Utilisateurs (en moyenne)</h5>
                            <canvas id="scoreChart"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Card for Pass/Fail Status -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Status Passé/Échoué</h5>
                            <canvas id="statusChart"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Card for Number of Quizzes Taken -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nombre de Quiz Passés Par Utlisateur</h5>
                            <canvas id="activityChart"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Card for Users -->
                <!-- <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Utilisateurs</h5>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Meryem - 4 Quiz</div>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Hamza - 7 Quiz</div>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Wiam - 3 Quiz</div>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Abdesslam - 7 Quiz</div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Card for Achievement Rate -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Taux d'achèvement</h5>
                            <div class="progress">
                                <div id="achievementRate" class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Data for the charts
    const scoreData = [75, 85, 50, 90]; // Example data
    const statusData = [2, 2]; // Example data: 3 passed, 2 failed
    const activityData = [3, 7, 3, 7]; // Example data

    // Score Chart
    const ctxScore = document.getElementById('scoreChart').getContext('2d');
    const scoreChart = new Chart(ctxScore, {
        type: 'bar',
        data: {
            labels: ['Meryem', 'Hamza', 'Wiam', 'Abdessalam'],
            datasets: [{
                label: 'Score (%)',
                data: scoreData,
                backgroundColor: 'rgba(39,162,212,0.5)',
                borderColor: 'rgba(39,162,212,1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100
                }
            }
        }
    });

    // Status Chart
    const ctxStatus = document.getElementById('statusChart').getContext('2d');
    const statusChart = new Chart(ctxStatus, {
        type: 'pie',
        data: {
            labels: ['Passé', 'Échoué'],
            datasets: [{
                label: 'Status',
                data: statusData,
                backgroundColor: ['rgba(39,162,212,0.5)', 'rgba(255,99,132,0.5)'],
                borderColor: ['rgba(39,162,212,1)', 'rgba(255,99,132,1)'],
                borderWidth: 1
            }]
        }
    });

  // Activity Chart
const ctxActivity = document.getElementById('activityChart').getContext('2d');
const activityChart = new Chart(ctxActivity, {
    type: 'line',
    data: {
        labels: ['Meryem', 'Hamza', 'Wiam', 'Abdessalam'],
        datasets: [{
            label: 'Nombre de Quiz Passés Par Utlisateur',
            data: activityData,
            backgroundColor: 'rgba(39,162,212,0.5)',
            borderColor: 'rgba(39,162,212,1)',
            borderWidth: 1,
            fill: false
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                stepSize: 1,
                max: 7,
                min: 1
            }
        }
    }
});


    // Achievement Rate Calculation
    const totalParticipants = 4; // Total number of participants
    const participantsCompletedAllQuizzes = 2; // Number of participants who completed all quizzes
    const achievementRate = (participantsCompletedAllQuizzes / totalParticipants) * 100;

    // Display Achievement Rate
    const achievementRateElement = document.querySelector('#achievementRate');
    achievementRateElement.style.width = `${achievementRate}%`;
    achievementRateElement.textContent = `Taux d'achèvement: ${achievementRate.toFixed(2)}%`;
});
</script>
</body>
</html>
