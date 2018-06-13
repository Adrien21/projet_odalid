verification();

$('#search').on("keyup", verification);

function verification(){
    alldata = "search="+$('#search').val();
    console.log(alldata);
    $.ajax({
        type: "GET",
        url: "/historique",
        dataType: 'html',
        data: alldata,
        success: function(data){
            //console.log(data);
            //$('html').html(data);
        },
        error: function() {
            alert( "error" + alldata );
        }
    });
}