<?php $pageTitle = 'AquaWorld — Aquarium Experience'; include 'header.php'; ?>
<section class="bg-surface-secondary">
  <div class="container mx-auto grid min-h-[620px] items-center gap-12 px-5 py-16 md:grid-cols-2">
    <div>
      <span class="mb-5 inline-block rounded-full bg-blue-100 px-4 py-2 text-sm font-semibold text-primary">Explore the underwater world</span>
      <h1 class="mb-6 text-5xl font-bold leading-tight md:text-6xl">Build a beautiful aquatic experience.</h1>
      <p class="mb-8 max-w-xl text-lg text-text-secondary">A robust Tailblocks-inspired layout built with reusable PHP sections, Tailwind utilities and a centralized theme.</p>
      <div class="flex flex-wrap gap-4"><a href="services.php" class="rounded-lg bg-primary px-6 py-3 font-semibold text-white bg-primary-hover">Explore Services</a><a href="about.php" class="rounded-lg border border-theme px-6 py-3 font-semibold">Learn More</a></div>
    </div>
    <img class="h-[420px] w-full rounded-2xl object-cover shadow-2xl" src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=1200&q=85" alt="Aquarium underwater scene">
  </div>
</section>
<section class="container mx-auto px-5 py-20">
  <div class="mb-12 text-center"><h2 class="text-3xl font-bold">Everything you need</h2><p class="mt-3 text-text-secondary">Reusable Tailblocks-style components for fast website generation.</p></div>
  <div class="grid gap-6 md:grid-cols-3">
    <?php foreach ([['01','Aquarium Design','Beautiful responsive sections for every page.'],['02','Expert Services','Flexible service cards ready to customize.'],['03','Smart Structure','Shared header, footer and theme variables.']] as $item): ?>
    <article class="rounded-2xl border border-theme p-8 shadow-sm transition hover:-translate-y-1 hover:shadow-lg"><span class="text-sm font-bold text-primary"><?= $item[0] ?></span><h3 class="mt-4 text-xl font-bold"><?= $item[1] ?></h3><p class="mt-3 text-text-secondary"><?= $item[2] ?></p></article>
    <?php endforeach; ?>
  </div>
</section>
<section class="bg-surface-secondary"><div class="container mx-auto grid gap-8 px-5 py-16 text-center sm:grid-cols-3"><?php foreach ([['12K+','Visitors'],['48','Aquatic Species'],['15+','Years Experience']] as $stat): ?><div><div class="text-4xl font-bold text-primary"><?= $stat[0] ?></div><div class="mt-2 text-text-secondary"><?= $stat[1] ?></div></div><?php endforeach; ?></div></section>
<?php include 'footer.php'; ?>
