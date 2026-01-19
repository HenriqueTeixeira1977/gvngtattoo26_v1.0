<!-- CONTATO -->
<section id="contato">

  <div id="title">
    <h2>Entre em Contato</h2>
  </div>

  <div class="container" data-aos="fade-up">

    <!-- Informações de contato -->
    <div id="infos" class="col-lg-6 d-flex">

      <div id="txt" class="p-4 w-100 rounded-3 shadow-sm">
        <div id="txt-title">
          <h3>Vamos falar mais sobre o que você precisa</h3>
        </div>       

        <div id="box" class="mb-4">
          <h5 class="fw-bold mb-2">
            <i class="bi bi-geo-alt-fill me-2"></i> Endereço
          </h5>
          <p class="mb-0">
            Rua Francisco Glicerio, 123 – Centro, Campinas, SP
          </p>
        </div>

        <div id="box" class="mb-4">
          <h5 class="fw-bold mb-2">
            <i class="bi bi-telephone-fill me-2"></i> Telefone
          </h5>
          <p class="text-muted mb-0">
            <a href="tel:+5519997366901" class="text-decoration-none">
              +55 (19) 99736-6901
            </a>
          </p>
        </div>

        <div id="box">
          <h5 class="fw-bold mb-2">
            <i class="bi bi-envelope-fill me-2"></i> E-mail
          </h5>
          <p class="text-muted mb-0">
            <a href="mailto:contato@gvngtattoo.com.br" class="text-decoration-none">
              contato@gvngtattoo.com.br
            </a>
          </p>
        </div>

      </div>

    </div>

    <!-- Formulário -->
    <div id="form" class="col-lg-6 d-flex">
      <form
        action="/contato/enviar"
        method="POST"
        class="p-4 rounded-3 shadow-lg w-100"
        novalidate
      >

        <div class="mb-3">
          <label for="nome" class="form-label">Nome *</label>
          <input
            type="text"
            id="nome"
            name="nome"
            class="form-control bg-black text-white border-secondary"
            placeholder="Seu nome completo"
            required
            autocomplete="name"
            aria-label="Nome completo"
          >
        </div>

        <div class="mb-3">
          <label for="whatsapp" class="form-label">WhatsApp *</label>
          <input
            type="tel"
            id="whatsapp"
            name="whatsapp"
            class="form-control bg-black text-white border-secondary"
            placeholder="(11) 91234-5678"
            required
            autocomplete="tel"
            aria-label="Número do WhatsApp"
          >
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input
            type="email"
            id="email"
            name="email"
            class="form-control bg-black text-white border-secondary"
            placeholder="seu@email.com"
            autocomplete="email"
            aria-label="Endereço de e-mail"
          >
        </div>

        <div class="mb-4">
          <label for="mensagem" class="form-label">Mensagem *</label>
          <textarea
            id="mensagem"
            name="mensagem"
            rows="3"
            class="form-control bg-black text-white border-secondary"
            placeholder="Escreva sua mensagem..."
            required
            aria-label="Mensagem"
          ></textarea>
        </div>

        <button
          type="submit"
          class="btn btn-light w-100 fw-bold rounded-pill py-2"
        >
          Enviar Mensagem
        </button>
      </form>
    </div>    
  </div>

</section>

<script src="assets/js/main.js"></script>
<script src="assets/js/animations.js"></script>