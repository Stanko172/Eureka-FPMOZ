<template>
    <div class="container">
        <Navbar />
        <v-row class="mt-7" justify="center">
            <v-expansion-panels popout style="z-index: 1000;">
              <v-expansion-panel
              class="mt-10"
                v-for="(item, index) in items"
                :key="index"
              >
                <v-expansion-panel-header>{{ item.name }}</v-expansion-panel-header>
                <v-expansion-panel-content>
                  <v-btn color="#1B4188" :href="item.url">Pogledajte ovdje</v-btn>
                </v-expansion-panel-content>
              </v-expansion-panel>
            </v-expansion-panels>
        </v-row>

        <!--Animation-->

        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</template>

<script>
import Navbar from '../components/Navbar.vue';
    export default {
        components:{
            Navbar
        },
        data(){
            return{
                items:[
                    {
                        name: 'Eureka (1. broj)',
                        url: 'https://www.fpmoz.sum.ba/eureka/eureka1.pdf'
                    },
                    {
                        name: 'Eureka (2. broj)',
                        url: 'https://www.fpmoz.sum.ba/eureka/eureka2.pdf'
                    },
                    {
                        name: 'Eureka (3. broj)',
                        url: 'https://www.fpmoz.sum.ba/eureka/eureka3.pdf'
                    },
                    {
                        name: 'Eureka (4. broj)',
                        url: 'https://www.fpmoz.sum.ba/eureka/eureka4.pdf'
                    },
                    {
                        name: 'Eureka (5. broj)',
                        url: 'https://www.fpmoz.sum.ba/eureka/eureka5.pdf'
                    }
                ]
            }
        }
    }
</script>

<style scoped>
    .circles{
    z-index: 1;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}
.circles li{
    z-index: 1;
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: lightgrey;
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}
.circles li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}
.circles li:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}
.circles li:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}
.circles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}
.circles li:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}
.circles li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}
.circles li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}
.circles li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}
.circles li:nth-child(9){
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}
.circles li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}
@keyframes animate {
    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }
    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }
}
</style>
