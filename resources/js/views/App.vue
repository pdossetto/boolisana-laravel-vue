<template>
    <div>
        <page-header />
        <main>
            <router-view />
        </main>
        <page-footer />
    </div>
</template>
<script>
    import PageHeader from "../components/PageHeader";
    import PageFooter from "../components/PageFooter";
    export default {
        components: {
            PageHeader,
            PageFooter
        }
    }
</script>
