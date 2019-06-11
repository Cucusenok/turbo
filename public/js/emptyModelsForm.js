export default class ModelsForm{

    constructor() {
        this.form = '<div class="mark-models-form">'
                     +'<h3>К сожалению по вашему запросу ничего не найдено, но вы можете обратиться к менеджеру, '
                     +'скорее всего он сможет вам помочь, так как у него есть прямой доступ к поставшикам.</h3>'   
                     +'<a href="#">Обратиться к менеджеру</a>'
                     +'</div>';
      }

    make(){
        $('#mark-container').append(this.form);
    }




}