/* import LoginForm from '../components/pages/LoginForm.vue'; */
import RegisterForm from '../components/pages/RegisterForm.vue';
import { createRouter, createWebHistory} from 'vue-router';

const routes = [
    /* {
        path: "/login",
        name: "LoginForm",
        component: LoginForm
    }, */
  /*   {
        path: "/",
        name: "LoginForm",
        component: LoginForm
    }, */
    {
        path: "/register",
        name: "RegisterForm",
        component: RegisterForm
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
});

export default router;