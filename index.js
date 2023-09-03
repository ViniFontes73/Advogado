// Selecione a barra de navegação
const navbar = document.querySelector('.navbar');

// Função para atualizar o fundo da barra de navegação com a imagem ativa do carrossel
function updateNavbarBackground() {
    const activeSlide = document.querySelector('.carousel-item.active');
    const imageUrl = activeSlide.querySelector('img').src;

    // Aplica a imagem como fundo da barra de navegação
    navbar.style.backgroundImage = `url('${imageUrl}')`;
}

// Atualize o fundo da barra de navegação quando a página for carregada inicialmente
window.addEventListener('load', updateNavbarBackground);

// Atualize o fundo da barra de navegação quando o carrossel muda de slide
document.querySelector('#carouselExampleSlidesOnly').addEventListener('slid.bs.carousel', updateNavbarBackground);
