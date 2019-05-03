<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Adauga Utilizator Nou</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">E-mail</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Parola</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Prenume</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Nume</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Adresa</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="address" name="address"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Numar Telefon</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact">
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Fotografie</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Inchide</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Salveaza</button>
              </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Editeaza Utilizator</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_edit.php">
                <input type="hidden" class="userid" name="id">
                <div class="form-group">
                    <label for="edit_email" class="col-sm-3 control-label">E-mail</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="edit_email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_password" class="col-sm-3 control-label">Parola</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="edit_password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 control-label">Prenume</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Nume</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_lastname" name="lastname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_address" class="col-sm-3 control-label">Adresa</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="edit_address" name="address"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_contact" class="col-sm-3 control-label">Numar telefon</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_contact" name="contact">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Inchide</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Actualizeaza</button>
              </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Se sterge...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_delete.php">
                <input type="hidden" class="userid" name="id">
                <div class="text-center">
                    <p>STERGE UTILIZATOR</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Inchide</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Sterge</button>
              </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="userid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Fotografie</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Inchide</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Actualizeaza</button>
              </form>
            </div>
        </div>
    </div>
</div> 

<div class="modal fade" id="activate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Se activeaza...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_activate.php">
                <input type="hidden" class="userid" name="id">
                <div class="text-center">
                    <p>UTILIZATOR ACTIVAT</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Inchide</button>
              <button type="submit" class="btn btn-success btn-flat" name="activate"><i class="fa fa-check"></i> Activeaza</button>
              </form>
            </div>
        </div>
    </div>
</div> 


     