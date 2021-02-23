<template>
  <div>

  	<Navbar />

   
   <div style="height: 90vh;" class="d-flex justify-center align-center">

	     <div class="d-flex justify-content-around align-center">

	        <div style="z-index: 10 !important;">

			    <v-container fluid>
			    	    
			        <div class="d-flex flex-column justify-center align-center">
			     		<div class="home-heading">Eureka</div>

			     		<div class="text-animation-container">
					  		<p class="home-text" data-text="Studentski časopis FPMOZ">Studentski časopis FPMOZ</p>
					  	</div>

			     		<v-btn color="#1B4188" to="/vijesti">Popis članaka</v-btn>
			     	</div>

			    </v-container>

		    </div>

		    <div class="eureka-image" style="width: 200px;"></div>

		    <div class="eureka-image">
	     		<img src="https://iili.io/fCav5l.png" />
	     	</div>

	     </div>
      

     </div>

     <!--Carousel-->

     <Carousel />

     <div  class="d-flex justify-center align-center" style="height: 12em;"> <h1 style="color: #1B4188;">Što je Eureka?</h1> </div>

     <v-container>
    	<Info /> 
    </v-container>

    <div  class="d-flex justify-center align-center" style="height: 12em;"> <h1 style="color: #1B4188;">Tko sudjeluje u razvoju projekta?</h1> </div>

    <Participants />

    <div class="d-flex justify-center align-center" style="height: 7em;"> <h1 style="color: #1B4188;"></h1></div>

    <ContactForm />

    <div  class="d-flex justify-center align-center" style="height: 15em;"> <h1 style="color: #1B4188;">Urednici časopisa za 2020/21 ak. godinu</h1> </div>

    <Redactor />

    <div  class="d-flex justify-center align-center" style="height: 3em;"> <h1 style="color: #1B4188;"></h1> </div>

    <!--Footer-->

    <Footer />

        

</div>

</template>

<script>
import Navbar from '../components/Navbar.vue';
import Info from '../components/Info.vue';
import Carousel from '../components/Carousel.vue';
import ContactForm from '../components/ContactForm.vue';
import Redactor from '../components/Redactor.vue';
import Participants from '../components/Participants.vue';
import Footer from '../components/Footer.vue';
export default {
    components: {
    	Navbar,
    	Info,
        Carousel,
        ContactForm,
        Redactor,
        Participants,
        Footer
    },
    data(){
    	return{
        cards: [
          {
            name: '',
            deasciption: '',
            image: '',
            modal: {
              name: '',
              description: ''
            }
          },
          {
            name: '',
            deasciption: '',
            image: '',
            modal: {
              name: '',
              description: ''
            }
          }
        ],
    	}
    }
}
</script>

<style>

.v-btn{
  color: white !important;
}

@media only screen and (max-width: 960px) {

	.eureka-image{
		display: none;
	}

}

@media only screen and (max-width: 400px) {

	.eureka-image{
		display: none;
	}

	.home-heading{
		font-size: 86px !important;
	}

	.home-text {
		height: 1.8rem;
		letter-spacing: 0.0rem !important;
	}

}

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


</style>