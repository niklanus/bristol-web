<div class="contact-iframe">
    <?php include_once("languages/languages.php"); ?>

    <a href="#" class="featherlight-close contact-iframe-close"><?php echo $lang['close']; ?> <i class="icon_close"></i></a>
    <h4><i class="icon_mail"></i> <?php echo $lang['contact-form-title']; ?></h4>
    
    <div class="contact-iframe-container">
        <div id="contact-form">
            <div class="contact-form-body">
                <div class="form-item">
                    <label for="form-1" class="label-default"><?php echo $lang['contact-form-name']; ?></label>
                    <input name="contact-name" type="text" id="form-1" class="input-default" required="true" autofocus>
                </div>
                <div class="form-item">
                    <label for="form-2" class="label-default"><?php echo $lang['contact-form-email']; ?></label>
                    <input name="contact-email" type="email" id="form-2" class="input-default" required="true">
                </div>
                <div class="form-item">
                    <label for="form-3" class="label-default"><?php echo $lang['contact-form-phone']; ?></label>
                    <input name="contact-tel" type="tel" id="form-3" class="input-default">
                </div>
                <div class="form-item">
                    <label for="form-4" class="label-default"><?php echo $lang['contact-form-message']; ?></label>
                    <textarea name="contact-msg" id="form-4" class="input-default textarea" required="true"></textarea>
                </div>
                <a href="#" id="contact-submit" class="btn btn-main btn-althover btn-contact-gold btn-small"><?php echo $lang['contact-form-send']; ?> <i class="arrow_carrot-right"></i></a>
            </div>
            <div class="contact-form-success">
                <h3><?php echo $lang['contact-form-success']; ?></h3>
                <a href="#" id="contact-submit" class="btn btn-main btn-althover btn-contact-gold btn-small featherlight-close"><i class="icon_close"></i> <?php echo $lang['close']; ?></a>
            </div>
            <div class="contact-form-error">
                <h3><?php echo $lang['contact-form-error']; ?></h3>
                <a href="#" id="contact-submit" class="btn btn-main btn-althover btn-contact-gold btn-small featherlight-close"><i class="icon_close"></i> <?php echo $lang['close']; ?></a>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            $(document).on('click', '#contact-submit', function() {
                var proceed = true;
                //simple validation at client's end
                //loop through each field and we simply change border color to red for invalid fields       
                $("#contact-form input[required=true], #contact-form textarea[required=true]").each(function(){
                    $(this).css('border-color','');
                    if(!$.trim($(this).val())){ //if this field is empty 
                        $(this).css('border-color','red'); //change border color to red   
                        proceed = false; //set do not proceed flag
                    }
                    //check invalid email
                    var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                        $(this).css('border-color','red'); //change border color to red   
                        proceed = false; //set do not proceed flag              
                    }
                });

                if(proceed) //everything looks good! proceed...
                {
                    //get input field values data to be sent to server
                    post_data = {
                        'name' : $('input[name=contact-name]').val(),
                        'email': $('input[name=contact-email]').val(),
                        'tel'  : $('input[name=contact-tel]').val(),
                        'msg'  : $('textarea[name=contact-msg]').val()
                    };
                    
                    //Ajax post data to server
                    $.post('contact-form-send.php', post_data, function(response){
                        if(response.type == 'error'){ //load json data from server and output message     
                            //output = '<div class="error">'+response.text+'</div>';
                            $("#contact-form .contact-form-body").slideUp(); //hide form after success
                            $("#contact-form .contact-form-error").slideDown();
                        }else{
                            //output = '<div class="success">'+response.text+'</div>';
                            //reset values in all input fields
                            $("#contact-form input[required=true], #contact-form textarea[required=true]").val('');
                            $("#contact-form .contact-form-body").slideUp(); //hide form after success
                            $("#contact-form .contact-form-success").slideDown();
                        }
                    }, 'json');
                }
            });

            //reset previously set border colors and hide all message on .keyup()
            $("#contact-form input[required=true], #contact-form textarea[required=true]").keyup(function() {
                $(this).css('border-color','');
                $("#result").slideUp();
            });

        });
    </script>
</div>