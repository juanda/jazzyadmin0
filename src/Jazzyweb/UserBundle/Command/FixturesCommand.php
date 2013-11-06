<?php

namespace Jazzyweb\UserBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FixturesCommand extends ContainerAwareCommand {

    protected function configure() {
        $this
            ->setName('jwsecurity:fixtures:load')
            ->setDescription('Load fixtures')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {



        $dialog = $this->getHelperSet()->get('dialog');

        if (!$dialog->askConfirmation(
            $output,
            '<question>Proceed to load fixtures? (All data in database will be lost)</question>',
            false
        )) {
            $output->writeln('<error>Action aborted</error>');
            return;
        }
                        

        $doctrine = $this->getContainer()->get('doctrine');

        try {
            $em = $doctrine->getEntityManager();
            $userManager = $this->getContainer()->get('fos_user.user_manager');

            $query = $em
                ->createQuery('DELETE FROM JwUserBundle:Group g');
            $query->execute();
            $query = $em
                ->createQuery('DELETE FROM JwUserBundle:User u');
            $query->execute();

            $objects = \Nelmio\Alice\Fixtures::load(__DIR__ . '/../Fixtures/Fixtures.yml', $em);



            $users = $userManager->findUsers();

            foreach($users as $user){
                $user->setPlainPassword('changeme');
                $userManager->updateUser($user);
            }

            $em->flush();

            $output->writeln("Fixtures have been loaded");
        } catch (\Exception $e) {
            $output->writeln("<error>" . $e->getMessage() . "</error>");
        }
    }

}
