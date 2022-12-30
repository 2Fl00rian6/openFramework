<div class="flex justify-center m-10">
  <div class="tabs centered">
    <a id="first-page" class="tab tab-bordered tab-active">Créer la première page</a><!-- Create the first page -->
    <a id="second-page"class="tab tab-bordered">Comment utiliser les requêtes</a><!-- How to use requests -->
  </div>
</div>

<section id="page1">
  <h1 class="ml-10">Créer la première page de votre site !</h1>
  <p class="ml-10">Commencer par télécharger le framwork et importer le dans votre projet.</p>
  <p class="ml-10">Dès l'installation fini, créer votre premier fichier nommer 'new-page.php' (voir ci-dessous)</p>
  <div class="mockup-code relative m-5">
    <div class="text-sm breadcrumbs absolute top-2 left-25">
      <ul>
        <li>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
          Root
        </li>
        <li>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
          model
        </li>
        <li>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
          pages
        </li>
        <li>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
          new-page.php
        </li>
      </ul>
    </div>
    <pre data-prefix="1"><code class="text-info">&lt;?php</code></pre>
    <pre data-prefix="2"><code class="text-info">require_once<code class="text-warning">(</code>'<code class="text-success">../controller/newPageController.php</code>'<code class="text-warning">)</code>;</code></pre>
    <pre data-prefix="2"><code class="text-info">?&gt;</code></pre>
    <pre data-prefix="3"><code><code class="text-info">&lt;</code><code class="text-error">h1</code><code class="text-info">></code>Hello world !<code class="text-info">&lt;/</code><code class="text-error">h1</code><code class="text-info">></code></code></pre>
  </div>
  <p class="ml-10">Mettez à jour les routes ! (voir ci-dessous)</p>
  <div class="mockup-code relative m-5">
    <div class="text-sm breadcrumbs absolute top-2 left-25">
      <ul>
        <li>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
          Root
        </li>
        <li>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
          config
        </li>
        <li>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>
          routes.php
        </li>
      </ul>
    </div>
    <pre data-prefix="1"><code class="text-info">case '<code class="text-success">/new-page</code>' :</code></pre>
    <pre data-prefix="2"><code><code class="text-info">$</code>titleDocument <code class="text-info">= "</code><code class="text-success">New Page</code><code class="text-info">";</code></code></pre>
    <pre data-prefix="3"><code><code class="text-info">$</code>content <code class="text-info">= "</code><code class="text-success">../model/pages/new-page.php</code><code class="text-info">";</code></code></pre>
    <pre data-prefix="4"><code class="text-info"> break;</code></pre>
  </div>
  <p class="ml-10">Créer un controller lier à la page (voir ci-dessous pour le chemin)</p>
  <div class="text-sm breadcrumbs bg-breadcrumbs rounded-md m-5">
    <ul>
      <li>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
        Root
      </li> 
      <li>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
        controller
      </li> 
      <li>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
        newPageController.php
      </li>
    </ul>
  </div>
</section>
<section id="page2" class="hidden">
  <h1 class="ml-10">Modèle CRUD (Create, Read, Update, Delete)</h1>
  <p class="ml-10">Ce code est utile pour faire une requête de d'insertion.</p>

  <div class="mockup-code m-5">
    <pre data-prefix="1"><code class="text-info">&lt;?php</code></pre>
    <pre data-prefix="2"><code><code class="text-info">$</code>data<code class="text-info">-></code><code class="text-accent">create</code><code class="text-warning">(</code><code class="text-info">'</code><code class="text-success">users</code><code class="text-info">',</code> <code class="text-secondary">[</code><code class="text-info">'</code><code class="text-success">name</code><code class="text-info">', '</code><code class="text-success">email</code><code class="text-info">'</code><code class="text-secondary">]</code><code class="text-info">,</code> <code class="text-secondary">[</code><code class="text-info">'</code><code class="text-success">John</code><code class="text-info">', '</code><code class="text-success">john.doe@site.com</code><code class="text-info">'</code><code class="text-secondary">]</code><code class="text-warning">)</code><code class="text-info">;</code></code></pre> 
    <pre data-prefix="3"><code>//'users' = Table in your database</code></pre>
    <pre data-prefix="4"><code>//['name', 'email'] = The column in your Table</code></pre>
    <pre data-prefix="5"><code>//['John', 'john.doe@site.com'] = The value inserted in the field</code></pre>
  </div>

  <p class="ml-10">Ce code est utile pour faire une requête de lecture.</p>

  <div class="mockup-code m-5">
    <pre data-prefix="1"><code class="text-info">&lt;?php</code></pre>
    <pre data-prefix="2"><code><code class="text-info">$</code>data<code class="text-info">-></code><code class="text-accent">read</code><code class="text-warning">(</code><code class="text-info">'</code><code class="text-success">users</code><code class="text-info">',</code> <code class="text-secondary">[</code><code class="text-info">'</code><code class="text-success">email</code><code class="text-info">' => '</code><code class="text-success">john.doe@site.com</code><code class="text-info">'</code><code class="text-secondary">]</code><code class="text-warning">)</code><code class="text-info">;</code></code></pre> 
    <pre data-prefix="3"><code>//'users' = Table in your database</code></pre>
    <pre data-prefix="4"><code>//['email' => 'john.doe@site.com'] = Select where the column in your Table</code></pre>
  </div>

  <p class="ml-10">Ce code est utile pour faire une requête de mise à jour d'une ou plusieurs données.</p>

  <div class="mockup-code m-5">
    <pre data-prefix="1"><code class="text-info">&lt;?php</code></pre>
    <pre data-prefix="2"><code><code class="text-info">$</code>data<code class="text-info">-></code><code class="text-accent">update</code><code class="text-warning">(</code><code class="text-info">'</code><code class="text-success">users</code><code class="text-info">',</code> <code class="text-secondary">[</code><code class="text-info">'</code><code class="text-success">name</code><code class="text-info">', '</code><code class="text-success">email</code><code class="text-info">'</code><code class="text-secondary">]</code><code class="text-info">,</code> <code class="text-secondary">[</code><code class="text-info">'</code><code class="text-success">John</code><code class="text-info">', '</code><code class="text-success">john.doe@site.com</code><code class="text-info">'</code><code class="text-secondary">]</code><code class="text-info">, '</code><code class="text-success">id</code><code class="text-info">', </code><code class="text-orange-600">1</code><code class="text-warning">)</code><code class="text-info">;</code></code></pre> 
    <pre data-prefix="3"><code>//'users' = Table in your database</code></pre>
    <pre data-prefix="4"><code>//['name', 'email'] = The column in your Table</code></pre>
    <pre data-prefix="5"><code>//['John', 'john.doe@site.com'] = The updated value in the field</code></pre>
    <pre data-prefix="6"><code>//'id' = Name of the column from which the data should be updated</code></pre>
    <pre data-prefix="7"><code>//1 = Update from given value</code></pre>
  </div>

  <p class="ml-10">Ce code est utile pour faire une requête de suppresion de donnée dans la table fournie.</p>

  <div class="mockup-code m-5">
    <pre data-prefix="1"><code class="text-info">&lt;?php</code></pre>
    <pre data-prefix="2"><code><code class="text-info">$</code>data<code class="text-info">-></code><code class="text-accent">delete</code><code class="text-warning">(</code><code class="text-info">'</code><code class="text-success">users</code><code class="text-info">',</code> <code class="text-info">'</code><code class="text-success">id</code><code class="text-info">', '</code><code class="text-success">1</code><code class="text-info">'</code><code class="text-warning">)</code><code class="text-info">;</code></code></pre> 
    <pre data-prefix="3"><code>//'users' = Table in your database</code></pre>
    <pre data-prefix="4"><code>//'id' = Select where the column in your Table</code></pre>
    <pre data-prefix="5"><code>//'1' = The data will be deleted where this value</code></pre>
  </div>

  <p class="ml-10">Ce code est utile pour faire une requête de récupération de toute une table par exemple, si vous ne souhaitez pas utilisé les deux dernières valeurs qui corresponde à LIMIT et OFFSET vous pouvez retirer ces deux paramètres.</p>

  <div class="mockup-code m-5">
    <pre data-prefix="1"><code class="text-info">&lt;?php</code></pre>
    <pre data-prefix="2"><code><code class="text-info">$</code>data<code class="text-info">-></code><code class="text-accent">readMany</code><code class="text-warning">(</code><code class="text-info">'</code><code class="text-success">users</code><code class="text-info">',</code> <code class="text-secondary">[</code><code class="text-info">'</code><code class="text-success">name</code><code class="text-info">' => '</code><code class="text-success">John</code><code class="text-info">'</code><code class="text-secondary">]</code><code class="text-info">,</code> <code class="text-secondary">[</code><code class="text-info">'</code><code class="text-success">id</code><code class="text-info">' => '</code><code class="text-success">ASC</code><code class="text-info">'</code><code class="text-secondary">]</code><code class="text-info">, </code><code class="text-orange-600">1 </code><code class="text-info">,</code><code class="text-orange-600">1</code><code class="text-warning">)</code><code class="text-info">;</code></code></pre> 
    <pre data-prefix="3"><code>//'users' = Table in your database</code></pre>
    <pre data-prefix="4"><code>//['name' => 'John'] = Select where the column in your Table</code></pre>
    <pre data-prefix="5"><code>//['id', 'ASC'] = Sort by ID column</code></pre>
    <pre data-prefix="6"><code>//First 1 = Assign a LIMIT to the query</code></pre>
    <pre data-prefix="7"><code>//Last 1 = Assign an OFFSET on request</code></pre>
  </div>
</section>