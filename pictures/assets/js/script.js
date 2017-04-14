(function () {

    /** Delete Button Modal **/
    $('#test-button').on('click', function(e) {
        alert('Hello World');
    });

    var app = new Vue({
        el: '#editor',
        data: {
            message: 'Hello Vue!'
        }
    });

})();
