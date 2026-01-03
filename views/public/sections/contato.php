  <!-- CONTATO -->


<section id="contato" class="py-5">
  <div class="container" data-aos="fade-up">
    <h2 class="text-center display-5 fw-bold mb-5 text-uppercase">Entre em Contato</h2>
    <div class="row g-4">
      
      <!-- Informações de contato -->
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <div class="p-4">
          <h4 class="fw-bold mb-3"><i class="bi bi-geo-alt-fill me-2"></i> Endereço</h4>
          <p class="text-muted">Rua Exemplo, 123 - Praia Grande, SP</p>

          <h4 class="fw-bold mb-3 mt-4"><i class="bi bi-telephone-fill me-2"></i> Telefone</h4>
          <p class="text-muted">(13) 99999-9999</p>

          <h4 class="fw-bold mb-3 mt-4"><i class="bi bi-envelope-fill me-2"></i> E-mail</h4>
          <p class="text-muted">contato@gvng.com.br</p>
        </div>
      </div>

      <!-- Formulário -->
      <div class="col-lg-6">
        <form action="../../enviar.php" method="POST" class="bg-dark p-4 rounded-3 shadow-lg">
          
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control bg-black text-white border-secondary" required>
          </div>

          <div class="mb-3">
            <label for="whatsapp" class="form-label">WhatsApp</label>
            <input type="tel" id="whatsapp" name="whatsapp" class="form-control bg-black text-white border-secondary" placeholder="(XX) XXXXX-XXXX" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" id="email" name="email" class="form-control bg-black text-white border-secondary">
          </div>

          <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea id="mensagem" name="mensagem" rows="4" class="form-control bg-black text-white border-secondary" required></textarea>
          </div>

          <button type="submit" class="btn btn-light w-100 fw-bold rounded-pill">Enviar Mensagem</button>

        </form>
      </div>        
    </div>
  </div>
</section>