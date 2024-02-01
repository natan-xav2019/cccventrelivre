<style>
    :root {
        --cor-primaria: #D61B22;
        --cor-secundaria: #F3F3F3;
        --cor-terciaria: #1A1A1A;
    }
    * {
        box-sizing: content-box;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: var(--cor-primaria);
    }

    header > nav.nav-bar {
        display: flex;
        padding: 5px 10px;
        align-items: center;
    }

    header > nav.nav-bar > ul.nav-itens {
        display: flex;
        justify-content: center;
        gap: 10px;
        width: 90vw;
        margin: 0;
        padding: 0;
    }

    header > nav.nav-bar > ul.nav-itens > li {
        list-style-type: none;
        padding: 6px 10px;
        border: 1px solid var(--cor-primaria);
        border-radius: 10px;
        background-color: var(--cor-primaria);
        transition: 0.2s;
    }

    header > nav.nav-bar > ul.nav-itens > li > a {
        color: var(--cor-secundaria);
        text-decoration: none;
        font-size: 1.5rem;
    }

    header > nav.nav-bar > ul.nav-itens > li:hover {
        background-color: var(--cor-secundaria);
    }

    header > nav.nav-bar > ul.nav-itens > li:hover > a {
        color: var(--cor-primaria);
    }

    main {
        background-color: var(--cor-secundaria);
    }

    main >  h1.titulo {
        text-align: center;
    }

    main  >section#div-main {
        padding: 20px;
    }

    main > section#div-main img.logo-grande {
        height: 400px;
        width: 300px;
    }

    main > section#div-main > div.img {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    main > section#div-main > .subtitulo {
        margin-top: 3px;
        font-size: 1.5rem;
        text-align: center;
    }

    main > section#div-main > div.caixas {
        padding: 5px;
        
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
        align-items: center;
        
    }

    main > section#div-main > div.caixas > div.caixa {
        width: 300px;

        padding: 8px;
        border-radius: 3px;
        margin-bottom: 20px;
        
        background-color: var(--cor-primaria);
        color: var(--cor-secundaria);
    }

    main > section#div-main > div.caixas > div.caixa > h3 {
        text-align: center;
    }

    footer {
        color: white;
        background-color: var(--cor-primaria);
    }

    footer > section#div-footer {
        padding: 10px;
    }

    footer > section#div-footer > div.informasoes {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
    }

    footer > section#div-footer > div.informasoes > div.informasao  {
        border-left: 3px solid white;
        padding-left: 10px;
    }

    footer > section#div-footer > div.informasoes > div.informasao > ul  {
        list-style-type: none;
    }

    footer > section#div-footer > div.informasoes > div.informasao > ul > li > a  {
        text-decoration: none;
        color: var(--cor-secundaria);

        transition: 0.2s;
    }

    footer > section#div-footer > div.informasoes > div.informasao > ul > li:hover > a  {
        text-decoration: underline
    }
</style>