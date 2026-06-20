import { createRouter, createWebHistory } from 'vue-router'

const routesarray = [
    {
        path: '/',
        name: 'Home',
        component: () => import('./Pages/Home.vue'),
    },
    {
        path: '/about',
        name: 'About',
        component: () => import('./Pages/About.vue'),
    },
    {
        path: '/projects',
        name: 'Projects',
        component: () => import('./Pages/Projects.vue'),
    },
    {
        path: '/skills',
        name: 'Skills',
        component: () => import('./Pages/Skills.vue'),
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
]

const router = createRouter({
    history: createWebHistory(),
    routes: routesarray,
    scrollBehavior(to, from, savedPosition) {
        if (to.hash) {
            return { el: to.hash, behavior: 'smooth', top: 80 }
        }
        if (savedPosition) {
            return savedPosition
        }
        return { top: 0 }
    },
})
export default router
