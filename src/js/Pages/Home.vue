<template>
  <nav-component />

  <!-- ─────────────── HERO ─────────────── -->
  <section class="relative overflow-hidden">
    <div class="grid-bg pointer-events-none absolute inset-0 opacity-60"></div>
    <div
      class="pointer-events-none absolute left-1/2 top-0 h-[420px] w-[820px] max-w-full -translate-x-1/2 rounded-full blur-3xl"
      style="background: radial-gradient(circle, var(--glow), transparent 70%);"
    ></div>

    <div class="wrap relative pt-16 pb-20 sm:pt-24 sm:pb-28">
      <div class="mx-auto max-w-3xl text-center">
        <p class="eyebrow rise rise-1 justify-center">Full-Stack Engineer · Lahore, PK</p>

        <h1 class="rise rise-1 mt-6 text-4xl font-bold leading-[1.05] tracking-tight sm:text-6xl">
          I build production web apps with
          <span class="text-accent">Laravel</span> &amp; <span class="text-accent">Vue.js</span>.
        </h1>

        <p class="rise rise-2 mx-auto mt-6 max-w-2xl text-base leading-relaxed text-muted sm:text-lg">
          I'm Adil Ali — a full-stack developer with 2 years 11 months of experience shipping
          CRM platforms, REST APIs, and dashboards. I take projects from database schema to a
          deployed, Dockerised app running behind CI/CD — not just the frontend.
        </p>

        <div class="rise rise-3 mt-9 flex flex-wrap items-center justify-center gap-3">
          <router-link to="/contact" class="btn btn-primary">
            <i class="fas fa-paper-plane"></i> Hire me
          </router-link>
          <router-link to="/projects" class="btn btn-ghost">
            View work <i class="fas fa-arrow-right text-xs"></i>
          </router-link>
          <a href="/Adil-Ali-CV.pdf" download class="btn btn-ghost">
            <i class="fas fa-download text-xs"></i> Download CV
          </a>
        </div>

        <!-- key facts -->
        <div class="rise rise-4 mx-auto mt-12 grid max-w-xl grid-cols-3 gap-px overflow-hidden rounded-2xl" style="background: var(--border);">
          <div v-for="f in facts" :key="f.label" class="px-4 py-5" style="background: var(--surface);">
            <div class="display text-2xl font-bold text-accent sm:text-3xl">{{ f.value }}</div>
            <div class="mono mt-1 text-[11px] uppercase tracking-wider text-muted">{{ f.label }}</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ─────────────── TECH STRIP ─────────────── -->
  <section class="band">
    <div class="wrap py-8">
      <div class="flex flex-col items-center gap-5 sm:flex-row sm:justify-between">
        <span class="mono text-xs uppercase tracking-[0.16em] text-muted">Daily toolkit</span>
        <div class="flex flex-wrap items-center justify-center gap-x-7 gap-y-3">
          <span v-for="t in toolkit" :key="t" class="mono text-sm font-medium" style="color: var(--text);">{{ t }}</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ─────────────── SERVICES ─────────────── -->
  <section id="services" class="section scroll-mt-20">
    <div class="wrap">
      <div class="max-w-2xl">
        <p class="eyebrow">What I do</p>
        <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">Services I deliver</h2>
        <p class="mt-4 text-muted">
          Hire me for a focused piece or own the whole stack end-to-end. Every engagement ships clean,
          documented, and deployed.
        </p>
      </div>

      <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
        <div v-for="(s, i) in services" :key="s.title" class="card card-hover p-6">
          <div class="flex size-11 items-center justify-center rounded-xl" style="background: var(--surface-2); color: var(--accent-strong);">
            <i :class="s.icon" class="text-lg"></i>
          </div>
          <div class="mono mt-5 text-xs text-muted">0{{ i + 1 }}</div>
          <h3 class="mt-1 text-lg font-semibold">{{ s.title }}</h3>
          <p class="mt-2 text-sm leading-relaxed text-muted">{{ s.desc }}</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ─────────────── SELECTED WORK ─────────────── -->
  <section class="band section">
    <div class="wrap">
      <div class="flex flex-wrap items-end justify-between gap-4">
        <div class="max-w-2xl">
          <p class="eyebrow">Selected work</p>
          <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">Recent projects</h2>
        </div>
        <router-link to="/projects" class="link-accent mono text-sm">All projects <i class="fas fa-arrow-right text-xs"></i></router-link>
      </div>

      <div class="mt-12 grid gap-6 md:grid-cols-3">
        <article v-for="p in featured" :key="p.title" class="card card-hover group overflow-hidden">
          <div class="relative aspect-[16/10] overflow-hidden" style="background: var(--surface-2);">
            <img :src="p.image" :alt="p.title" loading="lazy"
                 class="size-full object-cover transition-transform duration-500 group-hover:scale-105" />
            <span v-if="p.live" class="tag absolute left-3 top-3" style="background: var(--surface); color: var(--accent-strong);">● Live</span>
          </div>
          <div class="p-6">
            <h3 class="text-lg font-semibold">{{ p.title }}</h3>
            <p class="mt-2 line-clamp-2 text-sm leading-relaxed text-muted">{{ p.desc }}</p>
            <div class="mt-4 flex flex-wrap gap-1.5">
              <span v-for="t in p.stack" :key="t" class="tag">{{ t }}</span>
            </div>
            <a v-if="p.live" :href="p.live" target="_blank" rel="noopener noreferrer"
               class="link-accent mono mt-5 inline-flex text-sm">Visit site <i class="fas fa-arrow-up-right-from-square text-xs"></i></a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- ─────────────── PROCESS ─────────────── -->
  <section class="section">
    <div class="wrap">
      <div class="max-w-2xl">
        <p class="eyebrow">How I work</p>
        <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">A process built for remote clients</h2>
        <p class="mt-4 text-muted">Clear communication, small shippable increments, and no surprises at handover.</p>
      </div>

      <div class="mt-12 grid gap-px overflow-hidden rounded-2xl sm:grid-cols-2 lg:grid-cols-4" style="background: var(--border);">
        <div v-for="(step, i) in process" :key="step.title" class="p-7" style="background: var(--surface);">
          <div class="mono text-3xl font-bold" style="color: var(--border-strong);">0{{ i + 1 }}</div>
          <h3 class="mt-3 text-base font-semibold">{{ step.title }}</h3>
          <p class="mt-2 text-sm leading-relaxed text-muted">{{ step.desc }}</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ─────────────── CTA ─────────────── -->
  <section class="band section">
    <div class="wrap">
      <div class="card relative overflow-hidden p-8 text-center sm:p-14">
        <div class="grid-bg pointer-events-none absolute inset-0 opacity-50"></div>
        <div class="relative">
          <h2 class="mx-auto max-w-xl text-2xl font-bold tracking-tight sm:text-4xl">Have a project in mind?</h2>
          <p class="mx-auto mt-4 max-w-lg text-muted">
            Tell me what you're building. I'll reply within 24 hours with honest scope, timeline, and a fixed quote.
          </p>
          <div class="mt-8 flex flex-wrap justify-center gap-3">
            <router-link to="/contact" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Start a project</router-link>
            <a href="tel:03054365536" class="btn btn-ghost"><i class="fas fa-phone text-xs"></i> 0305 4365536</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer-component />
</template>

<script setup>
const facts = [
  { value: '2y 11m', label: 'Experience' },
  { value: '12', label: 'Projects' },
  { value: 'Vue · Laravel', label: 'Core stack' },
];

const toolkit = ['Laravel', 'Vue.js', 'PHP', 'MySQL', 'Tailwind CSS', 'Docker', 'Git', 'REST APIs'];

const services = [
  { icon: 'fas fa-layer-group', title: 'Full-Stack Web Apps', desc: 'End-to-end Laravel + Vue.js applications — CRM, dashboards, and SaaS platforms built to scale.' },
  { icon: 'fas fa-plug', title: 'REST API Development', desc: 'Clean, documented, secure APIs and third-party integrations that other systems can rely on.' },
  { icon: 'fas fa-display', title: 'Frontend Engineering', desc: 'Responsive, accessible interfaces in Vue.js + Tailwind that match your design pixel-for-pixel.' },
  { icon: 'fas fa-server', title: 'DevOps & Deployment', desc: 'Dockerised environments, CI/CD pipelines, and VPS/Nginx hosting so releases are repeatable.' },
  { icon: 'fas fa-gauge-high', title: 'Performance & Fixes', desc: 'Query optimisation, refactoring, and speed audits to make existing apps fast and stable.' },
  { icon: 'fas fa-screwdriver-wrench', title: 'Maintenance & Support', desc: 'Ongoing feature work, bug fixes, and reliable maintenance for live production systems.' },
];

const featured = [
  {
    title: 'Bilinnbytte.no',
    desc: 'Norwegian car trade-in landing page — multi-step lead form, PHP email handler, and a polished mobile-responsive Bootstrap UI.',
    image: '/images/bilinnbytte.webp',
    stack: ['HTML', 'Bootstrap', 'PHP'],
    live: 'https://bilinnbytte.no/',
  },
  {
    title: 'Pak Properties',
    desc: 'A real-estate marketplace for Pakistan — listings, advanced search, and a clean experience for buyers and sellers.',
    image: 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=640&h=400&fit=crop',
    stack: ['Vue.js', 'Laravel', 'MySQL'],
    live: 'https://pakproperties.pk/',
  },
  {
    title: 'Weqayah',
    desc: 'Government-mandated fire-monitoring platform connecting alarm systems to a 24/7 smart monitoring centre in Ajman.',
    image: '/images/Weqayah.webp',
    stack: ['Laravel', 'IoT', 'Real-time'],
    live: 'https://weqayah.ae/',
  },
];

const process = [
  { title: 'Discovery', desc: 'We scope the goal, users, and constraints. You get an honest plan, timeline, and fixed quote.' },
  { title: 'Build in sprints', desc: 'Work ships in small increments you can review early — no black box, no end-of-project surprises.' },
  { title: 'Test & deploy', desc: 'Tested, Dockerised, and deployed via CI/CD to your VPS or cloud with monitoring in place.' },
  { title: 'Handover & support', desc: 'Clean code, documentation, and a walkthrough — plus ongoing support if you need it.' },
];
</script>
