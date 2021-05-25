<template>
    <div>
        <h2 class="text-uppercase font-weight-bold mt-5">
            {{ shape.name }}
        </h2>
        <div class="card-container">
            <product-card v-for="product in products" :key="product.id" :product="product" />
        </div>
    </div>
</template>

<script>
    import ProductCard from "../components/ProductCard";
    export default {
        components: {
            ProductCard
        },
        props: ['shape', 'products'],
    }
</script>

<style scoped>
    .card-container {
        display: flex;
        flex-wrap: wrap;
    }
</style>
