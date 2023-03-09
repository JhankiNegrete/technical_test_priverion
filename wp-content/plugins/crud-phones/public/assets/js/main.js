// alert(ajax_var.url)

jQuery("#crud_phones_form_create").submit(function(e){
  e.preventDefault();

  jQuery.ajax({
    url: ajax_var.url,
    type: "POST",
    //data: "action=create-phone",
    //data: {action: "create-phone", phone_name: $phone_name},
    data: jQuery(this).serialize(),
    beforeSend: function() {
      alert("sending information")
    },
    success: function($response){
      console.log($response);
    },
    error: function(jqXHR, exception) {
      var msg = ''
      if(jqXHR.status === 0){
        msg = 'Not connect, verify your connection'
      } else if(jqXHR.status === 404){
        msg = 'requested page not found. [404]'
      } else if(jqXHR.status === 500){
        msg = 'Internal server error [500]'
      } else if(exception === 'parsererror') {
        msg = 'Requested JSON parse failed'
      } else if(exception === 'timeout'){
        msg = 'Request timed out'
      } else if(exception === 'abort'){
        msg = 'Request aborted'
      }
    }
  })
});