const confirmar_eliminar = new Vue({
    el: '#confirmarEliminar',
    data: {
        urlaeliminar: ''
    },

    methods: {
        eliminarCategoria(id) {
            //alert(id);
            this.urlaeliminar = document.getElementById('urlID').innerHTML + '/' + id;
            $('#modal_eliminar').modal('show');
        }
    },

});