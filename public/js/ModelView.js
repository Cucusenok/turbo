export default class MarkModelView{

    make(models){
        this.clearModelContainer();
        let marks = models['models'];
        let marksKeys = Object.keys(models['models']);

        $('#model-title').text('Модели транспорта');
        marksKeys.forEach(mark=>{
            let modelContainer = '<div class="marks models">';
            modelContainer += '<h1 id="model-title">'+ mark +'</h1>';
            marks[mark].forEach(model=>{
                modelContainer += '<div class="mark model" id="model">'
                              + '<h3>' + model + '</h3>'
                               + '</div>';
            });

            modelContainer += '</div>';
            $('#model-container').append(modelContainer);
        });
        }

    clearModelContainer(){
        $('#model-title').empty();
        $('#model-container').empty();

    }

}