<div class="modal fade" id="transaction">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Toate detaliile tranzactiilor</b></h4>
            </div>
            <div class="modal-body">
              <p>
                Data: <span id="date"></span>
                <span class="pull-right">Tranzactia#: <span id="transid"></span></span> 
              </p>
              <table class="table table-bordered">
                <thead>
                  <th>Produsul</th>
                  <th>Pretul</th>
                  <th>Cantitatea</th>
                  <th>Subtotal</th>
                </thead>
                <tbody id="detail">
                  <tr>
                    <td colspan="3" align="right"><b>Total</b></td>
                    <td><span id="total"></span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Inchide</button>
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
              <h4 class="modal-title"><b>Actualizeaza cont</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="profile_edit.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Prenume</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="Prenume" value="<?php echo $user['firstname']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Nume</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="Nume" value="<?php echo $user['lastname']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">E-mail</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="email" name="E-mail" value="<?php echo $user['email']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Parola</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="Parola" value="<?php echo $user['password']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Numar telefon</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="Numar Telefon" value="<?php echo $user['contact_info']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Adresa</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="address" name="Adresa"><?php echo $user['address']; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Fotografie</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="Fotografie">
                    </div>
                </div>
                <hr>
                
                <div class="form-group">
                    <label for="curr_password" class="col-sm-3 control-label">Parola curenta</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="curr_password" name="Parola_curenta" placeholder="Introdu Parola pentru a actualiza profilul" required>
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