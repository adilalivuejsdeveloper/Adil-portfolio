<template>
  <nav-component />
  <hr class="m-0">

  <section class="min-h-screen bg-white py-12 px-6 lg:px-16">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-4xl font-bold text-gray-800 mb-4 border-b-4 border-blue-600 inline-block pb-2">
        Blog & Insights
      </h2>
      <p class="text-gray-600 mb-10 max-w-3xl">
        Sharing my experiences and insights from 2.1 years of full-stack web development. Learn about the technologies I use and the projects I've built.
      </p>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div
          v-for="(post, index) in blogPosts"
          :key="index"
          class="bg-white border rounded-xl shadow hover:shadow-lg transition overflow-hidden"
        >
          <img :src="post.image" alt="Blog Image" class="w-full h-48 object-cover" />
          <div class="p-5">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ post.title }}</h3>
            <p class="text-gray-600 text-sm mb-4">{{ post.excerpt }}</p>
            <div class="flex items-center justify-between">
              <router-link
                :to="`/blog/${post.slug}`"
                class="text-blue-600 hover:underline font-medium"
              >
                Read More →
              </router-link>
              <span class="text-xs text-gray-400">{{ post.readTime }}</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Featured Technologies Section -->
      <div class="mt-16 bg-gray-50 rounded-2xl p-8">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">Technologies I Write About</h3>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
              <span class="text-blue-600 font-bold">V</span>
            </div>
            <div>
              <h4 class="font-semibold">Vue.js</h4>
              <p class="text-sm text-gray-500">Frontend Framework</p>
            </div>
          </div>
          <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
              <span class="text-red-600 font-bold">L</span>
            </div>
            <div>
              <h4 class="font-semibold">Laravel</h4>
              <p class="text-sm text-gray-500">Backend Framework</p>
            </div>
          </div>
          <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center">
              <span class="text-cyan-600 font-bold">T</span>
            </div>
            <div>
              <h4 class="font-semibold">Tailwind CSS</h4>
              <p class="text-sm text-gray-500">CSS Framework</p>
            </div>
          </div>
          <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
              <span class="text-green-600 font-bold">A</span>
            </div>
            <div>
              <h4 class="font-semibold">APIs</h4>
              <p class="text-sm text-gray-500">Backend Integration</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const blogPosts = [
  {
    title: 'Building Gulf Cars4u: Full-Stack Car Trading Platform',
    excerpt: 'How I developed a complete online platform for buying and selling cars using Vue.js frontend and Laravel backend with API integration.',
    image: 'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=600&h=400&fit=crop',
    slug: 'building-gulf-cars4u-platform',
    readTime: '8 min read',
  },
  {
    title: 'Creating Real-Time Chat: OdChat Development Journey',
    excerpt: 'Step-by-step guide on developing a real-time chatbot solution similar to Tawk.to for live customer support using modern web technologies.',
    image: 'https://images.unsplash.com/photo-1577563908411-5077b6dc7624?w=600&h=400&fit=crop',
    slug: 'real-time-chat-odchat-development',
    readTime: '6 min read',
  },
  {
    title: 'IoT Web Development: HOLOIN Platform Experience',
    excerpt: 'My experience building a platform for sensor-based solutions with real-time monitoring and efficient data processing for IoT applications.',
    image: 'https://images.unsplash.com/photo-1518709268805-4e9042af2176?w=600&h=400&fit=crop',
    slug: 'iot-web-development-holoin-platform',
    readTime: '10 min read',
  },
  {
    title: 'Laravel + Vue.js: The Perfect Full-Stack Combination',
    excerpt: 'Why I chose Laravel and Vue.js as my go-to tech stack and how this combination helped me build scalable web applications.',
    image: 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=600&h=400&fit=crop',
    slug: 'laravel-vuejs-perfect-fullstack-combination',
    readTime: '7 min read',
  },
  {
    title: 'From Freelance to Full-Time: My Web Development Journey',
    excerpt: 'Sharing my 2.1-year journey from learning web development to working with international clients and developing complex web applications.',
    image: 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=400&fit=crop',
    slug: 'freelance-to-fulltime-web-development-journey',
    readTime: '12 min read',
  },
  {
    title: 'Building Fire Safety Systems: Weqayah Platform',
    excerpt: 'How I contributed to developing a critical fire-monitoring system for Ajman with 24/7 monitoring and 70-second response time using M2M technology.',
    image: 'https://images.unsplash.com/photo-1584036537791-4d9d46fa8223?w=600&h=400&fit=crop',
    slug: 'building-fire-safety-weqayah-platform',
    readTime: '9 min read',
  },
  {
    title: 'SEO-Workforce: Website Analytics Dashboard',
    excerpt: 'Creating a comprehensive tool for analyzing website metrics, handling databases, and implementing server-side logic for SEO analysis.',
    image: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop',
    slug: 'seo-workforce-analytics-dashboard',
    readTime: '8 min read',
  },
  {
    title: 'AI-Powered Trading: FXBOT Development Experience',
    excerpt: 'Working on Expert Advisors (EAs) for MetaTrader platforms powered by AI and machine learning for automated trading systems.',
    image: 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=600&h=400&fit=crop',
    slug: 'ai-powered-trading-fxbot-development',
    readTime: '11 min read',
  },
  {
    title: 'Talent Management Platform: OD Talent Project',
    excerpt: 'Developing a dynamic platform with interactive dashboard for seamless talent connection and management with 5 custom pages.',
    image: 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=400&fit=crop',
    slug: 'talent-management-od-talent-project',
    readTime: '7 min read',
  },
];
</script>
