import LoginForm from '../components/pages/LoginForm.vue';
import SignUpForm from '../components/pages/SignUpForm.vue';
import { createRouter, createWebHistory} from 'vue-router';

const routes = [
    {
        path: "/login",
        name: "LoginForm",
        component: LoginForm
    },
    {
        path: "/signup",
        name: "SignUpForm",
        component: SignUpForm
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
});

export default router;