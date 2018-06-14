// Initialisation une fois la page chargée
jQuery(document).ready(function(){
    lancer();
});

function lancer() {

    jQuery('#search').on("keyup", function(e){
        url = $(this).attr('href');
        verification(url);
    });


    $('body').on('click', '.pagination a', function(e){
        e.preventDefault();
        url = $(this).attr('href');
        verification(url);
        window.history.pushState("", "", url);
    });

    function verification(url) {
        alldata = "recherche=" + $('#search').val();
        console.log(alldata);
        $.ajax({
            type: "GET",
            url: url,
            dataType: 'html',
            data: {_token : $('input[name=_token]').val(), recherche: $('#search').val()},
            success: function (historiques) {
                //console.log(historiques);
                //console.log(historiques.data[0].id);
/*
                mef = '';
                historiques.data.forEach(function(element){
                    mef = mef + '<tr>' +
                        '<th scope=\'row\'>' + element.id + '</th>' +
                        '<td>' + element.identite_nom + '</td>' +
                        '<td>' + element.dateEvenement + '</td>' +
                        '<td>' + element.porte_nom + '</td>' +
                        '<td>' + element.etatEvenement + '</td>' +
                        '</tr>';
                });
                $('#histo').html(mef);
                //$('.pagination').css({'display': 'none'});
*/
                $('#histo').html(historiques);
            },
            error: function (err1, err2, err3) {
                console.log(err1);
                console.log(err2);
                console.log(err3);
                //alert("error" + alldata);
            },
        });
    }
}