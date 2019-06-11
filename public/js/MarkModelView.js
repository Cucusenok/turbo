/*
class for work with section marks and models
*/

export default class MarkModelView{
    
    make(marks){
        this.clearMarkContainer();
        this.insertInContainer(marks);
    };

    insertInContainer(marks){
        let letters = Object.keys(marks['automarks']); //get all letter-keys
        letters.forEach( letter =>{
            //console.log(letter);
            let numMark = marks['automarks'][letter];
            let letterMarks = Object.keys(numMark); //get all marks on this letter
            var marksAndLetter =  '<div class="marks" id="marks">';
            marksAndLetter += '<h1>' + letter + ' </h1>';

            letterMarks.forEach(mark=>{
                let automark = numMark[mark];
                //console.log(automark);
                marksAndLetter += '<div class="mark" id="mark">'
                              + '<h3>' + automark + '</h3>'
                               + '</div>';
         
            });
            marksAndLetter += '</div>';
            $('#mark-container').append(marksAndLetter);
        });
    }

    clearMarkContainer(){
        $('#mark-container').empty();
    }
}