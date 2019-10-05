 // Siirry muuta-sivulle
 $(document).on('click', '.muokkaa-aloite', function(){

    var id = $(this).attr('muokkaa-aloite');

    bootbox.confirm({
      message: "<h4>Oletko varma?</h4>",
      buttons: {
        confirm: {
          label: '<i class="far fa-check"></i>Kyllä',
          className: 'btn-danger'
        },
        cancel: {
          label: '<iclass="far fa-times"></i>En',
          className: 'btn-primary'
        }
      },
      callback: function(result) {
        // Painettiinko Kyllä-painiketta?
        if(result==true) {
          // Kyllä painettiin, joten siirrytään muuta-sivulle
          var url = "/aloite/muokkaa/" + id;
          $(location).attr('href', url);
        }
      }
    });
  });

  //siirry poista-sivulle
$(document).on('click', '.poista-aloite', function(){

var id = $(this).attr('poista-aloite');

bootbox.confirm({
message: "<h4>Oletko varma?</h4>",
buttons: {
confirm: {
  label: '<i class="far fa-check"></i>Kyllä',
  className: 'btn-danger'
},
cancel: {
  label: '<iclass="far fa-times"></i>En',
  className: 'btn-primary'
}
},
callback: function(result) {
// Painettiinko Kyllä-painiketta?
if(result==true) {
  // Kyllä painettiin, joten siirrytään poista-sivulle
  var url = "/aloite/poista/" + id;
  $(location).attr('href', url);
}
}
});
return false;
});