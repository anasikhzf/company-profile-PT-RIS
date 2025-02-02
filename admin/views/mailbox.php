<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
  <?php include '../component/head.php'; ?>
  <body class="skin-blue">
    <div class="wrapper">
      
      <?php include '../component/header.php'; ?>
      <?php include '../component/side-bar.php'; ?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Mailbox
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Mailbox</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- MAILBOX BEGIN -->
          <div class="mailbox row">
            <div class="col-xs-12">
              <div class="box box-solid">
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-3 col-sm-4">
                      <!-- BOXES are complex enough to move the .box-header around.
                                This is an example of having the box header within the box body -->
                      <div class="box-header">
                        <i class="fa fa-inbox"></i>
                        <h3 class="box-title">INBOX</h3>
                      </div>
                      <!-- compose message btn -->
                      <a class="btn btn-block btn-primary" data-toggle="modal" data-target="#compose-modal"><i class="fa fa-pencil"></i> Compose Message</a>
                      <!-- Navigation - folders-->
                      <div style="margin-top: 15px;">
                        <ul class="nav nav-pills nav-stacked">
                          <li class="header">Folders</li>
                          <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox (14)</a></li>
                          <li><a href="#"><i class="fa fa-pencil-square-o"></i> Drafts</a></li>
                          <li><a href="#"><i class="fa fa-mail-forward"></i> Sent</a></li>
                          <li><a href="#"><i class="fa fa-star"></i> Starred</a></li>
                          <li><a href="#"><i class="fa fa-folder"></i> Junk</a></li>
                        </ul>
                      </div>
                    </div><!-- /.col (LEFT) -->
                    <div class="col-md-9 col-sm-8">
                      <div class="row pad">
                        <div class="col-sm-6">
                          <label style="margin-right: 10px;">
                            <input type="checkbox" id="check-all"/>
                          </label>
                          <!-- Action button -->
                          <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm btn-flat dropdown-toggle" data-toggle="dropdown">
                              Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Mark as read</a></li>
                              <li><a href="#">Mark as unread</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Move to junk</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Delete</a></li>
                            </ul>
                          </div>

                        </div>
                        <div class="col-sm-6 search-form">
                          <form action="#" class="text-right">
                            <div class="input-group">
                              <input type="text" class="form-control input-sm" placeholder="Search">
                              <div class="input-group-btn">
                                <button type="submit" name="q" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div><!-- /.row -->

                      <div class="table-responsive">
                        <!-- THE MESSAGES -->
                        <table class="table table-mailbox">
                          <tr class="unread">
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr>
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star-o"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr>
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star-o"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr class="unread">
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star-o"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr>
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr>
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr>
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star-o"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr>
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr class="unread">
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star-o"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr class="unread">
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star-o"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                          <tr>
                            <td class="small-col"><input type="checkbox" /></td>
                            <td class="small-col"><i class="fa fa-star-o"></i></td>
                            <td class="name"><a href="#">John Doe</a></td>
                            <td class="subject"><a href="#">Urgent! Please read</a></td>
                            <td class="time">12:30 PM</td>
                          </tr>
                        </table>
                      </div><!-- /.table-responsive -->
                    </div><!-- /.col (RIGHT) -->
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <div class="pull-right">
                    <small>Showing 1-12/1,240</small>
                    <button class="btn btn-xs btn-primary"><i class="fa fa-caret-left"></i></button>
                    <button class="btn btn-xs btn-primary"><i class="fa fa-caret-right"></i></button>
                  </div>
                </div><!-- box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col (MAIN) -->
          </div>
          <!-- MAILBOX END -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include '../component/footer.php'; ?>
    </div><!-- ./wrapper -->

    <!-- COMPOSE MESSAGE MODAL -->
    <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Compose New Message</h4>
          </div>
          <form action="#" method="post">
            <div class="modal-body">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">TO:</span>
                  <input name="email_to" type="email" class="form-control" placeholder="Email TO">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">CC:</span>
                  <input name="email_to" type="email" class="form-control" placeholder="Email CC">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">BCC:</span>
                  <input name="email_to" type="email" class="form-control" placeholder="Email BCC">
                </div>
              </div>
              <div class="form-group">
                <textarea name="message" id="email_message" class="form-control" placeholder="Message" style="height: 120px;"></textarea>
              </div>
              <div class="form-group">
                <div class="btn btn-success btn-file">
                  <i class="fa fa-paperclip"></i> Attachment
                  <input type="file" name="attachment"/>
                </div>
                <p class="help-block">Max. 32MB</p>
              </div>

            </div>
            <div class="modal-footer clearfix">

              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>

              <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-envelope"></i> Send Message</button>
            </div>
          </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- jQuery 2.1.3 -->
    <script src="../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js" type="text/javascript"></script>    
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Page script -->
    <script type="text/javascript">
      $(function () {

        "use strict";

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"]').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });

        //When unchecking the checkbox
        $("#check-all").on('ifUnchecked', function (event) {
          //Uncheck all checkboxes
          $("input[type='checkbox']", ".table-mailbox").iCheck("uncheck");
        });
        //When checking the checkbox
        $("#check-all").on('ifChecked', function (event) {
          //Check all checkboxes
          $("input[type='checkbox']", ".table-mailbox").iCheck("check");
        });
        //Handle starring for glyphicon and font awesome
        $(".fa-star, .fa-star-o, .glyphicon-star, .glyphicon-star-empty").click(function (e) {
          e.preventDefault();
          //detect type
          var glyph = $(this).hasClass("glyphicon");
          var fa = $(this).hasClass("fa");

          //Switch states
          if (glyph) {
            $(this).toggleClass("glyphicon-star");
            $(this).toggleClass("glyphicon-star-empty");
          }

          if (fa) {
            $(this).toggleClass("fa-star");
            $(this).toggleClass("fa-star-o");
          }
        });

        //Initialize WYSIHTML5 - text editor
        $("#email_message").wysihtml5();
      });
    </script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>
