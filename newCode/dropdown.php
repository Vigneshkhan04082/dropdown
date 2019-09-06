  function accounTextSearch()
  {
    var myinput = $("#search_box").val();

    $('.jssearch').each(function(){
        var label = $(this).find('label').text();
        console.log(label.toUpperCase());
        if (label.toUpperCase().indexOf(myinput.toUpperCase()) > -1) {
          $(this).show();
        } else {
          $(this).hide();
        }
    })
  }