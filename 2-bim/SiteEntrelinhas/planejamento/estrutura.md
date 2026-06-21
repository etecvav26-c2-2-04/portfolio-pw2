Aqui está o seu documento técnico de UX/UI atualizado. O foco foi totalmente redirecionado para acompanhar **todas as fases do romance**, utilizando a identidade visual do **bordado floral** como o fio condutor da navegação, das coleções e da experiência do usuário.

---

## 1. Abordagem de Desenvolvimento: Mobile-First

O público-alvo (jovens que buscam expressar suas histórias de amor e amadurecimento através do estilo) consome conteúdo e realiza compras de forma quase exclusiva por dispositivos móveis. O site será programado seguindo rigidamente o conceito *Mobile-First*.

### Diretrizes Técnicas de Implementação:

* **CSS Estruturado com `min-width`:** Todo o estilo base do site será escrito nativamente para telas pequenas. As *media queries* serão aplicadas de forma progressiva apenas para adaptar o layout a tablets e desktops.
* **Performance e Peso Visual:** Páginas limpas, com imagens otimizadas (formato WebP) para destacar a textura e os detalhes dos **bordados florais**. O minimalismo estético (inspirado em marcas de *slow fashion* e estética *vintage romantic*) garante uma interface leve, que carrega instantaneamente no 4G/5G.
* **Ergonomia e Área de Toque:** Elementos clicáveis terão tamanho mínimo de `48px x 48px`. Botões principais (como "Adicionar à Sacola") estarão posicionados na zona de alcance natural do polegar.

---

## 2. Fluxo e Dinâmica de Navegação (UX)

A experiência do usuário será orgânica, poética e imersiva. Evitaremos gatilhos mentais agressivos (como pop-ups invasivos de desconto ou cronômetros de urgência), respeitando o conceito de *slow fashion* e a sensibilidade do cliente ao navegar pelas "estações" do coração.

1. **Entrada (Home):** Banner minimalista com foco em texturas de fios e elementos botânicos, destacando o manifesto da marca ou a coleção atual, seguido por um grid simples que flui naturalmente entre os produtos.
2. **Navegação (Menus):** Acesso rápido e intuitivo às categorias baseadas no momento sentimental do usuário, utilizando ícones florais sutis para guiar a escolha.
3. **Decisão (Página de Produto):** Foco em fotografias em alta definição que revelem os detalhes do relevo dos bordados, tabelas de medidas claras e uma breve narrativa poética que conecta o significado da flor escolhida à fase do romance vivida pelo cliente.

---

## 3. Arquitetura de Menus

No ambiente mobile, a navegação principal será consolidada através do clássico **Menu Hambúrguer** (ícone de três linhas no topo esquerdo) que se expande em tela cheia (*overlay*), mantendo o topo do site visualmente limpo e focado no design.

### Estrutura do Menu Principal (Hambúrguer)

* **Início / Home**
* Retorno para a página inicial com os principais destaques visuais e conceitos de campanha.


* **As Estações do Amor (Coleções por Fase)**
* *O Desabrochar (Início & Paixão):* Peças com bordados de botões de flores e linhas em tons vivos/pastéis, celebrando o flerte e a descoberta do amor.
* *A Plenitude (O Romance):* Peças com flores totalmente abertas, ramos conectados e modelagens que celebram a cumplicidade e a intensidade de estar junto.
* *O Desfolhar & Replantar (Término & Recomeço):* Peças confortáveis com bordados de pétalas ao vento ou raízes fortes, focadas no acolhimento da saudade e no florescimento do amor-próprio.


* **Bordados Assinados (Cápsulas Exclusivas)**
* Edições limitadas focadas em tipos específicos de flores e seus significados no amor (ex: o romantismo das rosas, a resiliência dos girassóis).


* **Sobre a Marca (Nosso Manifesto)**
* Espaço dedicado a contar a história da marca, o simbolismo por trás do bordado floral, o apoio à expressão saudável dos sentimentos dos jovens e o compromisso com a produção consciente (*slow fashion*).



---

### Menu de Utilidades (Cabeçalho Fixo / Sticky Header)

Sempre visível no topo da tela para acesso imediato:

1. **Ícone de Busca (Lupa):** Barra de pesquisa minimalista integrada para localização direta de itens ou tipos de flores/bordados.
2. **Ícone da Sacola (Carrinho):** Acesso limpo e direto ao carrinho para finalização da compra de forma fluida.

---

### Rodapé (Footer)

Organizado em sistema de abas retráteis (*accordions*) para economizar espaço vertical no celular:

* **Suporte:** Trocas, devoluções, guias de lavagem e cuidados específicos para preservar os bordados industriais e manuais.
* **Ética & Produção:** Informações sobre a cadeia de produção justa, a escolha das linhas, tecidos e a valorização do tempo do *slow fashion*.
* **Social:** Conexões com o ecossistema digital da marca (focado em curadoria visual no Pinterest, Instagram e conteúdos estéticos no TikTok).
