import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Home from './pages/Home';
import Contacts from './pages/Contacts';
import About from './pages/About';
import ProductsIndex from './pages/ProductsIndex';
import ProductsIndex2 from './pages/ProductsIndex2';
import ProductsShow from "./pages/ProductsShow";

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
        },
        {
            path: '/contatti',
            name: 'contatti',
            component: Contacts
        },
        {
            path: '/chi-siamo',
            name: 'chi-siamo',
            component: About
        },
        {
            // pagina semplice con tutti i prodotti listati assieme
            path: '/prodotti',
            name: 'prodotti',
            component: ProductsIndex
        },
        {
            // pagina con i prodotti divisi per tipo
            path: '/prodotti2',
            name: 'prodotti2',
            component: ProductsIndex2
        },
        {
            // pagina di dettaglio prodotto con slug
            path: '/prodotti/:slug',
            name: 'prodotto',
            component: ProductsShow
        }
    ],
    linkActiveClass: 'active'
});

export default router
