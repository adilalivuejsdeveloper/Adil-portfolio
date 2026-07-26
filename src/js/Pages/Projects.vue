<template>
  <nav-component />

  <section class="relative overflow-hidden">
    <div class="grid-bg pointer-events-none absolute inset-0 opacity-50"></div>
    <div class="wrap relative py-16 sm:py-20">
      <div class="max-w-2xl">
        <p class="eyebrow">Portfolio</p>
        <h1 class="mt-5 text-4xl font-bold tracking-tight sm:text-5xl">Selected work</h1>
        <p class="mt-5 text-base leading-relaxed text-muted">
          A selection of {{ projects.length }} projects I've built or contributed to — across CRM, e-commerce,
          IoT, healthcare, and trading. Several are live in production.
        </p>
        <div class="mt-8 flex flex-wrap gap-3">
          <div v-for="f in facts" :key="f.label" class="card px-5 py-3">
            <div class="display text-xl font-bold text-accent">{{ f.value }}</div>
            <div class="mono text-[11px] uppercase tracking-wider text-muted">{{ f.label }}</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="band section">
    <div class="wrap">
      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <article v-for="p in projects" :key="p.id" class="card card-hover group flex flex-col overflow-hidden">
          <div class="relative aspect-[16/10] overflow-hidden" style="background: var(--surface-2);">
            <img :src="p.image" :alt="p.title" loading="lazy"
                 class="size-full object-cover transition-transform duration-500 group-hover:scale-105" />
            <span v-if="p.live" class="tag absolute left-3 top-3" style="background: var(--surface); color: var(--accent-strong);">● Live</span>
            <span class="tag absolute right-3 top-3" style="background: var(--surface);">{{ p.category }}</span>
          </div>

          <div class="flex flex-1 flex-col p-6">
            <h2 class="text-lg font-semibold">{{ p.title }}</h2>
            <p class="mt-2 line-clamp-3 text-sm leading-relaxed text-muted">{{ p.description }}</p>

            <div class="mt-4 flex flex-wrap gap-1.5">
              <span v-for="(tag, i) in p.tags.slice(0, 4)" :key="i" class="tag">{{ tag }}</span>
            </div>

            <div class="mt-auto flex gap-3 pt-5">
              <a v-if="p.live" :href="p.live" target="_blank" rel="noopener noreferrer" class="btn btn-primary flex-1 py-2.5 text-xs">
                <i class="fas fa-arrow-up-right-from-square text-xs"></i> Live
              </a>
              <a v-if="p.code" :href="p.code" target="_blank" rel="noopener noreferrer" class="btn btn-ghost flex-1 py-2.5 text-xs">
                <i class="fab fa-github"></i> Code
              </a>
              <span v-if="!p.live && !p.code" class="mono flex-1 rounded-xl py-2.5 text-center text-xs text-muted" style="background: var(--surface-2);">
                <i class="fas fa-lock text-xs"></i> Private
              </span>
            </div>
          </div>
        </article>
      </div>

      <!-- CTA -->
      <div class="card mt-14 flex flex-col items-center justify-between gap-6 p-8 text-center sm:flex-row sm:text-left">
        <div>
          <h2 class="text-2xl font-bold tracking-tight">Your project could be next</h2>
          <p class="mt-2 text-muted">Available for new freelance and contract work.</p>
        </div>
        <div class="flex shrink-0 gap-3">
          <router-link to="/contact" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Start a project</router-link>
          <a href="tel:03054365536" class="btn btn-ghost"><i class="fas fa-phone text-xs"></i> Call</a>
        </div>
      </div>
    </div>
  </section>

  <footer-component />
</template>

<script setup>
const facts = [
  { value: '13', label: 'Projects' },
  { value: '8', label: 'Live in production' },
  { value: '5+', label: 'Industries' },
];

const projects = [
  {
    id: 12,
    title: 'Pak Properties',
    category: 'Real Estate',
    description: 'My own real-estate marketplace for Pakistan — list, search, and explore properties for sale and rent, with advanced filtering and a clean, responsive experience for buyers and sellers.',
    image: 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=640&h=400&fit=crop',
    tags: ['Vue.js', 'Laravel', 'MySQL', 'Tailwind CSS'],
    live: 'https://pakproperties.pk/',
    code: '',
  },
  {
    id: 4,
    title: 'MedexCore',
    category: 'Healthcare',
    description: 'A healthcare management platform streamlining patient data, appointment scheduling, and medical records — a secure, efficient system for clinics and healthcare professionals.',
    image: '/images/MEDEXCORE.webp',
    tags: ['Laravel', 'Livewire', 'Healthcare', 'Tailwind CSS'],
    live: 'https://medexcore.com/',
    code: '',
  },
  {
    id: 3,
    title: 'Pakistan Cooling Center',
    category: 'E-commerce',
    description: 'An e-commerce platform for air-conditioning and cooling solutions — explore, compare, and purchase products with a smooth, responsive shopping experience.',
    image: '/images/pakistancooling.webp',
    tags: ['Vue.js', 'Laravel', 'E-commerce', 'Tailwind CSS'],
    live: 'https://pakistancooling.com/',
    code: '',
  },
  {
    id: 1,
    title: 'FXBotExperts',
    category: 'Trading',
    description: 'A division under Bulvert LLC offering AI-powered Expert Advisors (automated trading systems) for MetaTrader 4 and 5. Built a modern Laravel app with Livewire, Flux UI, and Alpine.js for managing bots, strategies, and client-facing trading products.',
    image: '/images/FxBotExperts.webp',
    tags: ['Laravel', 'Livewire', 'Flux', 'Alpine.js', 'Bootstrap', 'CSS'],
    live: 'https://fxbotexperts.com/',
    code: '',
  },
  {
    id: 2,
    title: 'Weqayah',
    category: 'IoT',
    description: 'Fire-monitoring system mandated by Amiri Decree No. 13 of 2021, connecting fire-alarm systems to a smart central monitoring centre operating 24/7 with a 70-second response time.',
    image: '/images/Weqayah.webp',
    tags: ['Laravel', 'IoT', 'Real-time', 'M2M'],
    live: 'https://weqayah.ae/',
    code: '',
  },
  {
    id: 5,
    title: 'HOLOIN',
    category: 'IoT',
    description: 'A platform that simplifies deployment and management of sensor-based solutions — quick integration, real-time monitoring, and efficient data processing for IoT applications.',
    image: '/images/HOLOIN.webp',
    tags: ['Laravel', 'Vue.js', 'IoT', 'Real-time'],
    live: 'https://holoin.ai/',
    code: '',
  },
  {
    id: 11,
    title: 'Gulf Cars4u',
    category: 'Marketplace',
    description: 'An online platform for buying and selling cars. I built the frontend and integrated backend functionality through APIs, with database and server-side logic.',
    image: 'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=640&h=400&fit=crop',
    tags: ['Vue.js', 'Laravel', 'API Integration', 'MySQL'],
    live: '',
    code: '',
  },
  {
    id: 8,
    title: 'SEO-Workforce',
    category: 'SaaS',
    description: 'A tool for analysing website metrics. I developed the full frontend and backend, handling databases and server-side logic for the analytics dashboard.',
    image: '/images/seo-workforce.webp',
    tags: ['PHP', 'Laravel', 'SEO Analytics', 'MySQL'],
    live: '',
    code: '',
  },
  {
    id: 13,
    title: 'Bilinnbytte.no',
    category: 'Landing Page',
    description: 'Norwegian car trade-in landing page with a multi-step lead form (reg.nr, details, photos), PHP email handler, and a mobile-first Bootstrap UI for collecting dealer offers.',
    image: '/images/bilinnbytte.webp',
    tags: ['HTML', 'CSS', 'Bootstrap', 'PHP'],
    live: 'https://bilinnbytte.no/',
    code: '',
  },
  {
    id: 7,
    title: 'Tramm Law Firm — Landing Page',
    category: 'Landing Page',
    description: 'A high-converting landing page built in GoHighLevel — custom Tailwind layout, responsive UI, modal registration flow, Demio webinar integration, and performance optimisation.',
    image: '/images/TRAM-landing-page.png',
    tags: ['GoHighLevel', 'Tailwind CSS', 'JavaScript', 'Landing Page'],
    live: 'https://app.gohighlevel.com/v2/preview/B9s7I6NHjVhCryT2lKgw?notrack=true',
    code: '',
  },
  {
    id: 6,
    title: 'Adrimo Paris',
    category: 'Shopify',
    description: 'A French beauty & skincare e-commerce brand. I optimised the Shopify store for performance and UX — page speed, mobile responsiveness, and code efficiency — while keeping its elegant look.',
    image: '/images/adrimo.webp',
    tags: ['Shopify', 'Liquid', 'Performance', 'JavaScript'],
    live: 'https://adrimoparis.com/',
    code: '',
  },
  {
    id: 9,
    title: 'OD Talent',
    category: 'Dashboard',
    description: 'A platform to connect and manage talent. I built a dynamic frontend with five custom pages and an interactive dashboard for talent management.',
    image: 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=640&h=400&fit=crop',
    tags: ['Vue.js', 'Dashboard', 'Bootstrap', 'Talent Mgmt'],
    live: '',
    code: '',
  },
  {
    id: 10,
    title: 'OdChat',
    category: 'Real-time',
    description: 'A real-time, interactive chatbot solution similar to Tawk.to, enabling live customer support with WebSocket-driven messaging.',
    image: 'https://images.unsplash.com/photo-1577563908411-5077b6dc7624?w=640&h=400&fit=crop',
    tags: ['JavaScript', 'WebSocket', 'Chatbot', 'Real-time'],
    live: '',
    code: '',
  },
];
</script>

<style scoped>
.line-clamp-3 {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
.line-clamp-2 {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
</style>
