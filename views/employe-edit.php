<?php
if (isset($_POST['submit'])) {
    $newUser = new UserController();
    $newUser->editUser();
}
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card card-header" style="background-color: rgb(39,162,212);">
                    <h5><label>Modifier Role</label></h5></div>
                <div class="card-body " style="background-color: rgb(39,162,212);" id="box">
                    <a href="http://localhost/elarning-system/gestion-employes" class="btn btn-light mb-2"><i class="fa fa-home"></i></a>
                    <form method="post">
                        <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
                            <label class="control-label" for="nom">Role*</label>
                            <input type="text" class="form-control deblock" name="role">
                        </div>
                      
                        <div class="form-group">
                            <button type="submit" name="submit"  class="btn btn-light">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
