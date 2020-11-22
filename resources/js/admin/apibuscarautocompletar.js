
const apibuscarautocompletar = new Vue({
    el: '#apibuscarautocompletar',
    data: {
        palabra_buscar: '',
        resultados: []


    },

    methods: {
        autoCompletar() {
            //console.log(imagen);
            this.resultados = [];

            if (this.palabra_buscar.length > 2) {
                axios.get('/api/autocompletar',
                    { params: { buscarpalabra: this.palabra_buscar } }
                ).then(response => {
                    this.resultados = response.data;
                    console.log(response.data);
                });
            }

        },
        async select(resultado) {
            this.palabra_buscar = resultado.nombre;
            await this.$nextTick();
            this.submitForm();

        },
        submitForm() {
            console.log('Estoy ejecutando');
            this.$refs.btnBuscar.click();

        },



    },
    mounted() {

        console.log('datos cargados');
    }
});

