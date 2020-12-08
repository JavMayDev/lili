console.log('testing validate script');

function checkValidness(fieldInput) {
    console.log( 'on checkValidness' )
    if (!fieldInput.value) {
        fieldInput.classList.add('input-invalid');
        return false;
    } else {
	fieldInput.classList.remove('input-invalid')
	return true
    }

}

function validate(event) {
    event.preventDefault();
    var isValid = true;
    Array.from($('.form-field')).forEach(function (fieldInput) {
        if (!checkValidness(fieldInput)) isValid = false;
    });
    return isValid;
}

$(document).ready(function(){ 
    Array.from($('.form-field')).forEach(function(fieldInput){
	$(fieldInput).change(function(event){
	    console.log( 'on change' )
	    checkValidness(event.target)
	})
    })
})
