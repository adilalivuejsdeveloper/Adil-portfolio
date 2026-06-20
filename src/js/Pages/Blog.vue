<template>
  <nav-component />
  <hr class="m-0 dark:border-gray-800">

  <section class="min-h-screen bg-gray-50 dark:bg-gray-900 transition-colors duration-300 py-12 px-4 sm:px-6 lg:px-16">
    <div class="max-w-7xl mx-auto">

      <!-- Page Header -->
      <div class="text-center mb-12">
        <div class="inline-flex items-center space-x-2 bg-purple-100 dark:bg-purple-900/40 text-purple-700 dark:text-purple-300 px-4 py-2 rounded-full text-sm font-medium mb-4">
          <span>✍️</span>
          <span>Articles & Insights</span>
        </div>
        <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 dark:text-white mb-4">
          Blog & Insights
        </h1>
        <p class="text-gray-600 dark:text-gray-300 max-w-3xl mx-auto text-lg leading-relaxed">
          Sharing my experiences and insights from 2.8 years of full-stack web development. Learn about the technologies I use and the projects I've built.
        </p>
      </div>

      <!-- Blog Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
        <div
          v-for="(post, index) in blogPosts"
          :key="index"
          class="group bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden transform hover:-translate-y-1"
        >
          <div class="relative overflow-hidden">
            <img :src="post.image" alt="Blog Image" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          </div>
          <div class="p-5 sm:p-6">
            <h3 class="text-lg sm:text-xl font-bold text-gray-800 dark:text-white mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-200 line-clamp-2">{{ post.title }}</h3>
            <p class="text-gray-600 dark:text-gray-300 text-sm mb-4 line-clamp-3 leading-relaxed">{{ post.excerpt }}</p>
            <div class="flex items-center justify-between">
              <router-link
                :to="`/blog/${post.slug}`"
                class="text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 font-semibold text-sm flex items-center gap-1 group/link transition-colors duration-200"
              >
                Read More
                <span class="transition-transform duration-200 group-hover/link:translate-x-1">→</span>
              </router-link>
              <span class="text-xs text-gray-400 dark:text-gray-500 bg-gray-100 dark:bg-gray-700 px-2 py-1 rounded-full">{{ post.readTime }}</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Featured Technologies Section -->
      <div class="mt-16 bg-white dark:bg-gray-800 rounded-2xl p-8 sm:p-10 border border-gray-100 dark:border-gray-700 shadow-sm">
        <h3 class="text-2xl sm:text-3xl font-bold text-gray-800 dark:text-white mb-2 text-center">Technologies I Write About</h3>
        <p class="text-gray-500 dark:text-gray-400 text-center mb-8">The stack powering my projects and articles</p>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
          <div class="flex items-center space-x-3 p-4 bg-gray-50 dark:bg-gray-700/50 rounded-xl border border-gray-100 dark:border-gray-700 hover:border-blue-300 dark:hover:border-blue-600 hover:shadow-md transition-all duration-200">
            <div class="w-10 h-10 bg-green-100 dark:bg-green-900/40 rounded-lg flex items-center justify-center flex-shrink-0">
              <span class="text-green-600 dark:text-green-400 font-bold">V</span>
            </div>
            <div>
              <h4 class="font-semibold text-gray-800 dark:text-white text-sm">Vue.js</h4>
              <p class="text-xs text-gray-500 dark:text-gray-400">Frontend Framework</p>
            </div>
          </div>
          <div class="flex items-center space-x-3 p-4 bg-gray-50 dark:bg-gray-700/50 rounded-xl border border-gray-100 dark:border-gray-700 hover:border-red-300 dark:hover:border-red-600 hover:shadow-md transition-all duration-200">
            <div class="w-10 h-10 bg-red-100 dark:bg-red-900/40 rounded-lg flex items-center justify-center flex-shrink-0">
              <span class="text-red-600 dark:text-red-400 font-bold">L</span>
            </div>
            <div>
              <h4 class="font-semibold text-gray-800 dark:text-white text-sm">Laravel</h4>
              <p class="text-xs text-gray-500 dark:text-gray-400">Backend Framework</p>
            </div>
          </div>
          <div class="flex items-center space-x-3 p-4 bg-gray-50 dark:bg-gray-700/50 rounded-xl border border-gray-100 dark:border-gray-700 hover:border-cyan-300 dark:hover:border-cyan-600 hover:shadow-md transition-all duration-200">
            <div class="w-10 h-10 bg-cyan-100 dark:bg-cyan-900/40 rounded-lg flex items-center justify-center flex-shrink-0">
              <span class="text-cyan-600 dark:text-cyan-400 font-bold">T</span>
            </div>
            <div>
              <h4 class="font-semibold text-gray-800 dark:text-white text-sm">Tailwind CSS</h4>
              <p class="text-xs text-gray-500 dark:text-gray-400">CSS Framework</p>
            </div>
          </div>
          <div class="flex items-center space-x-3 p-4 bg-gray-50 dark:bg-gray-700/50 rounded-xl border border-gray-100 dark:border-gray-700 hover:border-blue-300 dark:hover:border-blue-600 hover:shadow-md transition-all duration-200">
            <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900/40 rounded-lg flex items-center justify-center flex-shrink-0">
              <span class="text-blue-600 dark:text-blue-400 font-bold">A</span>
            </div>
            <div>
              <h4 class="font-semibold text-gray-800 dark:text-white text-sm">APIs</h4>
              <p class="text-xs text-gray-500 dark:text-gray-400">Backend Integration</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <footer-component />
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
    excerpt: 'Sharing my 2.8-year journey from learning web development to working with international clients and developing complex web applications.',
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

<style scoped>
.line-clamp-2 {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
.line-clamp-3 {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
</style>
