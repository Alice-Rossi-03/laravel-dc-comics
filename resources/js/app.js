import './bootstrap';
import '~resources/scss/app.scss';
import.meta.glob([
    '../img/**'
    ]);

let deleteButton = document.getElementById('delete-button');

deleteButton.addEventListener('click', function() {
    alert('Are You Sure To Delete This Comic? The Action Is Irreversible');
});
