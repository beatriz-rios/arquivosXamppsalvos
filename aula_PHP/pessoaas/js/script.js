document.addEventListener('DOMContentLoaded', () => {
   
    /*  Ativa o clique de Minimizar/Expandir em um botão.
     * Alterna a visibilidade do '.fieldset-content' e o texto do botão.
     */
    function configurarToggle(botao) {
        
        // Função que lida com o clique
        function toggleConteudo() {
            // Encontra o conteúdo a ser escondido/mostrado dentro do fieldset pai
            const conteudo = this.closest('fieldset').querySelector('.fieldset-content');
            
            // Verifica se o conteúdo está sendo exibido (true = expandido / false = minimizado)
            const estaExpandido = this.getAttribute('aria-expanded') === 'true';

            if (estaExpandido) {
                // Se estiver expandido (visível), minimiza
                conteudo.style.display = 'none';
                this.textContent = 'Expandir';
                this.setAttribute('aria-expanded', 'false'); 
            } else {
                // Se estiver minimizado (oculto), expande
                conteudo.style.display = 'block';
                this.textContent = 'Minimizar';
                this.setAttribute('aria-expanded', 'true'); 
            }
        }
        
        // Atribui o evento de clique
        botao.addEventListener('click', toggleConteudo);

        // Se o botão não estiver expandido inicialmente, garanta que esteja minimizado
        // Esta parte garante o estado inicial minimizado ao carregar a página (override no HTML)
        if (botao.getAttribute('aria-expanded') !== 'true') {
            const conteudo = botao.closest('fieldset').querySelector('.fieldset-content');
            conteudo.style.display = 'none';
            botao.textContent = 'Expandir';
            botao.setAttribute('aria-expanded', 'false'); 
        }
    }


    // Aplica a funcionalidade de Minimizar/Expandir a todos os botões
    const botoesToggle = document.querySelectorAll('.toggle-btn');
    botoesToggle.forEach(configurarToggle);


});