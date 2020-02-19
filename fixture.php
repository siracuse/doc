<h3 >Les Fixtures</h3>
<p class="mb-5 ">Documentation : <a href="https://symfony.com/doc/3.0/bundles/DoctrineFixturesBundle/index.html" target="_blank"> SYMFONY - DoctrineFixturesBundle</a></p>

<ul class="checklist-prod px-3">

    <li class="mb-2">Installer DoctrineFixturesBundle :</li>
    <pre><code>&gt; composer require --dev doctrine/doctrine-fixtures-bundle</code></pre>
    <li>Créer un fichier <code>LoadFixtures.php</code> dans le dossier <code>src/monBundle/DataFixtures/ORM/</code></li>

    <li class="mb-2">Code minimum :</li>
    <pre><code>
<span class="red">namespace</span> HomeBundle\DataFixtures\ORM;

<span class="red">use</span> Doctrine\Common\DataFixtures\FixtureInterface;
<span class="red">use</span> Doctrine\Common\Persistence\ObjectManager;
<span class="red">use</span> HomeBundle\Entity\User;

<span class="red">class</span> LoadFixtures <span class="red">implements</span> FixtureInterface
{
    <span class="red">public function</span> <span class="green">load</span>(ObjectManager <span
                    class="orange">$manager</span>)
    {
        <span class="gray">//Exemple de fixture</span>
        $adminLuuug <span class="red">= new</span> User();
        $adminLuuug<span class="red">-></span><span class="green">setUsername</span>('admin@studioluuug.com');

        <span class="orange">$manager</span><span class="red">-></span><span class="green">persist</span>($adminLuuug);

        <span class="orange">$manager</span><span class="red">-></span><span class="green">flush</span>();
    }
}
        </code></pre>


    <li class="mb-2">Commande pour exécuter la fixture :</li>
    <pre><code>> <span class="red">php bin/console</span> doctrine:fixtures:load</code></pre>

</ul>