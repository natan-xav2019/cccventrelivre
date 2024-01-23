<style>
    :root {
        --cor-primaria: #D61B22;
        --cor-secundaria: #F3F3F3;
        --cor-terciaria: #1A1A1A;
    }
    
    body {
        margin: 0;
    }

    header {
        padding-top: 10px;
    }

    header > nav.nav-bar {
        display: flex;
        padding: 0 10px;
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

    main >  h1.titulo {
        text-align: center;
    }

    main > section#historia img.logo-grande{
        height: 400px;
        width: 300px;
    }

    main > section#historia > div.img{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    

    footer {
        margin-top: 20px;
        padding: 10px;
        color: white;
        background-color: var(--cor-primaria);
    }
</style>