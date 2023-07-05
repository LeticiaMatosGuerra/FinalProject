<template>
    <ul>
        <li v-for="cardLiked in likedCards" :key="cardLiked.recipeId">
            <CardComponent :dishCard="cardLiked" @cardClicked="cardClickedHandler" />
        </li>
    </ul>
</template>

<script>
import CardComponent from './CardComponent.vue';

export default {
    name: 'LikesComponent',
    
    components: {
        CardComponent,
    },
    data() {
        return {
            likedCards: [],
        };
    },
    methods: {
        cardClickedHandler(clickedCard) {
            console.log('Card cliked:', clickedCard);
        },
    },
};
</script>
