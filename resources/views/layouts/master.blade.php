<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="antialiased">

         <div id="app">

                <router-link to="/" class="nav-link" exact>
                    Home
                  </router-link>

                  <router-link to="/about" class="nav-link">
                    About
                  </router-link>
                  
                  <router-link to="/contact" class="nav-link">
                    Contact
                  </router-link>
<!--             <ul>
                <li v-for="skill in skills" v-text="skill"></li>
            </ul>
        </div> --}}

    <div id="one">
        <h1>
            @{{ shared.user.name }}
        </h1>
    
    </div>
    <div id="two">
        <h1>
            @{{ shared.user.name }}
        </h1> -->
    </div>

    <!-- <div id="root"> -->
<!--          <coupon></coupon> 
        <p>
            v-model : <input type="text" name="couponcode" v-model="coupon" >   
        </p>
        
        <p>
            v-bind:value & @input : <input type="text" name="couponcode" :value="coupon" @input="coupon = $event.target.value"> 
        </p>
        <p>
            Custom input validation : <coupon v-model="coupon" :code="coupon">
        </p> --}} -->
    <!-- </div> -->
<script type="text/javascript" src="/js/app.js"></script>
<!--     <script type="text/javascript" src="../js/vue.js"></script>
    <script type="text/javascript" src="main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
 <script src="/main.js"></script> -->

<script>
        new Vue({
            el: '#app',
            data() {
                return {
                    skills: []
                }
            },
            mounted() {
                axios.get('./skills').then(response => this.skills = response.data);
            }
        });
    </script>
    </body>
</html>
