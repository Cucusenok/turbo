import ModelView from './ModelView.js';

$(document).ready(function () {
    $(this).on('click', '#mark', function(){
        let car = $(this).text();
        
        $.ajax(
            {
                url: "/getModel",  
                method: "POST",
                data:{
                    mark: car,
                    autotype: "ligth"
                },
                fail: function(){alert("Возникли перебои в работе.");}
            }
        ).done(function(data){
            if ( console && console.log ) {
                //console.log( "Sample of data:", data );
            }
            let modelView = new ModelView();
            modelView.make(data);
        }
        );


    });
});