import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import '../css/app.css';

import Slider from './Components/slider.vue';
import Nav from './Components/nav.vue';
import Footer from './Components/footer.vue';

const app = createApp(App);

app.component('slider-component', Slider);
app.component('nav-component', Nav);
app.component('footer-component', Footer);

app.use(router);

app.mount('#app');
