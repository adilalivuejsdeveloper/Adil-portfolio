<template>
  <nav-component />

  <!-- ─────────────── INTRO ─────────────── -->
  <section class="relative overflow-hidden">
    <div class="grid-bg pointer-events-none absolute inset-0 opacity-50"></div>
    <div class="wrap relative py-16 sm:py-24">
      <div class="grid items-center gap-12 lg:grid-cols-12">
        <!-- Text -->
        <div class="lg:col-span-7">
          <p class="eyebrow">About me</p>
          <h1 class="mt-5 text-4xl font-bold leading-tight tracking-tight sm:text-5xl">
            Engineer who ships, <br class="hidden sm:block" />not just codes.
          </h1>
          <div class="mt-6 space-y-4 text-base leading-relaxed text-muted">
            <p>
              I'm Adil Ali, a full-stack web developer based in <span class="text-accent">Lahore, Pakistan</span>,
              with 2 years 11 months of professional experience. I currently build CRM-based financial
              applications at 4XPORTAL using Laravel and Vue.js.
            </p>
            <p>
              My work spans the whole stack — designing database schemas, writing the REST APIs and business
              logic, building the Vue interfaces on top, and handling the Docker, CI/CD, and VPS hosting that
              get it all into production. I've delivered for clients across e-commerce, IoT, healthcare,
              fire-safety, and trading.
            </p>
            <p>
              I care about clean, maintainable code and clear communication. For remote clients that means
              predictable timelines, frequent check-ins, and software that keeps running long after handover.
            </p>
          </div>
          <div class="mt-8 flex flex-wrap gap-3">
            <a href="/Adil-Ali-CV.pdf" download class="btn btn-primary"><i class="fas fa-download text-xs"></i> Download CV</a>
            <router-link to="/contact" class="btn btn-ghost">Let's talk <i class="fas fa-arrow-right text-xs"></i></router-link>
          </div>
        </div>

        <!-- Image -->
        <div class="lg:col-span-5">
          <div class="relative mx-auto max-w-sm">
            <div class="card overflow-hidden p-2">
              <img src="/images/adil_ali.png" alt="Adil Ali — Full-Stack Developer"
                   class="aspect-square w-full rounded-xl object-cover" />
            </div>
            <div class="card absolute -bottom-5 -left-5 px-4 py-3">
              <div class="display text-xl font-bold text-accent">2y 11m</div>
              <div class="mono text-[11px] uppercase tracking-wider text-muted">Experience</div>
            </div>
            <div class="card absolute -right-4 top-6 px-4 py-3">
              <div class="display text-xl font-bold text-accent">12</div>
              <div class="mono text-[11px] uppercase tracking-wider text-muted">Projects</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ─────────────── STRENGTHS ─────────────── -->
  <section class="section pt-0">
    <div class="wrap">
      <div class="max-w-2xl">
        <p class="eyebrow">What I bring</p>
        <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">How I add value to a team</h2>
      </div>
      <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
        <div v-for="s in strengths" :key="s.title" class="card card-hover p-6">
          <div class="flex size-11 items-center justify-center rounded-xl" style="background: var(--surface-2); color: var(--accent-strong);">
            <i :class="s.icon" class="text-lg"></i>
          </div>
          <h3 class="mt-5 text-lg font-semibold">{{ s.title }}</h3>
          <p class="mt-2 text-sm leading-relaxed text-muted">{{ s.desc }}</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ─────────────── EDUCATION ─────────────── -->
  <section class="section pt-0">
    <div class="wrap">
      <div class="grid gap-10 lg:grid-cols-12">
        <div class="lg:col-span-4">
          <p class="eyebrow">Background</p>
          <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">Education &amp; growth</h2>
          <p class="mt-4 text-muted">Formal study alongside continuous, hands-on learning across the stack.</p>
        </div>
        <div class="lg:col-span-8">
          <div class="space-y-4">
            <div v-for="e in education" :key="e.title" class="card p-6">
              <div class="flex flex-wrap items-start justify-between gap-3">
                <div>
                  <h3 class="text-lg font-semibold">{{ e.title }}</h3>
                  <p class="text-accent">{{ e.org }}</p>
                </div>
                <span class="tag">{{ e.period }}</span>
              </div>
              <p class="mt-3 text-sm leading-relaxed text-muted">{{ e.note }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ─────────────── CTA ─────────────── -->
  <section class="section pt-0">
    <div class="wrap">
      <div class="card flex flex-col items-center justify-between gap-6 p-8 text-center sm:flex-row sm:p-10 sm:text-left">
        <div>
          <h2 class="text-2xl font-bold tracking-tight">Looking for a reliable developer?</h2>
          <p class="mt-2 text-muted">I'm available for freelance and contract work.</p>
        </div>
        <router-link to="/contact" class="btn btn-primary shrink-0"><i class="fas fa-paper-plane"></i> Get in touch</router-link>
      </div>
    </div>
  </section>

  <footer-component />
</template>

<script setup>
const strengths = [
  { icon: 'fas fa-layer-group', title: 'True full-stack', desc: 'I own features end-to-end — schema, API, UI, and deployment — so nothing falls between roles.' },
  { icon: 'fas fa-server', title: 'Ships to production', desc: 'Docker, CI/CD, and VPS/Nginx hosting are part of the job, not an afterthought handed to someone else.' },
  { icon: 'fas fa-comments', title: 'Clear communication', desc: 'Frequent updates, plain language, and timelines you can plan around — ideal for remote work.' },
  { icon: 'fas fa-code', title: 'Maintainable code', desc: 'Readable, documented, and structured so the next developer (or future you) can extend it easily.' },
  { icon: 'fas fa-bolt', title: 'Performance-minded', desc: 'I profile queries and frontend load, and tune real apps to stay fast under real traffic.' },
  { icon: 'fas fa-globe', title: 'Client-ready', desc: 'Experience delivering for international clients across multiple industries and time zones.' },
];

const education = [
  {
    title: 'BS Software Engineering',
    org: 'Virtual University of Pakistan',
    period: 'Currently pursuing',
    note: 'Studying software engineering fundamentals while working full-time as a developer.',
  },
  {
    title: 'Self-directed engineering',
    org: 'Ongoing',
    period: '2021 — Present',
    note: 'Continuously learning modern practices — Vue 3, Laravel, Docker, CI/CD, and deployment workflows.',
  },
];
</script>
