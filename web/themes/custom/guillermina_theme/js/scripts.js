console.log('guillermina_theme scripts.js loaded');

document.addEventListener("DOMContentLoaded", function() {
  const navbar = document.querySelector(".custom-navbar");

  window.addEventListener("scroll", function() {
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });
});

document.querySelectorAll('.bt-cta-form').forEach(f=>{
  f.addEventListener('submit', e=>{
    const input = f.querySelector('input[type="email"]');
    if(!input || !input.checkValidity()){
      e.preventDefault();
      input?.focus();
    }
  });
});

// Smooth scrolling for anchor links

(function(){
  const DROPDOWN_SELECTOR = '.navbar .dropdown';
  const TOGGLER_SELECTOR  = '[data-bs-toggle="dropdown"]';
  const HOVER_DELAY = 180; // ms

  const dropdowns = document.querySelectorAll(DROPDOWN_SELECTOR);

  dropdowns.forEach(dd => {
    let timer;
    const trigger = dd.querySelector(TOGGLER_SELECTOR);
    if(!trigger) return;

    const bsDD = new bootstrap.Dropdown(trigger, { autoClose: 'outside' });

    // Abrir al pasar el mouse (desktop)
    dd.addEventListener('mouseenter', () => {
      if (window.innerWidth < 992) return;
      clearTimeout(timer);
      bsDD.show();
      dd.classList.add('show'); // para las transiciones CSS
    });

    // Cerrar con un pequeño delay (desktop)
    dd.addEventListener('mouseleave', () => {
      if (window.innerWidth < 992) return;
      timer = setTimeout(() => {
        bsDD.hide();
        dd.classList.remove('show');
      }, HOVER_DELAY);
    });

    // En escritorio, clic en el texto del padre -> navega a la landing
    // (en móvil se mantiene el comportamiento de dropdown)
    trigger.addEventListener('click', (e) => {
      if (window.innerWidth >= 992) {
        e.preventDefault();
        window.location.href = trigger.getAttribute('href') || '/que-hacemos';
      }
    });
  });
})();

document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".count");

  const animateCounter = (counter) => {
    const updateCount = () => {
      const target = +counter.getAttribute("data-target");
      const count = +counter.innerText;
      const increment = target / 4000; // Velocidad del contador

      if (count < target) {
        counter.innerText = Math.ceil(count + increment);
        setTimeout(updateCount, 20);
      } else {
        counter.innerText = target;
      }
    };
    updateCount();
  };

  // Detectar cuando la sección es visible
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(counter => observer.observe(counter));
});


(function () {
  const pills         = document.querySelectorAll('.amount-pill');
  const inputMonto    = document.getElementById('monto');
  const hiddenAmount  = document.getElementById('amount-in-cents');
  const refInput      = document.getElementById('wompi-ref');
  const sigInput      = document.getElementById('wompi-signature');
  const typeBtns      = document.querySelectorAll('.btn-type');
  const form          = document.getElementById('form-wompi');
  // Tabs visuales
  typeBtns.forEach(b=>{
    b.addEventListener('click', ()=>{
      typeBtns.forEach(x=>x.classList.remove('active'));
      b.classList.add('active');
    });
  });
  // Presets
  pills.forEach(btn=>{
    btn.addEventListener('click', ()=>{
      pills.forEach(b=>b.classList.remove('active'));
      btn.classList.add('active');
      const val = parseInt(btn.dataset.amount,10);
      inputMonto.value = val > 0 ? val : '';
      inputMonto.focus();
      syncAmount();
    });
  });
  inputMonto.addEventListener('input', syncAmount);
  function syncAmount(){
    const valor = parseInt(inputMonto.value||'0',10);
    hiddenAmount.value = String((isNaN(valor)?0:valor) * 100);
  }
  // Genera referencia simple
  function genRef(){
    const now = new Date();
    return 'GUILLERMINA-' + now.toISOString().replace(/[-:.TZ]/g,'').slice(0,14);
  }
  refInput.value = genRef(); // inicial
  syncAmount(); // inicial
  // === AQUÍ ESTÁ LA MAGIA: antes de enviar, pedimos la firma al PHP ===
  form.addEventListener('submit', async function(e){
    e.preventDefault();
    const valor = parseInt(inputMonto.value,10);
    if (isNaN(valor) || valor < 1000) {
      alert('Ingresa un monto válido (mínimo $1.000).');
      inputMonto.focus();
      return;
    }
    // Refresca referencia y amount-in-cents
    const reference     = genRef();
    const amountInCents = valor * 100;
    const currency      = 'COP';
    refInput.value     = reference;
    hiddenAmount.value = String(amountInCents);
    try {
      // Llama tu endpoint local que ya funciona
      const url = `http://localhost/wompi_signature.php?reference=${encodeURIComponent(reference)}&amount_in_cents=${amountInCents}&currency=${currency}`;
      const r   = await fetch(url, { credentials: 'omit' });
      if (!r.ok) throw new Error('No se pudo generar la firma.');
      const data = await r.json();
      if (!data.ok || !data.signature) throw new Error('Respuesta inválida al generar la firma.');
      // Asigna la firma al campo que Wompi espera
      sigInput.value = data.signature;
      // Ahora sí, envía al Checkout de Wompi
      form.submit();
    } catch (err) {
      console.error(err);
      alert('Ocurrió un problema generando la firma. Inténtalo de nuevo.');
    }
  });
})();

(function () {
  const form = document.getElementById('formContacto');
  const estado = document.getElementById('estadoForm');

  // Validación Bootstrap-like
  form.addEventListener('submit', async function (e) {
    e.preventDefault();
    form.classList.add('was-validated');

    if (!form.checkValidity()) {
      estado.innerHTML = '<span class="text-danger">Por favor corrige los campos marcados.</span>';
      return;
    }

    // Envía con Fetch a Formspree
    const data = new FormData(form);
    estado.innerHTML = '<span class="text-muted">Enviando…</span>';

    try {
      const r = await fetch(form.action, { method: 'POST', body: data, headers: { 'Accept': 'application/json' }});
      if (r.ok) {
        estado.innerHTML = '<span class="text-success">¡Mensaje enviado! Pronto nos pondremos en contacto.</span>';
        form.reset();
        form.classList.remove('was-validated');
      } else {
        estado.innerHTML = '<span class="text-danger">No se pudo enviar. Inténtalo de nuevo.</span>';
      }
    } catch (err) {
      estado.innerHTML = '<span class="text-danger">Ocurrió un error de red.</span>';
      console.error(err);
    }
  }, false);
})();

