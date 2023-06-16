<template>
    <nav>
       <figure>
            <img src="../assets/img/logoTransparent.png" alt="logo">
       </figure>

       <figcaption>
            <ul>
                <li class="nav-item">
                    <router-link class="nav-link" to="/">Home</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/about">About</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/contact">Contact</router-link>
                </li>
            </ul>
       </figcaption>

    </nav>
</template>
<style>
 nav {
    width: 90%;    
    display: flex;
    justify-content: space-between;
    align-items: center;

 }

 nav img {
    width: 50vh;
 }

 figcaption ul{
    display: flex;
    column-gap: 5vh;
    list-style-type: none;
 }
</style>

<script>

export default {
    name: "NavComponent"   
}

</script>