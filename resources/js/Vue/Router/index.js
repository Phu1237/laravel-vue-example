import { createRouter, createWebHistory } from 'vue-router';
import routes from './routes';

const router = createRouter({
    // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
    history: createWebHistory(),
    routes, // short for `routes: routes`
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition // scroll to savedPosition
        } else {
            return {
                top: 0,
                behavior: 'smooth'
            }
        }
    }
});

export default router;
