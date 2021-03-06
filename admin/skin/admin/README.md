# Layout Boilerplate

![image](https://github.com/luizventurote/layout-boilerplate/blob/master/img/logo-layout-boilerplate.png?raw=true)

Layout Boilerplate é uma ferramenta simples e prática para iniciar novos projetos em HTML.

Ela utiliza o Grunt, Jquery, Bootstrap, Font Awesome e o SASS.

## Estrutura
<pre>
├── build/
│   ├── css/
│   │   ├── bootstrap.min.css
│   │   └── font-awesome.min.css
│   ├── js/
│   │   ├── lib/
│   │   │   ├── bootstrap.min.js
│   │   │   └── jquery.min.js
│   │   └── main.js
│   └── scss/
│       └── style.scss
├── css/
│   ├── style.css
│   └── style.min.css
├── fonts/
├── img/
├── js/
│   ├── main.css
│   └── main.min.css
├── .gitignore
├── .htaccess
├── gruntfile.js
├── index.html
└── package.json
</pre>

#### [build/](https://github.com/luizventurote/layout-boilerplate/tree/master/build)
Aqui estão os arquivos SCSS, CSS e JS que serão editados.

#### [css/](https://github.com/luizventurote/layout-boilerplate/tree/master/css)
Os arquivos scss serão compilados, concatenados e minificados para essa pasta.

#### [css/](https://github.com/luizventurote/layout-boilerplate/tree/master/fonts)
Diretório para fontes.

#### [css/](https://github.com/luizventurote/layout-boilerplate/tree/master/img)
Diretório para imagens.

#### [css/](https://github.com/luizventurote/layout-boilerplate/tree/master/js)
Os arquivos js serão concatenados e minificados para essa pasta.

## Iniciando

1. Para iniciar é necessário ter instalados em sua máquina o [NodeJS](http://nodejs.org/download/), npm(gerenciador de pacotes do node) e o [SASS](http://sass-lang.com/install).

2. Depois disso, faça o download do projeto.

3. Acesse a pasta do projeto pelo terminal:
```bash
cd layout-boilerplate
```

4. Instale as dependências do projeto:
```bash
npm install
```

4. Edite os arquivos e rode as tarefas com o Grunt no terminal:
```bash
grunt
```

Tutorial  em vídeo: [Iniciando projetos com o Layout Boilerplate](http://www.youtube.com/watch?v=9oHVor8D2Sw).

## Grunt Watch
Você pode deixar o grunt rodando enquanto edita o projeto através do comando:
```bash
grunt watch
```

**Quando o grunt observa alguma modificação nos arquivos ele utiliza o LiveReload para atualizar automaticamente a página no navegador.**

### Existe outros comandos para o watch
**Grunt Watch SASS**: observa somente os arquivos e SCSS, HTML e PHP.
```bash
grunt wsass
```

**Grunt Watch SASS Clear**: observa somente os arquivos e SCSS, HTML e PHP e no final faz a limpeza de arquivos temporários.
```bash
grunt wsassc
```

**Grunt Watch JS**: observa somente os arquivos e JS, HTML e PHP.
```bash
grunt wjs
```

## Créditos
* [Bootstrap](http://getbootstrap.com/)
* [Open Sans](http://www.fontsquirrel.com/license/pacifico)
* [Font Awesome](http://fontawesome.io/)
* [HTML5 Boilerplate](http://html5boilerplate.com/)