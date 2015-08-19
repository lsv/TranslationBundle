<?php

namespace Happyr\LocoBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * This command is good to run before you ship your code to production.
 */
class DownloadCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('translation:loco:download')
            ->setDescription('Replace your local files with the latest from Loco.');
    }
    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->getContainer()->get('happyr.loco')->downloadAllTranslations();
        $output->writeln('Download complete');
    }
}
