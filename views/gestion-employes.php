<?php
$data = new UserController();
$users = $data->readAllUsers();
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
            <?php if ($_SESSION['user']->role === 'Administrateur') { ?>
                <div class="card">
                    <div class="card-body" style="background-color: rgb(39,162,212);">
                        <a href="http://localhost/elearning-system/employe-create" title="Ajoute employé" class="btn btn-light mb-2"><i class="fa fa-plus"></i></a>
                        <div class="table-responsive">
                            <table class="table table-bordered text-white">
                                <thead>
                                    <tr>
                                        <th scope="col">Nom & Prénom</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Telephone</th>
                                        <th scope="col">Login</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user) { ?>
                                        <tr>
                                            <td><?php echo $user['nom'] . ' ' . $user['prenom']; ?></td>
                                            <td><?php echo $user['email']; ?></td>
                                            <td><?php echo $user['telephone']; ?></td>
                                            <td><?php echo $user['login']; ?></td>
                                            <td><?php echo $user['role']; ?></td>
                                            <td>
                                                <form class="d-flex justify-content-around" method="post" action="#">
                                                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                                    <button type="submit" formaction="http://localhost/elearning-system/employe-delete" class="btn btn-sm btn-light m-2" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette voiture ?');">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    <button type="submit" formaction="http://localhost/elearning-system/employe-edit" class="btn btn-sm m-2 btn-light">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php }  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
