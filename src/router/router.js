import HomePage from '../components/pages/HomePage.vue';
import LoginForm from '../components/pages/LoginForm.vue';
import RegisterForm from '../components/pages/RegisterForm.vue';
import DishPage from '../components/pages/DishPage.vue';
import ProfilePage from '../components/pages/ProfilePage.vue';
import { createRouter, createWebHistory} from 'vue-router';

const routes = [
    {
        path: "/",
        name: "HomePage",
        component: HomePage
    },
    {
        path: "/login",
        name: "LoginForm",
        component: LoginForm
    },
    {
        path: "/register",
        name: "RegisterForm",
        component: RegisterForm
    },
    {
        path: "/dishpage/:recipeId",
        name: "DishPage",
        component: DishPage,
    },
    {
        path: "/profile",
        name: "ProfilePage",
        component: ProfilePage
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
});

export default router;