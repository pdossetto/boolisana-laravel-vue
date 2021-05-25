<template>
    <!--
    è necessario aggiungere un v-if per non avere errori in console
    altrimenti darebbe errore quando si cerca di accedere alle proprietà dell'oggetto
     -->
    <div v-if="product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="titolo-prodotto text-center font-weight-bold">
                        {{ product.title }}
                    </h1>
                </div>
            </div>
        </div>
        <div class="header-prodotto">
            <img :src="product.header_img" :alt="product.title">
        </div>
        <div class="pacco-pasta">
            <img :src="product.big_img" :alt="'confezione di ' + product.title">
        </div>
        <product-details :product="product" />
    </div>
</template>

<script>
    import ProductDetails from "../components/ProductDetails";

    export default {
        components: {
            ProductDetails
        },
        data() {
            return {
                product: null
            }
        },
        mounted() {
            const self = this;
            axios.get('/api/products/' + self.$route.params.slug)
                .then(response => self.product = response.data.results);
        }
    }
</script>

<style scoped lang="scss">
    @import "../../sass/variables";

    .header-prodotto img, .pacco-pasta img {
        display: block;
        max-width: 100%;
    }

    .titolo-prodotto {
        padding: $spacing / 2 0;
    }
</style>
