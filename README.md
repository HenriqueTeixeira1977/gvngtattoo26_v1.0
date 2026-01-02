# gvngtattoo26_v1.0
GVNG Tattoo - Versão 1.0_260102094321

# GVNG Tattoo - Site One-Page Profissional

Site institucional one-page completo para o estúdio de tatuagem de luxo **GVNG Tattoo**. Desenvolvido com foco em elegância, exclusividade e conversão (agendamento via WhatsApp e formulário de contato).

O projeto transmite uma identidade visual premium: fundo preto profundo, tipografia sofisticada, animações sutis e atmosfera misteriosa — perfeita para um público que busca tatuagens de alto nível.

## Tecnologias Utilizadas

- **PHP 8+** (puro, sem frameworks)
- **Bootstrap 5.3.3** (via CDN)
- **Swiper.js** (carrosséis de estilos e depoimentos)
- **AOS** (Animate On Scroll – animações de entrada)
- **Bootstrap Icons**
- **HTML5 semântico**, CSS3 customizado
- **JavaScript vanilla** (para interações leves)

## Estrutura de Pastas
gvng-tattoo/
├── index.php                # Página principal (one-page)
├── enviar.php               # Processamento do formulário de contato
├── assets/
│   ├── css/
│   │   └── style.css        # Estilos personalizados
│   ├── img/
│   │   ├── hero/            # poster_hero.jpg
│   │   ├── estilos/         # style1.png, style2.png, style3.png
│   │   ├── galeria/         # galeria_1.jpg, galeria_2.jpg, etc.
│   │   └── sobre/           # sobre.png
│   └── videos/
│       └── gvng_hero.mp4     # Vídeo de fundo do hero
└── README.md                # Este arquivo
text## Instalação e Configuração

1. **Requisitos**
   - Servidor web com suporte a PHP 8+ (Apache, Nginx + PHP-FPM, XAMPP, etc.)
   - Função `mail()` habilitada ou servidor SMTP configurado (para envio de e-mails)

2. **Passos**
   - Faça upload de todos os arquivos para o seu servidor.
   - Crie as pastas dentro de `/assets/` conforme a estrutura acima.
   - Adicione suas imagens e o vídeo nas respectivas pastas (use placeholders temporariamente se necessário).
   - Ajuste as configurações no topo do `index.php`:
     ```php
     $whatsappNumber = '5513999999999'; // Número completo com código do país (sem +)