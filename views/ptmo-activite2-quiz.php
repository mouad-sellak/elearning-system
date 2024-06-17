<div class="container mt-4">
  <div class="card card-custom bg-primary text-white">
    <div class="card-body">
      <h2 class="card-title text-center">Quiz Activité 2</h2>
      <form id="qcmForm">
        <div class="question">
          <p><strong>Question 1:</strong> L'interface est la surface de contact entre deux pièces ?</p>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="q1a" value="a">
            <label class="form-check-label" for="q1a">vrai </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="q1b" value="b">
            <label class="form-check-label" for="q1b">Faux</label>
          </div>
        </div>
        <div class="question">
          <p><strong>Question 2:</strong> Le clonage d'une connexion générique peut être effectué automatiquement par PowerTools ?</p>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question2" id="q2a" value="a">
            <label class="form-check-label" for="q2a">vrai </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question2" id="q2b" value="b">
            <label class="form-check-label" for="q2b">Faux</label>
          </div>
        </div>
        <div class="question">
          <p><strong>Question 3:</strong> Quelle est la désignation de CI ?</p>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question3" id="q3a" value="a">
            <label class="form-check-label" for="q3a">Pièce portée sur Pièce porteuse</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question3" id="q3b" value="b">
            <label class="form-check-label" for="q3b">Pièce porteuse sur Pièce portée</label>
          </div>
        </div>
        <div class="question">
          <p><strong>Question 4:</strong> Les fixations soudées ou assemblées au ferrage nécessitent la création d'un NP FIX et d'un PA FIX ?</p>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question4" id="q4a" value="a">
            <label class="form-check-label" for="q4a">Vrai </label>
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

<script>
  // Fonction pour soumettre le formulaire et calculer le résultat
  function submitForm() {
    var score = 0;
    var totalQuestions = 4; // Nombre total de questions

    // Réponses correctes pour chaque question
    var answers = ['a', 'a', 'a', 'a'];

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
      message = "<p class='text-success'>Félicitations ! Vous avez réussi le quiz avec un score de " + score + " sur " + totalQuestions + ".</p>";
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
