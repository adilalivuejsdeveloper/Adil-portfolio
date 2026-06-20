<template>
  <nav-component />

  <section class="relative overflow-hidden">
    <div class="grid-bg pointer-events-none absolute inset-0 opacity-50"></div>
    <div class="wrap relative py-16 sm:py-20">
      <div class="max-w-2xl">
        <p class="eyebrow">Capabilities</p>
        <h1 class="mt-5 text-4xl font-bold tracking-tight sm:text-5xl">Skills &amp; tech stack</h1>
        <p class="mt-5 text-base leading-relaxed text-muted">
          The tools I use day-to-day to take a project from idea to a deployed, maintainable product —
          across frontend, backend, databases, and the DevOps pipeline that ships it.
        </p>
      </div>
    </div>
  </section>

  <section class="band section">
    <div class="wrap">
      <div class="grid gap-6 md:grid-cols-2">
        <div v-for="cat in categories" :key="cat.name" class="card card-hover p-6 sm:p-7">
          <div class="flex items-center gap-3">
            <div class="flex size-11 items-center justify-center rounded-xl" style="background: var(--surface-2); color: var(--accent-strong);">
              <i :class="cat.icon" class="text-lg"></i>
            </div>
            <div>
              <h2 class="text-lg font-semibold">{{ cat.name }}</h2>
              <p class="mono text-xs text-muted">{{ cat.items.length }} skills</p>
            </div>
          </div>
          <div class="mt-5 flex flex-wrap gap-2">
            <span v-for="item in cat.items" :key="item" class="tag">{{ item }}</span>
          </div>
        </div>
      </div>

      <!-- Highlights -->
      <div class="mt-14">
        <p class="eyebrow">Strengths</p>
        <h2 class="mt-4 text-2xl font-bold tracking-tight sm:text-3xl">Where I'm strongest</h2>
        <div class="mt-8 grid gap-5 sm:grid-cols-3">
          <div v-for="h in highlights" :key="h.title" class="card p-6">
            <i :class="h.icon" class="text-xl text-accent"></i>
            <h3 class="mt-4 text-base font-semibold">{{ h.title }}</h3>
            <p class="mt-2 text-sm leading-relaxed text-muted">{{ h.desc }}</p>
          </div>
        </div>
      </div>

      <!-- CTA -->
      <div class="card mt-14 flex flex-col items-center justify-between gap-6 p-8 text-center sm:flex-row sm:text-left">
        <div>
          <h2 class="text-2xl font-bold tracking-tight">Need this stack on your project?</h2>
          <p class="mt-2 text-muted">Let's discuss how it fits what you're building.</p>
        </div>
        <div class="flex shrink-0 gap-3">
          <router-link to="/contact" class="btn btn-primary"><i class="fas fa-envelope"></i> Get in touch</router-link>
          <router-link to="/projects" class="btn btn-ghost">See work</router-link>
        </div>
      </div>
    </div>
  </section>

  <footer-component />
</template>

<script setup>
const categories = [
  {
    name: 'Frontend',
    icon: 'fas fa-display',
    items: ['Vue.js 3', 'JavaScript (ES6+)', 'HTML5', 'CSS3', 'Tailwind CSS', 'Bootstrap', 'Alpine.js', 'Responsive UI', 'SPA / Vue Router'],
  },
  {
    name: 'Backend',
    icon: 'fas fa-server',
    items: ['PHP', 'Laravel', 'Livewire', 'REST APIs', 'OOP', 'MVC', 'Authentication', 'Queues & Jobs', 'Eloquent ORM'],
  },
  {
    name: 'Databases',
    icon: 'fas fa-database',
    items: ['MySQL', 'MongoDB', 'Schema design', 'Query optimisation', 'Migrations', 'Redis (caching)'],
  },
  {
    name: 'DevOps & Hosting',
    icon: 'fas fa-cubes',
    items: ['Docker', 'CI/CD pipelines', 'GitHub Actions', 'Nginx', 'VPS / Linux', 'Deployment automation', 'cPanel / shared hosting', 'SSL / domains'],
  },
  {
    name: 'Tools & Workflow',
    icon: 'fas fa-screwdriver-wrench',
    items: ['Git & GitHub', 'VS Code', 'Postman', 'Composer / npm', 'Vite', 'Figma', 'Agile / sprints'],
  },
  {
    name: 'Specializations',
    icon: 'fas fa-star',
    items: ['CRM platforms', 'Admin dashboards', 'E-commerce', 'Real-time apps', 'IoT web solutions', 'API integrations', 'Performance tuning'],
  },
];

const highlights = [
  { icon: 'fas fa-layer-group', title: 'Laravel + Vue.js', desc: 'My core stack — production apps end-to-end, from API to interface, every day.' },
  { icon: 'fas fa-cubes', title: 'Ship & deploy', desc: 'Docker, CI/CD, and VPS hosting so what I build actually reaches production reliably.' },
  { icon: 'fas fa-gauge-high', title: 'Performance', desc: 'Optimising queries, caching, and frontend load to keep real apps fast under load.' },
];
</script>
