<div class="container mt-4">
    <div class="card card-custom text-white" style="background-color: rgb(39,162,212);">
        <div class="card-body">
            <h2 class="card-title text-center">Quiz Activité 1</h2>
            <form id="qcmForm">
                <div class="question">
                    <p><strong>Question 1:</strong> Quel est l'outil principal utilisé pour la gestion des modifications dans la GDM ?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="q1a" value="a">
                        <label class="form-check-label" for="q1a">PLM (Product Lifecycle Management)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="q1b" value="b">
                        <label class="form-check-label" for="q1b">ERP (Enterprise Resource Planning).</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="q1c" value="c">
                        <label class="form-check-label" for="q1c">CRM (Customer Relationship Management).</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="q1d" value="d">
                        <label class="form-check-label" for="q1d">SCM (Supply Chain Management).</label>
                    </div>
                </div>
                <div class="question">
                    <p><strong>Question 2:</strong> Quel est l'objet principal utilisé pour piloter les modifications dans l'outil PLM ?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="q2a" value="a">
                        <label class="form-check-label" for="q2a">ECR (Engineering Change Request)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="q2b" value="b">
                        <label class="form-check-label" for="q2b">FIPA (Fiche Info Prix Achat).</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="q2c" value="c">
                        <label class="form-check-label" for="q2c">ECO (Engineering Change Order).</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="q2d" value="d">
                        <label class="form-check-label" for="q2d">AVFIPA (Fiche Info Prix Achat).</label>
                    </div>
                </div>
                <div class="question">
                    <p><strong>Question 3:</strong> Quels sont les cycles d'ECR utilisés dans la GDM ?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="q3a" value="a">
                        <label class="form-check-label" for="q3a">Court, simple, long.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="q3b" value="b">
                        <label class="form-check-label" for="q3b">Rapide, efficace, lent.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="q3c" value="c">
                        <label class="form-check-label" for="q3c">Basique, avancé, complexe.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="q3d" value="d">
                        <label class="form-check-label" for="q3d">Préliminaire, intermédiaire, avancé.</label>
                    </div>
                </div>
                <div class="question">
                    <p><strong>Question 4:</strong> Selon la règle d’or GR2.1, le titre et la description associés à un ECR doivent être rédigés en Français, de plus la description doit débuter avec des hashtags.</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question4" id="q4a" value="a">
                        <label class="form-check-label" for="q4a">Vraie</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question4" id="q4b" value="b">
                        <label class="form-check-label" for="q4b">Faux</label>
                    </div>
                </div>
                <div class="col-md-3 m-2">
                    <button type="button" class="btn  btn-light btn-block" onclick="submitForm()">Soumettre</button>
                </div>
            </form>
            <div id="result" class="mt-3"></div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="resultModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="resultModalLabel">Résultat du Quiz</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="modalResult"></div>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid mt-5" style="background-color: rgb(39,162,212);">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-5">
            <h3 class="text-center" style="color: rgb(255,255,255);"><strong>Questions & Feedbacks</strong></h3>
            <form class="mt-4">
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="text" class="form-control" id="feedback" placeholder="Votre question ou feedback">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-block" style="background-color: rgb(255,255,255);">
                            <strong style="color: rgb(39,162,212);">Envoyer</strong>
                        </button>
                    </div>
                </div>
            </form>
            <!-- Feedback and Questions Section -->
            <div class="mb-5">
                <div class="row">
                    <!-- Feedback 1 -->
                    <div class="col-md-6 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Hamza - Consultant</h5>
                                <p class="card-text">Cette plateforme e-learning offre une interface intuitive et ergonomique, des contenus de haute qualité, ainsi que des outils interactifs favorisant l'engagement des apprenants.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feedback 2 -->
                    <div class="col-md-6 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Abdesslam -Consultant</h5>
                                <p class="card-text">La plateforme offre une expérience utilisateur fluide et conviviale, avec un contenu de formation de grande qualité et bien structuré. Les ressources complémentaires et les outils interactifs renforcent l'apprentissage, tandis que les fonctionnalités interactives, comme les discussions avec les formateurs, ajoutent une valeur supplémentaire à l'expérience. Dans l'ensemble, la plateforme propose une expérience engageante, avec un contenu de qualité simple à assimiler, ainsi que les fonctionnalités pertinentes pour les consultants du périmètre PTMO & PPMO.</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- End of Feedback and Questions Section -->
        </div>
    </div>
</div>


<script>
    // Fonction pour soumettre le formulaire et calculer le résultat
    function submitForm() {
        var score = 0;
        var totalQuestions = 4; // Nombre total de questions

        // Réponses correctes pour chaque question
        var answers = ['a', 'a', 'a', 'b'];

        // Vérifier les réponses
        for (var i = 1; i <= totalQuestions; i++) {
            var selectedAnswer = $("input[name='question" + i + "']:checked").val();
            if (selectedAnswer === answers[i - 1]) {
                score++;
            }
        }

        // Calcul du pourcentage de réussite
        var percentage = (score / totalQuestions) * 100;

        // Affichage du message en fonction du pourcentage
        var message;
        if (percentage >= 50) {
            // message = "<p class='text-success'>Félicitations ! Vous avez réussi le quiz avec un score de " + score + " sur " + totalQuestions + ".</p>";
            message = "<p class='text-success'>Félicitations ! Vous avez réussi le quiz avec un  plus de 80% </p>";
        } else {
            message = "<p class='text-danger'>Désolé, vous n'avez pas réussi le quiz. Veuillez réessayer.</p><button class='btn btn-danger btn-block' onclick='resetQuiz()'>Refaire le quiz</button>";
        }

        // Afficher le résultat dans le modal
        var modalResultDiv = $("#modalResult");
        modalResultDiv.html(message);

        // Afficher le modal avec une animation élégante
        $('#resultModal').modal('show');
    }

    // Fonction pour réinitialiser le quiz
    function resetQuiz() {
        $("input[type='radio']").prop('checked', false);
        $("#modalResult").empty();
    }
</script>