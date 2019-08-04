export default () => {
    $(document).ready(function() {
        alert($('.gallery-menu').val());
    }); 
    
}

// const fetchBooks = (institution_id, diploma_scope) => {
//     $.ajax({
//         type: 'GET',
//         url: '/books/institution/' + institution_id,
//     }).then(function (data) {
//     }
// }