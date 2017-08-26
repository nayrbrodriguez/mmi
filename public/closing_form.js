$(function() {
  $("#civilstatus").change(function() {
    if ($("#Married").is(":selected")) {
      $("#married_form").show();
      // $("#client_graph_form").hide();
    } else {
      $("#married_form").hide();
      // $("#client_graph_form").show();
    }
  }).trigger('change');
});