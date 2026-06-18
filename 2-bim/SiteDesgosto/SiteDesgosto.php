<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESGOSTO | Anti-Romance Club</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Oswald:wght@500;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg-color: #FFFFFF;
            --text-color: #000000;
            --text-muted: #767676;
            --accent-color: #990000; /* Vermelho Sangue / Melancólico */
            --border-color: #E5E5E5;
            --font-editorial: 'Oswald', sans-serif;
            --font-clean: 'Inter', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: var(--font-clean);
            -webkit-font-smoothing: antialiased;
        }

        a {
            color: inherit;
            text-decoration: none;
        }


                header {
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 1000;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--border-color);
        }

        .logo {
            font-family: var(--font-editorial);
            font-size: 1.8rem;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
        }

        .logo span {
            color: var(--accent-color);
        }

        .menu-icon {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
            font-weight: 500;
        }

        .nav-desktop {
            display: none; /* Oculto no mobile */
        }

        .hero-editorial {
            position: relative;
            height: 85vh;
            background-color: #F0F0F0;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 40px 20px;
            background: linear-gradient(180deg, rgba(0,0,0,0) 40%, rgba(0,0,0,0.8) 100%), 
                        url('https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=1000&auto=format&fit=crop') center/cover no-repeat;
        }

        .hero-content {
            color: #FFFFFF;
        }

        .hero-content h1 {
            font-family: var(--font-editorial);
            font-size: 2.8rem;
            line-height: 1;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .hero-content p {
            font-size: 0.9rem;
            font-weight: 300;
            max-width: 300px;
            margin-bottom: 25px;
            letter-spacing: 0.5px;
            opacity: 0.9;
        }

        .btn-editorial {
            display: inline-block;
            border: 1px solid #FFFFFF;
            color: #FFFFFF;
            padding: 12px 35px;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .catalog {
            padding: 60px 20px;
        }

        .section-title {
            font-family: var(--font-editorial);
            font-size: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 40px;
            font-weight: 500;
        }


        .product-grid {
            display: grid;
            grid-template-columns: 1fr;
            row-gap: 50px;
        }

        .product-card {
            display: flex;
            flex-direction: column;
        }

        .product-image-wrapper {
            background-color: #F7F7F7;
            position: relative;
            aspect-ratio: 2 / 3; 
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .product-image-placeholder {
            font-family: var(--font-editorial);
            color: #C0C0C0;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 2px;
        }

        .product-meta {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
        }

        .product-name {
            font-weight: 400;
            text-transform: uppercase;
            max-width: 70%;
        }

        .product-price {
            font-weight: 400;
        }

        .product-tag {
            font-size: 0.7rem;
            color: var(--accent-color);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 5px;
            font-weight: 500;
        }

        .manifesto {
            padding: 80px 20px;
            background-color: #000000;
            color: #FFFFFF;
            text-align: center;
        }

        .manifesto h2 {
            font-family: var(--font-editorial);
            font-size: 2rem;
            text-transform: uppercase;
            letter-spacing: 4px;
            margin-bottom: 25px;
        }

        .manifesto p {
            font-size: 0.95rem;
            font-weight: 300;
            line-height: 1.8;
            max-width: 600px;
            margin: 0 auto;
            letter-spacing: 0.5px;
            color: #D5D5D5;
        }


        footer {
            padding: 60px 20px;
            border-top: 1px solid var(--border-color);
            font-size: 0.8rem;
            color: var(--text-muted);
            letter-spacing: 0.5px;
        }

        .footer-brand {
            font-family: var(--font-editorial);
            color: #000000;
            font-size: 1.4rem;
            letter-spacing: 3px;
            margin-bottom: 20px;
        }

        .footer-info {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .info-block h4 {
            color: #000000;
            text-transform: uppercase;
            margin-bottom: 10px;
            font-weight: 500;
            letter-spacing: 1px;
        }

        .info-block p, .info-block address {
            font-style: normal;
            line-height: 1.6;
        }

        .copyright {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid var(--border-color);
            font-size: 0.75rem;
        }


        @media screen and (min-width: 768px) {
            header {
                padding: 25px 40px;
            }

            .menu-icon {
                display: none; /* Oculta menu hambúrguer */
            }

            .nav-desktop {
                display: flex;
                gap: 35px;
                font-size: 0.8rem;
                text-transform: uppercase;
                letter-spacing: 2px;
                font-weight: 400;
            }

            .nav-desktop a:hover {
                color: var(--accent-color);
            }

            .hero-editorial {
                height: 90vh;
                padding: 80px 60px;
            }

            .hero-content h1 {
                font-size: 4.5rem;
                max-width: 600px;
            }

            .hero-content p {
                font-size: 1rem;
                max-width: 450px;
            }

            .btn-editorial:hover {
                background-color: #FFFFFF;
                color: #000000;
            }

            .catalog {
                padding: 80px 40px;
                max-width: 1400px;
                margin: 0 auto;
            }

            .product-grid {
                grid-template-columns: repeat(3, 1fr);
                column-gap: 30px;
                row-gap: 60px;
            }

            .product-image-wrapper:hover {
                opacity: 0.85;
                cursor: pointer;
            }

            .footer-info {
                flex-direction: row;
                justify-content: space-between;
                max-width: 1200px;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">DES<span>GOSTO</span></div>
        
        <nav class="nav-desktop">
            <a href="#catalogo">Coleção Anti-Romântica</a>
            <a href="#manifesto">O Manifesto</a>
            <a href="#suporte">Suporte ao Cliente</a>
        </nav>

        <div class="menu-icon" onclick="alert('Menu Editorial Expandido')">Menu</div>
    </header>

    <section class="hero-editorial">
        <div class="hero-content">
            <h1>O amor destrói,<br>o estilo reconstrói.</h1>
            <p>Edição limitada voltada para o luto afetivo urbano. Roupas pesadas para aguentar a leveza das promessas quebradas.</p>
            <a href="#catalogo" class="btn-editorial">Ver Coleção</a>
        </div>
    </section>

    <section id="catalogo" class="catalog">
        <h2 class="section-title">Drop 01 // Recaída</h2>
        
        <div class="product-grid">
            
            <div class="product-card">
                <div class="product-image-wrapper">
                    <span class="product-image-placeholder">[ Fotografia Editorial ]</span>
                </div>
                <div class="product-meta">
                    <div class="product-name">Camiseta Boxy "Ghosting" Preta</div>
                    <div class="product-price">R$ 139,00</div>
                </div>
                <div class="product-tag">Frase nas costas / Algodão 260g</div>
            </div>

            <div class="product-card">
                <div class="product-image-wrapper">
                    <span class="product-image-placeholder">[ Fotografia Editorial ]</span>
                </div>
                <div class="product-meta">
                    <div class="product-name">Moletom Heavyweight "Foi Só Um Surto"</div>
                    <div class="product-price">R$ 289,00</div>
                </div>
                <div class="product-tag">Estampa em Silk Relevo</div>
            </div>

            <div class="product-card">
                <div class="product-image-wrapper">
                    <span class="product-image-placeholder">[ Fotografia Editorial ]</span>
                </div>
                <div class="product-meta">
                    <div class="product-name">Camiseta Estonada "Coração Indisponível"</div>
                    <div class="product-price">R$ 149,00</div>
                </div>
                <div class="product-tag">Lavagem Ácida Premium</div>
            </div>

        </div>
    </section>

    <section id="manifesto" class="manifesto">
        <h2>O Manifesto</h2>
        <p>Não romantizamos o erro, vestimos a consequência. A DESGOSTO é o reflexo têxtil das noites em claro, dos términos não avisados e do ego reconstruído no asfalto. Roupa para quem cansa de ser trouxa, mas não cansa de se vestir bem.</p>
    </section>

    <footer id="suporte">
        <div class="footer-brand">DESGOSTO ©</div>
        
        <div class="footer-info">
            <div class="info-block">
                <h4>Atendimento</h4>
                <p>Segunda a Sexta, 10h às 18h<br>sac@desgosto.com.br</p>
            </div>
            
            <div class="info-block">
                <h4>Onde Chorar</h4>
                <address>
                    Rua dos bobos n0<br>
                    São Paulo - SP
                </address>
            </div>

            <div class="info-block">
                <h4>Comunidade</h4>
                <p>TikTok / Instagram: @desgosto.br</p>
            </div>
        </div>

        <div class="copyright">
            <p>Desgosto Vestuário Corp. Todos os direitos reservados: Gabriel H. Silva João G. S. Carvalho Milena K. Trindade Poliany C. Souza 2C² </p>
        </div>
    </footer>

</body>
</html>
