<div class="container mt-4">
  <div class="card card-custom">
    <div class="card-body">
      <h2 class="card-title text-center text-primary">Formulaire de Questions</h2>
      <form id="questionForm">
        <div class="form-group">
          <label for="name">Nom:</label>
          <input type="text" class="form-control" id="name" placeholder="Entrez votre nom" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Entrez votre email" required>
        </div>
        <div class="form-group">
          <label for="question">Question:</label>
          <textarea class="form-control" id="question" rows="4" placeholder="Posez votre question ici" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
    </div>
  </div>
</div>



<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
    // Gestion de la soumission du formulaire
    $('#questionForm').submit(function(e){
      e.preventDefault(); // Empêche le formulaire de se soumettre normalement
      
      // Récupération des valeurs du formulaire
      var name = $('#name').val();
      var email = $('#email').val();
      var question = $('#question').val();
      
      // Vous pouvez ajouter ici la logique pour traiter les données du formulaire, par exemple, les envoyer à un serveur via AJAX
      
      // Réinitialisation du formulaire après soumission
      $('#name').val('');
      $('#email').val('');
      $('#question').val('');
      
      // Affichage d'un message de succès (vous pouvez le personnaliser selon vos besoins)
      alert('Question envoyée avec succès!');
    });
  });
</script>