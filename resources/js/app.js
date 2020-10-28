/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

new Vue({
	el: '#app',

	mounted() {
		axios.get('./skills').then(response => console.log(response));
	}
});