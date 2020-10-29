import './bootstrap';
import router from './routes';

const app = new Vue({
	el: '#app'
});
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// new Vue({
// 	el: '#app',

// 	mounted() {
// 		axios.get('./skills').then(response => console.log(response));
// 	}
// });

// let store = {
// 		user: {
// 			name: 'Selva'
// 		}		
// 	}

// new Vue({
// 	el: '#one',
// 	data: {
// 			shared: store,			
// 			specific: 'Hello'
// 		}
// })

// new Vue({
// 	el: '#two',
// 	data: {
// 			shared: store,			
// 			specific: 'Hey'
// 		}
// })

// Vue.component('coupon', {
// 	props: ['code'],
// 	template: `	
// 			<input type="text" :value="code" @input="updateCode($event.target.value)" ref="code">
// 	`,
// 	data() {
// 		return {
// 			expiredCodes: ['ALLFREE', 'SOMETHINGELSE']
// 		}
// 	},
// 	methods: {
// 		updateCode(code) {
// 			// VALIDATION AND SANITATIN

// 			if(this.expiredCodes.includes(code)) {
// 				alert('Expired')
// 				this.$refs.code.value = code = ''
// 			}
// 			this.$emit('input', code)
// 		}
// 	}
// });

// new Vue({
// 	el: '#root',
// 	data: {
// 		coupon: "FREEBIE"
// 	},
// 	methods: {

// 	}
// })
