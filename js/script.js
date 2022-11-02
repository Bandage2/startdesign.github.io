$(document).ready(function() {
    $(".input-footer").focus(function() {
        $(this).parent().addClass("clrChng")
    }).blur(function() {
        $(this).parent().removeClass("clrChng")
    }), $(".input-footer").bind("keyup change", function() {
        "" == !$(this).val() ? $(this).parent().addClass("visited") : $(this).parent().removeClass("visited")
    })
}), $(document).ready(function() {
    $("#loader-wrapper").show(), setTimeout(function() {
        $("#loader-wrapper").fadeOut()
    }, 2500)
});


var TxtType = function(t, e, i) {
    this.toRotate = e, this.el = t, this.loopNum = 0, this.period = parseInt(i, 10) || 2e3, this.txt = "", this.tick(), this.isDeleting = !1
};

function detectMob() {
  return  /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
}

TxtType.prototype.tick = function() {
        var t = this.loopNum % this.toRotate.length,
            e = this.toRotate[t];
        this.isDeleting ? this.txt = e.substring(0, this.txt.length - 1) : this.txt = e.substring(0, this.txt.length + 1), this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";
        var i = this,
            o = 200 - 100 * Math.random();
        this.isDeleting && (o /= 2), this.isDeleting || this.txt !== e ? this.isDeleting && "" === this.txt && (this.isDeleting = !1, this.loopNum++, o = 500) : (o = this.period, this.isDeleting = !0), setTimeout(function() {
            i.tick()
        }, o)
    }, window.onload = function() {

        if(detectMob()) { 
          for (var t = document.getElementsByClassName("typewrite"), e = 0; e < t.length; e++) {
            let fixedHtml = t[e].parentElement.innerHTML;
           
            t[e].style.display = "none";

            let typewirteText = t[e].getAttribute("data-type"); 
            typewirteText = typewirteText.replace('[  "', " ");
            typewirteText = typewirteText.replace('" ]', " ");
            t[e].parentElement.innerHTML = t[e].parentElement.innerHTML+' <span class="mobile_typewrite">'+typewirteText+"</span>";
            // t[e].innerHTML= fixedHtml+' '+t[e].getAttribute("data-type").innerHTML;
          }
        return; 
        } //return if mobile
        
        for (var t = document.getElementsByClassName("typewrite"), e = 0; e < t.length; e++) {
            var i = t[e].getAttribute("data-type"),
                o = t[e].getAttribute("data-period");
            i && new TxtType(t[e], JSON.parse(i), o)
        }
        var n = document.createElement("style");
        n.type = "text/css", n.innerHTML = ".typewrite > .wrap { border-right: 0em solid #fff}", document.body.appendChild(n)
    }, $(window).scroll(function() {
        $(this).scrollTop() > 45 ? $("#top-container-def").addClass("isFixed") : $("#top-container-def").removeClass("isFixed")
    }),
    function() {
        var t = document.querySelector(".burger-container"),
            e = document.querySelector(".mobile-menu-last");
            mainBody = document.querySelector("body"), t.onclick = function() {
            e.classList.toggle("menu-opened"), mainBody.classList.toggle("overflow-hidden")
        }
    }(), $(window).scroll(function() {
        $(this).scrollTop() >= 50 ? $("#return-to-top").fadeIn(200) : $("#return-to-top").fadeOut(200)
    }), $("#return-to-top").click(function() {
        $("body,html").animate({
            scrollTop: 0
        }, 500)
    }), $(document).ready(function() {
        $(".tab-link ul li").hover(function() {
            $(this).children("a").addClass("active"), $(this).addClass("active"), $(this).siblings().removeClass("active"), $(this).siblings().children("a").removeClass("active")
        })
    }), $(document).ready(function() {
        $(".call").click(function() {
            $(".popup-bg-overlay").show()
        })
    }), $(document).ready(function() {
        $(".close-popup").click(function() {
            $(".popup-bg-overlay ").hide()
        }), $(".close-popup-btn").click(function() {
            $(".popup-bg-overlay ").hide()
        })
    });

/*    $(function(){

    var url = window.location.pathname, // in real app this would have to be replaced with window.location.pathname 
        urlRegExp = new RegExp(url.replace(/\/$/,'')); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        
        $('#header_menu a').each(function(){
            // and test its href against the url pathname regexp
            if(urlRegExp.test(this.href)){
                $(this).addClass('active');
                    if(url == urlRegExp)
                    {
                       var parentClass = $(this).parent('ul').attr('class');
                       $(this).addClass('subactive');
                    }
            }
            else
            {
                $(this).find('.head-parent').addClass('active');   
            }
        });
    });
*/
$(document).ready(function() {

 // Get current page URL
 var url = window.location.href;

 // remove # from URL
 url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));

 // remove parameters from URL
 url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));

 // select file name
 url = url.substr(url.lastIndexOf("/") + 1);
 
 // If file name not avilable
 if(url == ''){
 url = 'index.shtml';
 }
 
 // Loop all menu items
 $('.header_menu li').each(function(){

  // select href
  var href = $(this).find('a').attr('href');
 
  // Check filename
  if(url == href){

   // Select parent class
   var parentClass = $(this).parent('ul').attr('class');
   
   if($(this).parent('ul').hasClass('header_submenu')){
    
    // Add class
    $(this).addClass('subactive');
    //$(this).parents('a .head-parent').addClass('active');
    //$(this).find('a').addClass('active');
  //  var subparentClass = $(this).parent('ul').find('').attr('class');
    //console.log(subparentClass);
    $('.header_menu').find('.head-parent').addClass('active');
   }else if($(this).parent('ul').hasClass('head_submenu')){
        $(this).addClass('subactive');
    // Add class
    $('.header_menu').find('.head-parent').removeClass('active')
    $('.header_menu').find('.subhead-parent').addClass('active');
   }else if($(this).parent('ul').hasClass('sub_menu_head')){
        $(this).addClass('subactive');
    // Add class
    $('.header_menu').find('.head-parent').removeClass('active')
    $('.header_menu').find('.subhead-parent').addClass('active');
   }else{
     // Add class
    $(this).find('a').addClass('active');
   }
 
  }
 });
});



$(document).ready(function(){
    jQuery.validator.setDefaults({
      debug: true,
      success: "valid"
    });
  $( "#contact_us" ).validate({
    rules: {
      // simple rule, converted to {required:true}
      name: "required",
      // compound rule
      email: {
        required: true,
        email: /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/,
      }
      ,
      phone: {
        required: true,
        number: true,
       
      }
      ,
    
      /*skype_id: "required"*/
    
    },
      messages: {
      name: "Please enter your name",
      email: {
        required: "Please enter a  email address",
        email: "Please enter a valid email address",
       // remote: jQuery.validator.format("{0} is already in use")

      },
      phone:{
          required:"Please enter a number",
          number: "Please enter 10 digit",
        },
      skype_id: "Please enter a skype id"
    }
    ,submitHandler: function(form) {
      // do other things for a valid form
      //form.submit();
      submit_by_ajax()
    }
  });
  function submit_by_ajax(){
    $.ajax({
      type: "POST",
      url: "contact_ajax.php",
      dataType: "json",
      data: $("#contact_us").serialize(),
      success: function(response) {
       if(response.status)
        {
          $("#ajax_response").empty().html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+response.message+'</div>');
          document.getElementById("contact_us").reset();
          setTimeout(function(){  $('#ajax_response').empty();}, 3000);

        }
        else {
          $("#ajax_response").empty().html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+response.message+'</div>');
        }
      }
      ,
      error: function(data) {
        console.log("error in ajax request");
      }
    }
          ).done(function() {
      console.log("ajax request complete");
          });
    }
    jQuery.validator.setDefaults({
      debug: true,
      success: "valid"
    });
    $( "#inquiryForm" ).validate({
      rules: {
        // simple rule, converted to {required:true}
        name: "required",
        // compound rule
        email: {
          required: true,
          email: /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/,
        }
        ,
        phone: {
          required: true,
          number: true,
         
        }
        ,
      
        user_budget: "required",
        'inq_service[]': {
          required: true,
          minlength: 1  }
        ,
        information:"required",
        inquiry_file: {
          //required: true,
          accept: "image/png, pdf, docx, jpeg, jpg, xlsx, txt",
          
        }
      },
      messages: {
        name: "Please enter your name",
        email: {
          required: "Please enter a  email address",
          email: "Please enter a valid email address",
         // remote: jQuery.validator.format("{0} is already in use")

        },
        phone:{
            required:"Please enter a number",
            number: "Please enter 10 digit",
          },
        'inq_service[]': "Please select any requirement",
        information: "Please enter your describe",
        inquiry_file: "Please upload a valid file",
         user_budget: "Please select any one",
      },errorPlacement: function(error, element) {
        if (element.attr("name") == "inq_service[]") {
            error.appendTo("#error-inquiry");
        } else {
            error.insertAfter(element);
        }
    }
      ,submitHandler: function(form) {
        // do other things for a valid form
        //form.submit();
        submit_by_quote();
      }
    });
  function submit_by_quote(){
  	var data = new FormData();
  	var form_data = $('#inquiryForm').serializeArray();
	$.each(form_data, function (key, input) {
	    data.append(input.name, input.value);
	});

	var file_data = $('input[name="inquiry_file"]')[0].files;
	for (var i = 0; i < file_data.length; i++) {
	    data.append("inquiry_file[]", file_data[i]);
	}
	data.append('key', 'value');

    $.ajax({
      type: "POST",
      url: "quote_ajax.php",
       processData: false,
    	contentType: false,
    	data: data,
	 dataType: "json",
      success: function(response) {
      	console.log(response);
        if(response.status)
        {
          $("#quote_response").empty().html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+response.message+'</div>');
          document.getElementById("inquiryForm").reset();
          setTimeout(function(){  $('#quote_response').empty();}, 3000);
        }
        else {
          $("#quote_response").empty().html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+response.message+'</div>');
        }
      }
      ,
      error: function(data) {
        console.log("error in ajax request");
      }
    }
          ).done(function() {
      console.log("ajax request complete");
    });
  }
});

  $(document).ready(function(){
    var uploadField = document.getElementById("inquiry");

    uploadField.onchange = function() {
      if(this.files[0].size > 3000000){
         var message = '<label id="file-error" class="error" for="file">File size is under in 3MB</label>';
        $("#file").empty().html(message);
         this.value = "";
      };  
    };
  
    $("form").on("click", "[type=text]", function(e) {
        this.focus()
    });
    
  });

$('.alphaonly').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-z  A-Z]/g,'') ); }
);


$(document).ready(function(){
  $(".mainGalleryVideo").click(function(){
    $(".gallery").addClass("overlayGallery");
  });
   $(".imagegallery").click(function(){
    $(".gallery").removeClass("overlayGallery");
  });
  
});
