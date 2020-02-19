<h3>Test Unitaire</h3>
<p class="mb-5 ">Documentation : <a href="https://symfony.com/doc/3.4/testing.html#testing-against-different-sets-of-data" target="_blank"> SYMFONY - Testing</a></p>

<ul class="checklist-prod px-3">
<li class="title-cmd mb-2">Tester code 200 sur plusieurs route :</li>
<pre><code>
<span class="red">namespace</span> BienBundle\Tests\Controller;

<span class="red">use</span> Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

<span class="red">class</span> DefaultControllerTest <span class="red">extends</span> WebTestCase
{
    <span class="gray">
    /**
     * @dataProvider </span>provideUrls
     <span class="gray">*/</span>
    <span class="red">public function</span> <span class="green">testPageIsSuccessful</span>(<span class="orange">$url</span>)
    {
        $client <span class="red">= self::</span><span class="green">createClient</span>();
        $client<span class="red">-></span><span class="green">request</span>(<span class="yellow">'GET'</span>, <span class="orange">$url</span>);

        $this<span class="red">-></span><span class="green">assertTrue</span>($client<span class="red">-></span>getResponse()<span class="red">-></span><span class="green">isSuccessful</span>());
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

    <li>Commande pour exécuter les tests :</li>
    <pre><code>> ./vendor/bin/simple-phpunit</pre>
</ul>