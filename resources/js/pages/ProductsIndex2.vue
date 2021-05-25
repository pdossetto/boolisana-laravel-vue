<template>
    <section class="mt-5 prodotti">
        <div class="container">
            <div class="row">
                <div class="col 12">
                    <products-shape-section v-for="(shape, index) in shapes"
                                            :key="index"
                                            :shape="shape"
                                            :products="products[shape.id]" />
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import ProductsShapeSection from "../components/ProductsShapeSection";
    export default {
        components: {
            ProductsShapeSection
        },
        data() {
            return {
                products: {},
                shapes: []
            }
        },
        mounted() {
            const self = this;
            // recupero tutti i tipi di pasta
            axios.get('/api/shapes').then(response => {
                self.shapes = response.data.results;

                // per ogni tipo di pasta, recupero i prodotti associati
                self.shapes.forEach(shape => {
                    axios.get('/api/products/shapes/' + shape.id).then(response => {
                        // creo una nuova chiave nell'oggetto 'products' con la label corrispondente
                        Vue.set(self.products, shape.id, response.data.results);
                    });
                });
            });
        }
    }
</script>

<style scoped lang="scss">
    @import "../../sass/variables";

    .prodotti {
        background-image: url('/images/fondo-pag-speciali.jpg');
        padding: $spacing;
    }
</style>
