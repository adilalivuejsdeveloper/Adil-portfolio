<template>
  <nav class="fixed inset-x-0 top-0 z-50 bg-white/80 dark:bg-gray-900/90 backdrop-blur-md border-b border-gray-100 dark:border-gray-800 shadow-sm transition-colors duration-300" ref="navbar">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <!-- Logo/Brand -->
        <router-link
          :to="'/'"
          class="group flex items-center space-x-2"
          @click="closeMobileMenu"
        >
          <div class="flex size-8 sm:size-10 items-center justify-center rounded-lg bg-gradient-to-r from-blue-600 to-purple-600 transition-transform duration-200 group-hover:scale-105">
            <span class="text-base sm:text-lg font-bold text-white">AA</span>
          </div>
          <span class="bg-gradient-to-r from-gray-800 to-gray-600 dark:from-white dark:to-gray-300 bg-clip-text text-lg sm:text-xl font-bold text-transparent">
            Adil Ali
          </span>
        </router-link>

        <!-- Desktop Navigation -->
        <div class="hidden items-center space-x-1 md:flex">
          <router-link
            v-for="item in navigationItems"
            :key="item.name"
            :to="item.path"
            class="group relative px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 transition-all duration-200 hover:bg-blue-50 dark:hover:bg-blue-900/30 hover:text-blue-600 dark:hover:text-blue-400 rounded-lg whitespace-nowrap"
            :class="{ 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400': isActiveRoute(item.path) }"
          >
            <i :class="item.icon" class="mr-2 text-xs"></i>
            {{ item.name }}
            <span class="absolute bottom-0 left-1/2 h-0.5 w-0 bg-blue-600 transition-all duration-300 group-hover:left-0 group-hover:w-full"></span>
          </router-link>
        </div>

        <!-- CTA Button, Dark Mode Toggle & Mobile Menu Button -->
        <div class="flex items-center space-x-2 sm:space-x-3">
          <!-- Dark Mode Toggle -->
          <button
            @click="toggleDarkMode"
            class="flex items-center justify-center w-9 h-9 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-yellow-400 hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 shadow-sm"
            :aria-label="isDark ? 'Switch to light mode' : 'Switch to dark mode'"
            :title="isDark ? 'Switch to light mode' : 'Switch to dark mode'"
          >
            <!-- Sun icon (shown in dark mode) -->
            <svg v-if="isDark" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707M17.657 17.657l-.707-.707M6.343 6.343l-.707-.707M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <!-- Moon icon (shown in light mode) -->
            <svg v-else xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/>
            </svg>
          </button>

          <!-- CTA Button -->
          <router-link
            :to="'/contact'"
            class="hidden items-center rounded-full bg-gradient-to-r from-blue-600 to-purple-600 px-4 sm:px-6 py-2 sm:py-2.5 text-xs sm:text-sm font-medium text-white shadow-lg transition-all duration-200 hover:scale-105 hover:from-blue-700 hover:to-purple-700 hover:shadow-xl sm:flex whitespace-nowrap"
            @click="closeMobileMenu"
          >
            <i class="fas fa-paper-plane mr-1 sm:mr-2 text-xs"></i>
            <span class="hidden sm:inline">Let's Connect</span>
            <span class="sm:hidden">Connect</span>
          </router-link>

          <!-- Mobile Menu Button -->
          <button
            @click="toggleMobileMenu"
            class="rounded-lg p-2 text-gray-600 dark:text-gray-300 transition-colors duration-200 hover:bg-blue-50 dark:hover:bg-blue-900/30 hover:text-blue-600 dark:hover:text-blue-400 md:hidden focus:outline-none focus:ring-2 focus:ring-blue-500"
            aria-label="Toggle menu"
            :aria-expanded="mobileMenuOpen"
          >
            <svg
              class="size-5 sm:size-6 transition-transform duration-300"
              :class="{ 'rotate-180': mobileMenuOpen }"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                v-if="!mobileMenuOpen"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
              />
              <path
                v-else
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M6 18L18 6M6 6l12 12"
              />
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Navigation -->
      <transition
        enter-active-class="transition duration-300 ease-out"
        enter-from-class="scale-95 opacity-0 -translate-y-2"
        enter-to-class="scale-100 opacity-100 translate-y-0"
        leave-active-class="transition duration-200 ease-in"
        leave-from-class="scale-100 opacity-100 translate-y-0"
        leave-to-class="scale-95 opacity-0 -translate-y-2"
      >
        <div
          v-if="mobileMenuOpen"
          class="border-t border-gray-100 dark:border-gray-800 bg-white/95 dark:bg-gray-900/95 shadow-lg backdrop-blur-md md:hidden"
        >
          <div class="space-y-1 px-4 pb-6 pt-4 max-h-[calc(100vh-4rem)] overflow-y-auto">
            <router-link
              v-for="item in navigationItems"
              :key="item.name"
              :to="item.path"
              @click="closeMobileMenu"
              class="group flex items-center rounded-xl px-4 py-3 text-gray-700 dark:text-gray-200 transition-all duration-200 hover:bg-blue-50 dark:hover:bg-blue-900/30 hover:text-blue-600 dark:hover:text-blue-400 active:scale-95 touch-manipulation"
              :class="{ 'bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400': isActiveRoute(item.path) }"
            >
              <i :class="item.icon" class="mr-3 text-base w-5 text-center"></i>
              <span class="font-medium">{{ item.name }}</span>
              <i class="fas fa-arrow-right ml-auto translate-x-2 opacity-0 transition-all duration-200 group-hover:translate-x-0 group-hover:opacity-100 text-xs"></i>
            </router-link>

            <!-- Mobile CTA -->
            <div class="border-t border-gray-100 dark:border-gray-800 pt-4 mt-4">
              <router-link
                :to="'/contact'"
                @click="closeMobileMenu"
                class="flex w-full items-center justify-center rounded-xl bg-gradient-to-r from-blue-600 to-purple-600 px-6 py-3 font-medium text-white shadow-lg transition-all duration-200 hover:scale-105 hover:from-blue-700 hover:to-purple-700 active:scale-95 touch-manipulation"
              >
                <i class="fas fa-paper-plane mr-2 text-xs"></i>
                Let's Connect
              </router-link>
            </div>
          </div>
        </div>
      </transition>
    </div>

    <!-- Mobile Menu Overlay -->
    <div
      v-if="mobileMenuOpen"
      class="fixed inset-0 bg-black/20 backdrop-blur-sm md:hidden"
      style="z-index: -1;"
      @click="closeMobileMenu"
      aria-hidden="true"
    ></div>
  </nav>

  <!-- Spacer to prevent content from hiding behind fixed navbar -->
  <div class="h-16"></div>
</template>

<script>
export default {
  name: 'NavigationComponent',
  data() {
    return {
      mobileMenuOpen: false,
      isDark: false,
      navigationItems: [
        { name: 'Home', path: '/', icon: 'fas fa-home' },
        { name: 'About', path: '/about', icon: 'fas fa-user' },
        { name: 'Projects', path: '/projects', icon: 'fas fa-code' },
        { name: 'Skills', path: '/skills', icon: 'fas fa-tools' },
        { name: 'Experience', path: '/experience', icon: 'fas fa-briefcase' },
        // { name: 'Blog', path: '/blog', icon: 'fas fa-pen-alt' },
        { name: 'Contact', path: '/contact', icon: 'fas fa-envelope' }
      ]
    }
  },
  methods: {
    toggleDarkMode() {
      this.isDark = !this.isDark;
      if (this.isDark) {
        document.documentElement.classList.add('dark');
        localStorage.setItem('theme', 'dark');
      } else {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('theme', 'light');
      }
    },

    toggleMobileMenu() {
      this.mobileMenuOpen = !this.mobileMenuOpen;
      if (this.mobileMenuOpen) {
        document.body.style.overflow = 'hidden';
      } else {
        document.body.style.overflow = '';
      }
    },

    closeMobileMenu() {
      this.mobileMenuOpen = false;
      document.body.style.overflow = '';
    },

    isActiveRoute(path) {
      return this.$route.path === path;
    },

    handleOutsideClick(e) {
      if (this.$refs.navbar && !this.$refs.navbar.contains(e.target)) {
        this.closeMobileMenu();
      }
    },

    handleEscapeKey(e) {
      if (e.key === 'Escape' && this.mobileMenuOpen) {
        this.closeMobileMenu();
      }
    },

    handleResize() {
      if (window.innerWidth >= 768) {
        this.closeMobileMenu();
      }
    }
  },

  mounted() {
    // Restore saved theme
    const savedTheme = localStorage.getItem('theme');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    if (savedTheme === 'dark' || (!savedTheme && prefersDark)) {
      document.documentElement.classList.add('dark');
      this.isDark = true;
    }

    document.addEventListener('click', this.handleOutsideClick);
    document.addEventListener('keydown', this.handleEscapeKey);
    window.addEventListener('resize', this.handleResize);

    this.$router.afterEach(() => {
      this.closeMobileMenu();
    });
  },

  beforeUnmount() {
    document.removeEventListener('click', this.handleOutsideClick);
    document.removeEventListener('keydown', this.handleEscapeKey);
    window.removeEventListener('resize', this.handleResize);
    document.body.style.overflow = '';
  }
}
</script>

<style scoped>
nav {
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
}

:global(html) {
  scroll-behavior: smooth;
}

button:focus-visible,
a:focus-visible {
  outline: 2px solid #3b82f6;
  outline-offset: 2px;
}

@media (max-width: 640px) {
  .max-w-7xl {
    max-width: 100%;
  }
}

@media (max-width: 768px) {
  .touch-manipulation {
    touch-action: manipulation;
  }
  button, a {
    min-height: 44px;
    min-width: 44px;
  }
}

@supports (padding: max(0px)) {
  nav {
    padding-left: max(1rem, env(safe-area-inset-left));
    padding-right: max(1rem, env(safe-area-inset-right));
  }
}

@media (prefers-reduced-motion: reduce) {
  * {
    animation-duration: 0.01ms !important;
    animation-iteration-count: 1 !important;
    transition-duration: 0.01ms !important;
  }
}
</style>
