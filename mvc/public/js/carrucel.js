
(function(){
  const root = document.getElementById('carousel');
  if(!root) return;

  const viewport = root.querySelector('.carousel-viewport');
  const track = root.querySelector('.carousel-track');

  const originalSlides = Array.from(track.children);
  originalSlides.forEach(s => track.appendChild(s.cloneNode(true)));

  let pxPerSec = 200;       
  let offset = 0;          
  let paused = false;
  let halfWidth = 0;       
  let lastTs = 0;

  function measure(){
    halfWidth = track.scrollWidth / 2;
  }
  window.addEventListener('resize', measure);


  root.addEventListener('mouseenter', () => paused = true);
  root.addEventListener('mouseleave', () => paused = false);

  root.querySelector('.prev').addEventListener('click', () => {
    offset += viewport.clientWidth * 0.9;
  });
  root.querySelector('.next').addEventListener('click', () => {
    offset -= viewport.clientWidth * 0.9;
  });

  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function tick(ts){
    if(!lastTs) lastTs = ts;
    const dt = (ts - lastTs) / 1000; 
    lastTs = ts;

    if(!paused && !prefersReduced){
      offset -= pxPerSec * dt;
    }


    if (offset <= -halfWidth) offset += halfWidth;
    if (offset >= 0)          offset -= halfWidth;

    track.style.transform = `translateX(${offset}px)`;
    requestAnimationFrame(tick);
  }


  const imgs = track.querySelectorAll('img');
  let loaded = 0;
  function tryInit(){ if (++loaded === imgs.length) { measure(); requestAnimationFrame(tick); } }
  imgs.forEach(img => {
    if (img.complete) tryInit();
    else {
      img.addEventListener('load', tryInit);
      img.addEventListener('error', tryInit);
    }
  });
})();