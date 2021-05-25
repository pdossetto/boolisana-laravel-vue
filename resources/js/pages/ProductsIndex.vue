<template>
    <section class="mt-5 prodotti">
        <div class="container">
            <div class="row">
                <div class="col 12">
                    <h1 class="text-center font-weight-bold">
                        {{ message }}
                    </h1>
                    <div class="card-container">
                        <product-card v-for="product in products" :key="product.id" :product="product" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import ProductCard from "../components/ProductCard";
    export default {
        components: {
            ProductCard
        },
        data() {
            return {
                message: 'Lista prodotti',
                products: []
            }
        },
        mounted() {
            const self = this;
            axios.get('/api/products')
                .then(response => self.products = response.data.results);
        }
    }
</script>

<style scoped lang="scss">
    @import "../../sass/variables";

    .prodotti {
        background-image: url('/images/fondo-pag-speciali.jpg');
        padding: $spacing;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
    }
</style>
