import ModelView from './ModelView.js';
import MarkModelView from './MarkModelView.js';
import ModelsForm from './emptyModelsForm.js';

$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    

    $("#mark-model").bind("input change", function() { //if input change
        let inputVal = $(this).val().trim(); //get value from input and clear space
        if(inputVal==""){
            let modelView = new ModelView();
            modelView.clearModelContainer();
            $.ajax(
                {
                    url: "/getmarkAndModel",  
                    method: "POST",
                    data:{
                        all: "true",
                        autotype: "ligth"
                    },
                    fail: function(){alert("Возникли перебои в работе.");}
                }
            ).done(function(data){
                if ( console && console.log ) {
                    //console.log( "Sample of data:", data );
                }
                    let mmv = new MarkModelView();
                    mmv.make(data);
            }
            );
        }
        
        else{
            $.ajax(
                {
                    url: "/getmarkAndModel",  
                    method: "POST",
                    data:{
                        inputtext: inputVal,
                        autotype: "ligth"
                    },
                    fail: function(){alert("Возникли перебои в работе.");}
                }
            ).done(function(data){
                //console.log(data['models'])
                //console.log(data);
                let mmv = new MarkModelView();
                let modelView = new ModelView();
                if(data['automarks'].length == 0){
                    //console.log('hello');
                    mmv.clearMarkContainer();
                }
                else{
                    mmv.make(data);
                }
                if(data['models'].length == 0){
                    modelView.clearModelContainer();
                }
                else{
                    modelView.make(data);
                }
                if(data['automarks'].length == 0 && data['models'].length ==0){
                    let modelsForm = new ModelsForm();
                    modelsForm.make();
                }
            }
            );
            }
    });



});