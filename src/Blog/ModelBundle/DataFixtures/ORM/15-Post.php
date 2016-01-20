<?php

namespace Blog\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Blog\ModelBundle\Entity\Post;
use Blog\ModelBundle\Entity\Author;
use Doctrine\Common\Persistence\ObjectManager;

/*
 * Fixtures for the Author Entity
 */
class Posts extends AbstractFixture  implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 15;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $p1 = new Post();
        $p1->setTitle('Lorem Ipsum Title1');
        $p1->setBody('
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at rutrum massa. In mattis hendrerit tellus, ut tincidunt felis congue vitae. Mauris sit amet ligula vitae nulla venenatis interdum. Sed fringilla fringilla odio, sed vulputate dui efficitur at. Donec suscipit sit amet ligula in ultrices. Vestibulum lobortis tellus vel libero rhoncus, sit amet iaculis felis egestas. Pellentesque eget feugiat libero. In eu euismod lorem. Pellentesque at varius mi, at feugiat magna. Proin in aliquet lectus. Proin luctus, diam et consectetur commodo, ligula magna ornare lacus, in condimentum sem ipsum sit amet justo. Cras sodales urna eget commodo viverra. Maecenas tristique nisi vitae nulla tristique vulputate. Nulla dictum accumsan tortor, quis interdum lorem viverra non. Vivamus ac erat leo.

            Praesent ac aliquet justo, vitae hendrerit nulla. Nulla justo massa, volutpat tempor auctor iaculis, posuere sed leo. Suspendisse nisi libero, suscipit vitae tortor in, euismod egestas ipsum. Praesent a nulla eu neque egestas viverra blandit eget mauris. Fusce magna mauris, blandit eget vulputate et, pharetra sit amet velit. Vestibulum in ante et orci accumsan commodo. Duis facilisis, tellus sit amet ornare scelerisque, tellus nisi auctor dolor, eu mattis velit est at est. Pellentesque non erat nisi. Aenean ornare dignissim arcu, id fringilla urna vestibulum at.

            Donec nec pulvinar neque, eu egestas est. Nunc ante metus, maximus vel sapien vel, dignissim fermentum purus. Nam ac odio sollicitudin, sodales tellus non, semper nibh. Sed id consectetur risus. Proin viverra sagittis leo, ut aliquet justo hendrerit ac. Proin eu nibh odio. Vestibulum in elit tortor. Donec nec ex eros. Nunc malesuada sit amet magna sed dapibus. Quisque tempor, tortor vestibulum dapibus mollis, mauris orci ornare ex, non volutpat tellus orci eget dui. Pellentesque molestie lectus ut tortor consectetur consectetur. Nam iaculis consectetur velit non fringilla. Donec ut dapibus lacus. Ut ut bibendum risus. Nam ut finibus mauris. Fusce dapibus rhoncus urna, non viverra nulla luctus id.

            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam erat volutpat. Ut eu laoreet velit. Donec sed lectus ligula. Suspendisse vitae maximus odio. Etiam ut augue magna. Sed mollis porttitor eros nec ultricies. Etiam at fermentum ex. Fusce hendrerit placerat arcu at commodo. Phasellus in iaculis neque, sit amet cursus ex.

            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vitae cursus nibh. Nunc fringilla nibh ut turpis aliquet dapibus. Etiam dictum sit amet neque eget bibendum. Etiam odio purus, feugiat nec augue sed, lobortis faucibus odio. Integer ornare mauris non est sagittis cursus. Vivamus et elit volutpat, vulputate justo pharetra, dapibus neque. Donec sit amet urna nisi. Donec libero enim, dapibus sit amet felis id, bibendum congue quam.
        ');

        $p1->setAuthor($this->getAuthor($manager,'Dinush'));


        $p2 = new Post();
        $p2->setTitle('Lorem Ipsum Title2');
        $p2->setBody('
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at rutrum massa. In mattis hendrerit tellus, ut tincidunt felis congue vitae. Mauris sit amet ligula vitae nulla venenatis interdum. Sed fringilla fringilla odio, sed vulputate dui efficitur at. Donec suscipit sit amet ligula in ultrices. Vestibulum lobortis tellus vel libero rhoncus, sit amet iaculis felis egestas. Pellentesque eget feugiat libero. In eu euismod lorem. Pellentesque at varius mi, at feugiat magna. Proin in aliquet lectus. Proin luctus, diam et consectetur commodo, ligula magna ornare lacus, in condimentum sem ipsum sit amet justo. Cras sodales urna eget commodo viverra. Maecenas tristique nisi vitae nulla tristique vulputate. Nulla dictum accumsan tortor, quis interdum lorem viverra non. Vivamus ac erat leo.

            Praesent ac aliquet justo, vitae hendrerit nulla. Nulla justo massa, volutpat tempor auctor iaculis, posuere sed leo. Suspendisse nisi libero, suscipit vitae tortor in, euismod egestas ipsum. Praesent a nulla eu neque egestas viverra blandit eget mauris. Fusce magna mauris, blandit eget vulputate et, pharetra sit amet velit. Vestibulum in ante et orci accumsan commodo. Duis facilisis, tellus sit amet ornare scelerisque, tellus nisi auctor dolor, eu mattis velit est at est. Pellentesque non erat nisi. Aenean ornare dignissim arcu, id fringilla urna vestibulum at.

            Donec nec pulvinar neque, eu egestas est. Nunc ante metus, maximus vel sapien vel, dignissim fermentum purus. Nam ac odio sollicitudin, sodales tellus non, semper nibh. Sed id consectetur risus. Proin viverra sagittis leo, ut aliquet justo hendrerit ac. Proin eu nibh odio. Vestibulum in elit tortor. Donec nec ex eros. Nunc malesuada sit amet magna sed dapibus. Quisque tempor, tortor vestibulum dapibus mollis, mauris orci ornare ex, non volutpat tellus orci eget dui. Pellentesque molestie lectus ut tortor consectetur consectetur. Nam iaculis consectetur velit non fringilla. Donec ut dapibus lacus. Ut ut bibendum risus. Nam ut finibus mauris. Fusce dapibus rhoncus urna, non viverra nulla luctus id.

            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam erat volutpat. Ut eu laoreet velit. Donec sed lectus ligula. Suspendisse vitae maximus odio. Etiam ut augue magna. Sed mollis porttitor eros nec ultricies. Etiam at fermentum ex. Fusce hendrerit placerat arcu at commodo. Phasellus in iaculis neque, sit amet cursus ex.

            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vitae cursus nibh. Nunc fringilla nibh ut turpis aliquet dapibus. Etiam dictum sit amet neque eget bibendum. Etiam odio purus, feugiat nec augue sed, lobortis faucibus odio. Integer ornare mauris non est sagittis cursus. Vivamus et elit volutpat, vulputate justo pharetra, dapibus neque. Donec sit amet urna nisi. Donec libero enim, dapibus sit amet felis id, bibendum congue quam.
        ');

        $p2->setAuthor($this->getAuthor($manager,'Hashi'));


        $p3 = new Post();
        $p3->setTitle('Lorem Ipsum Title3');
        $p3->setBody('
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at rutrum massa. In mattis hendrerit tellus, ut tincidunt felis congue vitae. Mauris sit amet ligula vitae nulla venenatis interdum. Sed fringilla fringilla odio, sed vulputate dui efficitur at. Donec suscipit sit amet ligula in ultrices. Vestibulum lobortis tellus vel libero rhoncus, sit amet iaculis felis egestas. Pellentesque eget feugiat libero. In eu euismod lorem. Pellentesque at varius mi, at feugiat magna. Proin in aliquet lectus. Proin luctus, diam et consectetur commodo, ligula magna ornare lacus, in condimentum sem ipsum sit amet justo. Cras sodales urna eget commodo viverra. Maecenas tristique nisi vitae nulla tristique vulputate. Nulla dictum accumsan tortor, quis interdum lorem viverra non. Vivamus ac erat leo.

            Praesent ac aliquet justo, vitae hendrerit nulla. Nulla justo massa, volutpat tempor auctor iaculis, posuere sed leo. Suspendisse nisi libero, suscipit vitae tortor in, euismod egestas ipsum. Praesent a nulla eu neque egestas viverra blandit eget mauris. Fusce magna mauris, blandit eget vulputate et, pharetra sit amet velit. Vestibulum in ante et orci accumsan commodo. Duis facilisis, tellus sit amet ornare scelerisque, tellus nisi auctor dolor, eu mattis velit est at est. Pellentesque non erat nisi. Aenean ornare dignissim arcu, id fringilla urna vestibulum at.

            Donec nec pulvinar neque, eu egestas est. Nunc ante metus, maximus vel sapien vel, dignissim fermentum purus. Nam ac odio sollicitudin, sodales tellus non, semper nibh. Sed id consectetur risus. Proin viverra sagittis leo, ut aliquet justo hendrerit ac. Proin eu nibh odio. Vestibulum in elit tortor. Donec nec ex eros. Nunc malesuada sit amet magna sed dapibus. Quisque tempor, tortor vestibulum dapibus mollis, mauris orci ornare ex, non volutpat tellus orci eget dui. Pellentesque molestie lectus ut tortor consectetur consectetur. Nam iaculis consectetur velit non fringilla. Donec ut dapibus lacus. Ut ut bibendum risus. Nam ut finibus mauris. Fusce dapibus rhoncus urna, non viverra nulla luctus id.

            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam erat volutpat. Ut eu laoreet velit. Donec sed lectus ligula. Suspendisse vitae maximus odio. Etiam ut augue magna. Sed mollis porttitor eros nec ultricies. Etiam at fermentum ex. Fusce hendrerit placerat arcu at commodo. Phasellus in iaculis neque, sit amet cursus ex.

            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vitae cursus nibh. Nunc fringilla nibh ut turpis aliquet dapibus. Etiam dictum sit amet neque eget bibendum. Etiam odio purus, feugiat nec augue sed, lobortis faucibus odio. Integer ornare mauris non est sagittis cursus. Vivamus et elit volutpat, vulputate justo pharetra, dapibus neque. Donec sit amet urna nisi. Donec libero enim, dapibus sit amet felis id, bibendum congue quam.
        ');

        $p3->setAuthor($this->getAuthor($manager,'Dinush'));


        $manager->persist($p1);
        $manager->persist($p2);
        $manager->persist($p3);
        $manager->flush();


    }

    /*
     * Get an Author
     *
     * @param ObjectManager $manager
     * @param String $name
     *
     * @return Author
     */

    private function getAuthor(objectManager $manager, $name)
    {
        return $manager->getRepository('ModelBundle:Author')->findOneBy(
            array(
                'name' => $name
            )
        );
    }
}

