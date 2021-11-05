require('./bootstrap');

// window . confirmDelete = function() {
//     const resp = confirm('Vuoi cancellare?');

//     if(!resp) {
//         event.preventDefsult();
//     }
// }

/* Chiedere la conferma di cancellare il post */
const deleteForm = document.querySelectorAll('.delete-post');

deleteForm.forEach(item=> {
    item.addEventListener('submit', function(e) {
        const resp = confirm('Vuoi cancellare?');

        if(!resp) {
            e.preventDefault();
        }
    })
})