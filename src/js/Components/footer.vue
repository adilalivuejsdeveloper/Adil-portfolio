<template>
  <footer class="border-t" style="border-color: var(--border); background: var(--surface);">
    <div class="wrap-wide py-14 sm:py-16">
      <div class="grid gap-10 md:grid-cols-12">
        <!-- Brand -->
        <div class="md:col-span-5">
          <router-link to="/" class="flex items-center gap-2.5">
            <div class="flex size-9 items-center justify-center rounded-lg font-bold" style="background: var(--accent); color: var(--accent-ink);">AA</div>
            <span class="display text-lg font-bold">Adil Ali</span>
          </router-link>
          <p class="mt-4 max-w-sm text-sm leading-relaxed text-muted">
            Full-stack developer building production Laravel + Vue.js applications, REST APIs, and the
            Docker / CI-CD pipelines that ship them. Available for freelance projects.
          </p>

          <div class="mt-5 flex items-center gap-2.5">
            <span class="relative flex size-2.5">
              <span class="absolute inline-flex size-full animate-ping rounded-full" style="background: var(--accent); opacity:.55;"></span>
              <span class="relative inline-flex size-2.5 rounded-full" style="background: var(--accent);"></span>
            </span>
            <span class="mono text-xs uppercase tracking-[0.16em] text-accent">Available for work</span>
          </div>

          <div class="mt-6 flex gap-2.5">
            <a v-for="s in socials" :key="s.label" :href="s.href" :target="s.external ? '_blank' : undefined" :rel="s.external ? 'noopener noreferrer' : undefined"
               class="flex size-10 items-center justify-center rounded-lg surface transition-colors hover:border-[var(--accent)]" :title="s.label" :aria-label="s.label">
              <i :class="s.icon" class="text-sm" style="color: var(--text-muted);"></i>
            </a>
          </div>
        </div>

        <!-- Navigate -->
        <div class="md:col-span-3">
          <h4 class="mono text-xs uppercase tracking-[0.16em] text-muted">Navigate</h4>
          <ul class="mt-4 space-y-2.5 text-sm">
            <li v-for="l in navLinks" :key="l.path">
              <router-link :to="l.path" class="text-muted transition-colors hover:text-accent">{{ l.name }}</router-link>
            </li>
          </ul>
        </div>

        <!-- Contact -->
        <div class="md:col-span-4">
          <h4 class="mono text-xs uppercase tracking-[0.16em] text-muted">Get in touch</h4>
          <ul class="mt-4 space-y-3 text-sm">
            <li>
              <a href="mailto:adilalibhatti05@gmail.com" class="flex items-center gap-3 text-muted transition-colors hover:text-accent">
                <i class="fas fa-envelope w-4 text-center"></i> adilalibhatti05@gmail.com
              </a>
            </li>
            <li>
              <a href="tel:03054365536" class="flex items-center gap-3 text-muted transition-colors hover:text-accent">
                <i class="fas fa-phone w-4 text-center"></i> 0305 4365536
              </a>
            </li>
            <li class="flex items-center gap-3 text-muted">
              <i class="fas fa-location-dot w-4 text-center"></i> Lahore, Punjab, Pakistan
            </li>
          </ul>
          <router-link to="/contact" class="btn btn-ghost mt-5 w-full sm:w-auto">Start a project</router-link>
        </div>
      </div>

      <hr class="divider my-10" />

      <div class="flex flex-col items-center justify-between gap-3 text-xs text-muted sm:flex-row">
        <p class="mono">© {{ year }} Adil Ali — Full-Stack Developer</p>
        <p class="mono">Built with Vue 3 · Tailwind CSS · Vite</p>
      </div>
    </div>
  </footer>
</template>

<script setup>
const year = new Date().getFullYear();

const navLinks = [
  { name: 'About', path: '/about' },
  { name: 'Work', path: '/projects' },
  { name: 'Skills', path: '/skills' },
  { name: 'Experience', path: '/experience' },
  { name: 'Contact', path: '/contact' },
];

const socials = [
  { label: 'Upwork', icon: 'fas fa-briefcase', href: 'https://www.upwork.com/freelancers/~01a835a809bc540c87?viewMode=1', external: true },
  { label: 'GitHub', icon: 'fab fa-github', href: 'https://github.com/adilalivuejsdeveloper', external: true },
  { label: 'Email', icon: 'fas fa-envelope', href: 'mailto:adilalibhatti05@gmail.com', external: false },
];
</script>
