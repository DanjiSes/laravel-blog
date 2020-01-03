// $(document).ready(function () {
//   //Initialize Select2 Elements
//   $(".select2").select2();
//   //Date picker
//   $('#datepicker').datepicker({
//     autoclose: true
//   });
//   //iCheck for checkbox and radio inputs
//   $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
//     checkboxClass: 'icheckbox_minimal-blue',
//     radioClass: 'iradio_minimal-blue'
//   });
//   $("#example1").DataTable();
// })
$( document ).ready(function() {

$(".select2").select2();

$('#datepicker').datepicker({
  autoclose: true,
  format: 'dd/mm/yy'
});

$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
  checkboxClass: 'icheckbox_minimal-blue',
  radioClass: 'iradio_minimal-blue'
});

$("#example1").DataTable();
});