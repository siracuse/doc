<div class="container">
<!--    <div class="row">-->
        <h3 class="mb-5">Review d'un site Symfony avant la mise en prod</h3>


        <h5 class="mb-3">SEO :</h5>
        <ul class="mb-5">
            <li>Vérifier le <code>sitemap.xml</code></li>
            <li>Balise title</li>
            <li>Balise h1 (bandeau top)</li>
            <li>Balise meta description</li>
            <li>Balise meta title</li>
            <li>Balise alt pour les images</li>
        </ul>


        <h5 class="mb-3">CODE SOURCE :</h5>
        <ul class="mb-5">
            <li>Supprimer les commentaires de code inutile</li>
            <li>Vérifier les <code>console.log</code>, les <code>var_dump</code>, les <code>{{ dump() }}</code></li>
            <li>Vérifier/Revoir les noms de variable et route</li>
            <li>Indenter le code</li>
            <li>Commenter les codes personnalisés</li>


            <li>Supprimer les bundles inutiles (<code>App Kernel</code>, <code>config.yml</code>,
                <code>routing.yml</code>, dossier <code>tests</code>)
            </li>
            <li>Supprimer les templates twig inutiles</li>
            <li>Supprimer les <code>parameters</code> inutiles dans config.yml</li>
            <li>Supprimer le fichier <code>todo.txt</code></li>
            <li>Revoir les routes <code>FOSUSer</code></li>

        </ul>


        <h5 class="mb-3">SÉCURITÉ :</h5>
        <ul class="mb-5">
            <li>Vérifier les constraint des formulaires</li>
            <li>Vérifier les erreurs symfony (<code>_profiler</code>)</li>
        </ul>


        <h5 class="mb-3">AUDITS :</h5>
        <ul class="mb-5">
            <li>Google Speed</li>
            <li>Lighthouse</li>
        </ul>
<!--    </div>-->
</div>