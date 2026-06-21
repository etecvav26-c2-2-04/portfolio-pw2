## 1. Abordagem de Desenvolvimento: Mobile-First

O público-alvo (adolescentes que buscam expressar sua identidade e sentimentos através do estilo) consome conteúdo e realiza compras de forma quase exclusiva por dispositivos móveis (smartphones). O site será programado seguindo rigidamente o conceito *Mobile-First*.

### Diretrizes Técnicas de Implementação:
* **CSS Estruturado com `min-width`:** Todo o estilo base do site será escrito nativamente para telas pequenas. As *media queries* serão aplicadas de forma progressiva apenas para adaptar o layout a tablets e desktops.
* **Performance e Peso Visual:** Páginas limpas, sem excesso de scripts e imagens otimizadas (formato WebP). O minimalismo estético (inspirado na *Zara* e marcas de *slow fashion* como *Oak + Fort* e *Desgosto*) garante uma interface leve, que carrega instantaneamente no 4G/5G.
* **Ergonomia e Área de Toque:** Elementos clicáveis terão tamanho mínimo de `48px x 48px`. Botões principais (como "Adicionar à Sacola") estarão posicionados na zona de alcance natural do polegar.

---

## 2. Fluxo e Dinâmica de Navegação (UX)

A experiência do usuário será calma, fluida e introspectiva. Evitaremos gatilhos mentais agressivos (como pop-ups invasivos de desconto ou cronômetros de urgência), respeitando o conceito de *slow fashion* e o estado emocional sensível do cliente.

1. **Entrada (Home):** Banner minimalista em tons claros, destacando o manifesto ou o conceito da coleção atual, seguido por um grid simples de produtos.
2. **Navegação (Menus):** Acesso rápido às categorias de produtos através de uma interface sem ruídos.
3. **Decisão (Página de Produto):** Foco na fotografia de alta qualidade, tabelas de medidas claras e uma breve narrativa/poesia que conecte a peça ao sentimento do usuário.

---

## 3. Arquitetura de Menus

No ambiente mobile, a navegação principal será consolidada através do clássico **Menu Hambúrguer** (ícone de três linhas no topo esquerdo) que se expande em tela cheia (*overlay*), mantendo o topo do site limpo.

### Estrutura do Menu Principal (Hambúrguer)

* **Início / Home**
  * Retorno para a página inicial com os principais destaques visuais.

* **Coleções (O coração do nicho)**
  * *Mood: Bad* (Moletons *oversized*, peças confortáveis, tons escuros e neutros para dias de recolhimento).
  * *Mood: Superação* (Roupas expressivas, alfaiataria desconstruída, estampas minimalistas com toques de ironia sobre o amor).
  * *Básicos para o Quarto* (Camisetas leves e moletons confortáveis para o dia a dia).

* **Sale (Promoções)**
  * Seção dedicada a peças de coleções anteriores ou oportunidades especiais com curadoria consciente. O design desta aba manterá a elegância da marca, evitando cores berrantes de liquidação tradicional (como vermelho neon), optando por demarcações sutis de preço.

* **Sobre a Marca**
  * Manifesto conceitual detalhando o propósito do e-commerce, o apoio aos sentimentos dos jovens e o compromisso com a produção consciente (*slow fashion*).

---

### Menu de Utilidades (Cabeçalho Fixo / Sticky Header)

Sempre visível no topo da tela para acesso imediato:
1. **Ícone de Busca (Lupa):** Barra de pesquisa minimalista integrada para localização direta de itens.
2. **Ícone da Sacola (Carrinho):** Acesso limpo e direto ao carrinho para finalização da compra em poucos passos.

---

### Rodapé (Footer)

Organizado em sistema de abas retráteis (*accordions*) para economizar espaço vertical no celular:
* **Suporte:** Trocas, devoluções, guias de lavagem/cuidado para *slow fashion* e rastreamento de pedidos.
* **Ética & Produção:** Informações sobre a cadeia de produção limpa e materiais utilizados.
* **Social:** Conexões com o ecossistema digital da marca (TikTok e Instagram).
