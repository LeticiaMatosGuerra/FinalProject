<template>
    <figure>
        <!-- Profile Pic -->
        <img :src="userInfo.image" :alt="userInfo.name">

        <figcaption>
            <!-- Name -->
            <h3> {{ userInfo.name }} </h3> 
            
            <!-- Email -->
            <span> {{ userInfo.email }} </span>

        </figcaption>
    </figure>
</template>

<script>

export default {
    name: "ProfileComponent",
    data() {
        return {
            userInfo: {
                name: "",
                email: "",
                image: "",
            }
        };
    },

    methods: {
        getUserInfo() {
            // new http request
            const x = new XMLHttpRequest();
            // open the new http request with the method get and pass as async (true)
            x.open('GET', 'http://localhost/FinalProject/api/server.php', true);
            // onreadysatechange (event) is gonna be called every time theres a change in the request status
            x.onreadystatechange = () => {

                // 4  is done and 200 is OK
                if (x.readyState === 4 && x.status === 200) { 
                    // transform the response in text format
                    const response = JSON.parse(x.responseText);
                    
                    // get the resonse of the request
                    this.userInfo.name = response.session.username;
                    this.userInfo.email = response.session.email;
                    this.userInfo.image = response.session.image;

                }
            };
            x.send();
        }
    },

    mounted() {
        this.getUserInfo();
    }

}
</script>
