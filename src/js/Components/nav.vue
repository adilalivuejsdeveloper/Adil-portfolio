<template>
  <nav
    class="fixed inset-x-0 top-0 z-50 border-b backdrop-blur-md transition-colors duration-300"
    style="background: color-mix(in srgb, var(--ground) 82%, transparent); border-color: var(--border);"
    ref="navbar"
  >
    <div class="wrap-wide">
      <div class="flex h-16 items-center justify-between">
        <!-- Brand -->
        <router-link :to="'/'" class="group flex items-center gap-2.5" @click="closeMobileMenu">
          <div
            class="flex size-9 items-center justify-center rounded-lg font-bold transition-transform duration-200 group-hover:scale-105"
            style="background: var(--accent); color: var(--accent-ink);"
          >
            AA
          </div>
          <span class="display text-lg font-bold" style="color: var(--text);">Adil Ali</span>
        </router-link>

        <!-- Desktop nav -->
        <div class="hidden items-center gap-1 md:flex">
          <router-link
            v-for="item in navigationItems"
            :key="item.name"
            :to="item.path"
            class="nav-link mono rounded-lg px-3.5 py-2 text-sm font-medium transition-colors duration-200"
            :class="{ 'is-active': isActiveRoute(item.path) }"
          >
            {{ item.name }}
          </router-link>
        </div>

        <!-- Actions -->
        <div class="flex items-center gap-2 sm:gap-3">
          <button
            @click="toggleDarkMode"
            class="flex size-9 items-center justify-center rounded-lg surface transition-colors duration-200 hover:border-[var(--accent)]"
            :aria-label="isDark ? 'Switch to light mode' : 'Switch to dark mode'"
            :title="isDark ? 'Switch to light mode' : 'Switch to dark mode'"
          >
            <svg v-if="isDark" xmlns="http://www.w3.org/2000/svg" class="size-5" style="color: var(--accent-strong);" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707M17.657 17.657l-.707-.707M6.343 6.343l-.707-.707M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <svg v-else xmlns="http://www.w3.org/2000/svg" class="size-5" style="color: var(--text-muted);" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/>
            </svg>
          </button>

          <router-link :to="'/contact'" class="btn btn-primary hidden sm:inline-flex" @click="closeMobileMenu">
            Hire me
          </router-link>

          <!-- Mobile toggle -->
          <button
            @click="toggleMobileMenu"
            class="flex size-9 items-center justify-center rounded-lg surface md:hidden"
            aria-label="Toggle menu"
            :aria-expanded="mobileMenuOpen"
          >
            <svg class="size-5 transition-transform duration-300" :class="{ 'rotate-90': mobileMenuOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--text);">
              <path v-if="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile nav -->
      <transition
        enter-active-class="transition duration-300 ease-out"
        enter-from-class="opacity-0 -translate-y-2"
        enter-to-class="opacity-100 translate-y-0"
        leave-active-class="transition duration-200 ease-in"
        leave-from-class="opacity-100 translate-y-0"
        leave-to-class="opacity-0 -translate-y-2"
      >
        <div v-if="mobileMenuOpen" class="border-t md:hidden" style="border-color: var(--border);">
          <div class="space-y-1 py-4">
            <router-link
              v-for="item in navigationItems"
              :key="item.name"
              :to="item.path"
              @click="closeMobileMenu"
              class="nav-link mono flex items-center justify-between rounded-xl px-4 py-3 text-sm font-medium"
              :class="{ 'is-active': isActiveRoute(item.path) }"
            >
              <span>{{ item.name }}</span>
              <span class="text-xs" style="color: var(--text-muted);">0{{ navigationItems.indexOf(item) + 1 }}</span>
            </router-link>
            <router-link :to="'/contact'" @click="closeMobileMenu" class="btn btn-primary mt-3 w-full">
              Hire me
            </router-link>
          </div>
        </div>
      </transition>
    </div>
  </nav>

  <!-- Spacer for fixed navbar -->
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
        { name: 'Home', path: '/' },
        { name: 'About', path: '/about' },
        { name: 'Services', path: '/#services' },
        { name: 'Work', path: '/projects' },
        { name: 'Skills', path: '/skills' },
        { name: 'Experience', path: '/experience' },
        { name: 'Contact', path: '/contact' },
      ],
    };
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
      document.body.style.overflow = this.mobileMenuOpen ? 'hidden' : '';
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
      if (e.key === 'Escape' && this.mobileMenuOpen) this.closeMobileMenu();
    },
    handleResize() {
      if (window.innerWidth >= 768) this.closeMobileMenu();
    },
  },
  mounted() {
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark' || !savedTheme) {
      document.documentElement.classList.add('dark');
      this.isDark = true;
      if (!savedTheme) localStorage.setItem('theme', 'dark');
    } else {
      document.documentElement.classList.remove('dark');
      this.isDark = false;
    }
    document.addEventListener('click', this.handleOutsideClick);
    document.addEventListener('keydown', this.handleEscapeKey);
    window.addEventListener('resize', this.handleResize);
    this.$router.afterEach(() => this.closeMobileMenu());
  },
  beforeUnmount() {
    document.removeEventListener('click', this.handleOutsideClick);
    document.removeEventListener('keydown', this.handleEscapeKey);
    window.removeEventListener('resize', this.handleResize);
    document.body.style.overflow = '';
  },
};
</script>

<style scoped>
.nav-link { color: var(--text-muted); }
.nav-link:hover { color: var(--text); }
.nav-link.is-active { color: var(--accent-strong); }

@media (max-width: 768px) {
  .nav-link { min-height: 44px; }
}
</style>
