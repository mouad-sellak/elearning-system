<div class="container mt-5">
    <!-- Vos éléments existants vont ici -->

    <!-- Activité 3 -->
    <div class="row justify-content-center">
        <div class="col-md-10 mb-4 ">
            <div class="card h-100">
                <div class="card-header bg-primary">
                    Activité 3 : Questions sur le Plan de Maîtrise de la Conformité (PMC)
                </div>
                <div class="card-body bg-primary">
                    <!-- Question 1 -->
                    <p><strong>1. Où peut-on effectuer des modifications et un contrôle continu sur le PMC ?</strong></p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="q1a" value="a">
                        <label class="form-check-label" for="q1a">
                            a) Sur le site web de Stellantis
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="q1b" value="b">
                        <label class="form-check-label" for="q1b">
                            b) Sur l'outil CMP (vrai)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="q1c" value="c">
                        <label class="form-check-label" for="q1c">
                            c) En envoyant un e-mail au service qualité
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="q1d" value="d">
                        <label class="form-check-label" for="q1d">
                            d) En demandant une réunion avec le chef de projet
                        </label>
                    </div>
                    <!-- Question 2 -->
                    <p><strong>2. Quel contenu est inclus dans un plan de maîtrise de la conformité au niveau d'Excel ?</strong></p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="q2a" value="a">
                        <label class="form-check-label" for="q2a">
                            a) Le numéro de la rubrique réglementaire (R) conformément à la directive de réception CE.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="q2b" value="b">
                        <label class="form-check-label" for="q2b">
                            b) L'objet de la rubrique R (niveau de bruit admissible, émissions, etc.).
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="q2c" value="c">
                        <label class="form-check-label" for="q2c">
                            c) Les différentes catégories de pièces et de contrôles (vrai)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="q2d" value="d">
                        <label class="form-check-label" for="q2d">
                            d) Le nom des fournisseurs de pièces automobiles.
                        </label>
                    </div>
                    <!-- Question 3 -->
                    <p><strong>3. Qu'est-ce que le PMC vise à contrôler et surveiller ?</strong></p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="q3a" value="a">
                        <label class="form-check-label" for="q3a">
                            a) La qualité de la peinture des véhicules
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="q3b" value="b">
                        <label class="form-check-label" for="q3b">
                            b) La conformité de toutes les pièces d'un véhicule (vrai)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="q3c" value="c">
                        <label class="form-check-label" for="q3c">
                            c) Les performances moteur
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="q3d" value="d">
                        <label class="form-check-label" for="q3d">
                            d) La résistance des pneus
                        </label>
                    </div>
                    <!-- Question 4 -->
                    <p><strong>4. Dans quelle phase du processus de jalonnement du PMC le PMC spécifique au véhicule est-il créé à partir du PMC générique ?</strong></p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question4" id="q4a" value="a">
                        <label class="form-check-label" for="q4a">
                            a) Transfert PMC véhicule à la vie série responsabilité RTV Vie série (vrai)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question4" id="q4b" value="b">
                        <label class="form-check-label" for="q4b">
                            b) Élaboration/Évolution du PMC générique
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question4" id="q4c" value="c">
                        <label class="form-check-label" for="q4c">
                            c) 1ère version du PMC véhicule Responsabilité RTV Projet en collaboration avec le pilote
                        </label>
                    </div>
                    <!-- Bouton "Passer le quiz" -->
                    <div class="row justify-content-center">
                        <div class="col-md-6 mb-4">
                            <button type="button" class="btn btn-light btn-block">Soummetre</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal pour afficher les résultats du quiz -->
<div class="modal fade" id="quizModal" tabindex="-1" role="dialog" aria-labelledby="quizModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quizModalLabel">Résultats du Quiz</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="quizResult"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>