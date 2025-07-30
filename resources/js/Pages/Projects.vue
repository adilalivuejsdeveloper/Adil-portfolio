<template>
                  <nav-component />

    <hr class="m-0">

    <section class="min-h-screen bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-white py-16">
    <div class="max-w-7xl mx-auto px-6">
      <h1 class="text-4xl font-bold mb-10 text-center">My Projects</h1>

      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <div
          v-for="project in projects"
          :key="project.id"
          class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden hover:shadow-lg transition"
        >
          <img
            :src="project.image"
            :alt="project.title"
            class="h-48 w-full object-cover"
          />
          <div class="p-6">
            <h2 class="text-2xl font-semibold mb-2">{{ project.title }}</h2>
            <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
              {{ project.description }}
            </p>

            <!-- Tags -->
            <div class="flex flex-wrap gap-2 mb-4">
              <span
                v-for="tag in project.tags"
                :key="tag"
                class="text-xs bg-indigo-100 text-indigo-700 dark:bg-indigo-700 dark:text-white px-2 py-1 rounded"
              >
                {{ tag }}
              </span>
            </div>

            <!-- Links -->
            <div class="flex gap-4">
              <a
                v-if="project.live"
                :href="project.live"
                target="_blank"
                class="text-sm text-indigo-600 hover:underline"
              >
                🔗 Live Demo
              </a>
              <a
                v-if="project.code"
                :href="project.code"
                target="_blank"
                class="text-sm text-gray-600 dark:text-gray-300 hover:underline"
              >
                💻 GitHub
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const projects = [
  {
    id: 1,
    title: 'TalentBridge Job Portal',
    description:
      'An AI-powered job recommendation system built with Laravel, Vue 3, and Bootstrap.',
    image: '/images/projects/talentbridge.jpg',
    tags: ['Vue 3', 'Laravel', 'AI', 'Bootstrap'],
    live: 'https://yourprojectlink.com',
    code: 'https://github.com/yourusername/talentbridge',
  },
  {
    id: 2,
    title: 'Ecommerce Dashboard',
    description:
      'Admin panel for managing products, orders, and analytics using Vue 3 and Tailwind.',
    image: '/images/projects/ecommerce.jpg',
    tags: ['Vue 3', 'Tailwind CSS', 'Admin'],
    live: '',
    code: 'https://github.com/yourusername/ecommerce-dashboard',
  },
  {
    id: 3,
    title: 'Stripe Payment Integration',
    description:
      'A secure Stripe checkout modal built in Vue 3 with Laravel backend API integration.',
    image: '/images/projects/stripe.jpg',
    tags: ['Vue', 'Laravel', 'Stripe', 'Payments'],
    live: '',
    code: '',
  },
  // Add more as needed...
];
</script>


