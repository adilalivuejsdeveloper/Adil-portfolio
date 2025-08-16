<template>
  <nav-component />
  <hr class="m-0">

  <section class="min-h-screen bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-white py-16">
    <div class="max-w-7xl mx-auto px-6">
      <h1 class="text-4xl font-bold mb-4 text-center">My Projects</h1>
      <p class="text-center text-gray-600 dark:text-gray-300 mb-10 max-w-3xl mx-auto">
        Here are some of the projects I've successfully developed, showcasing my expertise in full-stack web development with modern technologies.
      </p>

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
    title: 'Gulf Cars4u',
    description: 'An online platform for buying and selling cars. Developed the front-end and integrated all backend functionalities through APIs. Connected databases and implemented server-side logic.',
    image: 'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=400&h=300&fit=crop',
    tags: ['Vue.js', 'Laravel', 'API Integration', 'MySQL'],
    live: 'https://gulfcars4u.com',
    code: '',
  },
  {
    id: 2,
    title: 'SEO-Workforce',
    description: 'A project for analyzing various aspects of websites. Developed all frontend and backend functionalities. Handled databases and server-side logic to analyze website metrics.',
    image: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=300&fit=crop',
    tags: ['PHP', 'Laravel', 'SEO Analytics', 'Dashboard'],
    live: '',
    code: '',
  },
  {
    id: 3,
    title: 'OD Talent',
    description: 'A platform designed to connect and manage talent seamlessly. Developed a dynamic frontend solution with 5 custom pages. Created an interactive dashboard for talent management.',
    image: 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=400&h=300&fit=crop',
    tags: ['Vue.js', 'Dashboard', 'Talent Management', 'Interactive UI'],
    live: '',
    code: '',
  },
  {
    id: 4,
    title: 'OdChat',
    description: 'Development of a chatbot project. Developed a real-time, interactive chatbot solution similar to Tawk.to, enabling live customer support.',
    image: 'https://images.unsplash.com/photo-1577563908411-5077b6dc7624?w=400&h=300&fit=crop',
    tags: ['Real-time', 'Chatbot', 'Live Support', 'JavaScript'],
    live: '',
    code: '',
  },
  {
    id: 5,
    title: 'HOLOIN',
    description: 'A platform designed to simplify the deployment and management of sensor-based solutions, enabling quick integration, real-time monitoring, and efficient data processing for IoT applications.',
    image: 'https://images.unsplash.com/photo-1518709268805-4e9042af2176?w=400&h=300&fit=crop',
    tags: ['IoT', 'Sensor Solutions', 'Real-time Monitoring', 'Laravel'],
    live: 'https://holoin.ai/',
    code: '',
  },
  {
    id: 6,
    title: 'FXBOT',
    description: 'FXBotExperts is a division under Bulvert LLC, dedicated to developing and offering Expert Advisors (EAs)—automated trading systems—for MetaTrader 4 and 5 platforms. Powered by AI and machine learning.',
    image: 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=400&h=300&fit=crop',
    tags: ['Trading Systems', 'AI/ML', 'MetaTrader', 'Automated Trading'],
    live: 'https://fxbotexperts.com/',
    code: '',
  },
  {
    id: 7,
    title: 'Weqayah',
    description: 'Fire-monitoring system mandated by Amiri Decree No. 13 of 2021, designed to enhance safety in Ajman. Connects fire alarm systems to a smart central monitoring center operating 24/7 with 70-second response time.',
    image: 'https://images.unsplash.com/photo-1584036537791-4d9d46fa8223?w=400&h=300&fit=crop',
    tags: ['Fire Safety', 'IoT', 'Real-time Monitoring', 'M2M Technology'],
    live: 'https://weqayah.ae/',
    code: '',
  },
];
</script>
