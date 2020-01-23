$(function(){
  var checkboxes = $(':checkbox:not(#SelectAll)').click(function(event){
      $('#Assign').prop("disabled", checkboxes.filter(':checked').length == 0);
  });
  
  $('#SelectAll').click(function(event) {   
      checkboxes.prop('checked', this.checked);
      $('#Assign').prop("disabled", !this.checked)
  });
});