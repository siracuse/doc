<h3>Test Unitaire</h3>
<p class="mb-5 ">Documentation : <a
            href="https://symfony.com/doc/3.4/testing.html#testing-against-different-sets-of-data" target="_blank">
        SYMFONY - Testing</a></p>

<ul class="checklist-prod px-3">
    <li>Commande pour exécuter les tests :</li>
    <pre><code>> ./vendor/bin/simple-phpunit</code></pre>
    <br><br>
    <li class="mb-2">Tester code 200 sur plusieurs route :</li>
    <pre><code>
<span class="red">namespace</span> HomeBundle\Tests\Controller;

<span class="red">use</span> Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

<span class="red">class</span> DefaultControllerTest <span class="red">extends</span> WebTestCase
{
    <span class="gray">
    /**
     * @dataProvider </span>provideUrls
     <span class="gray">*/</span>
    <span class="red">public function</span> <span class="green">testPageIsSuccessful</span>(<span
                    class="orange">$url</span>)
    {
        $client <span class="red">= self::</span><span class="green">createClient</span>();
        $client<span class="red">-></span><span class="green">request</span>(<span class="yellow">'GET'</span>, <span
                    class="orange">$url</span>);

        $this<span class="red">-></span><span class="green">assertTrue</span>($client<span class="red">-></span>getResponse()<span
                    class="red">-></span><span class="green">isSuccessful</span>());
    }

    <span class="red">public function</span> <span class="green">provideUrls</span>()
    {
        <span class="red">return</span> [
            [<span class="yellow">'/'</span>],
            [<span class="yellow">'/bien'</span>],
            [<span class="yellow">'/admin/bien'</span>],
            <span class="gray">// ...</span>
        ];
    }
}
        </code></pre>
    <br><br>
    <li class="title-cmd mb-2">Tester validation d'une entité :</li>
    <pre><code>
<span class="red">namespace</span> HomeBundle\Tests\Controller;

<span class="red">use</span> ActualiteBundle\Entity\Actualite;
<span class="red">use</span> Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

<span class="red">class</span> DefaultControllerTest <span class="red">extends</span> WebTestCase
{
    <span class="red">public function</span> <span class="green">testEntityValide</span>()
    {
        $actu <span class="red">=</span> (<span class="red">new </span>Actualite())
            <span class="red">-></span><span class="green">setTitle</span>(<span class="yellow">'un titre'</span>)
            <span class="red">-></span><span class="green">setDescription</span>(<span
                    class="yellow">'une description'</span>)
            <span class="red">-></span><span class="green">setPosition</span>(<span class="yellow">'6'</span>)
        ;
        <span class="red">self::</span><span class="green">bootKernel</span>();
        $error <span class="red">= self::</span>$kernel<span class="red">-></span><span
                    class="green">getContainer</span>()<span class="red">-></span><span class="green">get</span>(<span
                    class="yellow">'validator'</span>)<span class="red">-></span><span class="green">validate</span>($actu);
        $this<span class="red">-></span><span class="green">assertCount</span>(0, $error);
    }
}
        </code></pre>
</ul>