# Desenvolvimento de Dispositivo Móvel Web e Game

Conceitos, exemplos e alguns exercícios.

## Conceitos

- **Linguagens de Marcação**
  - SGML (Standard Generalized Markup Language)
  - Instrução de diagramação
  - Cores
  - Etc.
  - SGML: define como linguagens de marcação devem ser
  - Marcações são feitas por etiquetas... Ou TAGs

- **5ª versão do HTML**
  - Grande parte do poder da SGML
  - Mais simples de aplicar e desenvolver
  - HTML: conteúdo estruturado
  - Marcações ajudam os humanos
  - Marcações ajudam os computadores
  - Um elemento (tag) HTML pode definir um título, um parágrafo.... E até mesmo um menu ou uma seção de texto.

### Introdução ao HTML 5

- Como criar documentos mais compatíveis?
- Tags adequadamente aninhadas
- Usar de tags de fechamento, mesmo em elementos vazios
- Regras simples adicionais
  - Todas as tags em letras minúsculas
  - Valores dos atributos entre aspas

Exemplo de estrutura básica HTML 5:

```html
<!DOCTYPE html>
<html>
<head>
<title>Título da Página</title>
<meta charset="utf-8">
</head>
<body>
<p>Conteúdo da Página</p>
</body>
</html>
```

### Estrutura Básica

- **Cabeçalhos**
  - `<h1>Texto</h1>` até `<h6>Texto</h6>`
- **Parágrafo**
  - `<p>Texto</p>`
- **Separador**
  - `<hr>`
- **Tags**
  - Texto Pré Formatado: `<pre>`
  - Link (Âncora): `<a href="Link">Texto</a>`
  - Blocos: `<div>`

### Formatação de Textos

- `<strong>`: texto forte
- `<em>`: itálico
- `<u>`: sublinhado
- `<strike>`: tachado
- `<code>`: marca código fonte (translate não irá traduzir!)
- `<span>`: marcação genérica de texto

Exemplo:

```html
<pre>
<code>print("Hello World!")</code>
<span class="author">Autor</span>
</pre>
```

### Imagem

- `<img />`
- **Atributos:**
  - `src`: indica a origem da imagem
  - `alt`: indica um texto alternativo
  - `title`: texto descritivo da imagem
  - `width`: largura da imagem
  - `height`: altura da imagem

### Citação e Legenda de Figura

- **Citação**
  - `<blockquote cite="site">Texto</blockquote>`
- **Legenda de Figura**
  ```html
  <figure>
    <figcaption>Legenda</figcaption>
    <img src="figura.png">
  </figure>
  ```

### Lista

- **Lista não ordenada**
  ```html
  <ul>
    <li>Panela</li>
    <li>Copo</li>
    <li>Cadeira</li>
  </ul>
  ```
- **Lista ordenada**
  ```html
  <nav>
    <ol reversed>
      <li>Panela</li>
      <li>Copo</li>
      <li>Cadeira</li>
    </ol>
  </nav>
  ```

Reversed contagem decrescente.

### Definição de termos

```html
<dl>
  <dt>HTML</dt>
  <dd>Hypertext Markup Language</dd>
  <dt>CSS</dt>
  <dd>Cascade Style Sheet</dd>
</dl>
```

### Áudio e Vídeo

- `<video />`
  
  **Atributos:**
  - `autoplay`: inicia automaticamente (mute apenas)
  - `controls`: apresenta interface de controle
  - `loop`: habilita repetição automática
  - `preload`: baixa antes de tocar
  - `poster`: imagem de carregamento do áudio
  - `height`: altura do elemento, em pixels
  - `width`: largura do elemento, em pixels
  - `muted`: inicia com o áudio desligado
  - `src`: endereço do arquivo
  
**Exemplo 1:**
```html
<video src="meuvideo.mp4" width="300" height="150" poster="teste.jpg" controls></video>
```

**Exemplo 2:**
```html
<video width="720" height="400">
  <source src="v1.mp4" type="video/mp4">
  <source src="v2.webm" type="video/vp8">
  <source src="v3.ogv" type="video/ogg">
</video>
```

#### Formulários

- **Campo Texto**
```html
<input type="text" name="usuario">
```

- **Campo Password**
```html
<input type="password" name="senha">
```

- **Campo Radio**
```html
<input type="radio" name="sexo" value="M"> Masculino
```

- **Campo Checkbox**
```html
<input type="checkbox" name="opcoes"> Engenharia de Computação
```

- **Campo DropDown**
```html
<select name="estado">
  <option value="sp">São Paulo</option>
  <option value="mg">Minas Gerais</option>
</select>
```

- **Campo Textarea**
```html
<textarea></textarea>
```

- **Botão de Submissão**
```html
<input type="submit" value="Enviar">
```

