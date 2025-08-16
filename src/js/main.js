import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import '../css/app.css';

import Slider from '../src/components/slider.vue';
import Nav from '../src/components/nav.vue';

const app = createApp(App);

app.component('slider-component', Slider);
app.component('nav-component', Nav);

app.use(router);

app.mount('#app');
