

<div class="container mt-4">
  <div class="card card-custom bg-primary text-white">
    <div class="card-body">
      <h2 class="card-title text-center">Quiz PTMO</h2>
      <form id="qcmForm">
        <div class="question">
          <p><strong>Question 1:</strong> Quelle est la signification de l'abréviation "PTMO"?</p>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="q1a" value="a">
            <label class="form-check-label" for="q1a">Project Technical Management Office</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="q1b" value="b">
            <label class="form-check-label" for="q1b">Processus de Transformation des Méthodes Organisationnelles</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="q1c" value="c">
            <label class="form-check-label" for="q1c">Planification de Traitement des Missions Opérationnelles</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question1" id="q1d" value="d">
            <label class="form-check-label" for="q1d">Programme de Traçabilité et de Management des opérations</label>
          </div>
        </div>
        <div class="question">
          <p><strong>Question 2:</strong> Quel est le rôle principal de l'équipe PTMO ?</p>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question2" id="q2a" value="a">
            <label class="form-check-label" for="q2a">Développement de logiciels</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question2" id="q2b" value="b">
            <label class="form-check-label" for="q2b">Surveillance et gestion des demandes de changement (vrai)</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question2" id="q2c" value="c">
            <label class="form-check-label" for="q2c">Marketing des ressources humaines</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question2" id="q2d" value="d">
            <label class="form-check-label" for="q2d">Marketing et publicité</label>
          </div>
        </div>
        <div class="question">
          <p><strong>Question 3:</strong> Quelles sont les responsabilités de PTMO?</p>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question3" id="q3a" value="a">
            <label class="form-check-label" for="q3a">Gérer les achats du projet</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question3" id="q3b" value="b">
            <label class="form-check-label" for="q3b">Fournir une visibilité claire sur le projet (vrai)</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question3" id="q3c" value="c">
            <label class="form-check-label" for="q3c">Concevoir l'architecture logicielle</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="question3" id="q3d" value="d">
            <label class="form-check-label" for="q3d">Élaborer des plans de communication externe</label>
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
    var answers = ['a', 'b', 'b', 'a']; // Les bonnes réponses pour chaque question

    // Vérifiez les réponses
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
      message = "<p class='text-success'>Félicitations ! Vous avez réussi le quiz avec un score de 50% "+"</p>";
    } else {
      message = "<p class='text-danger'>Désolé, vous n'avez pas réussi le quiz. Veuillez réessayer.</p><button class='btn btn-danger btn-block' onclick='resetQuiz()'>Refaire le quiz</button>";
    }

    // Affichez le résultat dans le modal
    var modalResultDiv = $("#modalResult");
    modalResultDiv.html(message);

    // Affichage du modal avec une animation élégante
    $('#resultModal').modal('show');
  }

  // Fonction pour réinitialiser le quiz
  function resetQuiz() {
    $("input[type='radio']").prop('checked', false);
    $("#modalResult").empty();
  }
</script>
