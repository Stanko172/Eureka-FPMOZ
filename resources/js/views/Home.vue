<template>
  <div>

  	<Navbar />

   
     <div class="area d-flex justify-content-around align-center">
        <div style="z-index: 10 !important;">

		    <v-container fluid>
		    	    
		        <div class="d-flex flex-column justify-center align-center">
		     		<div class="home-heading">Eureka</div>

		     		<div class="text-animation-container">
				  		<p class="home-text" data-text="Studentski časopis sa FPMOZ-a">Studentski časopis sa FPMOZ-a</p>
				  	</div>

		     		<v-btn color="#1B4188">Popis članaka</v-btn>
		     	</div>

		    </v-container>

	    </div>

	    <div style="z-index: 10 !important;">
     		<img src="https://iili.io/fCav5l.png" />
     	</div>


        
        </div>

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
    components: {
    	Navbar
    }
}
</script>

<style>

.home-heading{
	font-size: 112px;
	color: #1B4188;
}

.home-text {
	height: 1.8rem;
	position: absolute;
	text-transform: uppercase;
	font-size: 1rem;
	margin: 0;
	padding: 0;
	align-self: center;
	letter-spacing: 0.3rem;
	font-family: monospace;
	color: transparent;
}
.home-text:before {
	content: attr(data-text);
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	color: #000;
	overflow: hidden;
	border-right: 1px solid #000;
	animation: type 10s steps(30) infinite;
	white-space: nowrap;
}
.text-animation-container{
	padding: 0;
	margin: 0;
	display: flex;
	justify-content: center;
	align-content: center;
	height: 100px;
	
}
@keyframes type {
	0% {
		width: 0;
	}
	
	50% {
		width: 100%;
	}
	100% {
		width: 0;
	}
}








.area{ 
    width: 100%;
    height:100vh;
    
   
}

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