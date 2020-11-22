
const apiproduct = new Vue({
    el: '#apiproduct',
    data: {
        nombre: '',
        slug: '',
        div_mensajeslug: 'Slug existe',
        div_clase_slug: '',
        div_aparecer: false,
        deshabilitar_boton: 1,

        /* Variables correpondiente a precios */
        precioanterior: 0,
        precioactual: 0,
        descuento: 0,
        porcentajededescuento: 0,
        descuento_mensaje: '0'

    },
    computed: {
        generarSlug: function () {
            var char = {
                "á": "a", "é": "e", "í": "i", "ó": "o", "ú": "u",
                "Á": "A", "É": "E", "Í": "I", "Ó": "O", "Ú": "U",
                "ñ": "n", "Ñ": "N", " ": "-", "_": "-"
            }
            var expr = /[áéíóúÁÉÍÓÚÑñ_ ]/g;

            this.slug = this.nombre.trim().replace(expr, function (e) {
                return char[e]
            }).toLowerCase()

            return this.slug;
        },
        generardescuento: function () {
            if (this.porcentajededescuento > 100) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'No se permite un valor mayor a 100',
                })

                this.porcentajededescuento = 100;
                this.descuento = (precioanterior * this.porcentajededescuento) / 100;
                this.precioactual = this.precioanterior - this.descuento;
                this.descuento_mensaje = ' Este producto tiene un 100% de decscuento  por lo que es gratis';
                return this.descuento_mensaje;
            } else
                if (this.porcentajededescuento < 0) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'No se permite un valor menor a 0',
                    })
                    this.porcentajededescuento = 0;
                    this.descuento = (precioanterior * this.porcentajededescuento) / 100;
                    this.precioactual = this.precioanterior - this.descuento;
                    this.descuento_mensaje = '';
                    return this.descuento_mensaje;
                }
                else



                    if (this.porcentajededescuento > 0) {

                        this.descuento = (this.precioanterior * this.porcentajededescuento) / 100;
                        this.precioactual = this.precioanterior - this.descuento;

                        if (this.porcentajededescuento == 100) {
                            this.descuento_mensaje = ' Este producto tiene un 100% de decscuento';

                        } else {

                            this.descuento_mensaje = 'Hay un descuento de .$' + this.descuento;
                        }
                        return this.descuento_mensaje;

                    } else {

                        this.descuento = '';
                        this.precioactual = this.precioanterior;
                        this.descuento_mensaje = '';

                        return this.descuento_mensaje;

                    }

        }
    },
    methods: {
        eliminarproducto(imagen) {
            //console.log(imagen);
            Swal.fire({
                title: 'Desea eliminar la imagen :' + imagen.id + '?',
                text: "Esta acción no se puede revertir!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar',
                cancelButtonText: 'Cancelar'

            }).then((result) => {
                if (result.value) {
                    let url = '/api/eliminarimagen/' + imagen.id;
                    axios.delete(url).then(response => {
                        console.log(response.data);

                    });


                    var elemento = document.getElementById('imagen-' + imagen.id);
                    elemento.parentNode.removeChild(elemento);
                    Swal.fire(
                        'Eliminado!',
                        'La imagen ha sido eliminada.',
                        'success'
                    )
                }
            })
        },
        getProduct() {
            if (this.slug) {
                let url = '/api/product/' + this.slug;
                axios.get(url).then(response => {
                    this.div_mensajeslug = response.data;
                    if (this.div_mensajeslug === "Slug Disponible") {
                        this.div_clase_slug = 'badge badge-success';
                        this.deshabilitar_boton = 0;
                    } else {
                        this.div_clase_slug = 'badge badge-danger';
                        this.deshabilitar_boton = 1;
                    }
                    this.div_aparecer = true;
                    if (data.datos.nombre) {
                        if (data.datos.nombre === this.nombre) {
                            this.deshabilitar_boton = 0;
                            this.div_mensajeslug = '';
                            this.div_clase_slug = '';
                            this.div_aparecer = false;

                        }
                    }
                })
            } else {
                this.div_mensajeslug = "Debes agregar un producto";
                this.div_clase_slug = 'badge badge-danger';
                this.deshabilitar_boton = 1;
                this.div_aparecer = true;

            }
        }
    },
    mounted() {
        if (data.editar == 'Si') {
            this.nombre = data.datos.nombre;
            this.precioanterior = data.datos.precioanterior;
            this.porcentajededescuento = data.datos.porcentajededescuento;
            this.deshabilitar_boton = 0;
        }
        console.log(data);
    }
});

