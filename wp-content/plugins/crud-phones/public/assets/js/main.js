// alert(ajax_var.url)

jQuery("#crud_phones_form_create").submit(function(e){
  e.preventDefault();

  jQuery.ajax({
    url: ajax_var.url,
    type: "POST",
    data: jQuery(this).serialize(),
    beforeSend: function() {
      alert("sending information")
    },
    success: function($response){
      console.log($response);
      if($response){
        jQuery("#crud_phones_form_create input[name=phone_name]").val("")
        jQuery("#crud_phones_form_create input[name=phone_price]").val("")
        jQuery("#crud_phones_form_create input[name=phone_stock]").val("")
        
        jQuery("#phones_table_body").append(`
        <tr>
          <td>${ $response.name }</td>
          <td>${ $response.price }</td>
          <td>${ $response.stock }</td>
          <td><a herf="">REFRESH</a></td>
          <td><a herf="">REFRESH</a></td>
        </tr>
        `)
      }
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