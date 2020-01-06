<h3 class="mb-5">Créer un nouveau service</h3>


<ul class="checklist-prod mb-5 px-3">
    <li>Créer un dossier <code>Service</code> dans <code>src/monBundle</code> </li>
    <li>Créer un fichier <code>MonService.php</code> avec le namespace  <code>monBundle\Service</code></li>
    <li>Créer une classe qui portera le même nom que notre fichier : <code> MonService</code></li>
    <li>Dans <code>Resources/config/services.yml</code> de notre bundle, rajouter le code suivant :</li>
    <pre><code><span class="red">services:
    home.monservice:</span>
        <span class="red">class:</span> monBundle\Service\MonService
        <span class="red">arguments:</span> ['@service_container']
        </code></pre>
    <li>Ce code nous permet de déclarer à symfony que nous avons créer un nouveau service</li>
    <li>Maintenant, il nous s'uffit d'utiliser la commande ci-dessous pour appeler notre service :</li>
    <pre><code>$this<span class="red">-></span><span class="green">get</span>('home.monservice')</code></pre>

</ul>

<h5 class="mb-4">Exemple de service :</h5>
<div class="title-cmd mb-2">Dans le fichier <code>CreatePicture.php</code></div>
<pre><code>
<span class="red">namespace</span> HomeBundle\Service;

<span class="red">use</span> Symfony\Component\DependencyInjection\ContainerInterface;

<span class="red">class</span> CreatePicture
{
    <span class="red">private</span> $container;

    <span class="red">public function</span> <span class="green">__construct</span>(ContainerInterface <span class="orange">$container</span>)
    {
        $this->container <span class="red">=</span> <span class="orange">$container</span>;
    }

    <span class="red">public function</span> <span class="green">createPicture</span>(<span class="orange">$image</span>, <span class="orange">$type_image</span>)
    {
        $pictureOriginalFilename <span class="red">=</span> pathinfo($image<span class="red">-></span><span class="green">getClientOriginalName</span>(), PATHINFO_FILENAME);
        $pictureSafeFilename <span class="red">=</span> transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $pictureOriginalFilename);
        $pictureNewFilename <span class="red">=</span> $pictureSafeFilename . '-' . uniqid() . '.' . <span class="orange">$image</span><span class="red">-></span><span class="green">guessExtension</span>();
        <span class="orange">$image</span><span class="red">-></span><span class="green">move</span>($this<span class="red">-></span>container<span class="red">-></span><span class="green">getParameter</span>('image_' . <span class="orange">$type_image</span>), $pictureNewFilename);
        <span class="red">return</span> $pictureNewFilename;
    }
}

    </code></pre>