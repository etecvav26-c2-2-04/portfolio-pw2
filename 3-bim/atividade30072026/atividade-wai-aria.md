# 📚 Atividade – WAI-ARIA (Web Accessibility Initiative – Accessible Rich Internet Applications)

## Questão 1 – Conceito (Fácil)

**1.** Explique com suas palavras o que é o **WAI-ARIA** e qual é sua principal finalidade no desenvolvimento de páginas web. Em sua resposta, comente quem são os principais usuários beneficiados por esse recurso.

O WAI-ARIA (Web Accessibility Initiative – Accessible Rich Internet Applications) é um conjunto de atributos e padrões técnicos criados pelo W3C que fornece informações e contextos adicionais à estrutura HTML das páginas web.

Portanto, sua principal finalidade é tornar as aplicações e páginas web acessíveis, permitindo que elementos visuais complexos ou dinâmicos forneçam informações claras sobre sua função, seu estado e sua relação com outros elementos da página.

Os principais usuários beneficiados são pessoas com deficiência ou limitações de navegação que utilizam tecnologias assistivas, tais como:

* Usuários de **leitores de tela** (especialmente pessoas cegas ou com baixa visão);
* Pessoas que utilizam **navegação exclusivamente por teclado**;
* Usuários de **comandos de voz** e outros dispositivos adaptados de acessibilidade.    
---

## Questão 2 – Interpretação (Médio)

**2.** Analise o trecho de código abaixo:

```html
<button
    class="navbar-toggler"
    type="button"
    aria-controls="menuPrincipal"
    aria-expanded="false"
    aria-label="Abrir menu">
    Menu
</button>
```

Responda:

a) Qual é a função do atributo `aria-controls`?

O atributo `aria-controls` indica a relação entre o botão e o elemento que ele controla. Neste caso, ele informa às tecnologias assistivas que esse botão é responsável por acionar/controlar o elemento cujo ID é menuPrincipal.

b) O que informa o atributo `aria-expanded`?

O atributo `aria-expanded` informa o estado atual de expansão do elemento controlado (se está aberto ou fechado). No trecho fornecido, o valor `false` indica que o menu está fechado no momento. Quando o menu for acionado e aberto, este valor deve mudar para `true`.

c) Qual é a importância do atributo `aria-label` para usuários que utilizam leitores de tela?

O `aria-label` fornece um rótulo ou nome descritivo diretamente para os leitores de tela. Ele é fundamental quando o texto visível não é descritivo o suficiente ou quando o botão contém apenas um ícone. No exemplo, o leitor de tela anunciará claramente a intenção da ação ("Abrir menu") em vez de ler apenas o texto genérico do botão.

---

## Questão 3 – Reflexão (Difícil)

**3.** Muitas vezes é possível construir uma interface utilizando apenas elementos HTML semânticos, como `<button>`, `<nav>` e `<main>`. Entretanto, em algumas situações, é necessário utilizar atributos do WAI-ARIA.

Explique por que o WAI-ARIA **não substitui** o HTML semântico e descreva uma situação em que seu uso seja necessário para melhorar a acessibilidade de uma página web.

---
