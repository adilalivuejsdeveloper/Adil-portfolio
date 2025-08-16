<template>
                  <nav-component />

    <hr class="m-0">

   <section class="min-h-screen bg-white py-12 px-6 lg:px-16">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-4xl font-bold text-gray-800 mb-10 border-b-4 border-blue-600 inline-block pb-2">
        Blog
      </h2>

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
            <router-link
              :to="`/blog/${post.slug}`"
              class="text-blue-600 hover:underline font-medium"
            >
              Read More →
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script setup>
const blogPosts = [
  {
    title: 'How I Built My Portfolio with Laravel and Vue.js',
    excerpt: 'Step-by-step guide on how I used Laravel, Vue 3, and Tailwind CSS to create a dynamic, professional portfolio.',
    image: 'https://source.unsplash.com/600x400/?code,developer',
    slug: 'portfolio-with-laravel-vue',
  },
  {
    title: 'Stripe Integration in Vue.js Made Simple',
    excerpt: 'A simplified walkthrough for integrating Stripe payments in your Vue 3 components.',
    image: 'https://source.unsplash.com/600x400/?payment,online',
    slug: 'stripe-integration-vue',
  },
  {
    title: 'Vue.js Tips for Beginners',
    excerpt: 'Useful tricks and habits I wish I knew when I started working with Vue.js.',
    image: 'https://source.unsplash.com/600x400/?vuejs,frontend',
    slug: 'vuejs-tips-beginners',
  },
];
</script>
