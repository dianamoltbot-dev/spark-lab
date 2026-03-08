/**
 * Flow Field — Energy lines (emerald + cyan)
 * Canvas-based particle system with Perlin-like noise
 */
(function () {
  const canvas = document.createElement('canvas');
  canvas.id = 'flowfield';
  canvas.style.cssText = 'position:fixed;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:0;opacity:0.45;';
  document.body.prepend(canvas);

  const ctx = canvas.getContext('2d');
  let w, h, cols, rows, field, particles;
  const SCALE = 20;
  const PARTICLE_COUNT = 180;
  const SPEED = 1.2;
  const COLORS = [
    'rgba(16,185,129,',   // emerald-500
    'rgba(52,211,153,',   // emerald-400
    'rgba(6,182,212,',    // cyan-500
    'rgba(34,211,238,',   // cyan-400
    'rgba(16,185,129,',   // emerald again for weight
  ];

  // Simple noise (multiple sine waves)
  let zOff = 0;
  function noise(x, y, z) {
    return (
      Math.sin(x * 0.3 + z) * 0.5 +
      Math.sin(y * 0.3 + z * 1.3) * 0.5 +
      Math.sin((x + y) * 0.2 + z * 0.7) * 0.5 +
      Math.cos(x * 0.1 - z * 0.5) * 0.3 +
      Math.sin(y * 0.15 + x * 0.1 + z * 1.1) * 0.4
    );
  }

  function resize() {
    w = canvas.width = window.innerWidth;
    h = canvas.height = window.innerHeight;
    cols = Math.ceil(w / SCALE) + 1;
    rows = Math.ceil(h / SCALE) + 1;
    field = new Float32Array(cols * rows);
  }

  function Particle() {
    this.reset();
    this.x = Math.random() * w;
    this.y = Math.random() * h;
  }

  Particle.prototype.reset = function () {
    this.x = Math.random() * w;
    this.y = Math.random() < 0.5 ? 0 : h;
    this.prevX = this.x;
    this.prevY = this.y;
    this.speed = SPEED + Math.random() * 0.8;
    this.life = 200 + Math.random() * 300;
    this.maxLife = this.life;
    this.color = COLORS[Math.floor(Math.random() * COLORS.length)];
    this.width = 0.5 + Math.random() * 1.5;
  };

  Particle.prototype.update = function () {
    const col = Math.floor(this.x / SCALE);
    const row = Math.floor(this.y / SCALE);
    if (col >= 0 && col < cols && row >= 0 && row < rows) {
      const angle = field[row * cols + col];
      this.prevX = this.x;
      this.prevY = this.y;
      this.x += Math.cos(angle) * this.speed;
      this.y += Math.sin(angle) * this.speed;
    }
    this.life--;
    if (this.life <= 0 || this.x < -10 || this.x > w + 10 || this.y < -10 || this.y > h + 10) {
      this.reset();
    }
  };

  Particle.prototype.draw = function () {
    const alpha = Math.min(1, this.life / this.maxLife) * 0.6;
    ctx.strokeStyle = this.color + alpha + ')';
    ctx.lineWidth = this.width;
    ctx.beginPath();
    ctx.moveTo(this.prevX, this.prevY);
    ctx.lineTo(this.x, this.y);
    ctx.stroke();
  };

  function initParticles() {
    particles = [];
    for (let i = 0; i < PARTICLE_COUNT; i++) {
      particles.push(new Particle());
    }
  }

  function updateField() {
    zOff += 0.003;
    for (let y = 0; y < rows; y++) {
      for (let x = 0; x < cols; x++) {
        const n = noise(x * 0.15, y * 0.15, zOff);
        field[y * cols + x] = n * Math.PI * 2;
      }
    }
  }

  function loop() {
    // Semi-transparent clear for trail effect
    ctx.fillStyle = 'rgba(10,10,10,0.06)';
    ctx.fillRect(0, 0, w, h);

    updateField();
    for (let i = 0; i < particles.length; i++) {
      particles[i].update();
      particles[i].draw();
    }
    requestAnimationFrame(loop);
  }

  // Reduce particles on mobile
  function getCount() {
    return window.innerWidth < 768 ? 80 : PARTICLE_COUNT;
  }

  window.addEventListener('resize', () => {
    resize();
  });

  resize();
  initParticles();
  loop();
})();
