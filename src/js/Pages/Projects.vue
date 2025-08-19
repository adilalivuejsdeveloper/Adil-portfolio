<template>
    <nav-component />
    <hr class="m-0">

    <section class="min-h-screen bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-white py-8 sm:py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="text-center mb-8 sm:mb-12 lg:mb-16">
                <h1
                    class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-3 sm:mb-4 bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    My Projects
                </h1>
                <p
                    class="text-sm sm:text-base lg:text-lg text-gray-600 dark:text-gray-300 mb-6 sm:mb-8 max-w-3xl mx-auto leading-relaxed px-2">
                    Here are some of the projects I've successfully developed, showcasing my expertise in full-stack web
                    development with modern technologies.
                </p>

                <!-- Project Stats -->
                <div class="flex flex-wrap justify-center gap-4 sm:gap-6 lg:gap-8 mb-8 sm:mb-12">
                    <div
                        class="bg-white dark:bg-gray-800 rounded-xl px-4 sm:px-6 py-3 sm:py-4 shadow-md border border-gray-100 dark:border-gray-700">
                        <div class="text-xl sm:text-2xl font-bold text-blue-600 dark:text-blue-400">7+</div>
                        <div class="text-xs sm:text-sm text-gray-500 dark:text-gray-400">Projects Completed</div>
                    </div>
                    <div
                        class="bg-white dark:bg-gray-800 rounded-xl px-4 sm:px-6 py-3 sm:py-4 shadow-md border border-gray-100 dark:border-gray-700">
                        <div class="text-xl sm:text-2xl font-bold text-green-600">10+</div>
                        <div class="text-xs sm:text-sm text-gray-500 dark:text-gray-400">Technologies Used</div>
                    </div>
                    <div
                        class="bg-white dark:bg-gray-800 rounded-xl px-4 sm:px-6 py-3 sm:py-4 shadow-md border border-gray-100 dark:border-gray-700">
                        <div class="text-xl sm:text-2xl font-bold text-purple-600">2.1+</div>
                        <div class="text-xs sm:text-sm text-gray-500 dark:text-gray-400">Years Experience</div>
                    </div>
                </div>
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8">
                <div v-for="project in projects" :key="project.id"
                    class="group bg-white dark:bg-gray-800 rounded-xl sm:rounded-2xl shadow-md hover:shadow-xl overflow-hidden transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 dark:border-gray-700">
                    <!-- Project Image -->
                    <div class="relative overflow-hidden">
                        <img :src="project.image" :alt="project.title"
                            class="h-40 sm:h-48 lg:h-52 w-full object-cover transition-transform duration-500 group-hover:scale-110"
                            loading="lazy" />
                        <!-- Overlay on hover -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>

                        <!-- Live/Demo Badge -->
                        <div v-if="project.live" class="absolute top-3 right-3">
                            <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full shadow-lg">
                                🟢 Live
                            </span>
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-4 sm:p-5 lg:p-6">
                        <h2
                            class="text-lg sm:text-xl lg:text-2xl font-semibold mb-2 sm:mb-3 line-clamp-1 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-200">
                            {{ project.title }}
                        </h2>

                        <p
                            class="text-gray-600 dark:text-gray-300 text-xs sm:text-sm lg:text-base mb-3 sm:mb-4 line-clamp-3 leading-relaxed">
                            {{ project.description }}
                        </p>

                        <!-- Technology Tags -->
                        <div class="flex flex-wrap gap-1 sm:gap-2 mb-4 sm:mb-5">
                            <span v-for="(tag, index) in project.tags" :key="index"
                                class="text-xs px-2 py-1 rounded-full bg-gradient-to-r from-blue-50 to-indigo-50 text-blue-700 dark:from-blue-900 dark:to-indigo-900 dark:text-blue-300 border border-blue-100 dark:border-blue-800 font-medium"
                                :class="{ 'hidden sm:inline-block': index >= 3 }">
                                {{ tag }}
                            </span>
                            <span v-if="project.tags.length > 3"
                                class="text-xs px-2 py-1 rounded-full bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 sm:hidden">
                                +{{ project.tags.length - 3 }} more
                            </span>
                        </div>

                        <!-- Action Links -->
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <a v-if="project.live" :href="project.live" target="_blank" rel="noopener noreferrer"
                                class="flex-1 inline-flex items-center justify-center text-xs sm:text-sm bg-gradient-to-r from-blue-600 to-purple-600 text-white px-3 sm:px-4 py-2 sm:py-2.5 rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg font-medium">
                                <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-1 sm:mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                                <span class="hidden sm:inline">Live Demo</span>
                                <span class="sm:hidden">Live</span>
                            </a>

                            <a v-if="project.code" :href="project.code" target="_blank" rel="noopener noreferrer"
                                class="flex-1 inline-flex items-center justify-center text-xs sm:text-sm border-2 border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 px-3 sm:px-4 py-2 sm:py-2.5 rounded-lg hover:border-gray-400 dark:hover:border-gray-500 hover:bg-gray-50 dark:hover:bg-gray-700 transition-all duration-200 font-medium">
                                <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-1 sm:mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                </svg>
                                <span class="hidden sm:inline">Source Code</span>
                                <span class="sm:hidden">Code</span>
                            </a>

                            <!-- Placeholder for projects without links -->
                            <div v-if="!project.live && !project.code"
                                class="flex-1 inline-flex items-center justify-center text-xs sm:text-sm bg-gray-100 dark:bg-gray-700 text-gray-500 dark:text-gray-400 px-3 sm:px-4 py-2 sm:py-2.5 rounded-lg font-medium">
                                <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-1 sm:mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                                Private Project
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action Section -->
            <div class="mt-12 sm:mt-16 lg:mt-20 text-center">
                <div
                    class="bg-gradient-to-r from-blue-50 to-purple-50 dark:from-gray-800 dark:to-gray-700 rounded-2xl sm:rounded-3xl p-6 sm:p-8 lg:p-12 border border-blue-100 dark:border-gray-600">
                    <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-800 dark:text-white mb-3 sm:mb-4">
                        Ready to Start Your Project?
                    </h3>
                    <p
                        class="text-sm sm:text-base lg:text-lg text-gray-600 dark:text-gray-300 mb-6 sm:mb-8 max-w-2xl mx-auto leading-relaxed">
                        I'm currently available for new projects and collaborations. Let's discuss how I can help bring
                        your ideas to life with modern web technologies.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center items-center max-w-md mx-auto">
                        <router-link to="/contact"
                            class="w-full sm:w-auto inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl font-semibold text-sm sm:text-base">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-3.582 8-8 8a8.959 8.959 0 01-4.906-1.436L3 21l2.436-5.094A8.959 8.959 0 013 12c0-4.418 3.582-8 8-8s8 3.582 8 8z" />
                            </svg>
                            Let's Discuss Your Project
                        </router-link>
                        <a href="tel:03054365536"
                            class="w-full sm:w-auto inline-flex items-center justify-center border-2 border-blue-600 text-blue-600 dark:text-blue-400 dark:border-blue-400 px-6 sm:px-8 py-3 sm:py-4 rounded-xl hover:bg-blue-50 dark:hover:bg-blue-900 transition-all duration-200 transform hover:scale-105 font-semibold text-sm sm:text-base">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            Call Me
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer-component />
</template>

<script setup>
const projects = [
    {
        id: 1,
        title: 'Gulf Cars4u',
        description: 'An online platform for buying and selling cars. Developed the front-end and integrated all backend functionalities through APIs. Connected databases and implemented server-side logic.',
        image: 'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=400&h=300&fit=crop',
        tags: ['Vue.js', 'Laravel', 'API Integration', 'MySQL', 'Tailwind CSS'],
        live: 'https://gulfcars4u.com',
        code: '',
    },
    {
        id: 2,
        title: 'SEO-Workforce',
        description: 'A project for analyzing various aspects of websites. Developed all frontend and backend functionalities. Handled databases and server-side logic to analyze website metrics.',
        image: '/images/seo-workforce.webp',
        tags: ['PHP', 'Laravel', 'SEO Analytics', 'Dashboard', 'MySQL'],
        live: '',
        code: '',
    },
    {
        id: 3,
        title: 'OD Talent',
        description: 'A platform designed to connect and manage talent seamlessly. Developed a dynamic frontend solution with 5 custom pages. Created an interactive dashboard for talent management.',
        image: 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=400&h=300&fit=crop',
        tags: ['Vue.js', 'Dashboard', 'Talent Management', 'Interactive UI', 'Bootstrap'],
        live: '',
        code: '',
    },
    {
        id: 4,
        title: 'OdChat',
        description: 'Development of a chatbot project. Developed a real-time, interactive chatbot solution similar to Tawk.to, enabling live customer support.',
        image: 'https://images.unsplash.com/photo-1577563908411-5077b6dc7624?w=400&h=300&fit=crop',
        tags: ['Real-time', 'Chatbot', 'Live Support', 'JavaScript', 'WebSocket'],
        live: '',
        code: '',
    },
    {
        id: 5,
        title: 'HOLOIN',
        description: 'A platform designed to simplify the deployment and management of sensor-based solutions, enabling quick integration, real-time monitoring, and efficient data processing for IoT applications.',
        image: '/images/HOLOIN.webp',
        tags: ['IoT', 'Sensor Solutions', 'Real-time Monitoring', 'Laravel', 'Vue.js'],
        live: 'https://holoin.ai/',
        code: '',
    },
    {
        id: 6,
        title: 'FXBOT',
        description: 'FXBotExperts is a division under Bulvert LLC, dedicated to developing and offering Expert Advisors (EAs)—automated trading systems—for MetaTrader 4 and 5 platforms. Powered by AI and machine learning.',
        image: 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=400&h=300&fit=crop',
        tags: ['Trading Systems', 'AI/ML', 'MetaTrader', 'Automated Trading', 'PHP'],
        live: 'https://fxbotexperts.com/',
        code: '',
    },
    {
        id: 7,
        title: 'Weqayah',
        description: 'Fire-monitoring system mandated by Amiri Decree No. 13 of 2021, designed to enhance safety in Ajman. Connects fire alarm systems to a smart central monitoring center operating 24/7 with 70-second response time.',
        image: 'https://images.unsplash.com/photo-1584036537791-4d9d46fa8223?w=400&h=300&fit=crop',
        tags: ['Fire Safety', 'IoT', 'Real-time Monitoring', 'M2M Technology', 'Laravel'],
        live: 'https://weqayah.ae/',
        code: '',
    },
];
</script>

<style scoped>
/* Line clamp utilities for text truncation */
.line-clamp-1 {
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Smooth scrolling */
html {
    scroll-behavior: smooth;
}

/* Enhanced hover effects for cards */
.group:hover .group-hover\:scale-110 {
    transform: scale(1.1);
}

/* Ensure images don't overflow on very small screens */
@media (max-width: 320px) {
    .h-40 {
        height: 8rem;
    }
}

/* Optimize for tablet screens */
@media (min-width: 640px) and (max-width: 1024px) {
    .sm\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 1.5rem;
    }
}

/* Loading animation for images */
img {
    transition: opacity 0.3s ease-in-out;
}

img[loading="lazy"] {
    opacity: 0;
    animation: fadeIn 0.3s ease-in-out forwards;
}

@keyframes fadeIn {
    to {
        opacity: 1;
    }
}

/* Accessibility improvements */
@media (prefers-reduced-motion: reduce) {
    * {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
}

/* Focus styles for better accessibility */
a:focus-visible,
button:focus-visible {
    outline: 2px solid #3b82f6;
    outline-offset: 2px;
}

/* Ensure proper touch targets on mobile */
@media (max-width: 768px) {

    a,
    button {
        min-height: 44px;
        min-width: 44px;
    }
}
</style>
