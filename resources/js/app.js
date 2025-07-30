import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import '../css/app.css';
const app = createApp(App);


import Slider from './Components/slider.vue';
app.component('slider-component', Slider);

import nav from './Components/nav.vue';
app.component('nav-component', nav);

app.use(router);

app.mount('#app');
