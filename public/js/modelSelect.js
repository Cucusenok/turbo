
$(document).ready(function () {
    $(this).on('click', '#model', function(){
        let model = $(this).text();
        $.ajax(
            {
                url: "/getTurbo",  
                method: "POST",
                data:{
                    model: model,
                    autotype: "ligth"
                },
                fail: function(){alert("Возникли перебои в работе.");}
            }
        ).done(function(data){
            if ( console && console.log ) {
                //console.log( "Sample of data:", data );
            }
        }
        );


    });
});