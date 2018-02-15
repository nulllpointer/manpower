<div class="container" xmlns:margin-top="http://www.w3.org/1999/xhtml">

    <div class="row" style=" margin-top: 20px;">

        <div class="col-lg-8 col-lg-offset-2">

            <h2 style="color: #376094">Send us a message</h2>


            <form id="contact-form" method="post" action="/sendform" role="form">
                {{ csrf_field() }}

                <div class="messages"></div>

                <div class="controls">

                    <div class="row">
                        <div class="col-md-6" style="    margin-top: 20px;">
                            <div class="form-group">
                                <label for="form_name">&nbsp&nbspFirstname *</label>
                                <input style="font-size: small;" id="form_name" type="text" name="name"
                                       class="form-control" placeholder="  Please enter your firstname"
                                       required="required" data-error="Firstname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6" style="    margin-top: 20px;">
                            <div class="form-group">
                                <label for="form_lastname">&nbsp&nbspLastname *</label>
                                <input style="font-size: small;" id="form_lastname" type="text" name="surname"
                                       class="form-control" placeholder="  Please enter your lastname" required="required"
                                       data-error="Lastname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_email">&nbsp&nbspEmail *</label>
                                <input style="font-size: small;" id="form_email" type="email" name="email"
                                       class="form-control" placeholder="  Please enter your email" required="required"
                                       data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_phone">&nbspPhone *</label>
                                <input style="font-size: small;" id="form_phone" type="tel" name="phone"
                                       class="form-control" placeholder="  Please enter your phone" required="required"
                                       data-error="Valid phone number is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form_message">&nbsp&nbspMessage *</label>
                                <textarea style="padding-left: 0px;font-size: small;" id="form_message" name="message" class="form-control" placeholder="  Message for me " rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        {{--  <div class="col-md-12">
                              <div class="form-group">
                                  <!-- Replace data-sitekey with your own one, generated at https://www.google.com/recaptcha/admin -->
                                  <div class="g-recaptcha" data-sitekey="6LfQH0UUAAAAAD_kdC3csxLUHV9SlS33tZqLpK9u"></div>
                              </div>
                          </div>
--}}
                        <div class="col-md-12">
                            <input   type="submit" class="btn btn-success btn-send"  value="Send message">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-muted"><strong>*</strong> These fields are required. </p>
                        </div>
                    </div>
                </div>

            </form>

        </div><!-- /.8 -->

    </div> <!-- /.row-->

</div> <!-- /.container-->

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" src="validator.js"></script>
<script type="text/javascript" src="contact.js"></script>
