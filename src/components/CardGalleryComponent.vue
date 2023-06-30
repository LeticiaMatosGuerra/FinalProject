<template>
    <section class="dishGallery">
        <ul v-if="this.dishList">
            <li v-for="dish in dishList" :key="dish.recipeId">
                <!-- foreach dish in dishList is gonna be in dishCard object -->
                <CardComponent :dishCard="dish"/>
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