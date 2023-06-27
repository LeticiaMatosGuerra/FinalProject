<template>
   <li class="list" @click="selection" :class="{selected: isSelected}">
      <section>
         <i class="fa-solid fa-check"></i>
      </section>
      <p>{{content}}</p>
   </li>
</template>

<script>
export default {
   name: 'LiComponent',
   props: {
      content: String,
   },
   data(){
      return{
         isSelected: false,
      }
   },
   methods:{
      selection(){
         this.isSelected = !this.isSelected;
      }
   }
}
</script>

<style>
   .list{
      display: flex;
      align-items: center;
      column-gap: 3vw;
   }

   .list i{
      display: none;
   }

   .list > section {
      width: 3vh;
      height: 3vh;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 20px;
      border: 1px solid black;
      font-size: 12px;
   }

   .selected > section{
      border: 1px solid green;
      color: whitesmoke;
      background-color: green;
   }

   .selected i{
      display: block;
   }

   .selected > p{
      text-decoration: line-through;
   }
</style>