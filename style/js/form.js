
  $(document).ready(function () {
    $('#name').on('keyup', function (e) {
      var data = $(this).val();
      if (data) {
        $("#error").text('This field is required.')
      }

    });
  });