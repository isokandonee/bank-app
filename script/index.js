$(function() {
  $("input").attr("autocomplete", "off");

  $("#submitForm").on("click", function(e) {
    // validate password here
    // validate email and other form fields here
    if ($("#tac").prop("checked")) {
      $("#myForm").submit();
    }
  });
});
