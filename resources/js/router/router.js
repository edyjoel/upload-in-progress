import { createRouter, createWebHistory } from 'vue-router';
import Home from "@/pages/Home.vue";
import About from "@/pages/About.vue";

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/about',
        name: 'About',
        component: About
    },
];

const router = createRouter({
    history: createWebHistory(), // Usa el modo de historial HTML5
    routes,
});

export default router;
