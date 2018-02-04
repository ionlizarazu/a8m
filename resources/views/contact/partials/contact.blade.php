
  <div class="wrapper">
      <h1 class="page-header">Kontaktua</h1>

      <!-- contact -->

      <div class="contact-wrapper">

        <!-- left -->

        <div class="inner-left">

            <p class="phone"><a href="tel:666777888">666777888</a></p>

            <p class="email"><a href="mailto:antzuolako8miliak@gmail.com">antzuolako8miliak@gmail.com</a></p>

          </div>

          <!-- left -->

          <!-- right -->

          <div class="inner-right">

            <header>

                <h4>Jarri gurekin harremanetan</h4>

              </header>
              <!-- contact-form -->

              <div class="contact-form">

                  <div id="message"></div>
                  {!!Form::open(['id'=>'contactForm','name'=>'contactForm'])!!}

                    <label>Izen Abizenak <span>*</span>

                      {!!Form::text('name',null,['id'=>'name','data-msg-required'=>'Idatzi izen-abizenak mesedez.','data-msg-minlength'=>'Izenak {0} karaktere baino gehiago behar ditu.','minlength'=>'3','maxlength'=>'50','required' => ''])!!}

                    </label>

                    <label>Gaia <span>*</span>
                      {!!Form::text('subject',null,['id'=>'subject','data-msg-required'=>'Idatzi gaia mesedez.','maxlength'=>'100','required' => ''])!!}   

                    </label>
                    <div class="clearfix"></div>

                    <label>Posta Elektronikoa <span>*</span>

                      {!!Form::email('email',null,['id'=>'email','data-msg-required'=>'Idatzi helbide elektronikoa mesedez.','data-msg-email'=>'Idatzio baliozko helbide bat mesedez.','maxlength'=>'100','required' => ''])!!}

                    </label>

                    <div class="clearfix"></div>

                      <label>Mezua <span>*</span>

                        {!!Form::textarea('msg',null,['id'=>'msg','data-msg-required'=>'Idatzi mezu bat mesedez.','maxlength'=>'5000','cols' => '','rows' => '','required' => ''])!!}

                      </label>

                      <div class="clearfix"></div>
                        {!!Form::button('Bidali', ['name'=>'send','id'=>'send','class'=>'btn btn-primary btn-lg','data-loading-text'=>'Loading...'])!!}

                    <div id="simple-msg"></div>

                  {!!Form::close()!!}

              </div>

              <!-- contact-form -->

          </div>

          <!-- right -->

      </div>

      <!-- contact -->
      @include('footer.partners') 

  </div>

<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js')}}"></script> 

<script>
// SESERVATION TABLE
$("#send").click(function(event) {
     $("#contactForm").valid();
    var token = $("input[name=_token]").val();
    var name = $("#name").val();
    var subject = $("#subject").val();
    var email = $("#email").val();
    var msg = $("#msg").val();
    var route = "./contact";
    var form_btn = $("#send");
    var form_result_div = '#form-result';
    $(form_result_div).remove();
 
    $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN':token},
        type:'post',
        datatype: 'json',
        data: {name: name, subject: subject, email: email , msg:msg },
        success: function(data) {
            form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
            var form_btn_old_msg = form_btn.html();
            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));

            if (data.success == 'true') {
                $(".form-control").val('');
                $("#contactForm").trigger("reset");
            }
            form_btn.prop('disabled', false).html(form_btn_old_msg);
            $(form_result_div).html("<div class='formSent'><strong>"+"Zure mezua bidali da!"+"</strong>"+" " +"Eskerrik asko gurekin harremanetan jartzeagatik."+"</div>").fadeIn('slow');
            setTimeout(function() { $(form_result_div).fadeOut('slow'); }, 6000);
        },
        error: function(data) {
          console.log(data);
            form_btn.before('<div id="form-result" class="alert alert-danger" role="alert" style="display: none;"></div>');
            var form_btn_old_msg = form_btn.html();
            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
            form_btn.prop('disabled', false).html(form_btn_old_msg);
            $(form_result_div).html("<div class='formSent'><strong>"+"Akatsa mezua bidaltzerakoan!"+"</strong>" +" "+"Mesedez, saiatu zaitez berriz."+"</div>").fadeIn('slow');
            setTimeout(function() { $(form_result_div).fadeOut('slow'); }, 6000);
        }
    });

});

</script>