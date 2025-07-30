import { createRouter, createWebHistory } from 'vue-router'

const routesarray = [
    {
        path: '/',
        name: 'Home',
        component: () => import('./Pages/Home.vue'),
    },
    {
        path: '/projects',
        name: 'Projects',
        component: () => import('./Pages/Projects.vue'),
    },
    {
        path: '/about',
        name: 'About',
        component: () => import('./Pages/About.vue'),
    },
    {
        path: '/experience',
        name: 'Experience',
        component: () => import('./Pages/Experience.vue'),
    },
    {
        path: '/contact',
        name: 'Contact',
        component: () => import('./Pages/Contact.vue'),
    },
    {
        path: '/skills',
        name: 'skills',
        component: () => import('./Pages/Skills.vue'),
    },
    {
        path: '/blog',
        name: 'Blog',
        component: () => import('./Pages/Blog.vue'),
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes: routesarray,
})

export default router
