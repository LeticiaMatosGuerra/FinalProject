<template>
    <section class="dishGallery">
        <ul v-if="this.dishList">
            <li v-for="dish in dishList" :key="dish.recipeId">
                <router-link :to="{ 
                    name:'DishPage',
                    params: {
                        recipeId: dish.id
                    }
                }">
                    <!-- foreach dish in dishList is gonna be in dishCard object -->
                    <CardComponent :dishCard="dish"/>
                </router-link>
            </li>
        </ul>
    </section>
</template>

<script>
import CardComponent from './CardComponent.vue';

export default {
    name: "CardGalleryComponent",
    components: {
        CardComponent
    },
    props: {
        dishList: []
    },
}
</script>