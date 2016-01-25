<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    @include('.layouts.head')
  </head>
  <body id="logbody">
    <div class="row" style="margin-top: 60px" >
      <div class="col-xs-6 col-md-2"></div>
      <div class="col-xs-6 col-md-6" id="logdiv">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" >
          <div class="carousel-inner" role="listbox" style="height: 400px">
            <div class="item active">
              <img class="first-slide" src="pic/einkauf1.jpg" alt="First slide" style="height: 400px; width: 100%;">
              <div class="container">
                <div class="carousel-caption">
                  <h1 style="font-size: 80px; color: #0f0f0f; font-weight: bold">Schnell und günstig einkaufen!!!</h1>
                </div>
              </div>
            </div>
            <div class="item">
              <img class="second-slide" src="pic/einkauf2.jpg" alt="Second slide" style="height: 400px; width: 100%">
              <div class="container">
                <div class="carousel-caption">
                  <h1 style="font-size: 80px; color: #0f0f0f; font-weight: bold">Eine Vielzahl an Auswahl!</h1>
                </div>
              </div>
            </div>
            <div class="item">
              <img class="third-slide" src="pic/einkauf3.jpg" alt="Third slide" style="height: 400px; width: 100%">
              <div class="container">
                <div class="carousel-caption">
                  <h1 style="font-size: 80px; color: #0f0f0f; font-weight: bold">Einfach und unkompliziert!!!</h1>
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </div>

    <div class="row" style="margin-top: 60px" >
      <div class="col-xs-6 col-md-2"></div>
      <div class="col-xs-6 col-md-6" id="logdiv">
        <div class="logframe" style="	border-radius: 20px;
        border-color: grey;
        border-width: 1px;
        border-style: solid;
        margin-top: 20px;
        padding: 30px;
        background-color: #d9edf7;">

          <form action="/" method="post" id="defaultForm" class="form-horizontal"
                data-bv-message="This value is not valid"
                data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">

            <div class="form-group">
              <label class="col-lg-3 control-label">Email address</label>
              <div class="col-lg-5">
                <input class="form-control" name="email" type="email" data-bv-emailaddress-message="The input is not a valid email address" required data-bv-notempty-message="The Email adress is required and cannot be empty"/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-3 control-label">Password</label>
              <div class="col-lg-5">
                <input type="password" class="form-control" name="confirmPassword"
                       required data-bv-notempty-message="The confirm password is required and cannot be empty"/>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-9 col-lg-offset-3">
                <button type="submit" class="btn btn-primary" act>Sign in</button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                  sign up
                </button>
              </div>
            </div>
          </form>

        </div>

        <div class="col-xs-6 col-md-2"></div>
        </div>

      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Sign up</h4>
            </div>
            <div class="modal-body">

              <form id="defaultForm" class="form-horizontal" action="/"
                    data-bv-message="This value is not valid"
                    data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                    data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                    data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                <div class="form-group">
                  <label class="col-lg-3 control-label">Full name</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="firstName" placeholder="First name" required data-bv-notempty-message="The confirm password is required and cannot be empty"/>
                  </div>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" name="lastName" placeholder="Last name" required data-bv-notempty-message="The confirm password is required and cannot be empty"/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Email address</label>
                  <div class="col-lg-5">
                    <input type="text" class="form-control" name="email" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Password</label>
                  <div class="col-lg-5">
                    <input type="password" class="form-control" name="password" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Gender</label>
                  <div class="col-lg-5">
                    <div class="radio">
                      <label>
                        <input type="radio" name="gender" value="male" /> Male
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="gender" value="female" /> Female
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="gender" value="other" /> Other
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Birthday</label>
                  <div class="col-lg-5">
                    <input type="text" class="form-control" name="birthday" /> (YYYY/MM/DD)
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-9 col-lg-offset-3">
                    <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Sign up</button>

                    <button type="button" class="btn btn-info" id="resetBtn">Reset form</button>
                  </div>
                </div>
              </form>



            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      </div>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#defaultForm').bootstrapValidator();

        (function($){     
            $.fn.switchableText = function(){
                var options = {
                    "openText": "Alles anzeigen",
                    "closeText": "Weniger anzeigen"
                };
                return this.each(function(){
                    var trigger,
                        self = $(this),
                        primary = self.find(".primary-text"),
                        secondary = self.find(" .secondary-text"),
                        openText, closeText;
                    
                    openText = $(this).data("open-text") || options.openText;
                    closeText = $(this).data("close-text") || options.closeText;
                    
                    if (self.find(".trigger").length == 0) {
                        trigger = $('<a>');
                        trigger.text(openText);
                        trigger.attr("href", "#");
                    } else {
                        trigger = self.find(".trigger");
                    }

                    primary.show();
                    secondary.hide();
                    secondary.after(trigger);

                    trigger.click(changeText);
                    function changeText(event) {
                        event && event.preventDefault();
                        primary.toggle();
                        secondary.toggle();
                        if (secondary.is(":visible")) {
                            trigger.text(closeText);
                        } else {
                            trigger.text(openText);
                        }
                    }
                });
            }
        })(jQuery)
        $(".switchableText").switchableText();
      });
    </script>

  </body>


</html>

