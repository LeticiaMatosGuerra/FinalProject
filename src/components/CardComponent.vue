<template>
    <figure class="cardFigure">

        <img :src="dishCard.img_src" class="dishCard" :alt="dishCard.recipe_name">  

        <figcaption class="cardFigcaption">

            <h3 class="card-title">{{ dishCard.recipe_name }}
                <i class="fa-solid fa-heart" title= "like" @click="clickHandler()" :style="{
                // question if is active ? if this the color : else
                color: active ? 'red' : 'dimgray'}"> 
                </i>
            </h3>

            <article class="card-info">
                <small title= "total time"> 
                    <i class="fa-solid fa-stopwatch"></i> {{ dishCard.total_time }}
                </small>

                <small title= "serving"> 
                    <i class="fa-solid fa-utensils"></i> {{ dishCard.servings }}
                </small>

            </article>

        </figcaption>

    </figure>
</template>
<script>

export default ({
    name: 'CardComponent',
    props: {
        dishCard: {},
    },

    data(){
        return{
            // boolean for the like
            active: false, // false by default 
        }
    },

    methods: {
        clickHandler() {
            // if clicked turn into the opposite 
            this.active = !this.active;
        },
    }

})
</script>

