import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


document.addEventListener('DOMContentLoaded', function() {
    // Seleziona tutti i bottoni con la classe 'delete-button'
    const deleteButtons = document.querySelectorAll('.delete-button');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const comicId = this.id.replace('delete-button-', '');
            const confirmed = confirm('sei sicuro di eliminare questo fumetto?');
            if (confirmed) {
                // Trova il form corrispondente e invialo
                document.getElementById('delete-form-' + comicId).submit();
            }
        });
    });
});
