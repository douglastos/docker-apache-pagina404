<!-- markdownlint-disable MD033 -->
<!-- markdownlint-disable MD045 -->
<!-- markdownlint-disable MD041 -->

<tr>
    <td><img src="https://raw.githubusercontent.com/douglastos/docker-apache-pagina404/refs/heads/main/img/Animation.gif" width="800" /></td>
</tr>

Este projeto cria um container Docker simples usando **Apache HTTP Server** para servir uma página HTML estática personalizada, incluindo uma página de erro 404 estilizada.

---


## 🌐 Demonstração da Página 404

O template das páginas (`index.html` e `404.html`) foi baseado no projeto:

👉 [douglastos/pagina404](https://github.com/douglastos/docker-apache-pagina404)

---

## 📂 Estrutura do Projeto

```bash
├── Dockerfile
├── README.md
├── html
│   ├── 404.html
│   └── index.html
├── img
│   ├── 404.gif
│   └── Animation.gif
└── php
    ├── 404.php
    └── index.php

```

```ymal
- **index.html:** Página inicial simples.
- **404.html:** Página de erro customizada para rotas inexistentes.
```

---

## 🐳 Como Buildar a Imagem Docker

```bash
docker build -t meu-apache . --no-cache  
```

## 🚀 Como Executar o Container

Exemplo mapeando a porta 80 da sua máquina para a porta 80 do container:

```bash
docker container run -dit --name meu-apache-alpine -p 80:80 meu-apache 
docker container ls
```

## 👉 Acesse a aplicação:

[http://localhost](http://localhost)


✅ Testes básicos
| Teste            | URL                                      | Resultado esperado   |
| ---------------- | ---------------------------------------- | -------------------- |
| Página principal | [http://localhost/](http://localhost/)                 | Exibe o `index.html` |
| Página 404       | [http://localhost/rota-inexistente](http://localhost/rota-inexistente) | Exibe o `404.html`   |

## 🛠️ Tecnologias utilizadas

- Docker
- Apache HTTP Server (httpd:alpine)
- HTML5 + CSS (baseado no douglastos/pagina404)

## 📝 Observações

- Este projeto foi testado com Apache.
- caso queira utilizar a versao com pho, só instalar o PHP e copiar os arquivos para o diretório correto.
